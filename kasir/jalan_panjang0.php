<?php
session_start();
include "../konek.php";
include "../ceke.php";
 $JasaDokter  = $_GET["JasaDokter"];
$IdBiaya = $_GET["IdBiaya"];
$IdPasien = $_GET["IdPasien"];
$IdStruk  = $_GET["IdStruk"];
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$IdPasien'");
$x = mysql_fetch_array($PasieR);
 $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
$splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
$Daat = mysql_query("SELECT id,NamaDokter FROM dokter WHERE id='$IdDokter'");
$sx= mysql_fetch_array($Daat);
  $cek_struk = mysql_query("SELECT * FROM datastruk WHERE id=$IdStruk");
 $ada = mysql_fetch_array($cek_struk);
 if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==16){
$NoBukti="MM-$ada[id]";
$Jam = date("H:i:s");
 $Tgl=date("d");
 $Bln=date("m");
 $Thn=date("Y");
    $mjh  = mysql_query("SELECT * FROM  tarif WHERE id='$IdDetil'");
  $dd = mysql_fetch_array($mjh);
  if($j[KodeKelas]=='Satu'){
 $Harga=$dd[Kelas1];
 }elseif($j[KodeKelas]=='Dua'){
 $Harga=$dd[Kelas2];
 }elseif($j[KodeKelas]=='Tiga'){
 $Harga=$dd[Kelas3];
 }elseif($j[KodeKelas]=='Vip'){
 $Harga=$dd[Vip];
 }elseif($j[KodeKelas]=='Svip'){ 
  $Harga=$dd[Vvip];
    }else{
 }
 
 if($a[Level]==112){
 $KodeKel=448;
 }else{
 $KodeKel = $dd[KodeKelompok];
 } 
  if($a[Level]==16){
 $KodeBag='x';
 }else{
 $KodeBag=$ada[KodeBagian];
 } 

 $kasaa = mysql_query("SELECT * FROM Kelompok where id='$dd[KodeKelompok]'");
 $ok = mysql_fetch_array($kasaa);
 //

 $TglJam=date("d-m-Y");
 
 $simpan = mysql_query("INSERT INTO  `txninap3` 
(`id`, `MstKey`, `NoBukti`, `Kelas`, `Bed`, 
`NoPasien`, `NamaPasien`, `JamTran`, `KodeDokter`, `NamaDokter`,
 `KodeBagian`, `Bagian`, `KodeBiaya`, `NamaBiaya`, `KodeKelompok`, `NamaKelompok`, 
 `Disc`, `Qty`, `Harga`, `Total`, `Satu`, `Dua`, `Tiga`, `Vip`, `Svip`, `Insentif`, `JasaPerawat`, `JasaDrOperator`, `JasaDokter`, `JasaRs`, `TglJam`
 , `Opr`, `Tgl`, `Bln`, `Thn`, `IdBagian`,`JsSubSpc`,`JsDrSpc`) VALUES
(NULL, '$x[MstKey]', '$NoBukti', '$j[NamaKelas]', '$j[NoBed]', 
'$x[NoPasien]', '$x[NamaPasien]', '$Jam', '$ada[KodeDokter]', '$ada[NamaDokter]',
 '$KodeBag', '$ada[NamaBagian]', 
 '$IdDetil', '$dd[NamaBiaya]', '$KodeKel', '$ok[NamaKelompok]',
  '$Disc', '1', '$Harga', '$Harga', '$dd[Kelas1]', '$dd[Kelas2]', '$dd[Kelas3]', '$dd[Vip]', '$dd[Svip]', '$Insentif', 
  '$dd[JsPerawat]', '$dd[JsDrSpc]', '$dd[JsDrUmum]', '$dd[JsRs]','$TglJam',  '$a[Nama]','$Tgl','$Bln','$Thn','$a[KodeBagian]','$dd[JsSubSpc]','$dd[JsDrSpc]')");
 
     }
	 if($a[Level]==16){
	  header("Location:../Radiologi/jalan_panjang.php?IdPasien=$IdPasien&IdStruk=$IdStruk");
   }else{
     header("Location:./jalan_panjang.php?IdPasien=$IdPasien&IdStruk=$IdStruk");
  }
  ?>
 