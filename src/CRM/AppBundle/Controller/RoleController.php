<?php

namespace CRM\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $username = $user->getUsername();
        $categories = $this->getDoctrine()->getRepository('CRMAppBundle:Category')->findAll();
        $projects = $this->getDoctrine()->getRepository('CRMAppBundle:Project')->findAll();
        $this->render('::base.html.twig', array(
            'categories' => $categories,
            'projects' => $projects,
            'user' => $username,
            'total_amount_of_projects' => $projects
        ));

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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $username = $user->getUsername();
        $categories = $this->getDoctrine()->getRepository('CRMAppBundle:Category')->findAll();
        $projects = $this->getDoctrine()->getRepository('CRMAppBundle:Project')->findAll();
        return $this->render('CRMAppBundle:Role:admin.html.twig', array(
            'categories' => $categories,
            'projects' => $projects,
            'title' => 'Admin page',
            'user' => $username,
            'total_amount_of_projects' => $projects
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

    public function accessRightAction()
    {
        return new Response('Welcome to access right page');
    }
}
