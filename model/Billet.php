<?php
require_once 'model/Model.php';

class Billet extends Model
{
    public function getBillets()
    {
        $sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET order by BIL_ID desc';
        $billets = $this->executerRequete($sql);
    }

    public function getBillet($idBillet)
    {
        $sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET WHERE BIL_ID =?;';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() == 1)
            return $billet->fetch();
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");

    }


}