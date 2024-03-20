<?php

require_once 'Directorio.php';
require_once 'Archivo.php';
require_once 'Carpeta.php';


$r = new Carpeta('Raiz');

$c1 = new Carpeta('Carpeta1');
$c2 = new Carpeta('Carpeta2');
$c3 = new Carpeta('Carpeta3');

$c1->agregarDirectorio(new Archivo('Archivo1.txt'));
$c1->agregarDirectorio(new Archivo('Archivo2.txt'));

$c3->agregarDirectorio(new Archivo('Archivo3.pdf'));
$c3->agregarDirectorio(new Archivo('Archivo4.pdf'));

$c2->agregarDirectorio($c3);
$c2->agregarDirectorio(new Archivo('Archivo5.pdf'));
$c2->agregarDirectorio(new Archivo('Archivo6.pdf'));

$r->agregarDirectorio($c1);
$r->agregarDirectorio($c2);

$r->imprimir();
// echo "<pre>";
// print_r($r);
// echo "</pre>";
