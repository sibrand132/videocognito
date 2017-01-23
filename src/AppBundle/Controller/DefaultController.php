<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $najnowsze = $em->getRepository('AppBundle:Filmy')->findBy([],['dataPremieryPl' =>'desc'], 10);

        $ilN=0;
        $obecna_data = date('d-m-Y');
        $now = strtotime($obecna_data);

        foreach($najnowsze as $el)
        {
            if(strtotime($el->getDataPremieryPl()->format('d-m-Y')) < $now)
            {
                $najnow[$ilN]=$el;
                $ilN=$ilN+1;
            }
        }


        $top10 = $em->getRepository('AppBundle:Filmy')->findBy([],['ocenaKoncowa' =>'desc'],10);
        $ilT10=0;
        foreach($top10 as $el)
        {
            $ilT10 = $ilT10+1;
        }



        $premiery = $em->getRepository('AppBundle:Filmy')->findAll();

        $ilP=0;
        foreach($premiery as $el)
        {
            if(strtotime($el->getDataPremieryPl()->format('d-m-Y')) > $now)
            {
                $prem[$ilP]=$el;
                $ilP=$ilP+1;
            }
        }



        return $this->render('default/index.html.twig', array(
            'user' => $user,
            'najnowsze' => $najnow,
            'top10' => $top10,
            'premiery' => $prem,
            'ilP' =>$ilP,
            'ilN' =>$ilN,
            'ilT10' => $ilT10
        ));
        // replace this example code with whatever you need
    }




}
