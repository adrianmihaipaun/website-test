<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class HomepageController extends AbstractController
{
	/**
	*@Route("/")
	*/
	public function homepage()
	{	
		$sliders = [
			0 => [
				'title' => 'Fast and Furious',
				'subtitle' => 'La cinema din 21 Februarie',
				'photo' => 'fastfurious.jpeg',
				'link' => '/about',
				'active' => 'active'
			],
			1 => [
				'title' => 'Iron Man',
				'subtitle' => 'La cinema din 21 Februarie',
				'photo' => 'ironman.jpg',
				'link' => '/about',
				'active' => ''
			],
			2 => [
				'title' => 'Lucifer',
				'subtitle' => 'La cinema din 21 Februarie',
				'photo' => 'lucifer.jpg',
				'link' => '/about',
				'active' => ''
			],
			3 => [
				'title' => 'Transformers',
				'subtitle' => 'La cinema din 21 Februarie',
				'photo' => 'transformers.jpg',
				'link' => '/about',
				'active' => '/about'
			],
		];
		$layouts = [
			0 => [
				'title' => 'Transformers',
				'content' => 'Bătălia pentru Pământ tocmai s-a încheiat, însă bătălia pentru Univers abia a început. După reîntoarcerea pe Cybertron, Starscream preia controlul asupra Decepticonilor și este hotărât să se întoarcă pe Terra cu forțe crescute. Autoboții, convinși că pacea este posibilă, află că rămășițele lui Megatron au fost furate de la Armata SUA și că Decepticonii încearcă să-l readucă la viață. Cu Megatron la fel de puternic ca la început și ajutat de Starscream și noi membri ai grupului Decepticonilor, Autoboții pot avea mari bătăi de cap în încercarea de a proteja libertatea. Optimus Prime incearca sa il salveze pe Sam , dar este omorat.',
				'hiddenContent' => 'Sam incearca sa inteleaga niste simboluri si ajunge in Egipt , dandu-si seama ca este posibil sa il invie pe Optimus cu ajutorul Matricei, pe care o gaseste dar care se transforma in praf. Totusi Sam nu isi pierde speranta ca va reusi, si astfel porneste o cursa disperata pentru a ajunge la Optimus, incercand sa treaca printre decepticoni, alaturi de Mikaela.',
				'link' => '/about'
			],
			1 => [
				'title' => 'Fast & Furious',
				'content' => 'Dom, sora lui, Mia (Brewster) și Brian, redescoperă legăturile de familie înstrăinate acum câțiva ani, dar, soarta îi plasează încă o dată de părțile opuse ale cursei. Acum, convoiul trece peste lanțul muntos, traversează Republica Dominicană și străbate tunelele săpate sub deșertul Mexcului; Cei doi prieteni-rivali vor apăsa la maxim pedala accelerației într-o cursă pe viață și pe moarte. DE la cursele ilegale de mașini pe străzile din Los Angeles, la manevrele de spălat banii și aventurile periculoase în Tokyo, seria de filme întemeiate pe mania vitezei a devenit o senzație la nivel global, încă de la începuturile ei, acum nouă ani.',
				'hiddenContent' => 'Acum, în capitolul următor, cele patru personaje din filmul original se reunesc din nou, pentru prima dată în formatie completă, acasă, acolo unde a început totul. VIN DIESEL (The Pacifier, xXx) și PAUL WALKER (Flags for Our Fathers, Eight Below) refac echipa pentru această cea mai recentă aventură din franciza pe bază de adrenalină Fast & Furious. Din nou pe străzile din Los Angeles, se reîntâlnesc cu MICHELLE RODRIGUEZ (Lost, Resident Evil) și JORDANA BREWSTER (Chuck, The Texas Chainsaw Massacre: The Beginning) pentru a-și încorda mușchii și a-și etala mașinile exotice tunate pe străduțele întortocheate sau autostrăzile ce se contopesc cu orizontul într-un thriller cu cifră octanică mare realizat de regizorul JUSTIN LIN (The Fast and the Furious: Tokyo Drift, Netter Good Luck Tomorrow).',
				'link' => '/about'
			],
			2 => [
				'title' => 'Ironman',
				'content' => 'Paramount Pictures si Marvel Entertainment prezinta o nemaipomenita aventura "Iron Man", povestea unui industrias milionar si inventator genial, Tony Stark (ROBERT DOWNEY Jr.). În calitate de CEO al Stark Industries, cel mai mare furnizor de arme al Guvernului Statelor Unite, Tony a dobandit un statut de celebritate, protejand interesele americane pe tot cuprinsul globului, de cateva zeci de ani. Stilul de viata lejer al lui Tony ramane doar o amintire frumoasa atunci cand convoiul sau este atacat iar el este luat ostatic de un grup de insurgenti, dupa un test de arme la care asistase. Ranit de un srapnel, chiar aproape de inima deja slabita,',
				'hiddenContent' => 'Tony trebuie sa construiasca o arma devastatoare pentru Raza (FARAN TAHIR), misteriosul lider al insurgentilor. Ignorand cererea rapitorilor, Tony îsi foloseste puterea mintii si ingeniozitatea pentru a-si construi o armura speciala, care îi va îngadui sa supravietuiasca si îl ajuta sa scape din captivitate.',
				'link' => '/about'
			],
		];
		return $this->render('homepage.html.twig', [
			'title' => 'Homepage',
			'sliders' => $sliders,
			'layouts' => $layouts
		]);
	}	
}