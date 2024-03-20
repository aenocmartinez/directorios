<?php

class Archivo implements Directorio{

    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function esDirectorio(): bool {        
        return false;
    }
}