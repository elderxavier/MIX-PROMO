$(document).ready(function(){
	//modal();
	//preview(input);
  //carouselMenu();
  dropDowMenu();
	menuAtivo();
	menuAtivoLateral();
	calendario();
	calendario_campo();
  dadosUsuarios();
  dadosAnunciante();
  status_campanha();
  mascara();
	
});




/*function carouselMenu(){
  $("#topo-2").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
}*/










//adapta a div principal (#conteudo) a tela
function conteudoAdapta(){
	var largura = $(window).width() - 165 - 40;

	$("#conteudo-interno").css({"width":largura});
}
function conteudoAdaptaResize(){
	$(window).resize(function(){
		conteudoAdapta();
	});
}






function menuAtivo(){
	$(".menu-icon a").click(function(){
		var index = $(this).index();
		$(".menu-icon a li").removeClass("ativo-icon-menu");
		$(".menu-icon a li:eq("+index+")").addClass("ativo-icon-menu");
	});
}


function menuAtivoLateral(){
	$(".menu-lateral-interno li").click(function(){
		var index = $(this).index();
		$(".menu-lateral-interno li").removeClass("ativo-menu-lateral-interno");
		$(".menu-lateral-interno li:eq("+index+")").addClass("ativo-menu-lateral-interno");
	});
}



//centraliza modal
function modal(){
	$(".btn-imagem-destacada").click(function(){
		$(".modal, .modal-overlay").fadeIn(300);
	});

	$(".close, .modal-overlay").click(function(){
		$(".modal, .modal-overlay").fadeOut(300);
	});
}






//calendario campo imput
function calendario_campo(){
	$(function() {
    $( "#vencimentoCampanha, #dataNascimento" ).datepicker({
    	changeMonth: true,
      changeYear: true,
      showOn: "button",
      buttonImage: "imagens/icons/icon-calendario.png",
      buttonImageOnly: true
    });
  });
}








function calendario(){
	$(function() {
    $( "#datepicker" ).datepicker();
  });
}
















//preview imagem
function preview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_image').attr('src', e.target.result)};
  	reader.readAsDataURL(input.files[0]);
  }
}

function preview_2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_image_2').attr('src', e.target.result)};
  	reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_campanha_um(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_campanha_1').attr('src', e.target.result)};
  	reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_campanha_dois(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_campanha_2').attr('src', e.target.result)};
  	reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_campanha_tres(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_campanha_3').attr('src', e.target.result)};
  	reader.readAsDataURL(input.files[0]);
  }
}













//slide principal
function preview_slide_principal_um(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_principal_1').attr('src', e.target.result)};
    reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_principal_dois(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_principal_2').attr('src', e.target.result)};
    reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_principal_tres(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_principal_3').attr('src', e.target.result)};
    reader.readAsDataURL(input.files[0]);
  }
}

function preview_slide_principal_quatro(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
  $('#preview_slide_principal_4').attr('src', e.target.result)};
    reader.readAsDataURL(input.files[0]);
  }
}









function dropDowMenu(){
  $(".barra-com-seta").click(function(){
    $(".menu-lateral-interno").slideToggle(100);
  });
}









//mostra dados interno usuarios
function dadosUsuarios(){
  $(".box-dados-usuarios").click(function(){

    if($(this).data("estado") == "fechado"){
      $(this).css({"height":"auto"});
      $(this).data("estado", "aberto");

    }else{
      $(this).css({"height":"0px"});
      $(this).data("estado", "fechado");
    }
  });
}









//mostra dados interno anunciante
function dadosAnunciante(){
  $(".box-dados-anunciantes").click(function(){

    if($(this).data("estado") == "fechado"){
      $(this).css({"height":"auto"});
      $(this).data("estado", "aberto");

    }else{
      $(this).css({"height":"0px"});
      $(this).data("estado", "fechado");
    }
  });
}










//excluir categoria
function exclui_categoria(idcategoria){
  $("iframe").attr("src","funcoes/exclui-categoria.php?idcategoria="+idcategoria);
}

//altera categoria
function altera_categoria(idcategoria){
  location = 'altera-categoria.php?idcategoria='+idcategoria;
}











//excluir campanha
function exclui_anuncio(idanuncio){
  $("iframe").attr("src","funcoes/exclui-campanha.php?idanuncio="+idanuncio);
}













//status de campanha
function status_campanha(){

  $(".campanha-ativa").click(function(){
    var idanuncio = $(this).attr('value');
    $("#campanha-ativa-anuncio-"+idanuncio).fadeOut(300);
    $("#campanha-inativa-anuncio-"+idanuncio).fadeIn(300);
    $(".funcao-php").load("funcoes/status-campanha.php?idanuncio="+idanuncio);
  });


  $(".campanha-inativa").click(function(){
    var idanuncio = $(this).attr('value');
    $("#campanha-inativa-anuncio-"+idanuncio).fadeOut(300);
    $("#campanha-ativa-anuncio-"+idanuncio).fadeIn(300);
    $(".funcao-php").load("funcoes/status-campanha.php?idanuncio="+idanuncio);
  });

}

function status_campanha_display(idanuncio){
  
}













//mascara da página cadastre-se
function mascara(){
  $(".mask-data").mask("99/99/9999"); //data
  $(".mask-fone").mask("(99) 9999-9999"); //telefone
}













function chamaIdanunciante(idanunciante){
  location = 'altera-anunciante.php?idanunciante='+idanunciante;
}








//excluir categoria
function exclui_anunciante(idanunciante){
  $("iframe").attr("src","funcoes/exclui-anunciante.php?idanunciante="+idanunciante);
}