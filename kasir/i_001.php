<?
session_start();
include "../konek.php";
 include "../ceke.php";
include "../alamat.php";
 $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
 $TglJam=date("d.m.Y-H:i:s");

if(!$hh[id]){
echo "Record Data Tidak lengkap $id $hh[NamaPasien]";
}else{
 $NonJaminan = $Tot-$Jaminan;
$isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$id', '$Jaminan', '$NonJaminan', '$a[Nama]', '$TglJam', '$param','$id','F.$id')");
echo "INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$id', '$Jaminan', '$NonJaminan', '$a[Nama]', '$TglJam', '$param','$id','F.$id'";
 $usjs = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$Jaminan',
`NonJam` = '$NonJaminan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `IdDetil` ='F.$id' ");
  header("Location:../keluar2.php");
}
?>