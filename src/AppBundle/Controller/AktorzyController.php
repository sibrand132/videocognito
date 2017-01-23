<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Aktorzy;

/**
 * Aktorzy controller.
 *
 */
class AktorzyController extends Controller
{

    /**
     * Lists all Aktorzy entities.
     *
     */
    public function indexAction()
    {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Aktorzy')->findBy([],['nazwisko'=> 'asc']);

        return $this->render('AppBundle:Aktorzy:index.html.twig', array(
            'entities' => $entities,
            'user' => $user,
        ));
    }

    /**
     * Finds and displays a Aktorzy entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Aktorzy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Aktorzy entity.');
        }

        $filmy = $em->getRepository('AppBundle:FilmyAktorzy')->findBy(array('idAktora' => $id));
        $i = 0;
        foreach($filmy as $el) {
            $film[$i] = $el->getIdFilmu();
            $i=$i+1;
        }
        $ilFilmow =$i;

        $user = $this->getUser();

        return $this->render('AppBundle:Aktorzy:show.html.twig', array(
            'entity'      => $entity,
            'filmy' => $filmy,
            'ilFilmow' => $ilFilmow,
            'user' => $user,
        ));
    }
}
