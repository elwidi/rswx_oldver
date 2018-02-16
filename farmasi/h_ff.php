<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjfkd = mysql_query("SELECT * FROM jualobat2 WHERE id='$id' AND JamTran='$NoResep'");
$ya = mysql_fetch_array($kdjfkdjfkd);
//
$kdjkfdjdk_flfklgf = mysql_query("SELECT * FROM keluarmasukpasien WHERE MstKey='$ya[RegId]'");
$un = mysql_fetch_array($kdjkfdjdk_flfklgf);

//
$pk =strlen($Keterangan);
if($Qty>$ya[Qty]){
echo "JUMLAH RETUR TIDAK BOLEH LEBIH BESAR DARI DATA ASLINYA,.......<br>";
}elseif($Qty<=0){
echo "NILAI RETUR HARUS DIISI DENGAN BENAR,........";
}elseif($pk<5){
echo "ALASAN / KETERANGAN PEMBATALAN MINIMAL 5 KARAKTER,...<br>ALASAN YANG ANDA KETIKAN ADALAH : $Keterangan";
?><? 
}elseif(!$ya[id]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
$Total = $Qty*($ya[JmlHargaBeli]/$ya[Qty]);
 $KeyID="$ya[KodeObat]-$ya[Bln]-$ya[Thn]";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$ya[Tgl]', '$ya[Bln]', '$ya[Thn]', '$ya[KodeObat]', '$ya[NamaObat]','JL')");
 
	$simp = mysql_query("INSERT INTO  `retur_inap` 
(`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `IdJual`, `IdObat`, `NamaObat`, `Qty`, `Harga`, `Total`, `TglJam`, `Opr`, `Alasan`, 
`Tgl`, `Bln`, `Thn`, `NoResep`) VALUES 
(NULL, '$un[id]', '$un[NoPasien]', '$un[NamaPasien]', '$id', '$ya[KodeObat]', '$ya[NamaObat]', '$Qty', '$ya[HargaBeli]', '$Total', 
'$TglJam', '$a[Nama]', '$Keterangan','$Tgl','$Bln','$Thn','$ya[JamTran]')");
	if($simp){
	?><html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xer9.php?NoResep=<? echo $ya[JamTran]; ?>";
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