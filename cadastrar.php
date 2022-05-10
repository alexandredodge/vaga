
<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
	$obVaga = new Vaga();
	$obVaga->setTitulo($_POST['titulo']);
	$obVaga->setDescricao($_POST['descricao']);
	$obVaga->setAtivo($_POST['ativo']);

	//echo "<pre>"; print_r($obVaga); echo "</pre>"; exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
