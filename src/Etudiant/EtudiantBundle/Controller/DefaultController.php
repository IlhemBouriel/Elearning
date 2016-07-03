<?php

namespace Etudiant\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EtudiantEtudiantBundle:Default:index.html.twig');
    }
}
