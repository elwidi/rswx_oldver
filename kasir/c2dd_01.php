<?
session_start();
include "../konek.php";
include "../ceke.php";
   $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$kfgkfjgkfjgkfgkf_kdfkdfkmd = mysql_query("SELECT * FROM tarif WHERE id='$IdDetil'");
$us = mysql_fetch_array($kfgkfjgkfjgkfgkf_kdfkdfkmd);
if(!$us[id]){
 header("Location:../keluar2.php");
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112  || $a[Level]==112 || $a[Level]==77){
 
$simp = mysql_query("INSERT INTO  
`txnugd` 
(`id`, `IdPasien`, `IdBiaya`, `KodeBiaya`, `NamaBiaya`, `Tgl`, `Bln`, `Thn`, `KodeBagian`, `NamaBagian`, `Harga`, `Insentif`, `JsDrUmum`, `JsDrSpc`, `JsPerawat`, `JsRs`, `Opr`, `Jam`, `KodeDokter`, `NamaDokter`) VALUES
 (NULL, '$id', '$IdDetil', '$us[KodeBiaya]', '$us[NamaBiaya]', '$hh[TglMasuk]', '$hh[BlnMasuk]'
 , '$hh[ThnMasuk]', '$hh[KodeBagian]', '$hh[Bagian]', '$us[Tiga]', '$us[Insentif]', '$us[JsDrUmum]',
  '$us[JsDrSpc]', '$us[JsPerawat]', '$us[JsRs]', '$a[Nama]', '$TglJam','$hh[KodeDokter]','$hh[NamaDokter]')");
  if($anak!='pdp'){
 header("Location:./u.php?id=$id");
 }else{
?><html>
<head>
<SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ug.php?id=<? echo $id;  ?>";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html><? 
} }
?>