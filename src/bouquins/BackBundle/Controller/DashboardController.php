<?php

namespace bouquins\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('bouquinsBackBundle:Dashboard:dashboard.html.twig');
    }
}
