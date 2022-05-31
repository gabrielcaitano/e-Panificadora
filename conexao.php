<?php

$conexao = new mysqli('localhost','root','','panificadora_teste');

	if ($conexao->connect_error)
	 echo "Connection failed: (" .$mysqli->connect_error.") " .$mysqli->connect_error;
?>