<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  =$_GET["id"];
$Ruax  =$_GET["Ruax"];
$seska  =$_GET["seska"];
$h  =$_GET["h"];
$NoRuangan  =$_GET["NoRuangan"];
$IdRuangan  =$_GET["IdRuangan"];
$Keterangan  =$_GET["Keterangan"];
$miduk = $_GET["miduk"];

$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
$poc = explode("-",$x[transferKe]);
$uu = mysql_query("SELECT id,KodeKelas FROM ruangan WHERE id='$NoRuangan'");
$kp = mysql_fetch_array($uu);
   $updaa = mysql_query("UPDATE  ruangan SET stat=0 WHERE  id='$miduk'");
  $updaa2 = mysql_query("UPDATE  ruangan SET stat=1 WHERE id='$NoRuangan'");
 $ggan = "$kp[id]-$kp[KodeKelas]";
 if(!$updaa){
header("Location:../fito_sayangku.php");
}$upi="$x[IdKelas]";
$tgl=date("d");
$bln=date("m");
$thn=date("Y");
$jkiu = "$tgl-$bln-$thn";
$uk = mysql_query("UPDATE keluarmasukpasien SET TgTran='$jkiu',IdKelas='$upi',transferKe='$ggan'
 WHERE id='$id'");
 
$jam=date("H:i:s");
$Ruan = mysql_query("SELECT * FROM ruangan WHERE NoRuangan='$NoRuangan'");
$f = mysql_fetch_array($Ruan);
$Tarif = mysql_query("SELECT Tarif FROM kelas WHERE KodeKelas='$f[KodeKelas]'");
$k = mysql_fetch_array($Tarif);

 $kfkfgfkg  = mysql_query("UPDATE transfer SEt TglTranLagi='$jkiu' WHERE MstKey='$x[id]' order by id desc");
//$BayarK = $k[Tarif]*
  	$transfer = mysql_query("INSERT INTO `transfer` (`id`, `MstKey`, `IdMasuk`, `NoPasien`, 
	`NamaPasien`, `tgl`, `bln`, `thn`, `jam`,`IdKelas`, `KodeKelas`, `NamaKelas`, `Ruangan`, 
	`NamaRuangan`, `NoBed`, `RpPerKamar`, `Bayar`, `Keterangan`, `Opr`, `Asal`)
	 VALUES (NULL, '$x[id]', '$id', '$x[NoPasien]', '$x[NamaPasien]',
	  '$tgl', '$bln', '$thn', '$jam', '$f[id]','$f[KodeKelas]', '$f[NamaKelas]', '$f[NoRuangan]', 
	  '$f[NamaRuangan]', '$f[NoBed]', '$k[Tarif]', '$BayarK','$Keterangan', '$a[Nama]','$poc[0]')");
	 header("Location:./n.php?id=$id");
  
?>