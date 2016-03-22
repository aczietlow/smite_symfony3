<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    /**
     * @Route("/hello/{firstName}/{lastName}", name="hello")
     */
    public function indexAction($firstName, $lastName, Request $request)
    {
        // Symfony base controller provides helper methods, like redirect().
        if ($lastName == 'Gantt') {
            return $this->redirect('http://untrollable.com');
        }

        // Leroy is drunk, make leroy go home.
        if ($firstName == 'Leroy' && $lastName == 'Jenkins') {
            return $this->redirectToRoute('homepage', [], 301);
        }

        if ($firstName == 'Bob') {
            throw $this->createNotFoundException('Bob doesn\'t exist');
        }

        // Access properties of the request object.
        $page = $request->query->get('page', 1);

        return new Response('<html><body>Hello ' . $firstName . '!</body></html>');
    }
}
