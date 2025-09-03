<?php
require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/IPublicable.php';

class Libro implements IPublicable {
    private string $titulo;
    private Autor $autor;
    private ?int $anioPublicacion;

    public function __construct(string $titulo, Autor $autor, ?int $anioPublicacion = null) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
    }

    public function getTitulo(): string { return $this->titulo; }
    public function getAutor(): Autor { return $this->autor; }
    public function getAnioPublicacion(): ?int { return $this->anioPublicacion; }

    public function setTitulo(string $titulo): void { $this->titulo = $titulo; }
    public function setAutor(Autor $autor): void { $this->autor = $autor; }
    public function setAnioPublicacion(?int $anio): void { $this->anioPublicacion = $anio; }

    // Obligatorio por la interfaz
    public function getInfo(): string {
        $anio = $this->anioPublicacion ? " ({$this->anioPublicacion})" : "";
        return "Libro: {$this->titulo}{$anio} — Autor: " . $this->autor->getNombreCompleto();
    }
}
