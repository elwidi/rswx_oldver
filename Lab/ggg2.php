<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$z = mysql_fetch_array($dataa);
//
	$ndsa = "RI.$NoBukti";
$djkdjkdfd = mysql_query("SELECT * FROM urutanlab WHERE IdPasien='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
	if($a[Level]==12){
	$Tgl=date("d");
	$Bln=date("m");
	$Thn=date("Y");
	$Jam=date("H:i:s");
 $isi = mysql_query("INSERT INTO  `nourutbatal`
  (`id`, `IdUrut`, `NoUrut`, `Opr1`, `Opr2`, `Tgl`, `Bln`, `Thn`, `Jam`, `Alasan`, `NoTxn`, `NoPasien`, `NamaPasien`, `JenisTxn`)
  VALUES (NULL, '$bf[id]', '$bf[NoUrut]', '$bf[Opr]','$a[Nama]', '$Tgl', '$Bln', '$Thn', '$Jam', '$Alasan','$bf[IdPasien]','$bf[NoPasien]','$bf[NamaPasien]','$bf[RegId]')");
  if($isi){
  $djkdjkdxxxfd = mysql_query("DELETE  FROM urutanlab WHERE IdPasien='$ndsa'");
  echo "DELETE  FROM urutanlab WHERE IdPasien='$ndsa'"; 

  }
}else{

}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c_dc.php?NoBukti=<? echo $NoBukti; ?>&makan=nasi&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>