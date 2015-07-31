<?php
	include 'biblioteca.php';

	$nome_anuncio         = $_POST["nomeCampanha"];
	$valor_antigo         = $_POST["valorAntigoCampanha"];
	$valor_novo           = $_POST["valorCampanha"];
	$info_anuncio         = $_POST["infoCampanha"];
	$reg_anuncio          = $_POST["regtoCampanha"];
	$sobre_anunciante     = $_POST["sobreAnunciante"];
	$img_destaque         = $_FILES["files"];
	$logo_anunciante      = $_FILES["logoAnunciante"];
	$dados_anunciante     = $_POST["descAnunciante"];
	$mapa_anunciante      = $_POST["localizacao"];
	$vencimento_anuncio   = $_POST["vencimentoCampanha"];
	$estado           	  = $_POST["estado"];
	$cidade               = $_POST["cidade"];
	$categoria            = $_POST["categoria"];
	$oferta_do_dia        = $_POST["ofertadodia"];

	$slide1               = $_FILES["slide1Campanha"];
	$slide2               = $_FILES["slide2Campanha"];
	$slide3               = $_FILES["slide3Campanha"];

	$destino_imagem       = "../uploads";




//extenção img destaque
$extensao_img_destaque = explode(".",$img_destaque["name"]);
limpaCaracter($extensao_img_destaque[0]);

//extenção logo anunciante
$extensao_logo_anunciante = explode(".",$logo_anunciante["name"]);
limpaCaracter($extensao_logo_anunciante[0]);

//extenção slide 1
$extensao_slide1 = explode(".",$slide1["name"]);
limpaCaracter($extensao_slide1[0]);

//extenção slide 2
$extensao_slide2 = explode(".",$slide2["name"]);
limpaCaracter($extensao_slide2[0]);

//extenção slide 3
$extensao_slide3 = explode(".",$slide3["name"]);
limpaCaracter($extensao_slide3[0]);




if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img_destaque["type"])){
 echo "<script>parent.alert('Isso não é uma imagem (imagem de destaque).')</script>"; 
} 
else{
	 $caminho_imagem = "../uploads/" . limpaCaracter($extensao_img_destaque[0]) . ".jpeg";    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($img_destaque["tmp_name"], $caminho_imagem);
}






if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logo_anunciante["type"])){
 echo "<script>parent.alert('Isso não é uma imagem.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_logo_anunciante[0]). ".jpeg";    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($logo_anunciante["tmp_name"], $caminho_imagem_2);
}







//slide campanha
if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide1["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 1.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide1[0]). ".jpeg";    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide1["tmp_name"], $caminho_imagem_2);
}






if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide2["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 2.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide2[0]). ".jpeg";
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide2["tmp_name"], $caminho_imagem_2);
}






if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide3["type"])){
 echo "<script>parent.alert('Isso não é uma imagem 3.')</script>"; 
} 
else{
	 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide3[0]). ".jpeg";    
    // Faz o upload da imagem para seu respectivo caminho 
    move_uploaded_file($slide3["tmp_name"], $caminho_imagem_2);
}

	add_anuncio($nome_anuncio, $valor_antigo, $valor_novo, $info_anuncio, $reg_anuncio, $sobre_anunciante, limpaCaracter($extensao_img_destaque[0]) . ".jpeg", limpaCaracter($extensao_logo_anunciante[0]). ".jpeg", $dados_anunciante, $mapa_anunciante, $vencimento_anuncio, $estado, $cidade, $categoria, $oferta_do_dia, limpaCaracter($extensao_slide1[0]). ".jpeg", limpaCaracter($extensao_slide2[0]). ".jpeg", limpaCaracter($extensao_slide3[0]). ".jpeg");
?>