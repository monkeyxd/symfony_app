<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController {


    // /**
    //  * @Route("hello")
    //  */
    // function hello(){
    //     return $this->render('hello.html.twig');
    // }

    // /**
    //  * @Route("hello/{name}", name="helloWithName")
    //  */

    // function helloWithName($name){
    //     return new Response ("Hello Mr/Ms " . $name);
    // }

    /**
     * @Route({
     *        "fr": "/bonjour", 
     *        "en": "/hello"})
     */

    function hello(Request $request){
        $locale = $request->getLocale();
        return new Response ('Hello, local : ' . $locale);
    }

}