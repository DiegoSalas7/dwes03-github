<?php

class Animal{
    
    public $chip;
    public $tipo;
    public $imagen;
    public $nombre;
    
    public function __toString(){
        
        return  "<p>Animal:  Chip: ".$this->chip."</p><br/>"
            ."<p>Tipo: ".$this->tipo."</p><br/>"
                ."<p><img src='img/".$this->imagen."' ></p><br/>"
                    ."<p>Nombre: ".$this->nombre."</p><br/>";
                    
                    
    }
  
    public function getChip()
    {
        return $this->chip;
    }

    
    public function getTipo()
    {
        return $this->tipo;
    }

   
    public function getImagen()
    {
        return $this->imagen;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    
    
    
}

?>