<?php
require_once('Coctel.php');
class Cocteleria{
    public array $cocteles;

public function __construct(){
$this->cocteles = [];
}
public function agregarCoctel(Coctel $coctel){
    $this-> cocteles[] = $coctel; 
}
public function buscarCoctelMasRapido(){
    $tiempoMasRapido = $this->cocteles[0]->tiempo;
    foreach($this->cocteles as $coctel){
        if($coctel->tiempo <= $tiempoMasRapido){
            $tiempoMasRapido = $coctel->tiempo;
            $coctelMasRapido = $coctel;
            
        }
        
    }
    echo 'el coctel mas rapido es : ' .$coctelMasRapido->nombre . PHP_EOL;
    
}
public function buscarCoctelMenosTresIngre() : void{
    $menosTresIngredientes = [];
    echo'los cocteles con 3 ingredientes o menos son :' . PHP_EOL;
    foreach($this->cocteles as $coctel){
        if($coctel->obtenerNumeroIngredientes() <= 3){
            $menosTresIngredientes = [$coctel];
            echo $coctel->nombre . PHP_EOL;
        }
    
    }
    
    
}
}