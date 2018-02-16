<?
session_start();
include "../konek.php";
include "../ceke.php";
$Qty=$Qty-0;
if($Qty==0){
echo "ANDA BELUM MEMASUKAN QTY";
}else{
$id = $_GET["id"];
$IdObat = $_GET["IdObat"];
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
 $kdjkdfd_Dfdfd = mysql_query("SELECT * FROM racikembal WHERE id=1");
 $yapa = mysql_fetch_array($kdjkdfd_Dfdfd);
  
 $Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$pojok_kanan = $budi_h-$Qty;
if($pojok_kanan<-10000){
header("Location:./buang.php");
}else{  
 ////
 $jjdjdjdjdjd_Dfdf = mysql_query("SELECT * FROM settingsatuan WHERE id='$IdSatuan'");
$hb = mysql_fetch_array($jjdjdjdjdjd_Dfdf);

 ///
 $JamTran = date("H:i:s");
  $uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
  $g1 = mysql_fetch_array($uy);
   if($ii[KodePer]==83){     
  	 $kdjfkdjfd_Dfmndlfdmlfd = mysql_query("SELECT * FROM golobat WHERE id='$g1[IdGol]'");
	 $ypo = mysql_fetch_array($kdjfkdjfd_Dfmndlfdmlfd);
 	 $persen_1=$ypo[Upper2];
 	if($Mingo==1 && $ypo[Upper2]==0){
  $Tiga2X = (($regane-($regane*$persen_1/100))*$Qty)+($yapa[Embalase]);
	}elseif($Mingo==1 && $ypo[Upper2]<100){
  $Tiga2X = (($regane-($regane*$persen_1/100))*$Qty)+($yapa[Embalase]/2);
  }else{
  $Tiga2X = ($regane-($regane*$persen_1/100))*$Qty;
  }
  	 }else{
 //$regane=$regane+($regane*$yek_p[Persen]/100);
	 } 
  
 
  $JmlHargaBeli=$Qty * $regane;//+$bbu;
  
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
 
 $momon=$g1[HargaJual];
$mono = mysql_query("SELECT  Persen  FROM depo where id='$IdDepo'");
$hy = mysql_fetch_array($mono);
$rtr = $hy[id];
$trt=$hy[NamaTxn];
if(!$hy[id]){
 $kiuj = mysql_query("SELECT NamaDepo,id,Persen FROM depo WHERE id='$aku'");
$dw = mysql_fetch_array($kiuj);
//echo strtoupper($dw[NamaDepo]); 
$rtr = $dw[id];
$trt=$dw[NamaDepo];
}
if($IdGudang>0){
 $Kob="$IdGudang:$g1[KodeObat]";
 }else{
 $Kob="$g1[id]";
 }
    if($Mingo==1){
$JmlHargaBeli=($regane*$Qty)+$yapa[Embalase];
 //$regane= $regane*$Qty;
 $regane2= $regane;
 }else{
$JmlHargaBeli=($regane*$Qty);
 $regane2= $regane;
}
$Rev2=$JmlHargaBeli-$Tiga2X;
 $Total2 = $Qty*$hb[Pengali]*$regane2;
 $isikan = mysql_query("INSERT INTO `jualobat_tmp` (`id`,`RegId`,
 `Tgl`,`Bln`,`Thn`,`JamTran`,`NoPasien`,`NamaPasien`,`KodeDokter`,`NamaDokter`,
`KodeObat`,`NamaObat`,`Qty`,`HargaBeli`,`JmlHargaBeli`,`NamaPer`,`Satuan`,
`KodeKategori`,`NamaKategori`,`Operator`,`stat`,`R_resep`,`NilaiRresep`,`R_racik`,`NilaiRracik`,`apa_r`,`TypeJual`,`NamaTxn`,`IdDepo`,`Bagian`,`Rev`
,`Rev2`,`Pengali`,`IdSatuan`,`Total2`)
VALUES (NULL,'$RegId','$Tgl','$Bln','$Thn','$NoResep','$ii[NoPasien]',
'$ii[NamaPasien]', '$fjhu','$ssks',
'$Kob','$g1[NamaObat]','$Qty','$regane2', 
'$JmlHargaBeli','$ii[NamaPer]','$hb[NamaSatuan]','$g1[KodeKategori]','$g1[NamaKategori]',
'$a[Nama]','$RacKe','$Mingo','$ttr','$Rc','$hjuy','$Rc','$rtr','$trt','$a[KodeBagian]','$a[NamaBagian]','$Tiga2X','$Rev2','$hb[Pengali]','$hb[id]','$Total2')");
  
if($isikan){
  header("Location:./wahit.php?IdGudang=$IdGudang&NoResep=$NoResep&id=$id&aku=$aku&Rc=$Rc");
}else{
echo "SIMPAN DATA GAGAL";
?>
<br />
<input type="button" name="kembali" value="Kembali" onclick="location.href='wahit.php?id=<? echo $id; ?>';" />
<? 
}
 //header("Location:./keluar.php");
} 
}
?>
 

