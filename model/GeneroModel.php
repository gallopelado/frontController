<?php
class GeneroModel 
{
    private $con;
    private $id;
    private $descripcion;

    public function __construct()
    {
        $this->con = Database::conectar();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId() 
    {
        return $this->id;    
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion($descripcion)
    {
        return $this->descripcion;
    }

    public function listar()
    {
        try {
            $consultaSQL = $this->con->prepare("SELECT id, descripcion FROM public.genero");
            $consultaSQL->execute();
            return $consultaSQL->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}