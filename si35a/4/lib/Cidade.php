<?php
namespace lib;

class Cidade {
    protected $cidades = array("cidades" => array());
    
    private $lista_loader = array();
    private $lista_printer = array();

    public function add_printer($printer){
        $this->lista_printer []= $printer; 
    }

    public function add_loader ($loader) {
        $this->lista_loader []= $loader;
    }

    public function carregar () {
        foreach ($this->lista_loader as $loader) {
            $cidades_loader = $loader->carregar();
            $this->cidades["cidades"] =
                array_merge($this->cidades["cidades"], $cidades_loader["cidades"]);
        }
    }

    public function filtrar ($string_busca) {
        $resultado_busca = array(
            "cidades" => array()
        );

        foreach ($this->cidades["cidades"] as $cidade) {
            if (substr($cidade["nome"], 0, strlen($string_busca)) == $string_busca) {
                $resultado_busca["cidades"][]= $cidade;
            }
        }
        $this->cidades = $resultado_busca;
    }

    public function imprimir () {
        foreach ($this->lista_printer as $printer) {
	    $cidades_printer = $printer->imprimir($this->cidades);
	}
    }
}
