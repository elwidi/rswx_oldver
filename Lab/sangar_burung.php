<?
session_start();
 include "../konek.php";
 include "../salaman.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$tgl =date("d"); $bln=date("m"); $thn=date("y");
 $Jam=date("H:i:s");
$Tgl=date("d")-0;
$Bln=date("m")-0;
$Thn=date("Y");
$Kju= mysql_query("SELECT * FROM labumum WHERE id='$hari'");
$kp= mysql_fetch_array($Kju);
//ambil data sublab
$DtBiaya = mysql_query("SELECT * FROM tabelbiayax WHERE id='$xe'");
$pk = mysql_fetch_array($DtBiaya);
/*  $simpan = mysql_query("INSERT INTO  `txnjalan2` (`id`, `RegId`, `NoPasien`, 
 `NamaPasien`, `IdDokter`, `NamaDokter`, `IdPoli`, `NamaPoli`, `IdBiaya`, `NamaBiaya`, 
 `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `Qty`, `Harga`, `Total`, `JasaDokter`, `JasaRujukan`, `Reagen`,
  `Alkes`, `Kontrol`, `Listrik`, `JasaRs`, `TglJam`, `Opr`)
   VALUES (NULL, '$kp[RegId]', '$kp[id]', '$kp[NamaPasien]', 'LU', 'LU', 'LU', 
   'LU', '$pk[id]', '$pk[NamaBiaya]', '$Tgl', '$Bln', '$Thn', '1', '$pk[Harga]', '$pk[Harga]', '$pk[JasaDokter]',
    '$pk[JasaRujukan]', '$pk[Reagen]', '$pk[Alkes]', '$pk[Kontrol]','$pk[Listrik]', '$pk[JasaRs]', '$Jam', '$a[Nama]')");
	*/
	$TglJam =date("d.m.Y-H:i:s");
	 $simpan = mysql_query("INSERT INTO  `txnjalan2` 
  (`id`, `RegId`, `NoPasien`, `NamaPasien`, `IdDokter`, `NamaDokter`, `IdPoli`,
   `NamaPoli`, `IdBiaya`, `NamaBiaya`, `TglMasuk`,
    `BlnMasuk`, `ThnMasuk`, `Qty`, `Harga`, `Total`, `JasaDokter`,
	 `JasaRujukan`, `Insentif`, `JasaDrSpc`, `JasaPerawat`, `Listrik`,
	  `JasaRs`, `TglJam`, `Opr`) VALUES
   (NULL, '$kp[RegId]', '$kp[id]', '$kp[NamaPasien]',
    'LU', 'LU', 'LU', 'LU', '$pk[id]', '$pk[NamaBiaya]','$Tgl', '$Bln', '$Thn', '1', '$pk[Tiga]', '$pk[Tiga]', '$pk[JasaDokter]',
    '$pk[JasaRujukan]',  '$pk[Insentif]', '$pk[JasaDrSpc]', '$pk[JasaPerawat]',  '$pk[Listrik]', '$pk[JasaRs]', '$TglJam', '$a[Nama]')"); 
 
 if($simpan){
// header("Location:./nasi_kucing.php?hari=$hari");nasi_kucsisng
   header("Location:./nasi_kucisng.php?hari=$hari");
}else{
 echo "SIMPAN DATA GAGAL,.................<br>";
 }
}else{
header("Location:./keluar.php");
}
?>