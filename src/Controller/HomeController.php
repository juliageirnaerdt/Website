<?php
namespace App\Controller;

use App\Entity\Afspraak;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class HomeController extends Controller
{

	/**
	* @Route(path="/", name="home")
	*/
    public function home(Request $request)
    {
    	$afspraak = new Afspraak();

    	$form = $this->createFormBuilder($afspraak)
           	->add('voornaam', TextType::class)
           	->add('achternaam', TextType::class)
           	->add('startdatum', DateType::class)
           	->add('einddatum', DateType::class)
           	->add('behandeling', TextType::class)
           	->add('email', EmailType::class)
           	->add('save', SubmitType::class, array('label' => 'Maak Afspraak'))
           	->getForm();

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