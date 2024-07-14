<?php
require_once('Estilo.php');
require_once('Ingrediente.php');
//coctel mas rapido
//coctel 3 menos ingredientes
// 4 cocteles
class Coctel{
    public string $nombre;
    public int $tiempo;
    public array $ingredientes;
    public Estilo $estilo;
public function __construct(string $nombre, int $tiempo, Estilo $estilo){
    $this->nombre = $nombre;
    $this->tiempo = $tiempo;
    $this->ingredientes = [];
    $this->estilo = $estilo;
}

 
public function addIngredientes(Ingrediente $ingrediente){
    $this-> ingredientes[] = $ingrediente;
}
public function obtenerNumeroIngredientes(){
    return count($this->ingredientes);
}
}