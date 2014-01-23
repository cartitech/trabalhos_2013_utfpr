<?php
namespace lib\loaders;

class TXTLoader extends Loader {
	protected $file;

	public function __construct ($filename) {
		$this->file = file_get_contents($filename);
	}

	public function carregar () {
		$cidades = array("cidades" => array());
		$b = array_filter(explode("\n", $this->file));

		foreach ($b as $c) {
			$d = explode("|", $c);
			$cidades["cidades"][] = array("nome" => $d[2]);
		}
		return $cidades;
	}

	public function  filtrar ($string_busca) {
		$resultado_busca = array(
				"cidades" => array()
				);

		$cidades = $this->carregar();

		foreach ($cidades["cidades"] as $cidade) {
			if (substr($cidade["nome"], 0, strlen($string_busca)) == $string_busca) {
				$resultado_busca["cidades"][]= $cidade;
			}
		}
		return $resultado_busca;
	}

}

