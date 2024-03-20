<?php

interface Directorio {
    public function esDirectorio(): bool;
    public function getNombre(): string;
}