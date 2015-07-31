<?php

	include 'biblioteca.php';

	$categoria = $_POST["categoria"];

	//chama a função para cadastrar a categoria
	add_categoria($categoria);

?>
<script>

	parent.document.getElementById('categoria').value='';
	
</script>