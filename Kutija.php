<?php

class Kutija
{
    private $duzina;
    private $sirina;
    private $visina;

    public function getDuzina()
    {
        return $this->duzina;
    }
    protected function setDuzina($d)
    {
        $this->duzina = $d;
    }
    public function getSirina()
    {
        return $this->sirina;
    }
    protected function setSirina($s)
    {
        $this->sirina = $s
    }
    public function getVisina()
    {
        return $this->visina;
    }
    protected function setVisina($v)
    {
        $this->visina = $v;
    }
}


?>