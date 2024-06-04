<?php
require_once '../../model/admin.php';

$admin = new Admin();

$admin->setNomeAdmin($_POST['nome']);
$admin->setSobrenomeAdmin($_POST['sobrenome']);
$admin->setCpfAdmin($_POST['cpf']);
$admin->setNascAdmin($_POST['nasc']);
$admin->setEmailAdmin($_POST['email']);
$admin->setSenhaAdmin($_POST['senha']);
$admin->setTokenAdmin($admin->generateToken());
$admin->setImagemAdmin($admin->salvarImagem(''));


echo"<pre>";
print_r($admin);
echo"</pre>";


?>