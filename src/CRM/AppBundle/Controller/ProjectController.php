<?php

namespace CRM\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    const REJECT_STATUS = 3;

    public function categoryAction($id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $username = $user->getUsername();
        $totalAmountOfProjects = $this->getDoctrine()->getRepository('CRMAppBundle:Project')->findAll();
        $projects = $this->getDoctrine()->getRepository('CRMAppBundle:Project')->findBy(['categoryId' => $id]);
        $categories = $this->getDoctrine()->getRepository('CRMAppBundle:Category')->findAll();

        return $this->render('CRMAppBundle:Project:category.html.twig', array(
            'projects' => $projects,
            'categories' => $categories,
            'user' =>$username,
            'total_amount_of_projects' => $totalAmountOfProjects
        ));
    }

    public function viewAction()
    {
        return $this->render('CRMAppBundle:Project:view.html.twig', array(
            // ...
        ));
    }

    public function rejectAction(Request $request)
    {
        $projectId = $request->request->get('project_id');
        $project = $this->getDoctrine()->getManager()->getRepository('CRMAppBundle:Project')->find($projectId);
        if(!$project) {
            throw new Exception('No project found for id ' . $projectId);
        } else {
            $project->setStatusId(self::REJECT_STATUS);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->redirectToRoute('admin');
    }
}
