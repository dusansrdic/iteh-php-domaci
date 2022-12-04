<?php
class Telefon

{
    private $telefonID;
    private $model;
    private $tekst;
    private $proizvodjac;
    private $cena;
    

    

    public function __construct($telefonID, $model, $tekst, $proizvodjac, $cena, $mysqli)
    {
        $this->telefonID = $telefonID;
        $this->model = $model;
        $this->tekst = $tekst;
        $this->proizvodjac = $proizvodjac;
        $this->cena = $cena;
        $this->mysqli=$mysqli;
    }

  
    public function getTelefonID()
    {
        return $this->telefonID;
    }

    
    public function setTelefonID($telefonID)
    {
        $this->telefonID = $telefonID;
    }

    
    public function getModel()
    {
        return $this->model;
    }

   
    public function setModel($model)
    {
        $this->model = $model;
    }

    
    public function getTekst()
    {
        return $this->tekst;
    }

    
    public function setTekst($tekst)
    {
        $this->tekst = $tekst;
    }


    
    public function getProizvodjac()
    {
        return $this->proizvodjac;
    }

  
    public function setProizvodjac($proizvodjac)
    {
        $this->proizvodjac = $proizvodjac;
    }

    
    public function getCena()
    {
        return $this->cena;
    }

  
    public function setCena($cena)
    {
        $this->cena = $cena;
    }


    public function dodajTelefon(Telefon $telefon)
    {
        return $this->mysqli->query("INSERT INTO telefon VALUES (null,
        '" . $telefon->getModel() . "',
        '" . $telefon->getTekst() ."',
        " . $telefon->getProizvodjac()->getProizvodjacID() . ",
        '" . $telefon->getCena() ."'
        )");
    }



    public function vratiTelefonePoPretrazi($pretraga, $sort)
    {
        $upit = "SELECT * FROM telefon u join proizvodjac s on u.proizvodjac = s.proizvodjacID WHERE u.proizvodjac = " . $pretraga ." ORDER BY u.cena " . $sort;

        $rs = $this->mysqli->query($upit);
        $telefon = [];
        while ($red = $rs->fetch_object()) {
            $telefon[] = new Telefon($red->telefonID,$red->model,$red->tekst,new Proizvodjac($red->proizvodjacID,$red->nazivProizvodjaca),$red->cena, null);
        }
        return $telefon;
    }



    public function obrisiTelefon($id)
    {
        return $this->mysqli->query("DELETE FROM telefon WHERE telefonID = " . $id);
    }



    public function vratiSveTelefone()
    {
        $upit = "SELECT * FROM telefon u join proizvodjac s on u.proizvodjac = s.proizvodjacID";

        $rs = $this->mysqli->query($upit);
        $telefon = [];
        while ($red = $rs->fetch_object()) {
            $telefon[] = new Telefon($red->telefonID,$red->model,$red->tekst,new Proizvodjac($red->proizvodjacID,$red->nazivProizvodjaca),$red->cena, null);
        }
        return $telefon;
    }

    

    public function izmeniTelefon($telefonID, $tekst, $cena)
    {
        return $this->mysqli->query("UPDATE telefon SET tekst = '" . $tekst .  "', cena = '" .$cena ."' WHERE telefonID = '" . $telefonID."'");
    }

}