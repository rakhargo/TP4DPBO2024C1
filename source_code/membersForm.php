<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

$typeForm = $_GET['typeForm'];
if (isset($_GET['id_edit'])) {
    $members->form($typeForm, $_GET['id_edit']);
}
else {
    $members->form($typeForm);
}
// print($typeForm);