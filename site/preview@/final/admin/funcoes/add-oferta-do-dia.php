<?php
	include 'biblioteca.php';

	$nome_anuncio         = $_POST["nomeCampanha"];
	$valor_antigo         = $_POST["valorAntigoCampanha"];
	$valor_novo           = $_POST["valorCampanha"];
	$desconto             = $_POST["desconto"];
	$info_anuncio         = $_POST["infoCampanha"];
	$reg_anuncio          = $_POST["regtoCampanha"];
	$sobre_anunciante     = $_POST["sobreAnunciante"];
	$img_destaque         = $_FILES["files"];
	$logo_anunciante      = $_FILES["logoAnunciante"];
	$dados_anunciante     = $_POST["descAnunciante"];
	$mapa_anunciante      = $_POST["localizacao"];
	$nome_local           = $_POST["nomeLocal"];
	$vencimento_anuncio   = $_POST["vencimentoCampanha"];

	$slide1               = $_FILES["slide1Campanha"];
	$slide2               = $_FILES["slide2Campanha"];
	$slide3               = $_FILES["slide3Campanha"];

	$destino_imagem       = "../uploads";

	// Se a foto estiver sido selecionada 
// if (!empty($foto["name"])) {   
// Largura máxima em pixels 

if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img_destaque["type"])){
 echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
} 
else{
	 $caminho_imagem = "../uploads/" . $img_destaque["name"];    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($img_destaque["tmp_name"], $caminho_imagem);
}

if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logo_anunciante["type"])){
 echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . $logo_anunciante["name"];    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($logo_anunciante["tmp_name"], $caminho_imagem_2);
}


//slide campanha
if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide1["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 1.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . $slide1["name"];    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide1["tmp_name"], $caminho_imagem_2);
}
if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide2["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 2.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . $slide2["name"];    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide2["tmp_name"], $caminho_imagem_2);
}
if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide3["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 3.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . $slide3["name"];    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide3["tmp_name"], $caminho_imagem_2);
}

	add_oferta_do_dia($nome_anuncio, $valor_antigo, $valor_novo, $desconto, $info_anuncio, $reg_anuncio, $sobre_anunciante, $img_destaque["name"], $logo_anunciante["name"], $dados_anunciante, $mapa_anunciante, $nome_local, $vencimento_anuncio, $slide1["name"], $slide2["name"], $slide3["name"]);
?>