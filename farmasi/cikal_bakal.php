<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
  $TglJam = date("dmY-H:is");
if($a[Level]==98){
  $gan = mysql_query("UPDATE  `supplier3` SET 
`NamaSuplier` = '$NamaSuplier',
`Alamat` = '$Alamat',
`Kota` = '$Kota',
`CP` = '$CP',
`Telp` = '$Telp',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Level` = '$IdUsaha',
`Fax` = '$Fax',
`Hp` = '$Hp',
`Keterangan` = '$Keterangan',
`email` = '$email' ,
`KodeArea` = '$KodeArea' ,
`KodeArea2` = '$KodeArea2'  WHERE  `id` =$id");
}elseif($a[Level]==6){
  $gan = mysql_query("UPDATE  `supplier2` SET 
`NamaSuplier` = '$NamaSuplier',
`Alamat` = '$Alamat',
`Kota` = '$Kota',
`CP` = '$CP',
`Telp` = '$Telp',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Level` = '$IdUsaha',
`Fax` = '$Fax',
`Hp` = '$Hp',
`Keterangan` = '$Keterangan',
`email` = '$email' ,
`KodeArea` = '$KodeArea' ,
`KodeArea2` = '$KodeArea2'  WHERE  `id` =$id");
}else{
 $gan = mysql_query("UPDATE  `supplier` SET 
`NamaSuplier` = '$NamaSuplier',
`Alamat` = '$Alamat',
`Kota` = '$Kota',
`CP` = '$CP',
`Telp` = '$Telp',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Level` = '$a[Level]' WHERE `id` =$id");
}
 if($gan){
 header("Location:./kompor.php");
 }else{
echo "UPDATE DATA GAGAL,...<br>";
 }
  ?>
