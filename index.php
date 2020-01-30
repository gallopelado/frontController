<?php
/**
 * Fichero index.php
 * 
 * Este es el primer fichero el cual inicia todo el proyecto.
 * 
 */
require_once "core/database.php";
require_once 'core/motor_plantilla.php';

//echo $twig->render('index.html', ['titulo' => 'Prueba', 'titulo2' => 'Titulo generado con Twig 3']);
if(!isset($_GET['c'])){
    require_once "controller/HomeController.php";
    $controlador = new HomeController($twig);
    //call_user_func(array($controlador,"Inicio"));
}else{
    $controlador = $_GET['c'];
    // Convierte la primera letra a Mayúsculas
    $controlador = ucwords($controlador) . "Controller";
    require_once "controller/$controlador".".php";    
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : "index";
    call_user_func(array($controlador,$accion));
}