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
		foreach ($this->lista_loader as $loader) {
			$cidades_loader = $loader->filtrar($string_busca);
			$this->cidades["cidades"] =
				array_merge($this->cidades["cidades"], $cidades_loader["cidades"]);
		} 
	}

	public function imprimir () {
		foreach ($this->lista_printer as $printer) {
			$cidades_printer = $printer->imprimir($this->cidades);
		}
	}
}
