<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WyszukiwanieController extends Controller
{
    public function searchAction(Request $request)
    {
        $user = $this->getUser();

        $var = $request->get('search');
        $em = $this->getDoctrine()->getManager();

        $query = $em->getRepository('AppBundle:Filmy')->createQueryBuilder('p')
        ->where('p.tytulPl LIKE :_name OR p.tytulAng Like :_name2')
        ->setParameter('_name', '%'.$var.'%')
            ->setParameter('_name2', '%'.$var.'%')
        ->getQuery();
        $rq = $query->getResult();


        $query = $em->getRepository('AppBundle:Aktorzy')->createQueryBuilder('p')
        ->where('p.imie LIKE :_name OR p.nazwisko Like :_name2')
        ->setParameter('_name', '%'.$var.'%')
        ->setParameter('_name2', '%'.$var.'%')
        ->getQuery();
        $aktorzy = $query->getResult();

        $query = $em->getRepository('AppBundle:Rezyserzy')->createQueryBuilder('p')
            ->where('p.imie LIKE :_name OR p.nazwisko Like :_name2')
            ->setParameter('_name', '%'.$var.'%')
            ->setParameter('_name2', '%'.$var.'%')
            ->getQuery();
        $rezyserzy = $query->getResult();

        $query = $em->getRepository('AppBundle:Scenarzysci')->createQueryBuilder('p')
            ->where('p.imie LIKE :_name OR p.nazwisko Like :_name2')
            ->setParameter('_name', '%'.$var.'%')
            ->setParameter('_name2', '%'.$var.'%')
            ->getQuery();
        $scenarzysci = $query->getResult();







        return $this->render('AppBundle:Wyszukiwanie:search.html.twig', array(
            'request' => $rq,
            'user' => $user,
            'fraza'=>$var,
            'aktorzy' => $aktorzy,
            'rezyserzy' => $rezyserzy,
            'scenarzysci' => $scenarzysci
            ));    }

}
