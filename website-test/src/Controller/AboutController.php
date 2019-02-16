<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class AboutController extends AbstractController
{
	/**
	*@Route("/about")
	*/
	public function about()
	{	
		$contents = [
			0 => [
				'title' => 'Transformers',
				'content' => 'Războiul lor în lumea noastră (2007) este un film american științifico-fantastic de acțiune bazat pe seria de figurine de acțiune Transformers. Filmul este regizat de Michael Bay, iar Steven Spielberg este producător executiv. În rolurile principale interpretează Shia LaBeouf ca Sam Witwicky, Megan Fox, Josh Duhamel, Tyrese Gibson, Jon Voight, Anthony Anderson și John Turturro. Actorii Peter Cullen și Hugo Weaving interpretează vocea lui Optimus Prime și respectiv a lui Megatron.',
				'image' => 'about-transformers.jpg'
			],
			1 => [
				'title' => 'Fast & Furious',
				'content' => 'Dominic Toretto (Vin Diesel) conduce mașina pe străzile din Los Angeles ca și când acestea ar fi proprietatea lui. Dominic își petrece timpul concentrându-se asupra curselor de mașini de maximă performanță. Cursele sunt un adevărat teatru de stradă, un câmp de luptă alimentat de adrenalină, tensiuni sexuale și viteză necontrolată. Brian (Paul Walker) este un tip nervos și de asemenea pregătit să testeze limitele... După o discuție cu durul Johnny Tran (Rick Yune), Dominic decide că Brian este în ordine. Iar lui Mia (Jordana Brewster), sora lui Dominic, îi place mult ceea ce vede la Brian. Problema este că ei nu știu că Brian este polițist. Brian lucrează sub acoperire... Banii se mișcă cu ușurință în aceste curse ilegale, iar polițiștii știu că o parte din aceștia sunt murdari.',
				'image' => 'about-fastfurious.jpeg'
			],
			2 => [
				'title' => 'Lucifer',
				'content' => 'Lucifer este un serial american de fantezie urbana, de poliție, de procedură comedie-dramă. Serial de televiziune dezvoltat de Tom Kapinos, care a avut premiera pe Fox la 25 ianuarie, 2016. El se bazează pe caracterul DC Benzi desenate creat de Neil Gaiman, Sam Kieth și Mike Dringenberg, preluate din seria de cărți de benzi desenate The Sandman, care a devenit mai târziu protagonistul unei serii de cărți benzi desenate, ambele publicate de impresiile DC Comics\' Vertigo. Seria este produsă de televiziunea Jerry Bruckheimer, DC Entertainment și Warner Bros.',
				'image' => 'about-lucifer.jpg'
			],
			3 => [
				'title' => 'Ironman',
				'content' => 'Omul de oțel (Tony Stark) este un personaj super-erou care apare în benzile desenate americane publicate de Marvel Comics, precum și în mass-media asociată. Personajul a fost creat de scriitorul și editorul Stan Lee, dezvoltat de scenaristul Larry Liebel și proiectat de artiștii Don Heck și Jack Kirby. El și-a făcut prima apariție în Povești de suspans #39 (martie 1963). Un miliardar american, magnat de afaceri, și inginer ingenios, Tony Stark suferă lovitură severă în piept în timpul unei răpiri în care răpitorii săi încearcă să-l forțeze pentru a construi o armă de distrugere în masă.',
				'image' => 'about-ironman.jpg'
			],
		];


		return $this->render('about.html.twig', [
			'title' => 'About',
			'contents' => $contents
		]);
	}	
}