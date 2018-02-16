<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$dia = $_GET["dia"];
if($dia=='sopan'){
header("Location:./awas_ada_ember_pecah.php?IdPasien=$IdPasien&id=$id");
}elseif($dia=='baik'){
header("Location:./0w.php?id=$id");
}elseif($dia=='doa'){
header("Location:./x0_129.php?id=$id");
}elseif($dia=='hah'){
header("Location:./7w.php?id=$id");
}elseif($dia=='hari'){
header("Location:./xw.php?id=$id");
}else{
header("Location:./struk_pas.php?id=$id");
}
?>
