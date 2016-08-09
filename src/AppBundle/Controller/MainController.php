<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        if($request->getMethod() == Request::METHOD_POST) {

            $login = $request->request->get('login');
            $password = $request->request->get('password');

            $user = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository("AppBundle:User")
                ->findOneBy([
                    'userEmail' => $login,
                    'userPassword' => $password
                ]);

            if(!is_null($user)){
                $session = new Session();
                $session->set('user', $user);
                if($user->getRoleId() == 1) {
                    return $this->redirectToRoute('admin');
                } elseif ($user->getRoleId() == 2) {
                    return $this->redirectToRoute('initiator');
                } elseif ($user->getRoleId() == 3) {
                    return $this->redirectToRoute('production_director');
                } elseif ($user->getRoleId() == 4) {
                    return $this->redirectToRoute('financial_director');
                } elseif ($user->getRoleId() == 5) {
                    return $this->redirectToRoute('financial_controller');
                }

            }
        }

        return $this->render('AppBundle:Main:index.html.twig', array(
            // ...
        ));
    }

}
