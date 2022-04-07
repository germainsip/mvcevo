<?php
class Model {
    private $bdd;

    private function getBdd(): PDO
    {
        if ($this->bdd == null){
            $this->bdd = new PDO("mysql:host=database:3306;dbname=boggy;charset=utf8", 'root', 'tiger',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

        return $this->bdd;
    }

    protected function executerRequete($sql, $params = null): bool|PDOStatement
    {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);    // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }








}

