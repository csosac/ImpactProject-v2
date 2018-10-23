<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	$posts = $this->getDoctrine()->getRepository('ImpactBundle:Post')->findAll();
        $posts = count($posts);
    	$users = $this->getDoctrine()->getRepository('ImpactBundle:User')->findAll();
        $users = count($users);
        return $this->render('AdminBundle:Default:index.html.twig', array(
                    'numUsers' => $users,
                	'numPosts' => $posts)
    	);
    }
}
