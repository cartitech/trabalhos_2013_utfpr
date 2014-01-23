<?php
namespace lib\printers;

class HTMLPrinter extends Printer {
     public function Imprimir ($cidades) {
         $texto_formatado = "";
         $texto = "";

         foreach($cidades["cidades"] as $cidade){
             $texto = $texto . "<li>" . $cidade["nome"] . "</li>\n";
         } 

         $texto_formatado =  "<html> \n" .
                             "    <head> \n" .
                             "        <title>Arquivo HTML</title>\n" .
                             "    </head>\n" . 
                             "    <body>\n" . 
                             "        <ul>\n" . $texto . 
			     "        </ul>\n" .
                             "    </body>\n" . 
			     "</html>";
     
         file_put_contents($this->filename, $texto_formatado);
     }
}
