<?
include "../konek.php";
include "../salaman.php";
include "../rake.php";
include "../hari.php";
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


$kdjkdsjkfdfd_DFdfd  = mysql_query("select * from datapasien where id='$IdPasien'");
$yape = mysql_fetch_array($kdjkdsjkfdfd_DFdfd);

$NoKwt=date("dmY.His");
	$mas=strlen($NoKwt2);
if($Type=='-'){
echo "HARAP PILIH  TYPE BAYAR,.....<br>";
}else{
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$JamE=date("d.m.Y-H:i:s");
 $Nomer =date("dmny.His");
 $Triger = date("H")-0;
if($Triger>=7 && $Triger<=14){
$Sif=1;
}elseif($Triger>=15 && $Triger<=21){
$Sif=2;
}else{
$Sif=3;
}
$hari="$a[id]-$Sif-$hari"; 

 	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$Type'");
	$jop= mysql_fetch_array($kj_kdjf);
$Keterangan = ucfirst(strtolower($Keterangan));
$sim= mysql_query("INSERT INTO  `kwitansirj` 
 (`id`, `RegId`, `NoPasien`, `NamaPasien`, `Pembayar`, `NamaHari`, `TglBayar`, `BlnBayar`, `ThnBayar`, `JamBayar`, `Kasir`, `NoKartu`, `TypeBayar`, `NamaType`,
  `Tunai`, `Kk`, `Db`, `Jam`, `Asli`, `Bulat`, `Persen`, `KodePer`, `NamaPer`, `TxnJalan`, `Farmasi`, `Laborat`, `Stat`, `crg`, `KodeBagian`, `NamaBagian`, `Keterangan`) VALUES 
 (NULL, '$Nomer', '$yape[NoPasien]', '$yape[NamaPasien]', '$Pembayar', '$hari', '$Tgl', '$Bln', '$Thn', '$JamE', '$a[Nama]', '$NoKartu', '$Type', '$jop[NamaBank]', 
 '$Tunai', '$Kk', '$Db', '$Jaminan', '$Asli', '$Bulat', '$Persen', '$KodePer', '$NamaPer', '$TxnJalan', '$Farmasi', '$Laborat', '0', '$crg', 'Man', 'Kwitansi Manual', '$Keterangan')");
$ksiks_Sds = mysql_query("SELECT id FROM kwitansirj WHERE KodeBagian='Man' AND JamBayar='$JamE'");
 $aj = mysql_fetch_array($ksiks_Sds);
   header("Location:./x23.php?id=$aj[id]");
 }  ?>
 