<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already!');
    }

    /**
     * @Route("/news/{slug}")
     */
    
    public function show($slug)
    {
        $comments = [
            'lore ipsunlore ipsun lore ipsun',
            'lore ipsunlore ipsun lore ipsun',
            'lore ipsunlore ipsun lore ipsun',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', '', $slug)),
            'comments' => $comments,
        ]);
    }
    
}