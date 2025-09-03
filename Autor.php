<?php
class Autor {
    private string $nombre;
    private string $apellido;
    private ?int $anioNacimiento;
    private ?string $nacionalidad;

    public function __construct(string $nombre, string $apellido, ?int $anioNacimiento = null, ?string $nacionalidad = null) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->anioNacimiento = $anioNacimiento;
        $this->nacionalidad = $nacionalidad;
    }

    // --- GETTERS ---
    public function getNombre(): string { return $this->nombre; }
    public function getApellido(): string { return $this->apellido; }
    public function getAnioNacimiento(): ?int { return $this->anioNacimiento; }
    public function getNacionalidad(): ?string { return $this->nacionalidad; }

    // --- SETTERS ---
    public function setNombre(string $nombre): void { $this->nombre = $nombre; }
    public function setApellido(string $apellido): void { $this->apellido = $apellido; }
    public function setAnioNacimiento(?int $anio): void { $this->anioNacimiento = $anio; }
    public function setNacionalidad(?string $nacionalidad): void { $this->nacionalidad = $nacionalidad; }

    // Método de utilidad
    public function getNombreCompleto(): string {
        return "{$this->nombre} {$this->apellido}";
    }
}
