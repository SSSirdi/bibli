<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



class AjaxController extends Controller
{

    /**
     * @Route("/test/{aut}" , name="test" )
     */
    public function testController($aut, Request $request)
    {
       $em = $this->getDoctrine()->getManager();
        $editeur = $em->getRepository('AppBundle:Editeur')->findOneBy(array ('nomEditeur' =>$aut));
        if ($editeur){
            $pays=$editeur->getPaysEditeur();
        }else {
            $pays = null;
        }

        $response = new JsonResponse();
        return $response->setData(array('pays' => $pays));
    }

    /**
     * @Route("/Isbn-Search/{isbn}" , name="isbnsearch")
     */
    public function isbnAjaxController($isbn, Request $request)
    {
        //$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : '';

        $adresse = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn;

        $getInfos = file_get_contents($adresse);
        //dump($getInfos);die();
        $results = json_decode($getInfos);
        $infos= array();
        $infos['isbn13'] = null;
        if($results->totalItems > 0){

            $book = $results->items[0];
            if( isset($book->volumeInfo->industryIdentifiers[0]->identifier) ){$infos['isbn10'] = $book->volumeInfo->industryIdentifiers[0]->identifier;}
            if( isset($book->volumeInfo->industryIdentifiers[1]->identifier) ){$infos['isbn13'] = $book->volumeInfo->industryIdentifiers[1]->identifier;}
            if( isset($book->volumeInfo->title) ){$infos['titre'] = $book->volumeInfo->title;}
            if( isset($book->volumeInfo->authors) ) {
                if (count($book->volumeInfo->authors) == 1) {
                    $infos['auteur'] = $book->volumeInfo->authors[0];
                } elseif (count($book->volumeInfo->authors) > 1) {
                    for ($i = 0; $i < count($book->volumeInfo->authors); $i++) {
                        $infos['auteur'] .= $book->volumeInfo->authors[$i] . ';';
                    }
                }
            }

            if( isset($book->volumeInfo->categories) ){ if (count($book->volumeInfo->categories) == 1 ){
                $infos['categorie'] = $book->volumeInfo->categories[0];
            }elseif (count($book->volumeInfo->authors) > 1) {
                for ($i=0;$i< count($book->volumeInfo->categories); $i++ ){
                    $infos['auteur'].= $book->volumeInfo->categories[$i].';';
                }
            }
            }

            if( isset($book->volumeInfo->language) ){$infos['langue'] = $book->volumeInfo->language;}
            if( isset($book->volumeInfo->description) ){$infos['description'] = $book->volumeInfo->description;}
            if( isset($book->volumeInfo->pageCount) ){$infos['pages'] = $book->volumeInfo->pageCount;}

            if( isset($book->volumeInfo->imageLinks) ){
                $infos['image'] = str_replace('&edge=curl', '', $book->volumeInfo->imageLinks->thumbnail);
            }

            //print_r($infos);
        }
        else{
            echo 'Livre introuvable';
        }

        /*$em = $this->getDoctrine()->getManager();
        $editeur = $em->getRepository('AppBundle:Editeur')->findOneBy(array ('nomEditeur' =>$isbn));
        if ($editeur){
            $pays=$editeur->getPaysEditeur();
        }else {
            $pays = null;
        }*/

        $response = new JsonResponse();
        //dump($response->setData(array( 'infos' => $infos)));   die();
        return $response->setData(array( 'infos' => $infos));
    }


}