<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NoResepX=$NoResep;
$NoResep=$RegId;
$kdjfkdjfkd = mysql_query("SELECT * FROM jualobat WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjfkd);
//
 $KDJFKDJFKD = mysql_query("SELECT * FROM rj_resep WHERE NoResep='$ya[JamTran]'");
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
$TotalY  = ($Harga*$Qty);
  }else{
$Total  = $Harga*$Qty;
}
if($mas==90){
$simp = mysql_query("DELETE FROM  `returobatjalan` WHERE IdJual='$IdDetil'");
}else{
$TglD =date("d");
$BlnD=date("m");
$ThnD=date("Y");
 
 	$simp = mysql_query("INSERT INTO  `returobatjalan`
	 (`id`, `IdJual`, `IdObat`, `NamaObat`, `Qty`, `Tgl`, `Bln`, `Thn`, `Alasan`, `TglJam`, `Opr`, `IdPasien`, `NamaPasien`, `IdResep`, `Harga`, `Total`, `NoPasien`, `NoResep`) VALUES
	 (NULL, '$ya[id]', '$ya[KodeObat]', '$ya[NamaObat]', '$Qty', '$TglD', '$BlnD', '$ThnD', '$Keterangan', '$TglJam', '$a[User]', '$id', '$ya[NamaPasien]', '$ii[id]', '$Harga', '$Total', '$ya[NoPasien]', '$ya[JamTran]')");
  
 	$duujdudm = mysql_query("INSERT INTO  `podetil77x` 
	(`id`, `IdPo77`, `IdBarang`,
	`NamaBarang`, `Qty`, 
	`Harga`,
	 `Total`, `Tgl`, `Bln`, `Thn`,
	  `Opr`, `TglJam`, `IdSatuan`,
	   `NamaSatuan`, `Pengali`, `PotPrc`, 
	   `PotRp`, `TotRp`, `Bacth`, `Stat`, 
	   `TglEd`, `BlnEd`, `ThnEd`, 
	   `IdSupplier`, `Kait`,
	    `IdFaktur`, `IdAsal`, 
		`IdPox`, `Merk`) VALUES 
	   (NULL, 'R.$IdDetil', '$ya[KodeObat]', '$ya[NamaObat]', '$Qty',
	    '$Harga', '$TotalY', '$TglD', '$BlnD', '$ThnD', 
		'$a[User]', '$TglJam', '$IdSatuan', '$NamaSatuan', '1', '$PotPrc',
		 '$PotRp', '$TotRp', '$Bact', '2', '-', '-', '-', '$ya[NoPasien]', 'R.$ya[id]', '', 'R.$ya[id]', '', '')");
	}
	if($simp){
	?><html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="df33.php?id=<? echo $id; ?>&IdResep=<? echo $ii[id]; ?>";
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