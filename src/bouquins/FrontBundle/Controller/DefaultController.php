<?php

namespace bouquins\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('bouquinsFrontBundle:Default:index.html.twig');
    }
}
