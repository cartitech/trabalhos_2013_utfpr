<?php
namespace lib\printers;

class JSONPrinter extends Printer {
    public function Imprimir ($cidades) {
	$texto = json_encode($cidades);
	file_put_contents($this->filename, $texto);
    }
}

