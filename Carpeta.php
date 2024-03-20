<?php

class Carpeta implements Directorio {

    private string $nombre;
    private $subdirectorios = array();

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function agregarDirectorio(Directorio $directorio): void {
        $this->subdirectorios[] = $directorio;
    }

    public function imprimir(): void {        
        echo "<ul>";
            echo "<li>".$this->nombre."</li>";
            foreach($this->subdirectorios as $e) {                    
                if ($this->esDirectorio()) {                
                    $e->imprimir();
                }
            }                
            echo "<li>".$this->nombre."</li>";
        echo "</ul>";        
    }

    public function esDirectorio(): bool {
        return true;
    }
}