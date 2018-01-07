<?php
/**
 * User: Adrian Cieluch
 * Date: 06.01.18
 * Time: 15:58
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SitesController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('sites/about.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('sites/blog.html.twig');
    }

    /**
     * @Route("/", name="front")
     */
    public function front()
    {
        return $this->render('sites/front.html.twig');
    }

    /**
     * @Route("/work", name="work")
     */
    public function work()
    {
        return $this->render('sites/work.html.twig');
    }
}