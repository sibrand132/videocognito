<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;

class MoviePageController extends Controller
{


    public function movieAction()
    {

        $id = 2;
        $em = $this->getDoctrine();
        $repository = $em->getRepository('AppBundle:Filmy');
        $tmp = $repository->find($id);
        $renderedResponse = $this->render('AppBundle:MoviePage:movie.html.twig', array('titles' => $tmp->getTytulPl()));
        return $renderedResponse;
            //return new Response('<html><body>Tytu³ to </body></html>');
       // return $this->render('AppBundle:MoviePage:movie.html.twig', array('tytul' => $tmp->getTytulAng(
       //                     ));
    }



}

