<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

	/**
	* @Route(path="/admin", name="admin")
	*/
    public function admin(Request $request)
    {
    	 return $this->render('admin/dashboard.html.twig');
    }
}