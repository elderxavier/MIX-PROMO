<?php

	include 'biblioteca.php';

	$slide3 = $_FILES["slide3"];
	$link3  = $_POST["link3"];

	conexao();
	$result = mysql_query("SELECT * FROM slide");
  $dados = mysql_fetch_assoc($result);

  if($slide3 != ""){
  	if($dados["slide1"] == "" && $dados["slide3"] == "" && $dados["slide3"] == "" && $dados["slide4"] == ""){
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide3["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide3["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide3["tmp_name"], $caminho_imagem);
			}

			mysql_query("INSERT INTO slide (slide3, status)VALUES('".$slide3["name"]."', 'Sim')");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";
	  }else{
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide3["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide3["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide3["tmp_name"], $caminho_imagem);
			}

	  	mysql_query("UPDATE slide SET slide3='".$slide3["name"]."' ");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";

	  }

	  //link slide
	  $result2 = mysql_query("SELECT * FROM linkslide");
  	$dados2 = mysql_fetch_assoc($result2);

  	if($dados2["idlinkslide"] == ""){
  		mysql_query("INSERT INTO linkslide (link3, slide3)VALUES('".$link3."', 'slide3')");
  	}else{
  		mysql_query("UPDATE linkslide SET link3='".$link3."', slide3='slide3' ");
  	}

}else{
	echo "<script>parent.alert('Selecione uma imagem!')</script>";
}

	
?>