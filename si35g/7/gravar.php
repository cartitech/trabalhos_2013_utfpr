<?php
$nick = $_POST['nick'];
$acao = $_POST['acao'];
$hora = date("h:i:s");
if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
$texto = $_POST['texto']; 

$abre = fopen("chat.txt", "a");

if($abre) {

fwrite($abre,"<b>{$nick} <i>{$acao}, �s {$hora}</i>:</b> {$texto} <br>");

}

fclose($abre);

$ultima = fopen("ultima.txt", "w");

fwrite($ultima, $hora);

fclose($ultima);

?>

<meta http-equiv="refresh" content="0; url=chat.php">
