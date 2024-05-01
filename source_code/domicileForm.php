<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Domicile.controller.php");

$domicile = new DomicileController();

$typeForm = $_GET['typeForm'];
if (isset($_GET['id_edit'])) {
    $domicile->form($typeForm, $_GET['id_edit']);
}
else {
    $domicile->form($typeForm);
}