<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RankingController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities =$em->getRepository('AppBundle:Filmy')->findBy([],['ocenaKoncowa'=>'desc']);
//      dramaty
        $idDramat =$em->getRepository('AppBundle:Gatunek')->findBy(array('nazwa'=>'Dramat'));
        $dramaty =$em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idGatunku'=>$idDramat));
        $i=0;

        foreach ($dramaty as $el) {
            $dram[$i] = $dramaty[$i]->getIdFilmu();
            $i=$i+1;
        }
        $m=0;
        while($m<$i-1)
        {
            $n=0;
            while($n<$i-1)
            {
             if($dram[$n+1]->getOcenaKoncowa() > $dram[$n]->getOcenaKoncowa())
             {
                 $temp=$dram[$n];
                 $dram[$n]=$dram[$n+1];
                 $dram[$n+1] = $temp;
             }
             $n=$n+1;
            }
            $m=$m+1;
        }


//        komedie1
        $idKomedie =$em->getRepository('AppBundle:Gatunek')->findBy(array('nazwa'=>'Komedia'));
        $komedie =$em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idGatunku'=>$idKomedie));
        $i=0;
        foreach ($komedie as $el) {
            $kom[$i] = $komedie[$i]->getIdFilmu();
            $i=$i+1;
        }
        $m=0;
        while($m<$i-1)
        {
            $n=0;
            while($n<$i-1)
            {
                if($kom[$n+1]->getOcenaKoncowa() > $kom[$n]->getOcenaKoncowa())
                {
                    $temp=$kom[$n];
                    $kom[$n]=$kom[$n+1];
                    $kom[$n+1] = $temp;
                }
                $n=$n+1;
            }
            $m=$m+1;
        }

//        Westerny
        $idWestern =$em->getRepository('AppBundle:Gatunek')->findBy(array('nazwa'=>'Western'));
        $westerny =$em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idGatunku'=>$idWestern));
        $i=0;

        foreach ($westerny as $el) {
            $west[$i] = $westerny[$i]->getIdFilmu();
            $i=$i+1;
        }
        $m=0;
        while($m<$i-1)
        {
            $n=0;
            while($n<$i-1)
            {
                if($west[$n+1]->getOcenaKoncowa() > $west[$n]->getOcenaKoncowa())
                {
                    $temp=$west[$n];
                    $west[$n]=$west[$n+1];
                    $west[$n+1] = $temp;
                }
                $n=$n+1;
            }
            $m=$m+1;
        }


//      Gangsterskie
        $idGang =$em->getRepository('AppBundle:Gatunek')->findBy(array('nazwa'=>'Gangsterski'));
        $gangi =$em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idGatunku'=>$idGang));
        $i=0;

        foreach ($gangi as $el) {
            $gang[$i] = $gangi[$i]->getIdFilmu();
            $i=$i+1;
        }
        $m=0;
        while($m<$i-1)
        {
            $n=0;
            while($n<$i-1)
            {
                if($gang[$n+1]->getOcenaKoncowa() > $gang[$n]->getOcenaKoncowa())
                {
                    $temp=$gang[$n];
                    $gang[$n]=$gang[$n+1];
                    $gang[$n+1] = $temp;
                }
                $n=$n+1;
            }
            $m=$m+1;
        }

//        Przygodowe
        $idPrzyg =$em->getRepository('AppBundle:Gatunek')->findBy(array('nazwa'=>'Przygodowy'));
        $przygodowe =$em->getRepository('AppBundle:FilmyGatunek')->findBy(array('idGatunku'=>$idPrzyg));
        $i=0;

        foreach ($przygodowe as $el) {
            $przyg[$i] = $przygodowe[$i]->getIdFilmu();
            $i=$i+1;
        }
        $m=0;
        while($m<$i-1)
        {
            $n=0;
            while($n<$i-1)
            {
                if($przyg[$n+1]->getOcenaKoncowa() > $przyg[$n]->getOcenaKoncowa())
                {
                    $temp=$przyg[$n];
                    $przyg[$n]=$przyg[$n+1];
                    $przyg[$n+1] = $temp;
                }
                $n=$n+1;
            }
            $m=$m+1;
        }



        $user=$this->getUser();
        return $this->render('AppBundle:Ranking:show.html.twig', array(
                'user' =>$user,
                'wszystkie' => $entities,
                'komedie' =>$kom,
                'dramaty' => $dram,
                'westerny' => $west,
                'gangsterskie' => $gang,
                'przygodowe' => $przyg
            ));    }


}
