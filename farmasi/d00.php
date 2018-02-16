<?
session_start();
include "../konek.php";
include "../ceke.php";
  $datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
 $xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
	$simp = mysql_query("INSERT INTO  
	`bidang_usaha` (`id`, `BidangUsaha`, `Opr`, `TglJam`) VALUES 
	(NULL, '$SubBidUsaha', '$a[Nama]', '$TglJam')");
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cddd.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()"></body>
	</html>
	<?
} ?>