<?php
require_once 'model/GeneroModel.php';
class GeneroController 
{
    public function index()
    {
        $genm = new GeneroModel();
        $lista = $genm->listar();
        print_r($lista);
    }
}