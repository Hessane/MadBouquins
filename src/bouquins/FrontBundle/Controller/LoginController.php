<?php
namespace bouquins\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('bouquinsFrontBundle:Default:login.html.twig');
    }
}


?>