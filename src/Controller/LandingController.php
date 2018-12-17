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
     * genrating url to homepage. route's name is app_homepage
     * @Route("/", name="app_homepage")
     */


    public function homepage()
    {
        dump($this);
        $services = [
            'Toxicologue expert', 'Santé et respect des normes', 'cosmétique', 'environnement', 'Maladie', 'Alimentation', 'Regime'
        ];

        return $this -> render('landingpage/homepage.html.twig',
            ['services' => $services,
            //this var will be the title of the homepage
            'title' => 'Global Toxicology and risk assesments'
            ]);
    }

    /**
     * genrating url to show_page. the route's name app_show
     * @Route("/{slug}",name="app_show")
     */
    public function show($slug)
    {

        return $this -> render('landingpage/show.html.twig',
            //this var will be the title of the showpage. ucwords will replace every '-' present in slug by ' '
            ['title' => ucwords(str_replace('-',' ',$slug))]
            );
    }
}
