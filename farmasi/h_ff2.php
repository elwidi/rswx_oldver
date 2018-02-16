<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NoResepX=$NoResep;
$NoResep=$RegId;
$kdjfkdjfkd = mysql_query("SELECT * FROM jual_ob_rl WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjfkd);
//
 $KDJFKDJFKD = mysql_query("SELECT * FROM rl_resep WHERE NoResep='$ya[RegId]'");
$ii = mysql_fetch_array($KDJFKDJFKD);
 $kdjkdfd_Dfdfd = mysql_query("SELECT * FROM racikembal WHERE id=1");
 $yapa = mysql_fetch_array($kdjkdfd_Dfdfd);

//
$pk =strlen($Keterangan);
if($Qty>$ya[Qty]){
echo "JUMLAH RETUR TIDAK BOLEH LEBIH BESAR DARI DATA ASLINYA,.......<br>";
}elseif($Qty<=0 && $mas!=90){
echo "NILAI RETUR HARUS DIISI DENGAN BENAR,........";
}elseif($pk<5 && $mas!=90){
echo "ALASAN / KETERANGAN PEMBATALAN MINIMAL 5 KARAKTER,...<br>ALASAN YANG ANDA KETIKAN ADALAH : $Keterangan";
?><? 
}elseif(!$ya[id]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
if($Mingo==1){
$Total  = ($Harga*$Qty)+$yapa[Embalase];
}else{
$Total  = $Harga*$Qty;
}
if($mas==90){
$simp = mysql_query("DELETE FROM  `retur_inap2` WHERE IdJual='$IdDetil'");
}else{
	$simp = mysql_query("INSERT INTO  `retur_inap2` 
(`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `IdJual`, `IdObat`, `NamaObat`, `Qty`, `Harga`, `Total`, `TglJam`, `Opr`, `Alasan`) VALUES 
(NULL, '$ya[id]', '$ii[id]', '$ii[NamaPasien]', '$ya[id]', '$ya[IdObat]', '$ya[NamaObat]', '$Qty', '$Harga', '$Total', 
'$TglJam', '$a[Nama]', '$Keterangan')");
	
	}
	if($simp){
	?><html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xer9x.php?NoResep=<? echo $NoResepX; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	
	</body>
	</html><?
	}else{
	echo "PROSES DATA GAGAL";
	}
}
?>