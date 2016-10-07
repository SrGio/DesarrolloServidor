<?php

namespace P01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('P01Bundle:Default:index.html.twig');
    }
    public function artAction($numero)
    {
        $imagen='/img/producto'.$numero.'.jpeg';
        return $this->render('P01Bundle:Default:art.html.twig',array('numero'=>$numero,'imagen'=>$imagen));
    }
}
