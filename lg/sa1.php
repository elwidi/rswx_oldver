<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($kakang=='mas'){
header("Location:./p9.php?IdObat=$IdObat");
}else{
header("Location:./index.php?IdObat=$IdObat&ukur=$ukur&id=$id");
}
?>