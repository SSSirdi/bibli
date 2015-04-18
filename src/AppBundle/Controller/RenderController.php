<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RenderController extends Controller
{

    /**
     * @Route("recherche" ,name="recherche")
     */
    public function rechercheAction()
    {

        return $this->render('AppBundle:Render:recherche.html.twig');
    }

    /**
     * @Route("render/footer" ,name="footer")
     */
    public function footerAction()
    {

        return $this->render('AppBundle:Render:footer.html.twig');
    }

    /**
     * @Route("/render/menu" ,name="menu")
     */
    public function menuAction()
    {

        return $this->render('AppBundle:Render:menu.html.twig');
    }
}