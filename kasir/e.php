<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$jkjk_jhj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($jkjk_jhj);
if(!$ii[id]){
header("Location:./j.php");
}
$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$TypeBayar'");
	$jop= mysql_fetch_array($kj_kdjf);
if($TypeBayar==0){
echo "SILAHKAN PILIH TYPE BAYAR DULU";
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==14 || $a[Level]==9){
$Tgl = date("d");
$Bln = date("m");
$Thn =date("Y");
$JamE = date("H:i:s");
$Triger = date("H")-0;
if($Triger>=7 && $Triger<=14){
$Sif=1;
}elseif($Triger>=15 && $Triger<=21){
$Sif=2;
}else{
$Sif=3;
}

  $simp = mysql_query("INSERT INTO  `penerimaandp`
(`id`, `MstKey`, `NoPasien`, `NamaPasien`, `tgl`, `bln`, `thn`, `Tunai`,`Kk`,`Db`, `Jam`,`TypeBayar`,`NamaType`,  `Keterangan`, `Opr`, `Shift`, `JenisDp`
, `KodePer`, `NamaPer`)
 VALUES (NULL, '$ii[MstKey]', '$ii[NoPasien]',
  '$ii[NamaPasien]', '$Tgl', '$Bln', '$Thn', '$Tunai', '$Kk', '$Db', '$JamP', '$TypeBayar', '$jop[NamaBank]', '$Keterangan', '$a[Nama]','$Sif','$we','$ii[KodePer]',
  '$ii[NamaPer]')");
 if($simp){
//header("Location:./r.php?id=$id");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="u787.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
<? 
}else{
echo "SIMPAN DATA GAGAL,...<br>";
}
}else{
header("Location:../keluar.php");
}
?>
 
