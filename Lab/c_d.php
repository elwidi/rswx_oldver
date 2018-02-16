<?
$id = $_GET["id"];
$NoBukti=$_GET["NoBukti"];
$makan  = $_GET["makan"];
if($makan=='siap'){
header("Location:./nasi_kucing.php?hari=$id");
}elseif($makan=='nasi'){
header("Location:./tekaninap.php?NoBukti=$NoBukti&id=$id");
}else{
header("Location:./4e.php?id=$id");
}
?>