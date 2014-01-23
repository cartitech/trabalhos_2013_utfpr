<?php
namespace lib\loaders;

class JSONLoader extends Loader {
    public function carregar () {
        return json_decode($this->file, 1);
    }
}

