<?php
session_start();
$fmID = $_GET['f'];
$fmName = $_GET['fName'];

$_SESSION['loadpage_production'] = "module/melting/bunker/form_bunker.php";

$_SESSION['fmActive'] = $fmID;
$_SESSION['fmName'] = $fmName;

header('Location: ../../echecksheet');
?>