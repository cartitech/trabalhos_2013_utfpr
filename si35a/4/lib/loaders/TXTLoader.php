<?php
namespace lib\loaders;

class TXTLoader extends Loader {
    public function carregar () {
        $cidades = array("cidades" => array());
        $b = array_filter(explode("\n", $this->file));

        foreach ($b as $c) {
            $d = explode("|", $c);
            $cidades["cidades"][] = array("nome" => $d[2]);
        }
        return $cidades;
    }
}

