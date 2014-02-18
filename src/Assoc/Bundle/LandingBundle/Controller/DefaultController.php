<?php

namespace Assoc\Bundle\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AssocLandingBundle:Default:index.html.twig');
    }
}
