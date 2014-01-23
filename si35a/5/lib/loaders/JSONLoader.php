<?php
namespace lib\loaders;

class JSONLoader extends Loader {
	protected $file;

	public function __construct ($filename) {
		$this->file = file_get_contents($filename);
	}

	public function carregar () {
		return json_decode($this->file, 1);
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
