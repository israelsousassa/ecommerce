<?php
require_once("namespaces_exemplo_2.php");

$ssd = new produto\ssd();
$ssd->fabri = "KingSpac";

$memory = new produto\memory();
$memory->fabri = "KingSpac";

echo $ssd->messagem(). "<hr>";
echo $memory->messagem();





?>