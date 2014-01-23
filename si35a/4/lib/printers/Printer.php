<?php
namespace lib\printers;

abstract class Printer {
    protected $filename;
    
    public function __construct ($filename) {
        $this->filename = $filename;
    }

    public abstract function imprimir ($cidades);
}
