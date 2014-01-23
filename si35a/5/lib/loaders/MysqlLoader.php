<?php
namespace lib\loaders;

class MysqlLoader extends Loader {

	private function conectar () {
		$con = mysql_connect("localhost", "root", "bsos");

		if (!$con)
			die('Nao conectou: \n' . mysql_error());

		mysql_select_db("aula");

	}

	private function desconectar (){
		mysql_close();
	}

	public function carregar () {

		$cidades = array("cidades" => array());

		$this->conectar();

		$query =  mysql_query("select cidade from cidades");

		while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
			$cidades["cidades"][] = array("nome" => $row["cidade"]);
		}

		$this->desconectar();

		return $cidades;
	}

	public function filtrar ($string_busca) {
		$cidades = array("cidades" => array());

		$this->conectar();

		$query =  mysql_query("select cidade from cidades where cidade like '" . $string_busca . "%'");

		while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
			$cidades["cidades"][] = array("nome" => $row["cidade"]);
		}

		$this->desconectar();

		return $cidades;
	}
}
