<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route; 
use App\Entity\Personne;
use App\Form\PersonneType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PersonneController extends AbstractController {

	/**
	*@Route("/personne")
	*/
	function createPersonneForm(Request $request){

		$pers = new Personne();
		/*$form = $this->createFormBuilder($pers)*/
		$form = $this->createForm(PersonneType::class, $pers);

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){

            return new Response("Formulaire validé.");
        }

		return $this->render('personne.html.twig', ['persForm' => $form->createView()]);
	}
}
