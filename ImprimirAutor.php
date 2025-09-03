<?php
require_once __DIR__ . '/Autor.php';

// Clase pedida en el laboratorio para imprimir atributos de Autor
class ImprimirAutor {
    public function getInfo(Autor $autor): string {
        $partes = ["Autor: " . $autor->getNombreCompleto()];
        if ($autor->getAnioNacimiento() !== null) {
            $partes[] = "Nac.: " . $autor->getAnioNacimiento();
        }
        if ($autor->getNacionalidad() !== null) {
            $partes[] = "Nacionalidad: " . $autor->getNacionalidad();
        }
        return implode(" | ", $partes);
    }
}
