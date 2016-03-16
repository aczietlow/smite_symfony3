<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
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

        return new Response(
          '<html><body>Lucky number: '.$numbersList.'</body></html>'
        );
    }

    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
          'lucky_number' => rand(0, 100),
        );

        return new Response(
          json_encode($data),
          200,
          array('Content-Type' => 'application/json')
        );
    }
}
