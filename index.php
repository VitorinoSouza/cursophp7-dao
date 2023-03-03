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

$usuario = new Usuario();
$usuario->login("root", "635241");

echo $usuario;


?>