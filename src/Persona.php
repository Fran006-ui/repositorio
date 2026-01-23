<?php

/**
 * Clase Persona para ejemplo de PHPDocumentor.
 * Representa a una persona con nombre y edad.
 */
class Persona {

    /**
     * Nombre de la persona.
     * @var string
     */
    private $nombre;

    /**
     * Edad de la persona.
     * @var int
     */
    private $edad;

    /**
     * Constructor de la clase Persona.
     *
     * @param string $nombre Nombre de la persona
     * @param int    $edad   Edad de la persona
     */
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    /**
     * Devuelve el nombre de la persona.
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Devuelve la edad de la persona.
     *
     * @return int
     */
    public function getEdad() {
        return $this->edad;
    }
}
