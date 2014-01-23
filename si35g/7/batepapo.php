<?php
$nick = $_POST['nick'];
if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
?>
<html>
<head>
  <title>Bate Papo do Carlos</title>
</head>
<body bgcolor="#BBBB20"><font face="Verdana" size="2" color="#FFFFFF">

 <div><iframe name="chat" src="chat.php" width="100%" height="80%" frameborder="0">Atualize seu navegador.</iframe><br></div><div><iframe name="ultimo" src="ultima.php" frameborder="0" width=300 height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>Favor atualizar seu navegador.</iframe></div>

<hr color="white">

<form action="gravar.php" method="post" target="chat">
<b><?php echo $nick ?></b>
<input name="nick" type="hidden" value="<?php echo $nick ?>">
<select name="acao">
<option value="fala" selected>fala</option>
<option value="pergunta">pergunta</option>
<option value="concorda">concorda</option>
<option value="discorda">discorda</option>
</select> : <input type="text" name="texto"> <input type="submit" value="Falar">
</form>

<form action="sair.php" method="post">

<input name="nick" type="hidden" value="<?php echo $nick ?>">

<input type="submit" value="Sair">
</form>
</font>
</body>
</html>
