<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header("Location:./n012.php?KodeBagian=$KodeBagian&bln=$Bln&thn1=$Thn");
?>