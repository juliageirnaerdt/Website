<?php
namespace App\Controller;

use App\Entity\Afspraak;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AfsprakenController extends Controller
{

	/**
	* @Route(path="/admin/afspraken", name="admin_afspraken")
	*/
	public function afspraken(Request $request)
	{

		//Opslaan in de database
		$repository = $this->getDoctrine()->getRepository(Afspraak::class);
		$afspraken = $repository->findAll();

		return $this->render('admin/afspraken.html.twig', array(
			'afspraken' => $afspraken
			));
	}
}