<?
session_start();
include "../konek.php";
include "../ceke.php";
 $sisa = $cegat-$Qty;
if($sisa<-100000){
 header("Location:./joget_yuk.php");
}else{
  $panjang = strlen($RegId);
 if($panjang<4){
 header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  $uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
 $g1 = mysql_fetch_array($uy);
$mono = mysql_query("SELECT NamaDepo,Persen FROM depo where id='$IdDepo'");
$hy = mysql_fetch_array($mono);
$Typ="$hy[NamaTxn]";
  $cejkj = mysql_query("SELECT * from racikembal WHERE id=1");
$iy = mysql_fetch_array($cejkj);
 $regane=$Harga;
  if($Mingo==1){
$regane=$regane ;
$ttr=$iy[Embalase];
$JmlHargaBeli=($Qty * $regane);
 }else{
$regane=$regane;
$JmlHargaBeli=$Qty * $regane;//+$bbu;
 }
if($Rc==1){
$regane = $regane ;//+ $iy[Nilai_Racik];
$hjuy =$iy[Racikan];
}else{
$regane=$regane;
}
  $IdRLOB="r-$iy[Nilai_Resep]";
  

$cejkj = mysql_query("SELECT * from racikembal WHERE id=1");
$iy = mysql_fetch_array($cejkj);
$Harga=$Harga+($Harga*$yek_p[Persen]/100); 
  if($Mingo==1){
$JmlHargaBeli=$JmlHargaBeli+$iy[Embalase];
}else{
$JmlHargaBeli=$JmlHargaBeli;
}
$tgl=date("d");$bln =date("m"); $thn=date("y");
 $wkt = "$tgl-$bln-$thn:$aku";
 if($cedu==1){
 $Koik = "KNS:$g1[id]";
 $KLOK = "KNS:$g1[KodeObat]";
 }else{
 $Koik = "$g1[id]";
 $KLOK = "$g1[KodeObat]";
 }
  
$sim = mysql_query("INSERT INTO `jual_ob_rl_tmp` (`id`,`IdRLOB`,`RegId`,`TypeJual`,`IdObat`,`IdResep`,`KodeObat`,`NamaObat`,
`Qty`,`Harga`,`JumlahHarga`,`NamaPasien`,`TglTran`,`Operator`,`stat`) VALUES 
(NULL,'$IdDepo','$RegId','$Rc','$Koik','$NoResep','$KLOK','$g1[NamaObat]',
'$Qty','$regane','$JmlHargaBeli','$NamaPasien','$wkt','$a[Nama]','$RaciKe')"); 
if($sim){
 header("Location:./Bptalkah.php?Rc=$Rc&IdDepo=$IdDepo&RegId=$RegId&NoResep=$NoResep&NamaPasien=$NamaPasien");
}else{
echo "SIMPAN DATA GAGAL,....<br>$RegId";
}
 }else{
header("Location:./keluar.php");
}
}
  ?>