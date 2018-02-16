<?
session_start();
include "../konek.php";
 $tgl=date("d");
$bln=date("m")-0;
$thn = date("Y");
//
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE KeyID like '%-$bln-$thn' ORDER BY id DESC");
$kk = mysql_fetch_array($KDJFKDJFKD); 
$jhdjhjd_Sdsds = mysql_query("SELECT id,NamaSuplier FROM supplier where id='$IdSupplier'");
$yahp = mysql_fetch_array($jhdjhjd_Sdsds);

  $pch = explode("/",$kk[NoPo]);
//
 $iki = $kk[id]-0;
$iki =$pch[0]-0;
if($iki>0){
$iki=$iki+1;
}else{
$iki=1;
}
if($bln==1){
$blnX="I";
}elseif($bln==2){
$blnX="II";
}elseif($bln==3){
$blnX="III";
}elseif($bln==4){
$blnX="IV";
}elseif($bln==5){
$blnX="V";
}elseif($bln==6){
$blnX="VI";
}elseif($bln==7){
$blnX="VII";
}elseif($bln==8){
$blnX="VIII";
}elseif($bln==9){
$blnX="IX";
}elseif($bln==10){
$blnX="X";
}elseif($bln==11){
$blnX="XI";
}elseif($bln==12){
$blnX="XII";
}else{
$blnX="?";
}

  if($iki<10){
 $urut ="000".$iki;
 }elseif($urut<100){
 $urut="0".$iki;
 }elseif($iki<1000){
 $urut="0".$iki;
 }else{
 $urut=$iki;
 }
 $param="$yahp[id]";
 //echo "nomer $urut <br>"; 
 $Jam=date("H:i:s");
 $thnX=date("y");
 $NoPoX = "$urut/F.$param/LOG-FAR/$blnX-$thnX";
  
 
  $c_cc = mysql_query("INSERT INTO `polog77x` (`id`, `NoPo`, `Tgl`, `Bln`, `Thn`, `Opr`, `Jam`, `IdSupplier`, `NamaSupplier`
  , `Stak`
  , `Keterangan`
  , `Ppn`
  , `Diskon`
  , `Materai`
  , `Bulat`
  , `SetPpn`
  , `Stap`
  , `Cek`
  , `TglCek`
  , `IdPo`, `KeyID`
  ) 
	VALUES (NULL, '$NoPoX', '$tgl', '$bln', '$thn', '$a[Nama]','$Jam','$yahp[id]','$yahp[NamaSuplier]'
	,'$Stak'
	,'$Keterangan'
	,'$Ppn'
	,''
	,''
	,''
	,''
	,''
	,''
	,''
		,'$id','$urut-$bln-$thn'

	)");
if($c_cc){
$ksks= mysql_query("SELECT * FROM polog77x WHERE NoPo='$NoPoX'");
$kk = mysql_fetch_array($ksks);
header("Location:./a10_m.php?IdPo=$kk[id]&id=$id&IdSupplier=$IdSupplier");
}	?>