<?php

class Obra{
    
    public $nombre_Obra;
    public $codigo_Obra;
    public $precio;
    public $codigo_Autor;
    public $foto;
    
    public function __toString(){
        
        return  "<p>Libro:  Nombre: ".$this->nombreObra."</p><br/>"
            ."<p>Codigo Obra: ".$this->codigo_Obra."</p><br/>"
                ."<p>Precio: ".$this->precio."</p><br/>"
                    ."<p>Codigo Autor: ".$this->codigo_Autor."</p><br/>"
                        ."<p><img src='img/".$this->foto."' ></p><br/>";
                          
                    
                    
    }
    
    
    public function getFoto()
    {
        return $this->foto;
    }

    public function getNombre()
    {
        return $this->nombre_Obra;
    }
    
    
    public function getCodigoObra()
    {
        return $this->codigo_Obra;
    }
    
    
    public function getPrecio()
    {
        return $this->precio;
    }

    public function getCodigoAutor()
    {
        return $this->codigo_Autor;
    }
    
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    
    
    
    
    
}

?>
