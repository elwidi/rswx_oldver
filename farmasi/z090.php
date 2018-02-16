<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
if($id!=''){
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
 //header("Location:./dodol.php");
}
}
//if(!$ii[id]){//
//header("Location:./dodol.php");
  $kdjfkdjkdf = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$xz = mysql_fetch_array($kdjfkdjkdf);

if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  $ambil = mysql_query("SELECT * FROM jualobat_tmp2 WHERE JamTran='$NoResep'");
  while($kk = mysql_fetch_array($ambil)){
  ///
     $KeyID="$kk[KodeObat]-$kk[Bln]-$kk[Thn]";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$kk[Tgl]', '$kk[Bln]', '$kk[Thn]', '$kk[KodeObat]', '$kk[NamaObat]','JLi')");
  //
  $JamT=date("H:i:s");
  $dkfkdfkdl  = mysql_query("SELECT KodeObat,NamaGolongan FROM dataobat WHERE id='$kk[KodeObat]'");
  $gb =  mysql_fetch_array($dkfkdfkdl); 
   $isikan = mysql_query("INSERT INTO `jualobat2` (`id`, `RegId`, `Tgl`, `Bln`, `Thn`, `JamTran`, `NoPasien`, `NamaPasien`, 
   `KodeDokter`, `NamaDokter`, `KodeObat`, `NamaObat`, `Qty`, `HargaBeli`, `JmlHargaBeli`, `NamaPer`, `Satuan`, `KodeKategori`, 
   `NamaKategori`, `Operator`, `stat`, `R_resep`, `NilaiRresep`, `R_racik`, `NilaiRracik`, `apa_r`, `TypeJual`, `NamaTxn`, `NoResep`, `IdDepo`, `Jam`, `Bagian`
   , `NamaKategory`)
    VALUES (NULL, '$kk[RegId]', '$kk[Tgl]', '$kk[Bln]', '$kk[Thn]','$kk[JamTran]',
	'$kk[NoPasien]','$kk[NamaPasien]', '$kk[KodeDokter]', '$kk[NamaDokter]', '$kk[KodeObat]', 
	'$kk[NamaObat]', '$kk[Qty]', '$kk[HargaBeli]', 
	'$kk[JmlHargaBeli]', '$kk[NamaPer]','$kk[Satuan]', 
	'$kk[KodeKategori]', '$kk[NamaKategori]', '$kk[Operator]','$kk[stat]', '$kk[R_resep]', '$kk[NilaiRresep]',
	'$kk[R_racik]','$kk[NilaiRracik]', '$kk[apa_r]', '$kk[TypeJual]', '$kk[NamaTxn]','$JamT', '$kk[IdDepo]','$gb[KodeObat]','$xz[NamaBagian]','$gb[NamaGolongan]')");
	}
	
	$del = mysql_query("DELETE FROM jualobat_tmp2 WHERE JamTran='$NoResep'");
	if($del){
  ?>
  <? 
 }else{
 echo "SIMPAN DATA GAGAL,.....<br>";
 }
     }else{
  //header("Location:./keluar.php");
  }
  ?> <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="b09_d.php?id=<? echo  $id; ?>&NoResep=<? echo $NoResep; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()"> 
