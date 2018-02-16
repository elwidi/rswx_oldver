<?
session_start();
include "../konek.php";
include "../ceke.php";
include "../rake.php";
if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
 //header("Location:./dodol.php");
}
}
//if(!$ii[id]){//
//header("Location:./dodol.php");
  
   $ambil = mysql_query("SELECT * FROM jualobat_tmp WHERE JamTran='$NoResep' ORDER BY id asc");
  while($kk = mysql_fetch_array($ambil)){
  $JamT=date("H:i:s");
  $dkfkdfkdl  = mysql_query("SELECT KodeObat,NamaGolongan FROM dataobat WHERE id='$kk[KodeObat]'");
   $gb =  mysql_fetch_array($dkfkdfkdl); 
  $KeyID="$kk[KodeObat]-$kk[Bln]-$kk[Thn]";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$kk[Tgl]', '$kk[Bln]', '$kk[Thn]', '$kk[KodeObat]', '$kk[NamaObat]','JL')");

   $isikan = mysql_query("INSERT INTO `jualobat` (`id`, `RegId`, `Tgl`, `Bln`, `Thn`, `JamTran`, `NoPasien`, `NamaPasien`, 
   `KodeDokter`, `NamaDokter`, `KodeObat`, `NamaObat`, `Qty`, `HargaBeli`, `JmlHargaBeli`, `NamaPer`, `Satuan`, `KodeKategori`, 
   `NamaKategori`, `Operator`, `stat`, `R_resep`, `NilaiRresep`, `R_racik`, `NilaiRracik`, `apa_r`, `TypeJual`, `NamaTxn`, `NoResep`, `IdDepo`, `Jam`, `Bagian`
   , `NamaKategory`, `RevKary`, `RevRs`, `Pengali`, `IdSatuan`, `Total2`)
    VALUES (NULL, '$kk[RegId]', '$kk[Tgl]', '$kk[Bln]', '$kk[Thn]','$kk[JamTran]',
	'$kk[NoPasien]','$kk[NamaPasien]', '$kk[KodeDokter]', '$kk[NamaDokter]', '$kk[KodeObat]', 
	'$kk[NamaObat]', '$kk[Qty]', '$kk[HargaBeli]', 
	'$kk[JmlHargaBeli]', '$kk[NamaPer]','$kk[Satuan]', 
	'$kk[KodeKategori]', '$kk[NamaKategori]', '$kk[Operator]','$kk[stat]', '$kk[R_resep]', '$kk[NilaiRresep]',
	'$kk[R_racik]','$kk[NilaiRracik]', '$kk[apa_r]', '$kk[TypeJual]', '$kk[NamaTxn]','$JamT', '$kk[IdDepo]','$gb[KodeObat]','$a[NamaBagian]','$gb[NamaGolongan]',
	'$kk[Rev]','$kk[Rev2]','$kk[Pengali]','$kk[IdSatuan]','$kk[Total2]')");
	  
	}
	  $del = mysql_query("DELETE FROM jualobat_tmp WHERE JamTran='$NoResep'");
	  ?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="huyjy_jjhh.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html><?
 ?>