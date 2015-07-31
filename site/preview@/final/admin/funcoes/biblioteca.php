<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

//conexao ao banco de dados
function conexao() {
    $banco_de_dados = "mixpromo_db";
    $host = "localhost";
    $user = "mixpromo_user";
    $senha = "senha@allan";
    mysql_connect($host, $user, $senha) or die("erro de conexão");
    mysql_select_db($banco_de_dados) or die("erro ao selecionar o banco de dados");

}















//verifica login
function verifica_login($login, $senha){
  //conexao db
  conexao();

  $result = mysql_query("select * from admin where email='".$login."' and senha='".$senha."' ");
  $dados = mysql_fetch_assoc($result);

  if($login && $senha != ""){
    if($login == $dados["email"] && $senha == $dados["senha"]){
      echo "<script>parent.location='../painel.php'</script>";

      @session_start();
      $_SESSION["logado"]      = $dados["email"];
      $_SESSION["nome_logado"] = $dados["nome"];

    }else{
      echo "<script>parent.alert('Usuário ou senha inválidos! ".$dados["email"]." ".$dados["senha"]."')</script>";
    }
  }else{
    echo "<script>parent.alert('Preencha todos os campos!')</script>";
  }

}






























//verifia se o usuario está logado para acessar a página
function verifica_logado(){
 
  @session_start();
  
  if(@$_SESSION["logado"] == ""){
    echo "<script>alert('Faça seu login para acessar o sistema!'); location = 'index.php';</script>";
  }
}





















function limpaCaracter($limpador) {



    $a = array(

        '?' => 'S', '?' => 's', '?' => 'Dj', '?' => 'Z', '?' => 'z', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A',

        '?' => 'A', '?' => 'A', '?' => 'C', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'I', '?' => 'I', '?' => 'I',

        '?' => 'I', '?' => 'N', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'U', '?' => 'U',

        '?' => 'U', '?' => 'U', '?' => 'Y', '?' => 'B', '?' => 'Ss', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a',

        '?' => 'a', '?' => 'a', '?' => 'c', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'i', '?' => 'i', '?' => 'i',

        '?' => 'i', '?' => 'o', '?' => 'n', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'u',

        '?' => 'u', '?' => 'u', '?' => 'y', '?' => 'y', '?' => 'b', '?' => 'y', '?' => 'f'

    );



    $limpador = str_replace('&', '-and-', $limpador);

    $limpador = trim(preg_replace('/[^\w\d_ -]/si', '', $limpador)); //remove all illegal chars

    $limpador = str_replace(' ', '-', $limpador);

    $limpador = str_replace('--', '-', $limpador);



    return strtr($limpador, $a);



    return $limpador;

}































//cadastra anuncio
function add_anuncio($nome_anuncio, $valor_antigo, $valor_novo, $info_anuncio, $reg_anuncio, $sobre_anunciante, $img_destaque, $logo_anunciante, $dados_anunciante, $mapa_anunciante, $vencimento_anuncio, $estado, $cidade, $categoria, $oferta_do_dia, $slide1, $slide2, $slide3) {
    //conexao db
    conexao();

    //traz a porcentagem do valor
    $r = $valor_novo / $valor_antigo;
    $r_f = number_format($r,2,"",".");
    $desconto = 100 - substr($r_f, 1);


    if ($nome_anuncio && $valor_antigo && $valor_novo && $desconto && $info_anuncio && $reg_anuncio && $sobre_anunciante && $img_destaque && $logo_anunciante && $dados_anunciante && $mapa_anunciante && $vencimento_anuncio && $estado && $cidade && $categoria && $desconto && $slide1 && $slide2 && $slide3 != "") {
        mysql_query("INSERT INTO anuncios(nomeanuncio,valorantigo,valornovo,infoanuncio,regulamentoanuncio,sobreanunciante,imgdestaque,logoanunciante,dadosanunciante,mapaanunciante,vencimentoanuncio,estado,cidade,categoria,desconto,ofertadodia,status)VALUES('".$nome_anuncio."', '".$valor_antigo."', '".$valor_novo."', '".$info_anuncio."', '".$reg_anuncio."', '".$sobre_anunciante."', '".$img_destaque."', '".$logo_anunciante."', '".$dados_anunciante."', '".$mapa_anunciante."', '".$vencimento_anuncio."', '".$estado."', '".$cidade."', '".$categoria."', '".$desconto."', '".$oferta_do_dia."', 'Ativo')");

      $result = mysql_query("SELECT * FROM anuncios ORDER BY idanuncio DESC LIMIT 1");
      $dados = mysql_fetch_assoc($result);

          mysql_query("INSERT INTO slideanuncio (slide1,slide2,slide3,idanuncio)VALUES('".$slide1."','".$slide2."','".$slide3."','".$dados["idanuncio"]."')");

        echo "<script>parent.alert('Anúncio cadastrado com sucesso.')</script>";
    } else {
        echo "<script>parent.alert('Preencha todos os campos corretamente.')</script>";
    }
}






















//altera anuncio
/*
function altera_anuncio($nome_anuncio, $valor_antigo, $valor_novo, $desconto, $info_anuncio, $reg_anuncio, $sobre_anunciante, $img_destaque, $logo_anunciante, $dados_anunciante, $mapa_anunciante, $nome_local, $vencimento_anuncio, $slide1, $slide2, $slide3) {
    //conexao db
    conexao();

    if ($nome_anuncio && $valor_antigo && $valor_novo && $desconto && $info_anuncio && $reg_anuncio && $sobre_anunciante && $img_destaque && $logo_anunciante && $dados_anunciante && $mapa_anunciante && $nome_local && $vencimento_anuncio && $slide1 && $slide2 && $slide3 != "") {
        mysql_query("UPDATE anuncios SET nomeanuncio='".$nome_anuncio."', valorantigo='".$valor_antigo."',valornovo='".$valor_novo."',infoanuncio='".$info_anuncio."',regulamentoanuncio='".$reg_anuncio."',sobreanunciante='".$sobre_anunciante."',imgdestaque='".$img_destaque."',logoanunciante='".$logo_anunciante."',dadosanunciante='".$dados_anunciante."',mapaanunciante='".$mapa_anunciante."',vencimentoanuncio='".$vencimento_anuncio."',localanuncio='".$nome_local."',desconto='".$desconto."' ");

      $result = mysql_query("SELECT * FROM anuncios ORDER BY idanuncio DESC LIMIT 1");
      $dados = mysql_fetch_assoc($result);

        mysql_query("UPDATE slideanuncio SET slide1='".$slide1."', slide2='".$slide2."', slide3='".$slide3."' ");

        echo "<script>parent.alert('Anúncio alterado com sucesso.')</script>";
    } else {
        echo "<script>parent.alert('Preencha todos os campos corretamente.')</script>";
    }
}
*/



















//lista anuncio home
function lista_oferta_do_dia(){
  //conexao db
  conexao();

  $result = mysql_query("SELECT * FROM anuncios WHERE ofertadodia='sim' ORDER BY idanuncio DESC");
  while($dados = mysql_fetch_assoc($result)){
    echo "
      <div class='oferta'>
        <div class='local-anuncio'>".$dados["cidade"]."</div>
      <h2 style='height: 40px'>".substr($dados["nomeanuncio"],0,90)." ...</h2>
      <div class='box-oferta' style='height: 360px'>
        <div class='box-efeito' style='height: 309px'>
          <a style='margin: 140px 0 0 120px' href='oferta-interna.php?anuncio=".$dados["idanuncio"]."' class='btn-adquirir-oferta'>Adiquirir oferta</a>
        </div>
        <div class='desconto-destaque'>".$dados["desconto"]."%</div>
        <img style='height: 309px!important; max-height: 309px!important' src='admin/uploads/".$dados["imgdestaque"]."' />
        
        
        <div class='dados-oferta'>
          <div class='valor'>
            <h5 class='valor-antigo'>R$ ".$dados["valorantigo"]."</h5>
            <h6>R$ ".$dados["valornovo"]."</h6>
          </div>
          <div class='desconto'>
            <h5>desconto:</h5>
            <h6>".$dados["desconto"]."%</h6>
          </div>
          <div class='comprados'>
            <div class='carrinho'></div>
            <h5>comprados:</h5>
            <h6>68</h6>
          </div>
        </div>
        </div>
      </div>
    ";
  }
}





















//lista anuncio interno
function lista_anuncio_interno(){
  //conexao db
  conexao();

  $result_slide = mysql_query("SELECT * FROM slideanuncio WHERE idanuncio=".$_GET["anuncio"]."");
  $dados_slide  = mysql_fetch_assoc($result_slide);

  $result = mysql_query("select * from anuncios where idanuncio=".$_GET["anuncio"]."");
  while($dados = mysql_fetch_assoc($result)){
    echo '
      <!-- titulo oferta -->
          <h3>'.$dados["nomeanuncio"].'</h3>

          <!-- slider -->
          <div class="banner-interna">
            <div id="banner-fade" style="height: 240px!important; max-width: 680px!important; margin: 0!important">
              <ul class="bjqs banner-oferta-interna" style"widht: 680px;">
                <li><img src="admin/uploads/'.$dados_slide["slide1"].'" ></li>
                <li><img src="admin/uploads/'.$dados_slide["slide2"].'" ></li>
                <li><img src="admin/uploads/'.$dados_slide["slide3"].'" ></li>
              </ul>
            </div>
          </div>
          <!-- final slider -->

          <!-- box comprar -->
          <div class="box-comprar-1">
            <div class="box-preco">
              <div class="preco-antigo-interno">R$ '.$dados["valorantigo"].'</div>
              <div class="preco-atual-interno"><span>R$</span> '.$dados["valornovo"].'</div>
              <a href="adquirir-oferta.php?idanuncio='.$dados["idanuncio"].'" class="btn-adquirir-oferta-interna">adquirir oferta</a>
            </div>
          </div>
          <div class="box-comprar-2">
            <div class="cupons-vendidos">
              <div style="width: 100%; margin-top: -3px; float: left; color: #6b6b6b;  font-size: 18px; letter-spacing: -1px;">esta oferta acaba em:</div>
              <p>'.$dados["vencimentoanuncio"].'</p> 
              <span>20 cupons adquiridos!</span>
            </div>
          </div><!-- final box comprar -->
          

          <!-- informações oferta -->
          <div class="informacoes-oferta">
            <div class="texto-info-1">
              <h1>Informações</h1><br/>
              '.$dados["infoanuncio"].'
            </div>
            <div class="texto-info-2">
              <h1>Regulamento</h1><br/>
              '.$dados["regulamentoanuncio"].'
            </div>
          </div><!-- final informações oferta -->

          <!-- sobre o anunciante -->
          <div class="sobre-o-anunciante">
            <h1>sobre o anunciante</h1>
            '.$dados["sobreanunciante"].'
          </div><!-- final sobre o anunciante -->

          <div class="box-dados-anunciante">
            <div class="logo-anunciante">
              <img width="217" src="admin/uploads/'.$dados["logoanunciante"].'" />
            </div>
            <div class="dados-anunciante">  
              '.$dados["dadosanunciante"].'
            </div>
            <div class="mapa">
              '.$dados["mapaanunciante"].'
            </div>
          </div>
    ';
  }
}



























//lista anuncio interno
function lista_oferta_do_dia_interna(){
  //conexao db
  conexao();

  $result_slide = mysql_query("SELECT * FROM slide_oferta_do_dia WHERE idoferta_do_dia=".$_GET["ofertadodia"]."");
  $dados_slide  = mysql_fetch_assoc($result_slide);

  $result = mysql_query("SELECT * FROM oferta_do_dia WHERE idoferta_do_dia=".$_GET["ofertadodia"]."");
  while($dados = mysql_fetch_assoc($result)){
    echo '
      <!-- titulo oferta -->
          <h3>'.$dados["nomeanuncio"].'</h3>

          <!-- slider -->
          <div class="banner-interna">
            <div id="banner-fade" style="height: 240px!important; max-width: 680px!important; margin: 0!important">
              <ul class="bjqs banner-oferta-interna" style"widht: 680px;">
                <li><img src="admin/uploads/'.$dados_slide["slide1"].'" ></li>
                <li><img src="admin/uploads/'.$dados_slide["slide2"].'" ></li>
                <li><img src="admin/uploads/'.$dados_slide["slide3"].'" ></li>
              </ul>
            </div>
          </div>
          <!-- final slider -->

          <!-- box comprar -->
          <div class="box-comprar-1">
            <div class="box-preco">
              <div class="preco-antigo-interno">R$ '.$dados["valorantigo"].'</div>
              <div class="preco-atual-interno"><span>R$</span> '.$dados["valornovo"].'</div>
              <input type="button" class="btn-adquirir-oferta-interna" value="adquirir oferta""/>
            </div>
          </div>
          <div class="box-comprar-2">
            <div class="cupons-vendidos">
              <div style="width: 100%; margin-top: -3px; float: left; color: #6b6b6b;  font-size: 18px; letter-spacing: -1px;">esta oferta acaba em:</div>
              <p>'.$dados["vencimentoanuncio"].'</p> 
              <span>20 cupons adquiridos!</span>
            </div>
          </div><!-- final box comprar -->
          

          <!-- informações oferta -->
          <div class="informacoes-oferta">
            <div class="texto-info-1">
              <h1>Informações</h1><br/>
              '.$dados["infoanuncio"].'
            </div>
            <div class="texto-info-2">
              <h1>Regulamento</h1><br/>
              '.$dados["regulamentoanuncio"].'
            </div>
          </div><!-- final informações oferta -->

          <!-- sobre o anunciante -->
          <div class="sobre-o-anunciante">
            <h1>sobre o anunciante</h1>
            '.$dados["sobreanunciante"].'
          </div><!-- final sobre o anunciante -->

          <div class="box-dados-anunciante">
            <div class="logo-anunciante">
              <img width="217" src="admin/uploads/'.$dados["logoanunciante"].'" />
            </div>
            <div class="dados-anunciante">  
              '.$dados["dadosanunciante"].'
            </div>
            <div class="mapa">
              '.$dados["mapaanunciante"].'
            </div>
          </div>
    ';
  }
}




























//lista outros anuncios interna
function lista_outros_anuncios_interna(){
  //conexao db
  conexao();

  $result = mysql_query("SELECT * FROM anuncios ORDER BY RAND() LIMIT 2");
  while($dados = mysql_fetch_assoc($result)){
    echo "
      <div class='oferta'>
      <div class='local-anuncio'>".$dados["cidade"]."</div>
      <h2 style='height: 40px'>".substr($dados["nomeanuncio"], 0, 90)."</h2>
      <div class='box-oferta'>
        <div class='box-efeito'>
          <a href='oferta-interna.php?anuncio=".$dados["idanuncio"]."' class='btn-adquirir-oferta'>Adiquirir oferta</a>
        </div>
        <img src='admin/uploads/".$dados["imgdestaque"]."' />
        
        <div class='dados-oferta'>
          <div class='valor'>
            <h5 class='valor-antigo'>R$ ".$dados["valorantigo"]."</h5>
            <h6>R$ ".$dados["valornovo"]."</h6>
          </div>
          <div class='desconto'>
            <h5>desconto:</h5>
            <h6>50%</h6>
          </div>
          <div class='comprados'>
            <div class='carrinho'></div>
            <h5>comprados:</h5>
            <h6>68</h6>
          </div>
        </div>
        </div>
      </div>
    ";
  }
}






























//cadastra página ou altera
function cadastra_pagina_quemsomos($conteudo){
  //conexao
  conexao();

  //pesquisa páginas
  $result = mysql_query("select * from quemsomos");
  $dados  = mysql_fetch_assoc($result);

  //verifica se os campos estão preenchidos
  if($conteudo != ""){
    if($dados["conteudo"] == ""){
      //cadastra página se não existe
      mysql_query("insert into quemsomos(conteudo)VALUES('".$conteudo."')");
      echo "<script>parent.alert('Página publicada com sucesso!')</script>";
    }else{
      mysql_query("UPDATE quemsomos SET conteudo='".$conteudo."' ");
      echo "<script>parent.alert('Página alterada e publicada com sucesso!')</script>";
    }
  }else{
    echo "<script>parent.alert('Preencha todos os campos!')</script>";
  }
}























//cadastro de usuarios
function cadastra_usuarios($email, $nome, $estado, $cidade, $bairro, $telefone_fixo, $telefone_celular, $sexo, $data_nascimento, $dias_para_receber_ofertas, $interesse, $bairro_preferencia){

  //conexão com o banco de dados
  conexao();


  if($email && $nome && $estado && $cidade && $bairro && $telefone_fixo && $telefone_celular && $sexo && $data_nascimento && $dias_para_receber_ofertas && $interesse && $bairro_preferencia != "")
  {

      mysql_query("INSERT INTO usuarios(email,nome,estado,cidade,bairro,tel_fixo,tel_cel,sexo,data_nascimento,dias_para_receber_oferta,interesse,bairro_preferencia)VALUES('".$email."','".$nome."','".$estado."','".$cidade."','".$bairro."','".$telefone_fixo."','".$telefone_celular."','".$sexo."','".$data_nascimento."','".$dias_para_receber_ofertas."','".$interesse."','".$bairro_preferencia."')");

      echo "<script>parent.alert('Cadastro realizado com sucesso!');</script>";

  }else{
    echo "<script>parent.alert('Preencha todos os campos!.');</script>";
  }

}




















function lista_usuarios(){

  conexao();

  $result = mysql_query("SELECT * FROM usuarios ORDER BY idusuario DESC");
  while ($dados = mysql_fetch_assoc($result)) {
    echo '

    <div class="box-dados-usuarios" data-estado="fechado">
      <table>
        <tr style="font-size: 15px;">
          <td>'.$dados["nome"].'</td><td>'.$dados["email"].'</td><td>'.$dados["cidade"].'</td>
        </tr>
      </table>
      <div class="dados-interno">
        <hr/>
        <table>
          <tr style="font-size: 18px">
            <td><strong>Dados Pessoais</strong></td><td style="padding-left: 20px"><strong>Interesses</strong></td><td style="padding-left: 20px"><strong>Bairro de preferência</strong></td>
          </tr>
          <tr><td><br/></td></tr>
          <tr>
            <td style="border-right: 1px solid #878787">
              Nome: '.$dados["nome"].'<br/>
              Nascimento: '.$dados["data_nascimento"].'<br/>
              Estado: '.$dados["estado"].'<br/>
              Cidade: '.$dados["cidade"].'<br/>
              Telefone fixo: '.$dados["tel_fixo"].'<br/>
              Telefone Celular: '.$dados["tel_cel"].'
            </td>
            <td style="padding-left: 20px; border-right: 1px solid #878787">
              '.$dados["interesse"].' 
            </td>
            <td style="padding-left: 20px">
              '.$dados["bairro_preferencia"].'
            </td>
          </tr>
        </table>
      </div>
    </div>

    ';
  }
}














//usuarios cadastrados recentemente
function usuarios_recentes(){

  conexao();

  $result = mysql_query("SELECT * FROM usuarios LIMIT 10");
  $dados = mysql_fetch_assoc($result);

  $recentes = mysql_affected_rows();

  echo $recentes;
}


























//lista todas as campanhas painel
function lista_campanhas_painel(){
  conexao();


  $result = mysql_query("SELECT * FROM anuncios ORDER BY idanuncio DESC");
  while($dados = mysql_fetch_assoc($result)){
    echo '
      <div class="box-campanhas">
      <div class="funcao-php"></div>';

      if($dados["status"] == "Ativo"){
        echo '
        <div style="display: block;" class="campanha-ativa" id="campanha-ativa-anuncio-'.$dados["idanuncio"].'" value="'.$dados["idanuncio"].'" data-status="'.$dados["status"].'">Ativo</div>
        <div style="display: none;" class="campanha-inativa" id="campanha-inativa-anuncio-'.$dados["idanuncio"].'" value="'.$dados["idanuncio"].'">Inativo</div>
        ';
      }else{
        echo '
        <div style="display: none;" class="campanha-ativa" id="campanha-ativa-anuncio-'.$dados["idanuncio"].'" value="'.$dados["idanuncio"].'" data-status="'.$dados["status"].'">Ativo</div>
        <div style="display: block;" class="campanha-inativa" id="campanha-inativa-anuncio-'.$dados["idanuncio"].'" value="'.$dados["idanuncio"].'">Inativo</div>
        ';
      }

    echo '
        
        <div class="img-campanha">
          <img src="uploads/'.$dados["imgdestaque"].'">
          <div class="btns-icons">
            <a href="altera-campanha.php?idanuncio='.$dados["idanuncio"].'"><div class="editar"><img src="imagens/icons/icon-editar.png"></div></a>
            <div class="excluir" onclick="exclui_anuncio('.$dados["idanuncio"].')"><img src="imagens/icons/icon-excluir.png"></div>
            <a href="http://localhost:8080/projetos-voras/mixpromo/oferta-interna.php?anuncio='.$dados["idanuncio"].'" target="_blank"><div class="visualizar"><img src="imagens/icons/icon-olho.png"></div></a>
          </div>
        </div>
        <p>'.substr($dados["nomeanuncio"], 0, 41).'</p>
        <span>
         '.$dados["cidade"].'<br/>
          '.$dados["vencimentoanuncio"].'
        </span>
      </div>
    ';
  }
}













function status_campanha($idanuncio){
  conexao();

  $result = mysql_query("SELECT * FROM anuncios WHERE idanuncio='".$idanuncio."' ");
  $dados  = mysql_fetch_assoc($result);

  if($dados["status"] == "Ativo"){
    mysql_query("UPDATE anuncios SET status='Inativo' WHERE idanuncio=".$idanuncio." ");
  }else{
    mysql_query("UPDATE anuncios SET status='Ativo' WHERE idanuncio=".$idanuncio." ");
  }
}

















//exclui campanha do banco de dados
function exclui_campanha(){

  conexao();

  mysql_query("DELETE FROM anuncios WHERE idanuncio=".$_GET["idanuncio"]."");
  echo "<script>parent.alert('Campanha excluida com sucesso!');</script>";
  echo "<script>parent.location='../listagem-campanhas.php';</script>";

}
























//add categoria
function add_categoria($categoria){

  conexao();

  if($categoria != ""){
    mysql_query("INSERT INTO categorias (categoria)VALUES('".$categoria."')");
    echo "<script>
    parent.alert('Categoria cadastrada com sucesso!');
    </script>";
  }else{
    echo "<script>parent.alert('Preencha todos os campos!')</script>";
  }
}











//lista categorias
function lista_categorias(){
  conexao();


  $result = mysql_query("SELECT * FROM categorias");
  while($dados = mysql_fetch_assoc($result)){
    echo '

      <div class="categorias">
        <p>'.$dados["categoria"].'</p>
        <div class="excluir" onclick="exclui_categoria('.$dados["idcategoria"].')" title="Excluir"><img src="imagens/icons/icon-excluir.png"></div>
        <div class="editar" title="Editar" onclick="altera_categoria('.$dados["idcategoria"].')"><img src="imagens/icons/icon-editar.png"></div>
      </div>

    ';
  }
}










function lista_categorias_paginas(){
   conexao();

    $result = mysql_query("SELECT * FROM categorias");
    while($dados = mysql_fetch_assoc($result)){
      echo '<option value="'.$dados["categoria"].'">'.$dados["categoria"].'</option>';
    }
}












//exclui categoria do banco de dados
function exclui_categoria(){

  conexao();

  mysql_query("DELETE FROM categorias WHERE idcategoria=".$_GET["idcategoria"]."");
  echo "<script>parent.alert('Categoria excluida com sucesso!');</script>";
  echo "<script>parent.location='../listagem-categorias.php';</script>";

}

















//altera categoria
function altera_categoria($categoria){
  conexao();


  if($categoria != ""){
    mysql_query("UPDATE categorias SET categoria='".$categoria."' WHERE idcategoria=".$_GET["idcategoria"]." ");
    echo "<script>parent.alert('Categoria alterada com sucesso!')</script>";
  }else{
    echo "<script>parent.alert('Preencha o campo!'); parent.location='../listagem-categorias.php';</script>";
  }
}






















function atividades_recentes(){
  conexao();

  $resultado = mysql_query("SELECT COUNT(*) AS total FROM anuncios");
  $dados = mysql_fetch_assoc($resultado);

  echo "
    <p>Campanhas Cadastradas: ".$dados["total"]."</p>
    <p>Anunciantes Cadastrados: 9999999</p>
    <p>Newsletter: 999999 </p>
  ";
}












function cadastra_anunciante($nome,$sobre_nome,$empresa,$categoria,$facebook,$outraRede,$tipo_de_endereco,$endereco,$cep,$site,$bairro,$email,$estado,$cidade,$telefone,$celular,$sobre_negocio){
  conexao();

  mysql_query("INSERT INTO anunciantes (nome,sobre_nome,empresa,categoria,facebook,outraRede,tipoEndereco,enderecoEmpresa,cep,site,bairro,email,estado,cidade,telefone,celular,sobreNegocio,dataCadastro)VALUES('".$nome."','".$sobre_nome."','".$empresa."','".$categoria."','".$facebook."','".$outraRede."','".$tipo_de_endereco."','".$endereco."','".$cep."','".$site."','".$bairro."','".$email."','".$estado."','".$cidade."','".$telefone."','".$celular."','".$sobre_negocio."','".date('d/m/Y')."')");
  echo "<script>alert('Formulário enviado com sucesso! Em breve entraremos em contato com você.'); parent.location='../../anuncie.php'</script>";
}















function lista_anunciantes(){
  conexao();

  $result = mysql_query("select * from anunciantes");

  while($dados = mysql_fetch_assoc($result)){
    echo'
    <div class="box-dados-anunciantes" data-estado="fechado">
      <table>
        <tr style="font-size: 15px;">
          <td class="click-nome">'.$dados["nome"].' '.$dados["sobre_nome"].'</td><td>'.$dados["empresa"].'</td><td>'.$dados["email"].'</td><td>15</td><td><div class="excluir" onclick="exclui_anunciante('.$dados["idanunciante"].')" title="Excluir"><img src="imagens/icons/icon-excluir.png"></div> <div class="editar" title="Editar" onclick="chamaIdanunciante('.$dados["idanunciante"].')"><img src="imagens/icons/icon-editar.png"></div></td>
        </tr>
      </table>
      <div class="dados-interno">
        <hr/>
        <table>
          <tr style="font-size: 18px">
            <td><strong>Dados Pessoais</strong></td><td><strong>Dados Empresa</strong></td><td><strong>Estátisticas</strong></td>
          </tr>
          <tr><td><br/></td></tr>
          <tr>
            <td>
              <strong>Nome: </strong> '.$dados["nome"].' '.$dados["sobre_nome"].'<br/>
              <strong>Nascimento: </strong> '.$dados["dataNascimento"].'<br/>
              <strong>Estado: </strong> '.$dados["estado"].' <br/>
              <strong>Cidade: </strong> '.$dados["cidade"].' <br/>
              <strong>Telefone: </strong> '.$dados["telefone"].' <br/>
              <strong>Celular: </strong> '.$dados["celular"].'
            </td>
            <td>
              <strong>Empresa: </strong> '.$dados["empresa"].'<br/>
              <strong>Site: </strong> '.$dados["site"].' <br/>
              <strong>Estado: </strong> '.$dados["estadoEmpresa"].'<br/>
              <strong>Cidade: </strong> '.$dados["cidadeEmpresa"].'<br/>
              <strong>Telefone: </strong> '.$dados["telEmpresa"].'<br/>
              <strong>Celular: </strong> '.$dados["celEmpresa"].'<br/>
              <strong>Facebook: </strong> '.$dados["facebook"].'<br/>
              <strong>Skype: </strong> '.$dados["skype"].'<br/>
              
            </td>
            <td>
              <strong>Cadastro em:</strong> '.$dados["dataCadastro"].'<br/>
              <strong>Campanhas: </strong> 0<br/>
              <strong>Ativas: </strong> 0<br/>
              <strong>Inativass: </strong> 0<br/>
              <strong>Ofertas vendidas: </strong> 0<br/>
            </td>
          </tr>
        </table>
      </div>
    </div>
    ';
  }
}










function altera_anunciante(
                          $nome,
                          $sobre_nome,
                          $dataNascimento,
                          $estado,
                          $cidade,
                          $telefone,
                          $celular,
                          $email,
                          $empresa,
                          $site,
                          $categoria,
                          $telEmpresa,
                          $celEmpresa,
                          $facebook,
                          $skype,
                          $outraRede,
                          $emailEmpresa,
                          $emailSecundarioEmpresa,
                          $cnpj,
                          $razaoSocial,
                          $inscricaoEstadual,
                          $estadoEmpresa,
                          $cidadeEmpresa,
                          $tipoEndereco,
                          $enderecoEmpresa,
                          $cep,
                          $bairro,
                          $sobreNegocio
                          ){
  conexao();

  mysql_query("UPDATE anunciantes SET nome='".$nome."',
                                      sobre_nome='".$sobre_nome."',
                                      dataNascimento='".$dataNascimento."',
                                      estado='".$estado."',
                                      cidade='".$cidade."',
                                      telefone='".$telefone."',
                                      celular='".$celular."',
                                      email='".$email."',
                                      empresa='".$empresa."',
                                      site='".$site."',
                                      categoria='".$categoria."',
                                      telEmpresa='".$telEmpresa."',
                                      celEmpresa='".$celEmpresa."',
                                      facebook='".$facebook."',
                                      skype='".$skype."',
                                      outraRede='".$outraRede."',
                                      emailEmpresa='".$emailEmpresa."',
                                      emailSecundarioEmpresa='".$emailSecundarioEmpresa."',
                                      cnpj='".$cnpj."',
                                      razaoSocial='".$razaoSocial."',
                                      inscricaoEstadual='".$inscricaoEstadual."',
                                      estadoEmpresa='".$estadoEmpresa."',
                                      cidadeEmpresa='".$cidadeEmpresa."',
                                      tipoEndereco='".$tipoEndereco."',
                                      enderecoEmpresa='".$enderecoEmpresa."',
                                      cep='".$cep."',
                                      bairro='".$bairro."',
                                      sobreNegocio='".$sobreNegocio."'");
  echo "<script>alert('Dados alterados com sucesso!.');</script>";
}











//exclui categoria do banco de dados
function exclui_anunciante(){

  conexao();

  mysql_query("DELETE FROM anunciantes WHERE idanunciante=".$_GET["idanunciante"]."");
  echo "<script>parent.alert('Anunciante excluido com sucesso!');</script>";
  echo "<script>parent.location='../anunciantes.php';</script>";

}



?>

















