<?
session_start();
 include "../konek.php";
include "../ceke.php";
include "../hari.php";
 	  $Jam=$Jam2;
 //
$Triger = date("H")-0;
if($Triger>=7 && $Triger<=14){
$Sif=1;
}elseif($Triger>=15 && $Triger<=21){
$Sif=2;
}else{
$Sif=3;
}
$hari="$a[id]-$Sif-$hari"; 
$budi = explode(".",$Tunai);
$Tunai = "$budi[0]"."$budi[1]"."$budi[2]"."$budi[3]"."$budi[4]$budi[5]$budi[6]$budi[7]$budi[8]$budi[9]";
///
$budi2 = explode(".",$Kk);
$Kk = "$budi2[0]"."$budi2[1]"."$budi2[2]"."$budi2[3]"."$budi2[4]$budi2[5]$budi2[6]$budi2[7]$budi2[8]$budi2[9]";
//
$budi3 = explode(".",$Db);
$Db = "$budi3[0]"."$budi3[1]"."$budi3[2]"."$budi3[3]"."$budi3[4]$budi3[5]$budi3[6]$budi3[7]$budi3[8]$budi3[9]";
////
$budi4 = explode(".",$Jam);
$Jam = "$budi4[0]"."$budi4[1]"."$budi4[2]"."$budi4[3]"."$budi4[4]$budi4[5]$budi4[6]$budi4[7]$budi4[8]$budi4[9]";


  $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);

$Kabehe = ceil($Jam+$Db+$Kk+$Tunai);//-ceil($totale);
 
 
 if(!$hh[id]){
 echo "RECORD SET TIDAK LENGKAP"; }else{
 $Tgl = date("d");
 $Bln = date("m");
 $Thn = date("Y");
 $JamBayar = date("H:i:s");
 $kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$nugi'");
	$jop= mysql_fetch_array($kj_kdjf);
	//==
	//$KDI99090KJK = mysql_query("SELECT SUM(JumlahHarga) AS kk FROM txnjalan WHERE RegId='$hh[RegId]'");
	//$bc = mysql_fetch_array($KDI99090KJK);
$sumber  = "$Jam+$Db+$Kk+$Tunai";
	//==
	 
	 if($nugi==11 && $Db>0 && $Jam==0){
	 	$Jam=$toto-$Db;
	 }
 if($nugi==11 && $Jam>0 && $Db==0){
	 	$Db=$toto-$Jam;
	 }
 if($nugi==8 && $Tunai>0 && $Db==0){
	 	$Db=$toto-$Tunai;
	 }
	  if($nugi==8 && $Tunai==0 && $Db>0){
	 	$Tunai=$toto-$Db;
	 }
	 
	 	  if($nugi==25 && $Kk==0 && $Jam>0){
	 	$Kk=$toto-$Jam;
	 }
	 if($nugi==25 && $Kk>0 && $Jam==0){
	 	$Jam=$toto-$Kk;
	 }

	  if($nugi==24 && $Kk==0 && $Tunai>0){
	 	$Kk=$toto-$Tunai;
	 }
	 if($nugi==24 && $Kk>0 && $Tunai==0){
	 	$Tunai=$toto-$Kk;
	 }
 if($nugi==30 && $Kk==0 && $Jam>0){
	 	$Kk=$toto-$Jam;
	 }
	 if($nugi==30 && $Kk>0 && $Jam==0){
	 	$Jam=$toto-$Kk;
	 }
	 
	  if($nugi==26 && $Jam==0 && $Tunai>0){
	 	$Jam=$toto-$Tunai;
	 }
	 if($nugi==26 && $Jam>0 && $Tunai==0){
	 	$Tunai=$toto-$Jam;
	 }
	 
	if($crg==1 && $Kk>0){
 	$crg=($Kk*3/100);	
	 $Kk=$Kk+($Kk*3/100);
	}else{
	$Kk=$Kk;
	}
	if($crg==1 && $Db>0){
 	$crg=($Db*3/100);	
	 $Db=$Db+($Db*3/100);
	}else{
	$Db=$Db;
	}
	$jdkjdjd = mysql_query("UPDATE rwtjalan SET Txn='$totale' WHERE RegId='$hh[RegId]'");
	//======
 $simpan = mysql_query("INSERT INTO  `kwitansirj` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `Pembayar`, `NamaHari`,
 `TglBayar`, `BlnBayar`, `ThnBayar`, `JamBayar`, `Kasir`, `NoKartu`,
  `TypeBayar`, `NamaType`, `Tunai`, `Kk`, `Db`, `Jam`,  `Asli`, `Bulat`, `Persen`, `KodePer`, `NamaPer`, `TxnJalan`, `Farmasi`
  , `Laborat`, `Stat`, `crg`, `KodeBagian`, `NamaBagian`, `Keterangan`, `IdPasien`) 
VALUES 
(NULL, '$hh[RegId]', '$hh[NoPasien]','$hh[NamaPasien]', '$Pembayar', '$hari',
'$Tgl','$Bln', '$Thn', '$JamBayar', '$a[Nama]', '$NoKartu', '$nugi', '$jop[NamaBank]', '$Tunai',
'$Kk', '$Db', '$Jam', '$toto', '$sumbe3r', '$cas','$hh[KodePer]', '$hh[NamaPer]','$kaki','$Farmasi','$Laborat',
'0','$crg','$hh[KodeBagian]','$hh[Bagian]','$Keterangan','$hh[IdPasien]')"); 
 
if($simpan){
$TglJak=date("d.m.y:H:i:s");
$uos = mysql_query("UPDATE rwtjalan SET JamKeluar ='ak.$TglJak'
 where id='$id'");
$ganjal = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$hh[RegId]'");
$dapat = mysql_fetch_array($ganjal);
 //header("Location:./rp.php?id=$dapat[id]");
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="d44_09.php?id=<? echo $dapat[id]; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()">
 </body>
 </html>
 <? 
}else{
echo "SIMPAN DATA GAGAL $Tunai -- $toto/$crg";
}
  }
 ?>