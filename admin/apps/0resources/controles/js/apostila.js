$(function(){
	$("div#entregarApostilas").hide();
	$("div#adicionarApostilas").hide();
	$("span.btnEntregar").click(function(){
		$("div#entregarApostilas").slideDown();
	});
	$(".btnApostilasFechar").click(function(){
		$("div#entregarApostilas").slideUp();
	});
	$(".btnAddApostilasFechar").click(function(){
		$("div#adicionarApostilas").slideUp();
	});
	$("span.btnAdicionar").click(function(){
		$("div#adicionarApostilas").slideDown();
	});
});