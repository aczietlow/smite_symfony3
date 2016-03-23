<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count)
    {
        $numbers = [];
        for ($i = 0;$i < $count;$i++) {
            $numbers[] = rand(0, 100);
        }

        $numbersList = implode(', ', $numbers);

        // Expanding method for using twig and rendering.
        $html = $this->container->get('templating')->render(
          'lucky/number.html.twig',
          array('luckyNumberList' => $numbersList)
        );

        // Abstracted render method.
        $html = $this->render(
          'lucky/number.html.twig',
          array('luckyNumberList' => $numbersList)
        );

        return new Response($html);
    }

    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
          'lucky_number' => rand(0, 100),
        );

        $response = new Response(json_encode($data));

        // The headers property is a HeaderBag object.
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
