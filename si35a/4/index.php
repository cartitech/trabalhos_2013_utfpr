<?php
    spl_autoload_register(function ($className) {
        $novo_path = implode("/", explode("\\", $className));
        require_once($novo_path . ".php");
    });

    use lib\Cidade as Cidade;
    
    $cidade = new Cidade();
   
    $cidade->add_loader(new lib\loaders\TXTLoader("data/cidades2.txt"));
    $cidade->add_loader(new lib\loaders\TXTLoader("data/cidades3.txt"));
    $cidade->add_loader(new lib\loaders\TXTLoader("data/cidades.txt"));
    $cidade->add_loader(new lib\loaders\JSONLoader("data/parana3.json"));
    
    $cidade->carregar();

    $cidade->add_printer(new lib\printers\JSONPrinter("teste.json"));
    $cidade->add_printer(new lib\printers\TXTPrinter("teste.txt"));    
    $cidade->add_printer(new lib\printers\HTMLPrinter("teste.html")); 

    $cidade->imprimir();
