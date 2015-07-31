<?php
	include 'biblioteca.php';

	//conexao com banco de dados
	conexao();

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

	$r = $valor_novo / $valor_antigo;
  $r_f = number_format($r,2,"",".");
  $desconto = 100 - substr($r_f, 1);



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




























if ($nome_anuncio && $valor_antigo && $valor_novo && $info_anuncio && $reg_anuncio && $sobre_anunciante && $dados_anunciante && $mapa_anunciante && $vencimento_anuncio && $estado && $cidade && $categoria && $oferta_do_dia != "") {

		//verifica se $img_destaque foi selecionada
		if(!empty($img_destaque["name"])){

				if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img_destaque["type"])){
				 echo "<script>parent.alert('Isso não é uma imagem (imagem de destaque).')</script>"; 
				} 
				else{
					 $caminho_imagem = "../uploads/" . limpaCaracter($extensao_img_destaque[0]) . ".jpeg";    
				    // Faz o upload da imagem para seu respectivo caminho 
				    move_uploaded_file($img_destaque["tmp_name"], $caminho_imagem);
				}
		    
		  mysql_query("UPDATE anuncios SET imgdestaque='".$img_destaque["name"]."' WHERE idanuncio=".$_GET["idanuncio"]." ");
		  
		}




		//verifica se $logo_anunciante foi selecionada
		if(!empty($logo_anunciante["name"])){

			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logo_anunciante["type"])){
			 echo "<script>parent.alert('Isso não é uma imagem(logo anunciante).')</script>"; 
			} 
			else{
				 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_logo_anunciante[0]). ".jpeg";    
			    // Faz o upload da imagem para seu respectivo caminho 
			    move_uploaded_file($logo_anunciante["tmp_name"], $caminho_imagem_2);
			}

		        mysql_query("UPDATE anuncios SET logoanunciante='".$logo_anunciante["name"]."' WHERE idanuncio=".$_GET["idanuncio"]." ");

		}





		//verifica se $slide1 foi selecionada
		if(!empty($slide1["name"])){

			//slide campanha
			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide1["type"])){
			 echo "<script>parent.alert('Isso não é uma imagem(slide 1).')</script>"; 
			} 
			else{
				 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide1[0]). ".jpeg";    
			    // Faz o upload da imagem para seu respectivo caminho 
			    move_uploaded_file($slide1["tmp_name"], $caminho_imagem_2);
			}

		        mysql_query("UPDATE slideanuncio SET slide1='".limpaCaracter($extensao_slide1[0]). ".jpeg"."' WHERE idanuncio=".$_GET["idanuncio"]." ");

		}






		//verifica se $slide2 foi selecionada
		if(!empty($slide2["name"])){

			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide2["type"])){
			 echo "<script>parent.alert('Isso não é uma imagem(slide 2).')</script>"; 
			} 
			else{
				 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide2[0]). ".jpeg";
			    // Faz o upload da imagem para seu respectivo caminho 
			    move_uploaded_file($slide2["tmp_name"], $caminho_imagem_2);
			}

		  mysql_query("UPDATE slideanuncio SET slide2='".limpaCaracter($extensao_slide2[0]). ".jpeg"."' WHERE idanuncio=".$_GET["idanuncio"]." ");


		}




		//verifica se $slide3 foi selecionada
		if(!empty($slide3["name"])){

			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $slide3["type"])){
			 echo "<script>parent.alert('Isso não é uma imagem(slide 3).')</script>"; 
			} 
			else{
				 $caminho_imagem_2 = "../uploads/" . limpaCaracter($extensao_slide3[0]). ".jpeg";    
			    // Faz o upload da imagem para seu respectivo caminho 
			    move_uploaded_file($slide3["tmp_name"], $caminho_imagem_2);
			}

		  mysql_query("UPDATE slideanuncio SET slide3='".limpaCaracter($extensao_slide3[0]). ".jpeg"."' WHERE idanuncio=".$_GET["idanuncio"]." ");

		}



			//ALTERA DADOS
      mysql_query("UPDATE anuncios SET nomeanuncio='".$nome_anuncio."', valorantigo='".$valor_antigo."',valornovo='".$valor_novo."',infoanuncio='".$info_anuncio."',regulamentoanuncio='".$reg_anuncio."',sobreanunciante='".$sobre_anunciante."',dadosanunciante='".$dados_anunciante."',mapaanunciante='".$mapa_anunciante."',vencimentoanuncio='".$vencimento_anuncio."', estado='".$estado."',cidade='".$cidade."',categoria='".$categoria."',desconto='".$desconto."',ofertadodia='".$oferta_do_dia."' WHERE idanuncio=".$_GET["idanuncio"]." ");

      echo "<script>parent.alert('Campanha alterada com sucesso.')</script>";
  } else {
      echo "<script>parent.alert('Preencha todos os campos corretamente.')</script>";
  }











?>