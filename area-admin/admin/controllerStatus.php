<?php
require_once '../../model/status.php';

$status = new Status();

$status-> setTipoStatus($_POST['status']);

echo "<pre>";
print_r($status);
echo "</pre>";


?>