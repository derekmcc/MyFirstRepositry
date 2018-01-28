<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 22/01/2018
 * Time: 22:16
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first Page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'This is the comments',
            'This is the comments',
            'This is the comments',
        ];

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-','',$slug)),
            'comments' => $comments,
        ]);
    }
}