<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class ContactController extends AbstractController
{
	/**
	*@Route("/contact")
	*/
	public function contact()
	{	
		


		return $this->render('contact.html.twig', [
			'title' => 'Contacteaza-ne'
		]);
	}	
}