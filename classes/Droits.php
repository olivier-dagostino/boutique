<?php

class Droits extends Dbh
{
    
    public $nom;

    public function getDroitsById($droits)
    {
        $sth = $this->DbHandler()->prepare("SELECT `nom` FROM `droits` WHERE `id` = '$droits'");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getDroits()
    {
        $sth = $this->DbHandler()->prepare("SELECT `nom` FROM `droits`");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getDroitsByName($nom)
    {
        $sth=$this->DbHandler()->prepare("SELECT `id` FROM `droits` WHERE `nom` = '$nom' ");
        $sth->execute();
        $res= $sth->fetch();
        return $res;
    }

}