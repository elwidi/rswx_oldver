<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$odfodi_Dfdfdl = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$ss = mysql_fetch_array($odfodi_Dfdfdl);
$TglJam=date("d.m.Y-H:i:s");
 
$isi= mysql_query("INSERT INTO  
`vaksin_pasien2`
 (`id`, `IdPasen`, `NoPasien`, `NamaPasien`, `Bcg`, `Polio1`, `Polio2`, `Polio3`, `Polio4`, 
 `Dpt1`, `Dpt2`, `Dpt3`, `Heb1`, `Heb2`, `Heb3`, `DptKombo`, `DptKombo2`,`DptKombo3`,`Opr`, `TglJam`,`Campak`,`Keterangan`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`
 , `Bacth`, `Heb0`,`Pentabio`) VALUES
  (NULL, '$id', '$hh[NoPasien]', '$hh[NamaPasien]', '$Bcg', '$Polio1', '$Polio2', '$Polio3',
   '$Polio4', '$Dpt1', '$Dpt2', '$Dpt3', '$Heb1', '$Heb2','$Heb3','$DptKombo','$DptKombo2','$DptKombo3', '$a[Nama]','$TglJam','$Campak','$Keterangan','$hh[TglMasuk]','$hh[BlnMasuk]','$hh[ThnMasuk]','$Bacth','$Heb0','$Pentabio')");
 $pada  =  mysql_query("INSERT INTO  `bacth_vaksin2` (`id`, `IdRj`, `Bcg`, `Polio_1`, `Polio_2`, `Polio_3`, `Polio_4`, `Dpt_1`, `Dpt_2`, `Dpt_3`, `Opr`, `TglJam`, `Tgl`, `Bln`, `Thn`, `Heb0`, `Heb1`, `Heb2`, `Heb3`, `Kombo_1`, `Kombo_2`, `Kombo_3`, `Campak`, `Pentabio_1`) VALUES 
(NULL, '$id', '$Bcg_1', '$Polio_1', '$Polio_2', '$Polio_3', 
'$Polio_4', '$Dpt_1', '$Dpt_2', '$Dpt_3', '$a[User]', '$TglJam', 
'$hh[TglMasuk]', '$hh[BlnMasuk]', '$hh[ThnMasuk]', '$Heb0_1', '$Heb1_1', '$Heb2_1', '$Heb3_1', '$Kombo_1', '$Kombo_2', '$Kombo_3','$Campak_1','$Pentabio_1')");
 $pipis =  mysql_query("UPDATE  `bacth_vaksin2` SET `Bcg` = '$Bcg_1',
`Polio_1` = '$Polio_1',
`Polio_2` = '$Polio_2',
`Polio_3` = '$Polio_3',
`Polio_4` = '$Polio_4',
`Dpt_1` = '$Dpt_1',
`Dpt_2` = '$Dpt_2',
`Dpt_3` = '$Dpt_3',
`Opr` = '$a[User]',
`TglJam` = '$TglJam',
`Heb0` = '$Heb0_1',
`Heb1` = '$Heb1_1',
`Heb2` = '$Heb2_1',
`Heb3` = '$Heb3_1',
`Kombo_1` = '$Kombo_1',
`Kombo_2` = '$Kombo_2',
`Kombo_3` = '$Kombo_3',
`Campak` = '$Campak_1',
`Pentabio_1` = '$Pentabio_1' WHERE  `IdRj` ='$id'");
 header("Location:../keluar2.php"); 

if($doa=='tobat'){
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="1dddd0a.php?IdBagian=<? echo $IdBagian; ?>&IdDokter=<? echo $IdDokter; ?>&mbak=<? echo $mbak; ?>&tgl1=<? echo $tgl1;?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; 
?>&thn2=<? echo $thn2; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html><?
}else{
header("Location:../keluar2.php");
} ?>