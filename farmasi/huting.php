<?
session_start();
include "../konek.php";
include "../ceke.php";
$ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalan= mysql_query("SELECT SUM(Qty) AS jj FROM jualobat
 WHERE KodeObat='$c[id]' AND NamaObat not like 'Paket%' AND IdDepo='$a[KodeBagian]'"); 
$dapat_pertama = mysql_fetch_array($ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalan);
//
 

$barangmasukdaripo_Aja  = mysql_query("SELECT SUM(Qty*Pengali) AS ff FROM podetil77x WHERE IdBarang='$c[id]' AND Stat=2 AND Thn>=2014   AND NamaBarang NOT LIKE 'Paket%'");
$od_fggfgf_df= mysql_fetch_array($barangmasukdaripo_Aja);
$skd_fgfgfgfgfgf = mysql_query("SELECT SUM(Qty) AS kk FROM returobatjalan WHERE IdObat='$c[id]'");
$bp_ddd = mysql_fetch_array($skd_fgfgfgfgfgf);
//
$dkfldldlfd_Fglflgkflgf  = mysql_query("SELECT SUM(Qty) as kk FROM returbeli WHERE IdBarang='$c[id]'");
$iks_ksdjksjdksjdksjkdsjdksjkdsjkdsjdks = mysql_fetch_array($dkfldldlfd_Fglflgkflgf);
//
   
 $ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalanX= mysql_query("SELECT IdObat,IdPaket,Qty  FROM isipaketdetil
 WHERE IdObat='$c[id]'");
while($dapat_pertamaX = mysql_fetch_array($ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalanX)){
//
 $kdikd_Dfd= mysql_query("SELECT SUM(Qty) as jj  FROM jualobat WHERE KodeObat='$dapat_pertamaX[IdPaket]'");
$k_454545454dfdfdfd_dfdfd  = mysql_fetch_array($kdikd_Dfd);
//
  $totototototot_gfhghghg54h5 = $totototototot_gfhghghg54h5+( $dapat_pertamaX[Qty]*$k_454545454dfdfdfd_dfdfd[jj]);
 }
//
  $kdjfd_Dfdf =  mysql_query("SELECT SUM(Qty) as kk FROM stok_opm WHERE IdObat='$c[id]'");
$bz_2 = mysql_fetch_array($kdjfd_Dfdf);
 
  $kdjfd_ddfdfdfdfdDfdf =  mysql_query("SELECT SUM(TotalQty) as kk FROM oder_1detil WHERE IdObat='$c[id]' AND Stat=2 AND IdUnit='$a[KodeBagian]' ");
$bz_2sww = mysql_fetch_array($kdjfd_ddfdfdfdfdDfdf);
$Stok=$bz_2sww[kk]+$bz_2[kk]-$dapat_pertama[jj]+$bp_ddd[kk]+$od_fggfgf_df[ff]-$iks_ksdjksjdksjdksjkdsjdksjkdsjkdsjdks[kk]+$ddd_kkdikdidk_hari_bojo_iin[hh]-$totototototot_gfhghghg54h5;
   if($sa==2){ }else{
   echo number_format($Stok);
  
 
} $totototototot_gfhghghg54h5 =0; $Stok=0;
   ?>  