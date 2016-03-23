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

        // Get session object.
        $session = $request->getSession();

        // Store attributes for reuse during a later user request.
        $session->set('foo','bar');

        // Get an attribute set by another controller in another request.
        $foobar = $session->get('foobar');

        // Use a default attribute in the requested attribute doesn't exist.
        $filters = $session->get('filters', array());

        return new Response('<html><body>Hello ' . $firstName . '!</body></html>');
    }
}
