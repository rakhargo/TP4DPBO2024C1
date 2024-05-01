<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Domicile.controller.php");

$domicile = new DomicileController();

if (isset($_POST['add'])) {
    //memanggil add
    $domicile->add($_POST);
}
else if (isset($_POST['edit'])) {
    //memanggil add
    $id = $_POST['id_edit'];
    $domicile->edit($id, $_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $domicile->delete($id);
}
else{
    $domicile->index();
}