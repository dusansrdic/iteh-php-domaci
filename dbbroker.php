<?php

class DBBroker
{

    private $mysqli;

    public function __construct(Mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function vratiSveProizvodjace()
    {
        $upit = "SELECT * FROM proizvodjac";

        $rs = $this->mysqli->query($upit);
        $proizvodjaci = [];
        while ($red = $rs->fetch_object()) {
            $proizvodjaci[] = new Proizvodjac($red->proizvodjacID,$red->nazivProizvodjaca);
        }
        return $proizvodjaci;
    }


}