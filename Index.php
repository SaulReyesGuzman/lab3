<?php

require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/Libro.php';
require_once __DIR__ . '/Revista.php';
require_once __DIR__ . '/ImprimirAutor.php';

$autor1 = new Autor("Elena", "White", 1827, "EE.UU.");
$autor2 = new Autor("Gabriel", "García Márquez", 1927, "Colombia");
$autor3 = new Autor("Isabel", "Allende", 1942, "Chile");
$autor4 = new Autor("Jorge Luis", "Borges", 1899, "Argentina");

$libro1 = new Libro("Cien años de soledad", $autor2, 1967);
$libro2 = new Libro("La ciudad de las bestias", $autor3, 2002);

$revista1 = new Revista("National Geographic", $autor4, 540);
$revista2 = new Revista("Adventist Review", $autor1, 202);

$publicaciones = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicaciones as $pub) {
    echo $pub->getInfo() . "\n\n";
}
