<?
$id = $_GET["id"];
$dimas = $_GET["dimas"];
$NoBukti = $_GET["NoBukti"];
if($dimas=='ela'){
header("Location:./h.php?NoBukti=$NoBukti&id=$id");
}else{
header("Location:./s3w.php?id=$id");
}
?>