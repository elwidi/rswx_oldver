<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
$TglJam=date("d.m.Y-H:i:s");
 $isi= mysql_query("UPDATE `vaksin_pasien` SET 
`Bcg` = '$Bcg',
`Polio1` = '$Polio1',
`Polio2` = '$Polio2',
`Polio3` = '$Polio3',
`Polio4` = '$Polio4',
`Dpt1` = '$Dpt1',
`Dpt2` = '$Dpt2',
`Dpt3` = '$Dpt3',
`Heb1` = '$Heb1',
`Heb2` = '$Heb2',
`Heb3` = '$Heb3',
`DptKombo` = '$DptKombo',
`DptKombo2` = '$DptKombo2',
`DptKombo3` = '$DptKombo3',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Campak` = '$Campak',
`Keterangan` = '$Keterangan',
`Heb0` = '$Heb0' ,
`Pentabio` = '$Pentabio'  WHERE  `IdPasen` ='$id'");
 $pada  =  mysql_query("INSERT INTO  `bacth_vaksin` (`id`, `IdRj`, `Bcg`, `Polio_1`, `Polio_2`, `Polio_3`, `Polio_4`, `Dpt_1`, `Dpt_2`, `Dpt_3`, `Opr`, `TglJam`, `Tgl`, `Bln`, `Thn`, `Heb0`, `Heb1`, `Heb2`, `Heb3`, `Kombo_1`, `Kombo_2`, `Kombo_3`, `Campak`, `Pentabio_1`) VALUES 
(NULL, '$id', '$Bcg', '$Polio_1', '$Polio_2', '$Polio_3', 
'$Polio_4', '$Dpt_1', '$Dpt_2', '$Dpt_3', '$a[User]', '$TglJam', 
'$hh[TglMasuk]', '$hh[BlnMasuk]', '$hh[ThnMasuk]', '$Heb0', '$Heb1', '$Heb2', '$Heb3', '$Kombo_1', '$Kombo_2', '$Kombo_3','$Campak','$Pentabio_1')");
 $pipis =  mysql_query("UPDATE  `bacth_vaksin` SET `Bcg` = '$Bcg',
`Polio_1` = '$Polio_1',
`Polio_2` = '$Polio_2',
`Polio_3` = '$Polio_3',
`Polio_4` = '$Polio_4',
`Dpt_1` = '$Dpt_1',
`Dpt_2` = '$Dpt_2',
`Dpt_3` = '$Dpt_3',
`Opr` = '$a[User]',
`TglJam` = '$TglJam',
`Heb0` = '$Heb0',
`Heb1` = '$Heb1',
`Heb2` = '$Heb2',
`Heb3` = '$Heb3',
`Kombo_1` = '$Kombo_1',
`Kombo_2` = '$Kombo_2',
`Kombo_3` = '$Kombo_3',
`Campak` = '$Campak',
`Pentabio_1` = '$Pentabio_1' WHERE  `IdRj` ='$id'");
 header("Location:./pei.php?macan=nakal&id=$id&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&bln2=$bln2&thn1=$thn1");
?>