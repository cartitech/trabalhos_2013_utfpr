<html>
	<head>
		<title>Lista</title>
	</head>
	<body>
		<h1>Listagem de Usuarios</h1>
		<?php

		$con = mysql_connect("localhost", "root", "bsos");

		mysql_select_db("trabalhos", $con);

		$result = mysql_query("SELECT * FROM persons;");

		echo "<ul>";

		while ($tupla = mysql_fetch_array($result)){
			echo "<li> {$tupla[firstname]} <li>";
		}

		echo "</ul>"

		?>

		<a href="new_usuario.php">Criar um usuario</a>

	</body>
</html>
