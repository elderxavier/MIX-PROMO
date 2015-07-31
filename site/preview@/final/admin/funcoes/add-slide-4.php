<?php

	include 'biblioteca.php';

	$slide4 = $_FILES["slide4"];
	$link4  = $_POST["link4"];

	conexao();
	$result = mysql_query("SELECT * FROM slide");
  $dados = mysql_fetch_assoc($result);

  if($slide4 != ""){
  	if($dados["slide1"] == "" && $dados["slide4"] == "" && $dados["slide4"] == "" && $dados["slide4"] == ""){
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide4["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide4["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide4["tmp_name"], $caminho_imagem);
			}

			mysql_query("INSERT INTO slide (slide4, status)VALUES('".$slide4["name"]."', 'Sim')");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";
	  }else{
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide4["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide4["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide4["tmp_name"], $caminho_imagem);
			}

	  	mysql_query("UPDATE slide SET slide4='".$slide4["name"]."' ");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";

	  }

	  //link slide
	  $result2 = mysql_query("SELECT * FROM linkslide");
  	$dados2 = mysql_fetch_assoc($result2);

  	if($dados2["idlinkslide"] == ""){
  		mysql_query("INSERT INTO linkslide (link4, slide4)VALUES('".$link4."', 'slide4')");
  	}else{
  		mysql_query("UPDATE linkslide SET link4='".$link4."', slide4='slide4' ");
  	}

}else{
	echo "<script>parent.alert('Selecione uma imagem!')</script>";
}

	
?>