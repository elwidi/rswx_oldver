<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdkldklfdfd  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($kjdkldklfdfd);
//
$kddkidkdkdk_Fgf = mysql_query("SELECT id,NoResep FROM rj_resep WHERE id='$IdResep'");
$yh = mysql_fetch_array($kddkidkdkdk_Fgf);
$kdjfkdjkd = mysql_query("SELECT * FROM jualobat WHERE id='$IdJual'");
$ib = mysql_fetch_array($kdjfkdjkd);
$Tgl =date("d");
$Bln=date("m");
$Thn=date("Y");
$TglJam=date("d.m.Y-H:i:s");
if($Retur>$ib[Qty]){
echo "JML RETUR TERLALU BESAR,... ";
}elseif($Alasan==''){
echo "HARAP ISIKAN ALASAN";
}elseif(!$yh[id]){
header("Location:../keluar2.php");
}elseif(!$ii[id]){
header("Location:../keluar2.php");
}else{
$Total = $ib[HargaBeli]*$Retur;
	$isi = mysql_query("INSERT INTO  `returobatjalan` (`id`, `IdJual`, `IdObat`, `NamaObat`, `Qty`, `Tgl`, `Bln`, `Thn`, `Alasan`, `TglJam`, `Opr`
	, `IdPasien`, `NamaPasien`, `IdResep`, `Harga`, `Total`, `NoPasien`, `NoResep`)
	 VALUES (NULL, '$IdJual', '$ib[KodeObat]', '$ib[NamaObat]', '$Retur', '$Tgl', '$Bln', '$Thn', '$Alasan', '$TglJam', '$a[Nama]','$ii[id]','$ii[NamaPasien]','$yh[id]','$ib[HargaBeli]','$Total','$ii[NoPasien]','$yh[NoResep]')");
	 header("Location:./d_Dfd.php?id=$id&IdResep=$IdResep");
}
?>