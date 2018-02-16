<?php
session_start();
include "../konek.php";
include "../ceke.php";
  $Total = $Harga*$Qty;
    $mjh  = mysql_query("SELECT * FROM  tabelri WHERE id='$IdBiaya'");
  $dd = mysql_fetch_array($mjh);
 $bah = explode("-",$dd[KodeBiaya]);
  $Insentif=$Total*$dd[Insentif]/100;
 $JasaPerawat=$Total*$dd[JasaPerawat]/100;
 $JasaDrOperator=$Total*$dd[JasaDrOperator]/100;
 $JasaDokter=$Total*$dd[JasaDokter]/100;
 $JasaRs=$Total*$dd[JasaRs]/100;
 $JasaPerawat=$Total*$dd[JasaPerawat]/100;
 $TglJam=date("d-m-Y.H:i:s");
$simp = mysql_query("UPDATE  `txninap3` SET `Disc` = '$Disc',
`Qty` = '$Qty',
`Harga` = '$Harga',
`Total` = '$Total',
`Insentif` = '$Insentif',
`JasaPerawat` = '$JasaPerawat',
`JasaDrOperator` = '$JasaDrOperator',
`JasaDokter` = '$JasaDokter',
`JasaRs` = '$JasaRs',
`TglJam` = '$TglJam',
`Opr` = '$a[Nama]',
`Tgl` = '$TglX',
`Bln` = '$Bln',
`Thn` = '$Thn' WHERE `txninap3`.`id` ='$Id'");
 
  header("Location:./txn_inap.php?IdPasien=$IdPasien&MstKey=$MstKey&IdStruk=$IdStruk");
  ?>