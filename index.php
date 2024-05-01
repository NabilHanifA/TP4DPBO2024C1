<?php 
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$member = new MemberController();
if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $member->delete($id);
  } else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $member->update($data, $id);
  } else {
    $member->readMember();
  }
?>