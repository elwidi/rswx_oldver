<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$Qty=$Qty-0;
 if($Qty<=0){
echo "HARAP MASUKANM QTY,....<br>";
}else{
$id = $_GET["id"];
$IdObat = $_GET["IdObat"];
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
$wahit = $_GET["wahit"];
$IdDepo = $_GET["IdDepo"];
$RegId = $ii[MstKey];
$Qty= $_GET["Qty"];
$budi_h = $_GET["budi_h"];
$TypeJual = $_GET["TypeJual"];
$cebok= $_GET["TypeJual"];
 $Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$pojok_kanan = $budi_h-$Qty;
if($pojok_kanan<-10000){
header("Location:./buang.php");
}else{
 $JamTran = date("H:i:s");
  $uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
  $g1 = mysql_fetch_array($uy);
  //
  
 

  $peka = mysql_query("SELECT Upper FROM golobat WHERE id='$g1[IdGol]'"); 
	$yg = mysql_fetch_array($peka);
   //
  $cejkj = mysql_query("SELECT * from racikembal WHERE id=1");
$iy = mysql_fetch_array($cejkj);
 $regane=$Habeli ;
 $JmlHargaBeli=($Qty * $regane);
  if($Rc==1){
$regane = $regane ;//+ $iy[Nilai_Racik];
$hjuy =$iy[Racikan];
}else{
$regane=$regane;
}
 
 //$pj = strlen($pass_ku);
//echo "user : $user_ku <br> pass : $pj $pass_ku";
if($id!='' && $wahid!='kakak'){
 $ssks = $ii[NamaDokter];
$fjhu = $ii[KodeDokter];
}elseif($id!='' && $wahid=='kakak'){
}
//if(!$ii[id]){
//header("Location:./dodol.php");
//}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  
if($IdGudang>0){
 $Kob="$IdGudang:$g1[KodeObat]";
 }else{
 $Kob="$g1[id]";
 }
  if($Mingo==1){
$JmlHargaBeli=$JmlHargaBeli+$iy[Embalase];
}else{
$JmlHargaBeli=$JmlHargaBeli;
}
$kdjfkdjkdf = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$xz = mysql_fetch_array($kdjfkdjkdf);
 $JmlHargaBeli = $JmlHargaBeli + ( $JmlHargaBeli*$dw[Persen]/100);
 $isikan = mysql_query("INSERT INTO `jualobat_tmp2` (`id`,`RegId`,
 `Tgl`,`Bln`,`Thn`,`JamTran`,`NoPasien`,`NamaPasien`,`KodeDokter`,`NamaDokter`,
`KodeObat`,`NamaObat`,`Qty`,`HargaBeli`,`JmlHargaBeli`,`NamaPer`,`Satuan`,
`KodeKategori`,`NamaKategori`,`Operator`,`stat`,`R_resep`,`NilaiRresep`,`R_racik`,`NilaiRracik`,`apa_r`,`TypeJual`,`NamaTxn`,`IdDepo`,`Bagian`)
VALUES (NULL,'$RegId','$Tgl','$Bln','$Thn','$NoResep','$ii[NoPasien]',
'$ii[NamaPasien]', '$ii[Dokter]','$ii[KetDokter]',
'$Kob','$g1[NamaObat]','$Qty','$regane', 
'$JmlHargaBeli','$ii[NamaPer]','$g1[Satuan]','$g1[IdGol]','$g1[NamaGolongan]',
'$a[Nama]','$RacKe','$Mingo','$ttr','$Rc','$hjuy','$Rc','$rtr','$trt','$a[KodeBagian]','$xz[NamaBagian]')");
 
if($isikan){
  header("Location:./nando.php?IdGudang=$IdGudang&NoResep=$NoResep&id=$id&aku=$aku&Rc=$Rc");
}else{
 /*echo "INSERT INTO `JualObat2` (`id`,`RegId`,`JamTran`,`NoPasien`,`NamaPasien`,`NamaBagian`,`KodeDokter`,`NamaDokter`,
`KodeObat`,`NamaObat`,`Qty`,`HargaBeli`,`JmlHargaBeli`,`NamaPer`,`Satuan`,
`KodeKategori`,`NamaKategori`,`Operator`,`stat`)
VALUES (NULL,'$RegId','$JamTran','$ii[NoPasien]',
'$ii[NamaPasien]','$ii[NamaBagian]','$fjhu','$ssks',
'$g1[KodeObat]','$g1[NamaObat]','$Qty','$g1[HargaJual]', 
'$JmlHargaBeli','$ii[NamaPer]','$g1[Satuan]','$g1[KodeKategori]','$g1[NamaKategori]',
'$a[Nama]','0')";
*/
echo "SIMPAN DATA GAGAL,...<br>INSERT INTO `jualobat_tmp` (`id`,`RegId`,
 `Tgl`,`Bln`,`Thn`,`JamTran`,`NoPasien`,`NamaPasien`,`KodeDokter`,`NamaDokter`,
`KodeObat`,`NamaObat`,`Qty`,`HargaBeli`,`JmlHargaBeli`,`NamaPer`,`Satuan`,
`KodeKategori`,`NamaKategori`,`Operator`,`stat`,`R_resep`,`NilaiRresep`,`R_racik`,`NilaiRracik`,`apa_r`,`TypeJual`,`NamaTxn`,`IdDepo`)
VALUES (NULL,'$RegId','$Tgl','$Bln','$Thn','$NoResep','$ii[NoPasien]',
'$ii[NamaPasien]', '$fjhu','$ssks',
'$Kob','$g1[NamaObat]','$Qty','$regane', 
'$JmlHargaBeli','$ii[NamaPer]','$g1[Satuan]','$g1[KodeKategori]','$g1[NamaKategori]',
'$a[Nama]','0','$Mingo','$ttr','$Rc','$hjuy','$Rc','$rtr','$trt','$a[KodeBagian]')";
?>
<br />
<input type="button" name="kembali" value="Kembali" onclick="location.href='wahit.php?id=<? echo $id; ?>';" />
<? 
}
}else{
header("Location:./keluar.php");
} 
}
?>
<? } ?>


