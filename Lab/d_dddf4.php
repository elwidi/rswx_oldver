<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$Tgl = $_GET["Tgl"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$kjdkdjf_kjkjkkj  = mysql_query("SELECT * FROM txnjalan2 WHERE id='$IdDetil'");
$uu = mysql_fetch_array($kjdkdjf_kjkjkkj);
//
$kjkfdfd_Dfdfd  = mysql_query("SELECT * FROM tabelbiayax WHERE id='$uu[IdBiaya]'");
$ya = mysql_fetch_array($kjkfdfd_Dfdfd);

if(!$ya[id]){
echo "RECORD SET TIDAK LENGKAP,.....<br>";
}elseif(!$uu[id]){
echo "RECORD SET TIDAK LENGKAP,.....<br>";
}else{
$TglJam=date("d.m.Y-H:i:s");
//
$kdkjdkfd = mysql_query("UPDATE txnjalan2 SET Harga='$Nilai',Total='$Nilai'
WHERE id='$IdDetil'");
//
$impa = mysql_query("INSERT INTO  `rujuk_lab`
 (`id`, `IdPasien`, `IdDetil`, `IdBiaya`, `NamaBiaya`, `TglRujuk`, `BlnRujuk`, 
 `ThnRujuk`, `TglSelesai`, `BlnSelesai`, `ThnSelesai`, `Keterangan`, `Opr`, `TglJam`, `Nilai`) VALUES 
 (NULL, '$id', '$IdDetil', '$uu[IdBiaya]', '$uu[NamaBiaya]', '$Tgl', '$Bln', '$Thn', 
 '$Tgl2', '$Bln2', '$Thn2', '$Keterangan', '$a[Nama]', '$TglJam','$Nilai')");
 $odfdf = mysql_query("UPDATE  `rujuk_lab` SET `TglRujuk` = '$Tgl',
`BlnRujuk` = '$Bln',
`ThnRujuk` = '$Thn',
`TglSelesai` = '$Tgl2',
`BlnSelesai` = '$Bln2',
`ThnSelesai` = '$Thn2',
`Keterangan` = '$Keterangan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Nilai` = '$Nilai',
`Stat` = '$Statuse' WHERE `rujuk_lab`.`id` ='$Rec'");
 ?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xs_02.php?NoBukti=<? echo $NoBukti; ?>&dimas=<? echo $dimas; ?>&id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()"></body>
	</html>
<?
}?>