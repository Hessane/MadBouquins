<?php

namespace bouquins\FrontBundle\Controller;

use bouquins\FrontBundle\Entity\Editeur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    public function registerAction()
    {
        $task = new Editeur();
        $task->setNomEditeur('eyrolles');


        $form = $this->createFormBuilder($task)
            ->add('nomEditeur', 'text')
            ->add('save', 'submit', array('label' => 'Ajout Editeur'))
            ->getForm();

        return $this->render('bouquinsFrontBundle:Default:register.html.twig', array('form' => $form->createView(),));
    }
}


?>