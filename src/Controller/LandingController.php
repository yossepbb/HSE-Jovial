<?php
/**
 * Created by PhpStorm.
 * User: yossep237
 * Date: 11/12/18
 * Time: 23:17
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController
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

        return new Response(sprintf(
            "HSE Global Security Assesment: %s", $slug
        ));
    }
}
