<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$naman = mysql_query("SELECT * FROM dokter WHERE id='$Dokter'");
$f = mysql_fetch_array($naman);
$naman = mysql_query("SELECT * FROM tabelrj WHERE id='$Tarif'");
$ga = mysql_fetch_array($naman);
$sel=$ga[Harga]-$JasaDokter-$JasaAsisten-$JasaAlat-$JasaOpr-$JasaInsentif-$JasaRs;
if($sel>0){
echo "Pembagian Tidak Balance <br>$sel=$ga[Harga]-$JasaDokter-$JasaAsisten-$JasaAlat-$JasaOpr-$JasaInsentif-$JasaRs;
 ";
}elseif(!$ga[id]){
echo "Record Tarif Tidak Dikenal";
 }elseif(!$f[id]){
echo "Data Dokter TIdak dikenal";
}elseif($a[Level]==3){ 
$KeyID="$Dokter-$Tarif";
 $TglJam=date("d-m-Y.H:i:s");
$namsds = mysql_query("INSERT INTO `pecah_jasa` 
 (`id`,`KeyID`,`JasaDokter`,`JasaAsisten`,`JasaAlat`,`JasaOpr`,`JasaInsentif`,`JasaRs`,`Opr`,`TglJam`,`IdBiaya`,`IdDokter`,`NamaDokter`,`Keluarkan`) VALUES (NULL,'$KeyID','$JasaDokter','$JasaAsisten','$JasaAlat','$JasaOpr','$JasaInsentif','$JasaRs','$a[User]','$TglJam','$Tarif','$Dokter','$f[NamaDokter]','$ga[Harga]')");
 header("Location:./sett_jasa_dokter.php?Tarif=$Tarif");
 } ?>