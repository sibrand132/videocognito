<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Rezyserzy;
use AppBundle\Form\RezyserzyType;

/**
 * Rezyserzy controller.
 *
 */
class RezyserzyController extends Controller
{

    /**
     * Lists all Rezyserzy entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Rezyserzy')->findBy(array(), array('nazwisko' => 'ASC'));

        return $this->render('AppBundle:Rezyserzy:index.html.twig', array(
            'entities' => $entities,
            'user' => $user,
        ));
    }


    public function showAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Rezyserzy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rezyserzy entity.');
        }
        $filmy=$em->getRepository('AppBundle:Filmy')->findBy(array('idRezysera'=>$id));
            $i=0;
        foreach($filmy as $el) {
            $temp[$i]=$el->getIdFilmu();
            $i=$i+1;
        }
            $ilFilmow = $i;

        return $this->render('AppBundle:Rezyserzy:show.html.twig', array(
            'entity' => $entity,
            'filmy' => $filmy,
            'ilFilmow' => $ilFilmow,
            'user' => $user
        ));
    }


}
