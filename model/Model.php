<?php
/**
 * Classe Abstraite pour la PDO
 * 
 * Pensez à changez les constantes:
 *  
 *  $MYHOST,
 * 
 *  $MYLOGIN,
 *  
 *  $MYPASS,
 * 
 *  $MYBDD
 */
abstract class Model {
    private $bdd;
    
    private $MYHOST = "database:3306";
    private $MYLOGIN = "root";
    private $MYPASS = "tiger";
    private $MYBDD = "boggy";
    
    public function __construct()
    {
         $this->URL= "mysql:host=".$this->MYHOST.";dbname=".$this->MYBDD.";charset=utf8";
    }

    private function getBdd(): PDO
    {
        if ($this->bdd == null){
            $this->bdd = new PDO($this->URL, $this->MYLOGIN, $this->MYPASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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

