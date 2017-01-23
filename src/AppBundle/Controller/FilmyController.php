<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Komentarze;
use AppBundle\forms\CommentType;
use AppBundle\forms\RateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Oceny;
use AppBundle\Entity\Filmy;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Filmy controller.
 *
 */
class FilmyController extends Controller
{

    /**
     * Lists all Filmy entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Filmy')->findBy([],['dataPremierySwiat'=>'DESC']);


        $user = $this->getUser();

        return $this->render('AppBundle:Filmy:index.html.twig', array(
            'entities' => $entities,
            'user' => $user,
        ));
    }

    /**
     * Finds and displays a Filmy entity.
     *
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Filmy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filmy entity.');
        }
        //      return $this->render('AppBundle:MoviePage:movie.html.twig', array('titles'=>$entity));

        $re = $em->getRepository('AppBundle:Rezyserzy')->find($entity->getIdRezysera());
        $rezyserImie = $re->getImie();
        $rezyserNazwisko = $re->getNazwisko();


        $gat = $em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idFilmu' => $id));
        $i = 0;
        foreach ($gat as $el) {
            $gatunek[$i] = $el->getIdGatunku()->getNazwa();
            $i = $i + 1;
        }

        $prod = $em->getRepository('AppBundle:FilmProdukcja')->findBy(array('idFilmu' => $id));
        $i = 0;
        foreach ($prod as $el) {
            $produkcja[$i] = $el->getIdProdukcji()->getNazwa();
            $i = $i + 1;
        }

        $scen = $em->getRepository('AppBundle:FilmyScenarzysci')->findBy(array('idFilmu' => $id));
        $i = 0;
        foreach ($scen as $el) {
            $scenarzysciI[$i] = $el->getIdScenarzysty()->getImie();
            $scenarzysciN[$i] = $el->getIdScenarzysty()->getNazwisko();
            $scenarzysci[$i] = $scenarzysciI[$i] . ' ' . $scenarzysciN[$i];
            $idScenarzysty[$i] = $el->getIdScenarzysty();
            $i = $i + 1;
        }
        $ilScenarzystow = $i;

        $trai = $em->getRepository('AppBundle:FilmyTrailery')->findBy(array('idFilmu' => $id));
        $i = 0;
        foreach ($trai as $el) {
            $trailery[$i] = $el->getIdTrailera()->getSciezka();
            $i = $i + 1;
        }

        $idRezysera = $entity->getIdRezysera();
        $czasTrwania = $entity->getCzasTrwaniaMin();


        $aktorzy = $em->getRepository('AppBundle:FilmyAktorzy')->findBy(array('idFilmu' => $id));
        $j = 0;

        foreach ($aktorzy as $el) {
            $aktor[$j] = $el;
            $j = $j + 1;
        }

//        oceny
        $oceny = $em->getRepository('AppBundle:Oceny')->findBy(array('idFilmu' => $id));

        $k = 0;
        $suma = 0;
        foreach ($oceny as $el) {
            $suma = $suma + $el->getOcena();
            $k = $k + 1;
        }
        if ($k != 0) {
            $srednia = $suma / $k;
            $entity->setOcenaKoncowa($srednia);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($entity);
        $entityManager->flush();


        $user = $this->getUser();
        if ($user) {
            $rate = new Oceny();
            $rate->setIdFilmu($id);
            $rate->setIdUzytkownika($user->getID());

            $rateform = $this->createForm(new RateType(), $rate);
            $rateform->handleRequest($request);

        if ($rateform->isSubmitted() && $rateform->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rate);
            $entityManager->flush();
            return $this->redirect('show');
        }
    }
//         komentarze

        $comments =$em->getRepository('AppBundle:Komentarze')->findBy(array('idFilmu' => $id),array('idKomentarza' => 'DESC'));

        $user = $this->getUser();

        $comment = new Komentarze();
        $comment->setIdFilmu($id);
        $comment->setUzytkownik($user);

        $form =$this->createForm(new CommentType(),$comment);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirect('show');
        }

        $user = $this->getUser();

        if(!$user) {
            return $this->render('AppBundle:Filmy:show.html.twig', array(
                'entity' => $entity,
                'rezyserImie' => $rezyserImie, 'rezyserNazwisko' => $rezyserNazwisko,
                'gatunek' => $gatunek,
                'produkcja' => $produkcja,
                'scenarzysci' => $scen,
                'trailery' => $trailery,
                'ilTrailerow' => $i,
                'idRezysera' => $idRezysera,
                'idScenarzysty' => $idScenarzysty,
                'ilScenarzystow' => $ilScenarzystow,
                'czasTrwania' => $czasTrwania,
                'aktorzy' => $aktorzy,
                'ilAktorow' => $j,
                'komentarze' => $comments,
                'form' => $form->createView(),
                'user' => $user,
                'ilOcen' => $k

            ));
        }
        else{
            return $this->render('AppBundle:Filmy:show.html.twig', array(
                'entity' => $entity,
                'rezyserImie' => $rezyserImie, 'rezyserNazwisko' => $rezyserNazwisko,
                'gatunek' => $gatunek,
                'produkcja' => $produkcja,
                'scenarzysci' => $scen,
                'trailery' => $trailery,
                'ilTrailerow' => $i,
                'idRezysera' => $idRezysera,
                'idScenarzysty' => $idScenarzysty,
                'ilScenarzystow' => $ilScenarzystow,
                'czasTrwania' => $czasTrwania,
                'aktorzy' => $aktorzy,
                'ilAktorow' => $j,
                'komentarze' => $comments,
                'form' => $form->createView(),
                'user' => $user,
                'rateform' => $rateform->createView(),
                'ilOcen' => $k
            ));

        }

    }


//    public function ratedAction(Request $request, $filmyID)
//    {
//        $user=$this->getUser();
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('AppBundle:Filmy')->find($filmyID);
//
//        if ($entity && $user)
//        {
//            $opinion->setIdFilmu($entity);
//            $opinion->setIdUzytkownika($this->getUser()->getID());
//            $opinion->setOcena($rate);
//            $manager = $this->getDoctrine()->getManager();
//            $manager->persist($opinion);
//            $manager->flush();
//        }
//
//        return $this->redirect('show');
//
//
//

//        $filmyID = $request->get('filmyID');
//        $rate = $request->get('rateNote');
//        $carObj = $this->getDoctrine()->getRepository('AppBundle:Filmy')->find($filmyID);
//        $invokedBy = $this->getUser();
//
//   $persistedOpinion = $this->getDoctrine()->getRepository('AppBundle:Oceny')->checkIfExists($invokedBy,$carObj);
//
//        if ($carObj && $invokedBy  && $rate > 0 && $rate <= 5)
//        {
//            $opinion = new Oceny();
//            $opinion->setIdFilmu($carObj->getIdFilmu());
//            $opinion->setIdUzytkownika($invokedBy);
//            $opinion->setOcena($rate);
//            $manager = $this->getDoctrine()->getManager();
//            $manager->persist($opinion);
//            $manager->flush();
//        }
//
//        else
//        {
//            return $this->render('AppBundle:Filmy:show.html.twig', array());
//        }
//
//        return $this->render('AppBundle:Filmy:show.html.twig', array(
//            'rate' =>$rate
//        ));

 //   }

}
