<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$tgl =date("d"); $bln=date("m"); $thn=date("y");
 $Jam=date("H:i:s");
$Tgl=date("d-m-Y");
 
$Kju= mysql_query("SELECT * FROM txnrad WHERE id='$hari'");
$kp= mysql_fetch_array($Kju);
//ambil data sublab
$DtBiaya = mysql_query("SELECT * FROM  tabelri WHERE id='$IdLab'");
$pk = mysql_fetch_array($DtBiaya);
 $simpan = mysql_query("INSERT INTO  `txnjalan` 
 (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `JamTran`, `KodeDokter`, `NamaDokter`, `KodeBagian`, `Bagian`, `KodeKelompok`, `KodeBiaya`, `NamaBiaya`, `Qty`, `Harga`, `JumlahHarga`, `Film`, `Developer`, `Insentif`, `JasaPerawat`, `JasaDrOperator`, `JasaDokter`, `JasaRujuk`, `JasaRs`, `TglJam`, `Opr`) VALUES 
 (NULL, '$kp[RegId]', '$kp[NoPasien]','$kp[NamaPasien]', '$kp[Tgl]', '$kp[Bln]', '$kp[Thn]',
  '$Jam','$pk[KodeDokter]','$pk[NamaDokter]','xx','LAB LUAR', '$pk[KodeKelompok]',
  '$pk[id]','$pk[NamaBiaya]', '1','$pk[Tiga]','$pk[Tiga]', '', '', '$pk[Insentif]', '$pk[JasaPerawat]', '$pk[JasaDrOperator]',
   '$pk[JasaDokter]', '0', '$pk[JasaRs]', '$Jam', '$a[Nama]')");
 if($simpan){
 header("Location:./nasi_kucing.php?hari=$hari");
 }else{
 echo "SIMPAN DATA GAGAL,.................<br>";
 }
}else{
header("Location:./keluar.php");
}
?>