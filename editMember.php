<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$members = new MemberController();

if (isset($_POST['submit'])) {
    //memanggil add
    $members->update($_POST, $_POST['id']);
} else {
    $members->editMember($_GET['id_edit']);
}
?>