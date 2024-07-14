<?php
class Ingrediente{
    public string $nombre;
    public int $mililitros;


public function __construct(string $nombre, int $mililitros){
    $this->nombre = $nombre;
    $this->mililitros = $mililitros;
}
}