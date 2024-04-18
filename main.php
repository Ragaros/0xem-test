<?php

abstract class animal{

    static $id = 1;

    public $idAnimal=0;

    public abstract function getProduct();

    public function getNameOfClass()
    {
        return static::class;
    }
}


class chicken extends animal{

    function __construct() {

        $this->idAnimal=parent::$id++;}

    public function getProduct(){
        return rand(0,1);
    }

}


class cow extends animal{

    function __construct() {

        $this->idAnimal=parent::$id++;

    }


    public function getProduct(){
        return rand(8, 12);
    }
}


class ConcreteFactory
{

    public function createСhicken(): chicken
    {
        return new chicken;
    }

    public function createCow(): cow
    {
        return new cow;
    }
}



$factory=new ConcreteFactory();

$a = array();

for($cow=1;$cow<=9;$cow++){
    $a[]=$factory->createCow();
}

for($chicken=1;$chicken<=19;$chicken++){
    $a[]=$factory->createСhicken();
}


$milk=0;
$egg=0;

foreach ($a as $value){

    switch ($value->getNameOfClass()) {
        case "cow":
            $milk +=$value->getProduct() * 7;
            break;
        case "chicken":
            $egg +=$value->getProduct() * 7;
            break;
    }
}
echo "Молоко-".$milk."л"."\n";
echo "Яйца-".$egg."шт"."\n";
echo "Коровы-".$cow."ед"."\n";
echo "Куры-".$chicken."ед"."\n";

$milk=0;
$egg=0;
echo '-----one week later----
';





$factory=new ConcreteFactory();
$a = array();
for($cow=1;$cow<=10;$cow++){
    $a[]=$factory->createCow();
}
for($chicken=1;$chicken<=24;$chicken++){
    $a[]=$factory->createСhicken();
}

foreach ($a as $value) {
    switch ($value->getNameOfClass()) {
        case "cow":
            $milk += $value->getProduct()*7  ;
            break;
        case "chicken":
            $egg +=$value->getProduct()*7 ;
            break;
    }
}

echo "Молоко-".$milk."л"."\n";
echo "Яйца-".$egg."шт"."\n";
echo "Коровы-".$cow."ед"."\n";
echo "Куры-".$chicken."ед"."\n";


