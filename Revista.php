<?php
require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/IPublicable.php';

class Revista implements IPublicable {
    private string $titulo;
    private Autor $editor;
    private int $numeroEdicion;

    public function __construct(string $titulo, Autor $editor, int $numeroEdicion) {
        $this->titulo = $titulo;
        $this->editor = $editor;
        $this->numeroEdicion = $numeroEdicion;
    }

    public function getTitulo(): string { return $this->titulo; }
    public function getEditor(): Autor { return $this->editor; }
    public function getNumeroEdicion(): int { return $this->numeroEdicion; }

    public function setTitulo(string $titulo): void { $this->titulo = $titulo; }
    public function setEditor(Autor $editor): void { $this->editor = $editor; }
    public function setNumeroEdicion(int $numero): void { $this->numeroEdicion = $numero; }

    // Obligatorio por la interfaz
    public function getInfo(): string {
        return "Revista: {$this->titulo} — Edición #{$this->numeroEdicion} — Editor/a: " . $this->editor->getNombreCompleto();
    }
}
