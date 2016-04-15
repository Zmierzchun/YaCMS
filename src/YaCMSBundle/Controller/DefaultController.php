<?php

namespace YaCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YaCMSBundle:Default:index.html.twig');
    }
}
