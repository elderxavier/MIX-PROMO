<?php

	include 'biblioteca.php';

	$slide2 = $_FILES["slide2"];
	$link2  = $_POST["link2"];

	conexao();
	$result = mysql_query("SELECT * FROM slide");
  $dados = mysql_fetch_assoc($result);

  if($slide2 != ""){
  	if($dados["slide1"] == "" && $dados["slide2"] == "" && $dados["slide3"] == "" && $dados["slide4"] == ""){
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide2["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide2["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide2["tmp_name"], $caminho_imagem);
			}

			mysql_query("INSERT INTO slide (slide2, status)VALUES('".$slide2["name"]."', 'Sim')");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";
	  }else{
	  	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide2["type"])){
			echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
			} 
			else{
			$caminho_imagem = "../imagens/slide/" . $slide2["name"];    
			// Faz o upload da imagem para seu respectivo caminho 
			move_uploaded_file($slide2["tmp_name"], $caminho_imagem);
			}

	  	mysql_query("UPDATE slide SET slide2='".$slide2["name"]."' ");
			echo "<script>parent.alert('Slide publicado com sucesso.')</script>";

	  }

	  //link slide
	  $result2 = mysql_query("SELECT * FROM linkslide");
  	$dados2 = mysql_fetch_assoc($result2);

  	if($dados2["idlinkslide"] == ""){
  		mysql_query("INSERT INTO linkslide (link2, slide2)VALUES('".$link2."', 'slide2')");
  	}else{
  		mysql_query("UPDATE linkslide SET link2='".$link2."', slide2='slide2' ");
  	}

}else{
	echo "<script>parent.alert('Selecione uma imagem!')</script>";
}

	
?>