<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LivreType;
use AppBundle\Entity\Livre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

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

    /**
     * @Route("inscription" ,name="inscription")
     */
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
    public function retourLivreAction()
    {

        return $this->render('AppBundle:Main:retour-livre.html.twig');
    }

    /**
     * @Route("ajout-livre" ,name="ajoutlivre")
     * @Security("has_role('ROLE_USER')")
     */
    public function ajoutLivreAction(Request $request)
    {
        $security =$this->get('security.context');
        $token = $security->getToken();
        $user =$token->getUser();

        //dump($user);die();

        $livre = new LivreType();
        $form = $this->createForm($livre);
        $form->handleRequest($request);

        if ($form->isValid() ) {

            $security =$this->get('security.context');
            $token = $security->getToken();
            if (is_null($token)){
                echo 'tu sors';
            }else{

             $user =$token->getUser();

            dump($form->getData());
            $livre = new Livre();
            $livre->setTitre($form->getData()->getTitre());
            $livre->setIsbn13($form->getData()->getIsbn13());
            $livre->setIsbn10($form->getData()->getIsbn10());
            $livre->setDescription($form->getData()->getDescription());
            $livre->setNbpage($form->getData()->getNbpage());
            $livre->setLangue($form->getData()->getLangue());
            $livre->setLienImage($form->getData()->getLienImage());
            $livre->setSection($user->getSection());
            $livre->setEtablissement($user->getSection()->getEtablissement());
            $livre->setMembre($user);

            }


            $em= $this->getDoctrine()->getManager();
            $em->persist($livre);
            $em->flush();


        }

        return $this->render('AppBundle:Main:ajout-livre.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
