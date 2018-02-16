<?
session_start();
include "../konek.php";
include "../salaman.php";
if($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
$tgl=date("d");
$bln=date("m")-0;
$thn = date("Y");
//
$pale="$bln-$thn";
$jaka = mysql_query("SELECT * FROM polog77 WHERE KeyID like '%-$pale' ORDER BY id DESC");
$nn = mysql_fetch_array($jaka);
$pch = explode("/",$nn[NoPo]);
//
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
 $urut="00".$iki;
 }elseif($iki<1000){
 $urut="0".$iki;
 }else{
 $urut=$iki;
 }
 $Jam=date("H:i:s");
 $thnX=date("y");
 $NoPo = "$urut/F$param/In.Far/$blnX-$thnX";
	$c_cc = mysql_query("INSERT INTO `polog77` (`id`, `NoPo`, `Tgl`, `Bln`, `Thn`, `Opr`, `Jam`) 
	VALUES (NULL, '$NoPo', '$tgl', '$bln', '$thn', '$a[Nama]','$Jam')");
if($c_cc){
$ksks= mysql_query("SELECT * FROM polog77 WHERE NoPo='$NoPo'");
$kk = mysql_fetch_array($ksks);
header("Location:./x23.php?id=$kk[id]");
}	
	
}
?>