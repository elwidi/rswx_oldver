<?
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
header("Location:./0w.php?id=$id&IdPer=$IdPer");
?>