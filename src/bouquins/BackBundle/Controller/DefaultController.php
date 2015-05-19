<?php

namespace bouquins\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('bouquinsBackBundle:Default:index.html.twig');
    }
}
