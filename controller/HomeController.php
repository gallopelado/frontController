<?php
require_once "model/HomeModel.php";
class HomeController
{
    private $modelo;

    public function __CONSTRUCT($twig){
        $this->index($twig);
    }

    public function index($twig){        
        echo $twig->render('inicio/index.html', ['titulo' => 'Prueba con twig']);              
    }

}