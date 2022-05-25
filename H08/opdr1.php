<?php
class Radio{
    private $liedjes = [];

    public function getSong(){
        return $this->liedjes;
    }

    public function setSong($song){
        $this->liedjes = $song;
    }
}

class Programma{
    private $naam = "";
    private $omschrijving = "";

    public function getProgram(){
        return $this;
    }

    function getNaam(){
        return $this->naam;
    }

    function setNaam($name){
        $this->naam = $name;
    }

    function setOmschrijving($omschr){
        $this->omschrijving = $omschr;
    }

    function getOmschrijving(){
        return $this->omschrijving;
    }
}

$Radio = new Radio();
$Radio->setSong(['Lied 1','Lied 2','Lied 3']);
$Programma = new Programma ();
$Programma->setNaam("Programma Naam");
$Programma->setOmschrijving("Programma Omschrijving");
echo $Programma->getNaam();
echo "<br>";
echo $Programma->getOmschrijving();
echo "<br><br>";
print_r ($Radio->getSong());
?>