<?php

require_once("config.php");

//carrega 1 usuario
//$root = new Usuario();

//$root->loadById(3);

//echo $root

// carrega uma lista de usuario

//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuario buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

// carrega um usuario usando login e senha

//$usuario = new Usuario();
//$usuario->login("root", "635241");

//echo $usuario;

//criando novo usuario

//$aluno = new Usuario("aluno", "@luno");

//$aluno->insert();

//echo $aluno;

/*
//alterar um usuario

$usuario = new Usuario();

$usuario ->loadById(16);

$usuario->update("professor","profile");

echo $usuario;
*/

$usuario = new Usuario();

$usuario ->loadById(15);

$usuario->delete();

echo $usuario;



?>