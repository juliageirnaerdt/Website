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
    	$afspraak = new Afspraak();

    	$form = $this->createForm(AfspraakType::class, $afspraak);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	        // $form->getData() holds the submitted values
	        // but, the original `$task` variable has also been updated
	        $afspraak = $form->getData();

	        // ... perform some action, such as saving the task to the database
	        // for example, if Task is a Doctrine entity, save it!
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