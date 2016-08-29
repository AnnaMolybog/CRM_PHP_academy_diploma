<?php

namespace CRM\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function indexAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin');
        } elseif ($this->get('security.authorization_checker')->isGranted('ROLE_INITIATOR')) {
            return $this->redirectToRoute('initiator');
        } else {
            return new Response('Hello');
        }

    }
    public function adminAction()
    {
        if(!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
        return $this->render('CRMAppBundle:Role:admin.html.twig', array(
            'user' => $user,
            'title' => 'Admin page'
        ));
    }

    public function initiatorAction()
    {
        if(!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
        return $this->render('CRMAppBundle:Role:initiator.html.twig', array(
            'user' => $user
        ));
    }

}
