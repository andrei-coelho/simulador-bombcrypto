<?php 

$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : "connect";
$video  = isset($_GET['video'])  ? $_GET['video']  : "random";

include "includes/functions.php";
include "includes/header.php";
include "modulos/$modulo.php";
include "includes/footer.php";