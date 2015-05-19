<?php

namespace bouquins\BackBundle\Controller;

use bouquins\BackBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogueController extends Controller
{
    public function indexAction()
    {
        return $this->render('bouquinsBackBundle:DashBoard:dashboardCatalogue.html.twig');
    }

    public function ajouterCategorieAction(Request $request)
    {
        $task = new Categorie();
        $task->setNomCategorie('Exemple: Informatique');


        $form = $this->createFormBuilder(new Categorie())
            ->add('nomCategorie', 'text')
            ->add('save', 'submit', array('label' => 'Ajouter Categorie'))
            ->getForm();

        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('bouquinsBackBundle:Categorie');
        $task = $form->getData();
        $categorieNom = $repository->getElementByName($task);
        //var_dump($categorieNom);
        $categorie = $repository->getAll();
        if ($request->isMethod('post') && $form->isValid() && isset($categorieNom) && empty($categorieNom))
        {

            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();
            $request->getSession()->getFlashBag()->add('noticeOk', 'Categorie bien enregistrée.');

            //redirect vers edition categorie
        }
        else if($request->isMethod('post') && $form->isValid() && isset($categorieNom) && !empty($categorieNom))
        {
            $request->getSession()->getFlashBag()->add('noticeNok', 'Enregistrement déjà existant.');
        }
        //$repository = $em->getRepository('bouquinsBackBundle:Categorie');
        //$em = $this->getDoctrine()->getManager();
        //$repository = $em->getRepository('bouquinsBackBundle:Categorie');
        $categorie = $repository->getAll();


        //var_dump(array('nomCategorie' => $task));

        //var_dump($categorie);



        return $this->render('bouquinsBackBundle:DashBoard:dashBoardCatalogue.html.twig', array('form' => $form->createView(),'categorie' => $categorie,));
    }




}
