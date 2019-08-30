<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/evaluation", name="evaluation")
     */
    public function evaluation()
    {
        return $this->render('main/evaluation.html.twig');
    }

    /**
     * @Route("/permisaac", name="permisaac")
     */
    public function permisaac()
    {
        return $this->render('main/permisaac.html.twig');
    }

    /**
     * @Route("/permisb", name="permisb")
     */
    public function permisb()
    {
        return $this->render('main/permisb.html.twig');
    }

    /**
     * @Route("/conduitesupervisee", name="conduitesupervisee")
     */
    public function conduitesupervisee()
    {
        return $this->render('main/conduitesupervisee.html.twig');
    }

    /**
     * @Route("/conduiteseule", name="conduiteseule")
     */
    public function conduiteseule()
    {
        return $this->render('main/conduiteseule.html.twig');
    }

    /**
     * @Route("/parcoursformation", name="parcoursformation")
     */
    public function parcoursformation()
    {
        return $this->render('main/parcoursformation.html.twig');
    }
}
