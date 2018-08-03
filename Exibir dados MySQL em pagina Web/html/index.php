<?php

include("conn/conexao.php");

$consulta = "SELECT * FROM pessoas";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>

<html>
	<head>
		<meta charset="utf-8" http-equiv="refresh" content="5">
		<title>Tabela de dados - Arthur Castro</title>
	</head>
	<body>
		<h2>Exibir dados MySQL em Página HTML com PHP</h2>
		<h4>Arthur Castro</h4>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Data de Cadastro</td>
			</tr>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["email"]; ?></td>
				<td><?php echo $dado["data_de_cadastro"]; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>