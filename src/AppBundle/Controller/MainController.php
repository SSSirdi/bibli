<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/" , name="homepage")
     */
    public function homepageAction()
    {
        return $this->render('AppBundle:Main:homepage.html.twig');
    }

    /**
     * @Route("about" ,name="about")
    */
    public function aboutAction()
    {

        return $this->render('AppBundle:Main:about.html.twig');
    }

    public function inscriptionAction()
    {

        return $this->render('AppBundle:Main:inscription.html.twig');
    }

    /**
     * @Route("attribuer-livre" ,name="attriblivre")
     */
    public function attribLivreAction()
    {

        return $this->render('AppBundle:Main:attribuer-livre.html.twig');
    }

    /**
     * @Route("consulter-mes-prets-reservations" ,name="consultpretresa")
     */
    public function consultPretResaAction()
    {

        return $this->render('AppBundle:Main:consulter-mes-prets-reservations.html.twig');
    }

    /**
     * @Route("consulter-modifier-mes-informations" ,name="consultmodifinfo")
     */
    public function consultModifInfoAction()
    {

        return $this->render('AppBundle:Main:consulter-modifier-mes-informations.html.twig');
    }

    /**
     * @Route("fiche-livre" ,name="fichelivre")
     */
    public function ficheLivreAction()
    {

        return $this->render('AppBundle:Main:fiche-livre.html.twig');
    }

    /**
     * @Route("gestion-configuration" ,name="gestionconfig")
     */
    public function gestionConfigAction()
    {

        return $this->render('AppBundle:Main:gestion-configuration.html.twig');
    }

    /**
     * @Route("mentions-legales" ,name="mentionslegales")
     */
    public function mentionsLegalesAction()
    {

        return $this->render('AppBundle:Main:mentions-legales.html.twig');
    }

    /**
     * @Route("mon-compte" ,name="moncompte")
     */
    public function monCompteAction()
    {

        return $this->render('AppBundle:Main:mon-compte.html.twig');
    }

    /**
     * @Route("resultats-recherche" ,name="resultrecherche")
     */
    public function resultRechercheAction()
    {

        return $this->render('AppBundle:Main:resultats-recherche.html.twig');
    }

    /**
     * @Route("retour-livre" ,name="retourlivre")
     */
    public function RetourLivreAction()
    {

        return $this->render('AppBundle:Main:retour-livre.html.twig');
    }

}
