<?
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$as = $_GET["as"];
$IdDokter=$_GET["IdDokter"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
 if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d-m-Y.H:i:s");
if($as==9){
//

$skjskjksd  = mysql_query("SELECT id FROM rujukan WHERE NamaRujukan='$uu[RujukanDari]'");
$ya = mysql_fetch_array($skjskjksd);
//
$usjujsj = mysql_query("SELECT * FROM rujukan WHERE id='$ya[id]'");
}else{
 $usjujsj = mysql_query("SELECT * FROM dokter WHERE id='$IdDokter'");
 }
 $vx = mysql_fetch_array($usjujsj);
 if($as==10){
 ?><html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="4ee.php?id=<? echo $id; ?>&IdPer=<? echo $IdDokter; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()"></body>
	</html><?
 }elseif($as==9){
 	$skjskjksd3  = mysql_query("SELECT NamaRujukan FROM rujukan WHERE id='$IdDokter'");
$ya3 = mysql_fetch_array($skjskjksd3);

		//
		$upd = mysql_query("INSERT INTO  
	`gantidokterrj` (`id`, `IdPasien`, `DokterLama`, `DokterBaru`, `Opr`, `TglJam`, `Jenis`)
	 VALUES (NULL, '$id', '$vx[id]', '$IdDokter', '$a[Nama]', '$TglJam','Rujuk')");
	 //
	 $up = mysql_query("UPDATE rwtjalan SET rujukanDari='$ya3[NamaRujukan]' 
	 WHERE id='$id'");
		//
 }else{
 	$upd = mysql_query("INSERT INTO  
	`gantidokterrj` (`id`, `IdPasien`, `DokterLama`, `DokterBaru`, `Opr`, `TglJam`, `Jenis`)
	 VALUES (NULL, '$id', '$uu[KodeDokter]', '$IdDokter', '$a[Nama]', '$TglJam','Dokter')");
	 //
	 $up = mysql_query("UPDATE rwtjalan SET KodeDokter='$IdDokter',NamaDokter='$vx[NamaDokter]' 
	 WHERE id='$id'");
	 }
	 //
	if($upd || $up){
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="4ee.php?id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()"></body>
	</html>
	<? 
	}
}
?> 