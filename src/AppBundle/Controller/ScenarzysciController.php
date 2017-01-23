<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Scenarzysci;

/**
 * Scenarzysci controller.
 *
 */
class ScenarzysciController extends Controller
{

    /**
     * Lists all Scenarzysci entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Scenarzysci')->findBy(array(), array('nazwisko' => 'ASC'));

        return $this->render('AppBundle:Scenarzysci:index.html.twig', array(
            'entities' => $entities,
            'user' => $user
        ));
    }


    public function showAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Scenarzysci')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rezyserzy entity.');
        }
        $filmy = $em->getRepository('AppBundle:FilmyScenarzysci')->findBy(array('idScenarzysty' => $id));
        $i = 0;
        foreach($filmy as $el) {
            $filmy[$i] = $el->getIdFilmu();
            $i=$i+1;
        }
        $ilFilmow =$i;
        return $this->render('AppBundle:Scenarzysci:show.html.twig', array(
            'entity' => $entity,
            'filmy' => $filmy,
            'ilFilmow' => $ilFilmow,
            'user' => $user,
        ));
    }
}
