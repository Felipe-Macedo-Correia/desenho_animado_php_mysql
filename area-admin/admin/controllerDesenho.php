<?php

require_once '../../model/desenhos.php';

$desenho = new Desenhos();

$desenho->setNomeDesenho($_POST['nomeDesenho']);
$desenho->setdescDesenho($_POST['descDesenho']);
$desenho->setClassficacaoDesenho($_POST['classficacaoDesenho']);
$desenho->setTipoDesenho($_POST['tipoDesenho']);
$desenho->setCategoriaDesenho($_POST['categoriaDesenho']);
$desenho->setQtdsEpisodiosDesenhos($_POST['qtdsEpisodiosDesenhos']);
$desenho->setQtdsTemporadasDesenhos($_POST['qtdsTemporadasDesenhos']);


echo "<pre>";
print_r($desenho);
echo "</pre>";


?>