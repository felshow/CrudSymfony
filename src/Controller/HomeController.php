<?php

namespace App\Controller;

use App\Entity\Post;
use phpDocumentor\Reflection\Types\Context;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $posts = $this->getDoctrine()
                      ->getRepository( Post::class)
                      ->findAll();
        echo "<pre>";
        var_dump($posts);
        echo "</pre>";
            return new Response('Welcome to blogs SF4 !');
    }
}
