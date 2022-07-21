<?php

class Proizvod extends Kutija
{
    public $id;
    protected $naziv;
    protected $cijena;

    public function getNaziv()
    {
        return $this->naziv;
    }
    protected function setNaziv($n)
    {
        $this->naziv = $n;
    }
    protected function getCijena()
    {
        return $this->cijena;
    }
    protected function setCijena($c)
    {
        $this->cijena = $c;
    }

}


?>