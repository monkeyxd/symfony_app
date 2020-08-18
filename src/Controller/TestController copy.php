<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpFoundation\Response; 


class HelloController extends AbstractController {
    /**
     * @Route("hello/{param}", requirements={"param"="\d+"}, methods={"GET"})
     */
    function helloNumber($param){
        return new Reponse('Hello : number ' .$param);
    }

    
    /**
    * @Route("hello/{param}")
    */
    function helloDefault($param){
        return new Response('Hello ! ' .$param);
    }


}

