<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
}else{
$TglJam=date("d.m.Y-H:i:s");
	$simpn = mysql_query("INSERT INTO  `persalinan` (`id`, `Tgl`, `Bln`, `Thn`, `IdRj`, `NoPasien`, `NamaPasien`, `IdOpr`, `TglJam`, `Keterangan`) VALUES
	 (NULL, '$Tgl', '$Bln', '$Thn', '$id', '$hh[NoPasien]', '$hh[NamaPasien]', '$a[Nama]', '$TglJam','$Keterangan')");
	 //
	 $uk = mysql_query("UPDATE `persalinan` SET `Tgl` = '$Tgl',
`Bln` = '$Bln',
`Thn` = '$Thn',
`IdOpr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Keterangan` = '$Keterangan' WHERE `IdRj` ='$id'");
	header("Location:../keluar2.php");
}?>