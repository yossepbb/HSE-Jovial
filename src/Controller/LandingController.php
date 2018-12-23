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


        // c'est un routage qui fonctionne
        // mais qui est long est fastigieu
        // avec l'instruction switch

        // une var qui stocke tous les alias des pages du site
        $slugs = array('qui-sommes-nous', 'solutions', 'engagements', 'références', 'devis', 'contact');


        switch ($slugs)
        {
            case $slugs[0] == $slug:
                //j'affiche la page qui sommes nous ?

                return $this -> render('landingpage/show.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]
                );
                break;

            case $slugs[1]== $slug: //j'affiche la page solution
                return $this -> render('landingpage/solution.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]);
                break;


            case $slugs[2]== $slug: //j'affiche la page engagements
                return $this -> render('landingpage/engagement.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]);
                break;


                case $slugs[3]== $slug: //j'affiche la page references
                return $this -> render('landingpage/other.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]);
                break;


            case $slugs[4] == $slug:

                return $this -> render('landingpage/devis.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]);
                break;


            default:
                //j'affiche les autres pages
                return $this -> render('landingpage/other.html.twig',
                    ['title' => ucwords(str_replace('-', ' ', $slug))]);
                break;

        }

    }


}

