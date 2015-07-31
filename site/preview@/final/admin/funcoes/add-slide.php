<?php

	include 'biblioteca.php';

	$slide1 = $_FILES["slide1"];
	$link1  = $_POST["link1"];

	conexao();
	$result = mysql_query("SELECT * FROM slide");
  $dados = mysql_fetch_assoc($result);

  if($slide1 != ""){
  	if($dados["slide1"] == "" && $dados["slide2"] == "" && $dados["slide3"] == "" && $dados["slide4"] == ""){
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide1["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide1["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide1["tmp_name"], $caminho_imagem);
			}

			mysql_query("INSERT INTO slide (slide, status)VALUES('".$slide1["name"]."', 'Sim')");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";
	  }else{
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide1["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide1["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide1["tmp_name"], $caminho_imagem);
			}

	  	mysql_query("UPDATE slide SET slide1='".$slide1["name"]."' ");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";

	  }

	  //link slide
	  $result2 = mysql_query("SELECT * FROM linkslide");
  	$dados2 = mysql_fetch_assoc($result2);

  	if($dados2["idlinkslide"] == ""){
  		mysql_query("INSERT INTO linkslide (link1, slide1)VALUES('".$link1."', 'slide1')");
  	}else{
  		mysql_query("UPDATE linkslide SET link1='".$link1."', slide1='slide1' ");
  	}


}else{
	echo "<script>parent.alert('Selecione uma imagem!')</script>";
}

	
	
	

	
?>