// JavaScript Document
$(function(){
	$("div#cadastrarProfessores").hide();
	$("div#abrirCadastroProfessor").click(function(){
		$("div#cadastrarProfessores").fadeToggle();
	});
});