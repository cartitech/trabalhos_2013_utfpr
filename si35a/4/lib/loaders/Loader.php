<?php
namespace lib\loaders;

abstract class Loader {
    protected $file;
    public function __construct ($filename) {
        $this->file = file_get_contents($filename);
    }
    public abstract function carregar ();
}

