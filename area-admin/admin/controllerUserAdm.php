<?php
require_once '../../model/user.php';

$user = new User();

$user-> setNomeUser($_POST['nomeUser']);
$user-> setNascUser($_POST['nascUser']);
$user-> setEmail($_POST['emailUser']);
$user-> setSenha($_POST['senhaUser']);

echo'<pre>';
print_r($user);
echo'</pre>';

?>