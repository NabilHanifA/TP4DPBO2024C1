<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$members = new MemberController();

if (isset($_POST['submit'])) {
    //memanggil add
    $members->add($_POST);
} else {
    $members->createMember();
}
?>