<?php

class Database 
{
    private const SERVER = "localhost";
    private const USUARIO = "juandba";
    private const CLAVE = "admin";
    private const DBNAME = "biblioteca";

    public static function conectar() {
        try {
            $conexion = new PDO("pgsql:host=" . self::SERVER . ";dbname=" . self::DBNAME . ";", self::USUARIO, self::CLAVE);
            # Muestra errores del postgresql
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            return "Fallo" . $e->getMessage();
        }
    }
}
