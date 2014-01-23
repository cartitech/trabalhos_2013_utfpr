<?php
$nick = $_POST['nick']; 
$abre = fopen("chat.txt", "a");
if($abre) {
fwrite($abre,"<b>{$nick} <i> saiu do chat.</i></b><br>");
}
fclose($abre);
?>
<meta http-equiv="refresh" content="0; url=index.htm">
