<?php
	$valor_antigo = "130,00";
	$valor_novo = "90,00";

	$r = $valor_novo / $valor_antigo;

	$r_f = number_format($r,2,"",".");


	echo 100 - substr($r_f, 1);

?>