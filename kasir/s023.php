<style type="text/css">
<!--
.style1 {font-size: 14}
-->
</style>
<span class="style1"></span>
<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
$Umur=$Umur-0;
/*if($Umur<=0){
echo "UMUR HARUS LEBIH DARI 1 HARI";
}else*/if(!$hh[id]){
echo "DATA TIDAK DIKENAL";
}else{
//
$banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$hh[BlnMasuk]/$hh[TglMasuk]/$hh[ThnMasuk]");
 if($Umur<=12){
 $mulai=7;
 }elseif($Umur>12 && $Umur<=24){
 $mulai=30;
 }elseif($Umur>24 && $Umur<=32){
 $mulai=14;
 }elseif($Umur>32){
 $mulai=7;
 }
 
      $compare = date("d/m/Y",$kini +$mulai*86400);
$pc = explode("/",$compare);
//
$TglJam=date("d.m.Y:H:i:s");
 $isi = mysql_query("INSERT INTO  `anc` 
(`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `UmurHamil`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `TglLahir`, `BlnLahir`, `ThnLahir`, `TglKontrol`, `BlnKontrol`, `ThnKontrol`, `Opr`, `TglJam`, `Keterangan`) VALUES
 (NULL, '$id', '$hh[NoPasien]', '$hh[NamaPasien]', '$Umur', '$hh[TglMasuk]', '$hh[BlnMasuk]', '$hh[ThnMasuk]', '$TglLahir', '$BlnLahir',
  '$ThnLahir', '$pc[0]', '$pc[1]', '$pc[2]', '$a[Nama]', '$TglJam','$Keterangan')");
  if(!$isi){
  $kdfd = mysql_query("UPDATE  `anc` SET `UmurHamil` = '$Umur',
`TglLahir` = '$TglLahir',
`BlnLahir` = '$BlnLahir',
`ThnLahir` = '$ThnLahir',
`TglKontrol` = '$pc[0]',
`BlnKontrol` = '$pc[1]',
`ThnKontrol` = '$pc[2]',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Keterangan` = '$Keterangan' WHERE `IdPasien` ='$id'");
  }
  //
 
 $isk_sd = mysql_query("INSERT INTO `anc_2` (`id`, `IdPasien`,`NoPasien`,`NamaPasien`, `K1`, `L`, `K4`, `Tt1`, `Tt2`, `Tt3`, `Tt4`, `Tt5`, `Fe1`, `Fe2`, `Fe3`, `Hb`, `Gol`, `Glukosa`, `Tb`, `Lla`, `Lain`, `Opr`, `TglJam`, `Tgl`, `Bln`, `Thn`) VALUES (NULL, '$id', '$hh[NoPasien]','$hh[NamaPasien]','$K1', '$L', '$K4', '$Tt1', '$Tt2', '$Tt3', '$Tt4', '$Tt5', '$Fe1', '$Fe2', '$Fe3', '$Hb',
   '$Gol', '$Glukosa', '$Tb', '$Lla', '$Lain', '$a[Nama]', '$TglJam','$hh[TglMasuk]','$hh[BlnMasuk]','$hh[ThnMasuk]')");  //
   $ksdsD_Sdsd = mysql_query("UPDATE `anc_2` SET `K1` = '$K1',
`L` = '$L',
`K4` = '$K4',
`Tt1` = '$Tt1',
`Tt2` = '$Tt2',
`Tt3` = '$Tt3',
`Tt4` = '$Tt4',
`Tt5` = '$Tt5',
`Fe1` = '$Fe1',
`Fe2` = '$Fe2',
`Fe3` = '$Fe3',
`Hb` = '$Hb',
`Gol` = '$Gol',
`Glukosa` = '$Glukosa',
`Tb` = '$Tb',
`Lla` = '$Lla',
`Lain` = '$Lain',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam'
 WHERE `IdPasien` ='$id'");
 /////////////////////////////
 
 $jujujuj  =  mysql_query("INSERT INTO  
 `anc_nw` (`id`, `IdPasien`, `imunisasi_tt`, `Beri_Fe`, `Hb_1`, `Jarak`, `JmlAnak`, `Tb`, `Tbp`, `BBt`, `Lila`, `Hb2`, `Rrl`, `Opr`, `TglJam`, `Komplikasi`) 
 VALUES (NULL, '$id', '$imunisasi_tt', '$Beri_Fe', '$Hb_1', '$Jarak', '$JmlAnak', '$Tb', '$Tbp', '$BBt', '$Lila', 
 '$Hb2', '$Rrl', '$a[User]', '$TglJam', '$Komplikasi')");
 /////////////////////////////////////////
 $i_00909090 = mysql_query("UPDATE  `anc_nw` SET `imunisasi_tt` = '$imunisasi_tt',
`Beri_Fe` = '$Beri_Fe',
`Hb_1` = '$Hb_1',
`Jarak` = '$Jarak',
`JmlAnak` = '$JmlAnak',
`Tb` = '$Tb',
`BBt` = '$BBt',
`Lila` = '$Lila',
`Hb2` = '$Hb2',
`Rrl` = '$Rrl',
`Opr` = '$a[User]',
`TglJam` = '$TglJam',
`Komplikasi` = '$Komplikasi' WHERE `IdPasien` ='$id'");
 if($ibu=='santi'){
 header("Location:../keluar2.php");
 }else{
  header("Location:./anc.php?id=$id&IdBagian=$IdBagian&IdDokter=$IdDokter&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn1=$thn1");
}
} ?>
