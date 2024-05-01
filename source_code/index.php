<!-- /*Saya Rakha Dhifiargo Hariadi
 NIM 2209489 mengerjakan soal 
 Tugas praktikum 4 dalam mata
 kuliah DPBO
 untuk keberkahanNya maka saya tidak
 melakukan kecurangan seperti 
 yang telah dispesifikasikan. Aamiin.*/ -->
<?php
// print_r($_POST);

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();
if (isset($_POST['add'])) {
    //memanggil add
    $members->add($_POST);
}
else if (isset($_POST['edit'])) {
    //memanggil add
    $id = $_POST['id_edit'];
    $members->edit($id, $_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $members->delete($id);
}
else{
    $members->index();
}
