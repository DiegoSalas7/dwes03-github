<?php


class Hexagono
{
    public $lado;
    public $apotema;
    
    
    public function area()
    {
        return ($this->lado*6) * $this->apotema /2;
    }
    
    public function __construct(){
        
        $this->lado=$_POST["lado"];
        $this->apotema=$_POST["apotema"];
        
    }
    function __toString(){
        
        return  "Los datos del triangulo creado: <br/>lado: ".$this->lado."<br/>Apotema: ".$this->apotema."<br/>";
    }
    
    
}


?>

