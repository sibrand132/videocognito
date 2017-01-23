<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function indexAction(){
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $test = $em->getRepository('AppBundle:Rezyserzy')->findAll();

        return $this->render('AppBundle:Rezyserzy:index.html.twig',array(
            'entities' => $test,
            'user' => $user,
        ));
    }
}