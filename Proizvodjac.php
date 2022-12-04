<?php

class Proizvodjac
{

    private $proizvodjacID;
    private $nazivProizvodjaca;

   
    public function __construct($proizvodjacID, $nazivProizvodjaca)
    {
        $this->proizvodjacID = $proizvodjacID;
        $this->nazivProizvodjaca = $nazivProizvodjaca;
    }

    public function getNazivProizvodjaca()
    {
        return $this->nazivProizvodjaca;
    }

    
    public function getProizvodjacID()
    {
        return $this->proizvodjacID;
    }

   
    public function setNazivProizvodjaca($nazivProizvodjaca)
    {
        $this->nazivProizvodjaca = $nazivProizvodjaca;
    }

 
    public function setProizvodjacID($proizvodjacID)
    {
        $this->proizvodjacID = $proizvodjacID;
    }
}