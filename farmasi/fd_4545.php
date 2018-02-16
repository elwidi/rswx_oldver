<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 //////
$ikdkfdidkf_dfdfdfd = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
$ii = mysql_fetch_array($ikdkfdidkf_dfdfdfd);
////////////////////////////////
$mjm_dfd = mysql_query("SELECT *  FROM podetil77x WHERE id='$IdDetil'");
$xx = mysql_fetch_array($mjm_dfd);
$bATAS = $xx[Qty]*$xx[Pengali];
////////////////////////////////////////////////
if($Qty>$bATAS){
echo "JUMLAH RETUR TERLALU BESAR $Qty>$xx[Qty]"; 
}elseif($Alasan==''){
echo "HARAP ISIKAN ALASAN,.....";
}elseif(!$ii[id] || !$xx[id]){
header("Location:../keluar2.php");

}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
$Total = $xx[Harga]*$Qty;
$Tgl=date("d")-0;$Bln=date("m")-0;$Thn=date("Y");
$TglJam=date("d.m.Y-H:i:s");
 $JamT=date("H:i:s");
 $KeyID="$xx[IdBarang]-$Bln-$Thn";
 
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$Tgl', '$Bln', '$Thn', '$xx[IdBarang]', '$xx[NamaBarang]','RT')");

	$isik = mysql_query("INSERT INTO  `returbeli` (`id`, `IdPo`, `IdDetil`, 
	`IdBarang`, `NamaBarang`, `Qty`, `Harga`, `Total`,`Alasan`, `Tgl`, `Bln`, `Thn`, `Opr`, `TglJam`, `NoPo`) 
	VALUES (NULL, '$id', '$xx[id]', '$xx[IdBarang]', '$xx[NamaBarang]', '$Qty', '$xx[Harga]', '$Total',
	 '$Alasan', '$Tgl', '$Bln', '$Thn', '$a[Nama]','$TglJam','$ii[NoPo]') ");
	 //
	 
	$kjdjkd_ds = mysql_query("INSERT INTO  `jualobat` (`id`, `RegId`, `Tgl`, `Bln`, `Thn`, 
	`JamTran`, `NoPasien`, `NamaPasien`, 
	`KodeDokter`, `NamaDokter`, `KodeObat`, `NamaObat`,
	 `Qty`, `HargaBeli`, `JmlHargaBeli`, 
	 `NamaPer`, `Satuan`, 
	 `KodeKategori`, `NamaKategori`,
	  `Operator`, `stat`, `R_resep`, `NilaiRresep`, `R_racik`, `NilaiRracik`, `apa_r`, `TypeJual`, `NamaTxn`, `NoResep`, `IdDepo`, `Jam`, `Bagian`, `NamaKategory`, `RevKary`, `RevRs`, `Pengali`, `IdSatuan`, `Total2`) VALUES 
	(NULL, 'R.$xx[id]', '$Tgl', '$Bln', '$Thn',
	 '$JamT', '$id', '$ii[NamaSupplier]',
	  NULL, NULL, '$xx[IdBarang]','$xx[NamaBarang]', 
	  '$Qty','$xx[Harga]','$Total',
	   '', '$xx[NamaSatuan]',
	    NULL, NULL,
		'$a[User]', '',
		 '', '0.00', '', '0.00', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '')"); 
	 //
 if($isik){
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="dff_fg.php?id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()"></body>
 </html>
 <?
 
 }}?>