<?php

namespace bouquins\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('bouquinsBackBundle:Default:index.html.twig');
    }
}
