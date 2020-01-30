<?php
/**
 * Fichero index.php
 * 
 * Este es el primer fichero el cual inicia todo el proyecto.
 * 
 */
require_once "core/database.php";

if(!isset($_GET['c'])){
    require_once "controller/HomeController.php";
    $controlador = new HomeController();
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