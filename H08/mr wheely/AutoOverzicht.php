<?php


class AutoOverzicht{

    public $autoos;

    function __construct(){
        $this->autoos = [
            new Auto('Audi', 102500.00,'https://mediaservice.audi.com/media/live/50900/fly1400x601n1/gba/2021.png?wid=300'),
            new Auto('Audi', 105000.00,'https://mediaservice.audi.com/media/live/50900/fly1400x601n1/gba/2021.png?wid=300'),
            new Auto('Ferari', 1000000.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6gN7z0Gqq4tVitETqX6NAXxPH68yTKkh5fsyCYzgV7_0FSoh7KTjhR9dxq_0R3jC5zD4&usqp=CAU'),
            new Auto('Ferari', 99500.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6gN7z0Gqq4tVitETqX6NAXxPH68yTKkh5fsyCYzgV7_0FSoh7KTjhR9dxq_0R3jC5zD4&usqp=CAU'),
            new Auto('Fiat', 12500.00,'https://www.fiat.nl/content/dam/fiat/cross/models/cross/ourcars/500bev/LAPRIMA_300x140.png'),
            new Auto('Fiat', 10500.00,'https://www.fiat.nl/content/dam/fiat/cross/models/cross/ourcars/500bev/LAPRIMA_300x140.png')
        ];
    }

    function getAutoLijst(){
        return $this->autoos;
    }

    function voegAutoToe($merk, $prijs, $image_url){
        $newAuto = new Auto($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getFilteredList($minPrijs, $maxPrijs, $selectMerk){
        $FilteredList = [];
        for($i=0;$i < count($this->autoos);$i++){  
            $auto = $this->autoos[$i];
            if($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && $auto->getMerk() == $selectMerk){
                array_push($FilteredList, $auto);
            }
        }
        return $FilteredList;
    }

}