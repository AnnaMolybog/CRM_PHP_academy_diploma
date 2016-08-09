<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoleController extends Controller
{
    public function initiatorAction()
    {
        return $this->render('AppBundle:Role:initiator.html.twig', array(
            // ...
        ));
    }

    public function adminAction()
    {

        return $this->render('AppBundle:Role:admin.html.twig', array(
            // ...
        ));
    }

    public function productionDirectorAction()
    {
        return $this->render('AppBundle:Role:production_director.html.twig', array(
            // ...
        ));
    }

    public function financialDirectorAction()
    {
        return $this->render('AppBundle:Role:financial_director.html.twig', array(
            // ...
        ));
    }

    public function financialControllerAction()
    {
        return $this->render('AppBundle:Role:financial_controller.html.twig', array(
            // ...
        ));
    }

}
