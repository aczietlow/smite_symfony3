<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
  /**
   * @Route("/blog/{slug}", name="blog_show")
   */
  public function showAction($slug)
  {
    return new Response('Blog');
  }
}
