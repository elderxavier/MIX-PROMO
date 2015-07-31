<?php
	mysql_connect("localhost", "mixpromo_user", "senha@allan");
	mysql_select_db("mixpromo_db");
	

	$init 	= $_POST['init'];
	$max 	= $_POST['max'];

	$result = array(
		'totalResults' => 0,
		'dados' => null
	);

	$queryTotal = mysql_query("SELECT * FROM anuncios");
	$result["totalResults"] = mysql_num_rows($queryTotal);

	$busca = $_POST["campoPesquisa"];

	$queryDados = mysql_query("SELECT * FROM anuncios WHERE nomeanuncio LIKE '%".$busca."%' LIMIT ".$init.", ".$max." ");

	if($result["totalResults"] > 0){

		while($res = mysql_fetch_assoc($queryDados)){ 
			$arr[] = $res;
		}

		$result["dados"] = $arr;

	}

	echo json_encode($result);
?>