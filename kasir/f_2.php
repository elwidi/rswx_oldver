<?
include "../konek.php";
include "../salaman.php";
include "../rake.php";
include "../hari.php";
$NoKwt=date("dmY.His");
$jdhfkdj = mysql_query("SELECT * FROM rl_resep WHERE id='$id'");
$ya  = mysql_fetch_array($jdhfkdj);

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
 
 if($Kk>0){
$crg = ($Kk*3/100);
//$Kk = $Kk+$cr;
}
 
if($Db>0 || $Kk>0){
$BulatE=$Asli;
 }
 	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$Type'");
	$jop= mysql_fetch_array($kj_kdjf);
$Keterangan = ucfirst(strtolower($Keterangan));
$sim= mysql_query("INSERT INTO  `kwitansirj` 
 (`id`, `RegId`, `NoPasien`, `NamaPasien`, `Pembayar`, `NamaHari`, `TglBayar`, `BlnBayar`, `ThnBayar`, `JamBayar`, `Kasir`, `NoKartu`, `TypeBayar`, `NamaType`,
  `Tunai`, `Kk`, `Db`, `Jam`, `Asli`, `Bulat`, `Persen`, `KodePer`, `NamaPer`, `TxnJalan`, `Farmasi`, `Laborat`, `Stat`, `crg`, `KodeBagian`, `NamaBagian`, `Keterangan`) VALUES 
 (NULL, '$Nomer', 'RL-$ya[id]', '$ya[NamaPasien]', '$Pembayar', '$hari', '$Tgl', '$Bln', '$Thn', '$JamE', '$a[Nama]', '$NoKartu', '$Type', '$jop[NamaBank]', 
 '$Tunai', '$Kk', '$Db', '$Jaminan', '$Asli', '$BulatE', '$Persen', '$KodePer', '$NamaPer', '$TxnJalan', '$Farmasi', '$Laborat', '0', '$crg', 'OB', 'Kwitansi Obat Resep Luar', '$Keterangan')");
$ksiks_Sds = mysql_query("SELECT id FROM kwitansirj WHERE KodeBagian='OB' AND JamBayar='$JamE'");
 $aj = mysql_fetch_array($ksiks_Sds);
 header("Location:./cd09.php?id=$aj[id]");
 }  ?>
 