<?
session_start();
include "../konek.php";
include "../ceke.php";
include "../rake.php";
$pj = strlen($Alasan);
if($pj<3){
echo "ALASAN MINIMAL 4 KARAKTER ,";
}else{
$dataa = mysql_query("SELECT * FROM labumum WHERE id=$id");
$z = mysql_fetch_array($dataa);
//
	$ndsa = "$z[id].$z[RegId]";
$djkdjkdfd = mysql_query("SELECT * FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
	if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	$Tgl=date("d");
	$Bln=date("m");
	$Thn=date("Y");
	$Jam=date("H:i:s");
  $isi = mysql_query("INSERT INTO  `nourutbatal`
  (`id`, `IdUrut`, `NoUrut`, `Opr1`, `Opr2`, `Tgl`, `Bln`, `Thn`, `Jam`, `Alasan`, `NoTxn`, `NoPasien`, `NamaPasien`, `JenisTxn`)
  VALUES (NULL, '$bf[id]', '$bf[NoUrut]', '$bf[Opr]','$a[Nama]', '$Tgl', '$Bln', '$Thn', '$Jam', '$Alasan','$z[id]','$z[RegId]','$z[NamaPasien]','$z[RegId]')");
   if($isi){
  $djkdjkdxxxfd = mysql_query("DELETE  FROM urutanlab WHERE RegId='$ndsa'");
   }
}else{

}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c_d.php?NoBukti=<? echo $NoBukti; ?>&makan=siap&id=<? echo $id; ?>";
  self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
<? } ?>