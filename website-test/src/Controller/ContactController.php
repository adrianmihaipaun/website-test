<?php

namespace App\Controller;

use App\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;

/**
 * 
 */
class ContactController extends AbstractController
{
	/**
	*@Route("/contact")
	*/
	public function contact(Request $request)
	{
		$form = $this->createForm(ContactType::class, null);

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			
			return $this->render('contact.html.twig', [
				'message' => 'Email-ul a fost trimis cu succes!'
			]);
		}

		return $this->render('contact.html.twig', [
			'contactForm' => $form->createView()
		]);
	}
}