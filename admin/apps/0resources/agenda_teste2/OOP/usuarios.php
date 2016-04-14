<?php
	class Usuario{
		public $nome;
		protected $cpf;
		private $endereco;
		
		//Construtor da Classe
		function Usuario(){
			$this->prepararUsuario();
		}
		
		private function prepararUsuario(){
			$this->nome		=	"Ariosvaldo";
			$this->cpf		=	99999999999;
			$this->endereco	=	"Rua dos Bobos, 0";
		}
		
		public function getCPF(){
			return $this->cpf;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		function getEndereco(){
			return $this->endereco;
		}
	}
	
	
?>