<?php
/**
 * Created by PhpStorm.
 * User: yossep237
 * Date: 11/12/18
 * Time: 23:17
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class LandingController
{
    public function homepage()
    {

        return new Response('My first paid project and it is with Symfony GREAT!!!!!');
    }
}