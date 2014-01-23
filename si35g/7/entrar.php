<?php
$nick = $_POST['nick'];
if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
$abre = fopen("chat.txt", "a");
if($abre) {
fwrite($abre,"<b>{$nick} <i> entrou no chat.</i></b><br>");
}
fclose($abre);
header("Location: batepapo.php",TRUE,307); 
?>
