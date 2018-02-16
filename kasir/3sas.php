<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$date = date("d-m-Y");
$Jam=date("H:i:s");
 
$Pj = strlen($Alasan);
$kdjfkdjkdkfd  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ya = mysql_fetch_array($kdjfkdjkdkfd);
if(!$ya[id]){
echo "DATA TIDAK DIKENAL";
}elseif($Pj<6){
 echo "SILAHKAN ISIKAN ALASAN DAHULU MINIMAL 6 KARAKTER <br>ALASAN YANG ANDA BUAT ADALAH "; ?><font color="#990000"><b><i><? echo "  $Alasan"; ?></i></b></font><? 
 }elseif($a[Level]==3){
//
$djfkj988989fgf = mysql_query("SELECT * from dataperusahaan WHERE id='$KodePer'");
$yaa = mysql_fetch_array($djfkj988989fgf);

 //
$isikan = mysql_query("INSERT INTO  
`DataUpdate` (`id`, `IdUpdate`, `NamaTabel`, `NamaHari`, `Tgl`, `Jam`, `Opr`, `Alasan`, `Info`)
 VALUES (NULL, '$id', 'rwtjalan', '$hari', '$date', '$Jam', '$a[Nama]', '$Alasan','Perubahan Asuransi dari $ya[NamaPer] Ke $yaa[NamaPer]')");
 //
 if($isikan){
 $ksksksksk = mysql_query("UPDATE rwtjalan set KodePer='$KodePer',NamaPer='$yaa[NamaPer]' WHERE id='$id'");
}
 //
header("Location:./mah_h.php?mashari=okeh&NamaPasien=$NamaPasien&NoPasien=$NoPasien");
}
?>