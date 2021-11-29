<?php

class Student {
    
    public $name;

    public function__construct(){
        $this->name = "tanaka";
    }

    function avg($math,$english){
        echo (($math+$english)/2)."\n";
    }
}

$a001 = new Student();
$a001->name = "sato";
$a001->avg(80,70);
echo $a001->name."\n";

$a002 = new Student();
echo $a002->name."\n";
