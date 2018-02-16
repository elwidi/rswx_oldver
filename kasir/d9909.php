<?
include "../konek.php";
include "../ceke.php";
 include "../alamat.php";
 $jdhfkdj = mysql_query("SELECT * FROM rl_resep WHERE id='$id'");
$ya  = mysql_fetch_array($jdhfkdj);
 		    $kkik3 = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM jual_ob_rl WHERE RegId='$ya[NoResep]'");
  $ada3 = mysql_fetch_array($kkik3);

$Jame=date("H:i:s");
$Tgl=date("d");$Bln=date("m"); $Thn=date("Y");
 $isk = mysql_query("INSERT INTO  
 `kwitansi_rl` (`id`, `NoResep`, `Pembayar`, `TypeBayar`, `NamaType`, `Tgl`, `Bln`, `Thn`, `Opr`, `Jam`, `Tunai`, `Kk`, `Db`, `Stat`, `Keterangan`
 , `NamaPasien`) VALUES 
 (NULL,  '$ya[NoResep]', '$Pembayar', '$Type', '$Type', '$Tgl', '$Bln', '$Thn', '$a[Nama]', '$Jame', '$ada3[jj]', '', '','','$Keterangan','$ya[NamaPasien]')");
 if($isk){
 $kdjfdkfld   = mysql_query("SELECT id FROM kwitansi_rl where NoResep='$ya[NoResep]' ");
 $dapat = mysql_fetch_array($kdjfdkfld);
 header("Location:./cd09.php?id=$dapat[id]");
 }else{
 echo "SIMPAN DAA ";
 }
?>