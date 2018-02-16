<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header("Location:./wahit.php?aku=percaya&IdGudang=&NoResep=$NoResep&id=$id&aku=$aku&Rc=$Rc");
?>