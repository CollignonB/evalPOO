<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

abstract class Connection
{
    const HOST = "localhost";
    const DBNAME = "library_eval";
    const USER = "root";

    public static function getPDOConnection() {
        try {
            $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER);
            return $db;
        }catch (\Exception $e) {
            echo "Erreur lors de la connexion à la base de donnée: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
