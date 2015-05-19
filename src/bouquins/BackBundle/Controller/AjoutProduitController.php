<?php

namespace bouquins\BackBundle\Controller;

use bouquins\BackBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AjoutProduitController extends Controller
{
    public function ajoutProduitAction(Categorie $id,Request $request)
    {
        return $this->render('bouquinsBackBundle:DashBoard:dashBoardAjoutProduit.html.twig', array('nomCategorie' => $id->getNomCategorie()));
    }
}
