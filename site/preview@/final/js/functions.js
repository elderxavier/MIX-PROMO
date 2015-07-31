$(document).ready(function(){

	mascara();
	chama_categoria_todos();




	/*$("#interesse").toggle();
	$(".conhecer").click(function(){
		$("#interesse").toggle();
	});*/

	//estiliza campos
	$("input:radio, input:checkbox").uniform();




	carregar(0, 10, 'load.php');

	$("a.carregar-mais").click(function(evento){
		evento.preventDefault();
		var init = $("#sob-demanda li").length;

		carregar(init, 10, 'load.php');

	});

	function carregar(init, max, url){
		var dados = { init : init, max : max };

		$("#sob-demanda").append('<li><img style="margin: 0 auto; display: block;" src="imagens/ajax-loader.gif" ></li>');

		$.post(url, dados, function (data) {

			$("#sob-demanda li").last().remove();

			for(i = 0; i < data.dados.length; i++){
				if(data.dados[i].status == 'Ativo'){
					$("#sob-demanda").append("<li><div class='oferta'><div class='local-anuncio'>"+data.dados[i].cidade+"</div><h2 style='height: 40px'>"+data.dados[i].nomeanuncio.substr(0,90)+"</h2><div class='box-oferta'><div class='box-efeito'><a href='oferta-interna.php?anuncio="+data.dados[i].idanuncio+"' class='btn-adquirir-oferta'>Adiquirir oferta</a></div><img src='admin/uploads/"+data.dados[i].imgdestaque+"' /><div class='dados-oferta'><div class='valor'><h5 class='valor-antigo'>R$ "+data.dados[i].valorantigo+"</h5><h6>R$ "+data.dados[i].valornovo+"</h6></div><div class='desconto'><h5>desconto:</h5><h6>"+data.dados[i].desconto+"%</h6></div><div class='comprados'><div class='carrinho'></div><h5>comprados:</h5><h6>68</h6></div></div></div></div></li>");
				}
			}

			var conta = $("#sob-demanda li").length;

			if(conta == data.totalResults) {
				$(".box-carregar-mais").hide();
			}

		}, "json");
	}






















carregar_busca(0, 10, 'load-busca.php');

	$("a.carregar-mais").click(function(evento){
		evento.preventDefault();
		var init = $("#busca-sob-demanda li").length;

		carregar_busca(init, 10, 'load-busca.php');

	});

	function carregar_busca(init, max, url){
		var dados = { init : init, max : max };

		$("#busca-sob-demanda").append('<li><img style="margin: 0 auto; display: block;" src="imagens/ajax-loader.gif" ></li>');

		$.post(url, dados, function (data) {

			$("#busca-sob-demanda li").last().remove();

			for(i = 0; i < data.dados.length; i++){
				$("#busca-sob-demanda").append("<li><div class='oferta'><div class='local-anuncio'>"+data.dados[i].localanuncio+"</div><h2 style='height: 40px'>"+data.dados[i].nomeanuncio.substr(0,90)+"</h2><div class='box-oferta'><div class='box-efeito'><a href='oferta-interna.php?anuncio="+data.dados[i].idanuncio+"' class='btn-adquirir-oferta'>Adiquirir oferta</a></div><img src='admin/uploads/"+data.dados[i].imgdestaque+"' /><div class='dados-oferta'><div class='valor'><h5 class='valor-antigo'>R$ "+data.dados[i].valorantigo+"</h5><h6>R$ "+data.dados[i].valornovo+"</h6></div><div class='desconto'><h5>desconto:</h5><h6>"+data.dados[i].desconto+"</h6></div><div class='comprados'><div class='carrinho'></div><h5>comprados:</h5><h6>68</h6></div></div></div></div></li>");
			}

			var conta = $("#busca-sob-demanda li").length;

			if(conta == data.totalResults) {
				$(".box-carregar-mais").hide();
			}

		}, "json");
	}






















//limitador de caracters
function ellipsis_box(elemento, max_chars)
{
limite_text = $(elemento).text();
if (limite_text.length > max_chars)
{
limite = limite_text.substr(0, max_chars)+" ...";
$(elemento).text(limite);
}
}





});










//mascara da página cadastre-se
function mascara(){
	$(".mask-data").mask("99/99/9999"); //data
	$(".mask-fone").mask("(99) 9999-9999"); //telefone
}












function chama_categoria_todos(){
	$(".categorias .todos").click(function(){
		$(".categoria-todos").slideToggle();
	});
}