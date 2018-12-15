<?php
/**
 * Created by PhpStorm.
 * User: yossep237
 * Date: 11/12/18
 * Time: 23:17
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/")
     */


    public function homepage()
    {

        return new Response('My first paid project and it is with Symfony GREAT!!!!!');
    }

    /**
     * @Route("/{slug}")
     */
    public function show($slug)
    {

        return $this -> render('landingpage/show.html.twig.html',
            ['title' => ucwords(str_replace('-',' ',$slug))]
            );
    }
}
