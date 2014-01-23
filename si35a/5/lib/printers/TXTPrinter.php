<?php
namespace lib\printers;

class TXTPrinter extends Printer {
    public function imprimir ($cidades) {
       $texto = "";	
	
	foreach ($cidades["cidades"] as $cidade) {
            $texto = $texto . " * " . $cidade["nome"] . "\n";
	}
	
	file_put_contents($this->filename, $texto);
    }
}
