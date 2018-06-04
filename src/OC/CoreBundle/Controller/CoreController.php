<?php

namespace OC\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class CoreController extends Controller
{
    public function indexAction(Request $request)
    {
	    return $this->render('CoreBundle:Default:index.html.twig');
    }

    public function contactAction(Request $request)
    {

    	$request->getSession()->getFlashBag()->add('info', 'La page contact n\'est pas encore disponible, merci de revenir plus tard');

	    // Puis on redirige vers la page d'accueil
	    return $this->render('CoreBundle:Default:index.html.twig');
    }

}
