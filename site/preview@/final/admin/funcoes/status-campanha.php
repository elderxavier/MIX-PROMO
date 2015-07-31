<?php

		include "biblioteca.php";

	  conexao();

	  $idanuncio = $_GET["idanuncio"];

	  status_campanha($idanuncio);
	
?>