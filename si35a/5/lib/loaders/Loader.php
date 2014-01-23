<?php
namespace lib\loaders;

abstract class Loader {
	public abstract function carregar ();
	public abstract function filtrar ($string_busca);
}

