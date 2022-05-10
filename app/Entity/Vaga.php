<?php

namespace App\Entity;

class Vaga{

	private $id;

	private $titulo;

	private $descricao;

	private $ativo;

	private $data;

	public function setTitulo($t){
		$this->titulo = $t;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setDescricao($d){
		$this->descricao = $d;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setAtivo($a){
		$this->ativo = $a;
	}

	public function getAtivo(){
		return $this->ativo;
	}

	public function cadastrar(){
		$this->data = date('Y-m-d H:i:s');
	}

}