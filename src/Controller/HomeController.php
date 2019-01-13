<?php
namespace App\Controller;

use App\Entity\Afspraak;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AfspraakType;

class HomeController extends Controller
{

	/**
	* @Route(path="/", name="home")
	*/
    public function home(Request $request)
    {

    	//afspraak entiteit aanmaken
    	$afspraak = new Afspraak();

    	$form = $this->createForm(AfspraakType::class, $afspraak);

        $form->handleRequest($request);
        // dump($form->getData());die;
        if ($form->isSubmitted() && $form->isValid()) {
	        
	        $afspraak = $form->getData();

	         $entityManager = $this->getDoctrine()->getManager();
	         $entityManager->persist($afspraak);
	         $entityManager->flush();

	        return $this->redirectToRoute('home');
        }

        return $this->render('home.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}