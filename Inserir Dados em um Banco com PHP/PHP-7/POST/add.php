<?php

	include("../conn.php");
    
	$link=Connection();

	$temperatura = $_POST["temp"];
	$umidade = $_POST["umid"];
	$luminosidade = $_POST["lum"];

	echo "[DEBUG] Dado do sensor de Temperatura: " . $temperatura . "<br>";
	echo "[DEBUG] Dado do sensor de Umidade: " . $umidade . "<br>";
	echo "[DEBUG] Dado do sensor de Luminosidade: " . $luminosidade . "<br>";

	$query = "INSERT INTO " . $bd . ".`ESTACAO_001`(`TEMPERATURA`,`UMIDADE`,`LUMINOSIDADE`) VALUES ($temperatura,$umidade,$luminosidade)";
	
	//$con = $link->query($query);
	if ($link->query($query)) {
		echo "<h2>[DEBUG] Novos dados adicionados com sucesso</h2>";	
	} else {
		echo "<h2>[DEBUG] Erro ao inserir dados no banco</h2>";
	}

?>