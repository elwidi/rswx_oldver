<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
//
$dkfdlfl = mysql_query("SELECT * FROM supplier2 WHERE KodeSuplier='$KodeSuplier'");
$dapa = mysql_fetch_array($dkfdlfl);
//
if($a[Level]==6 && $dapa[id]>0){
echo "DATA KODE SUPPLIER INI SUDAH ADA UNTUK ";
?><BR /><font color="#990000"><b><? echo $dapa[NamaSuplier]; ?></b></font><? 
   }elseif($KodeSuplier=='d877s77'){
  echo "ANDA BELUM MEMASUKAN KODE supplier,.....<br>";
  ?>
  <input type="button" name="Kembas" value="Kembali" onclick="location.href='kopi_susu.php';" />
  <?
   }elseif($NamaSuplier==''){
  echo "ANDA BELUM MEMASUKAN NAMA supplier,.....<br>";
    ?>
  <input type="button" name="Kembas" value="Kembali" onclick="location.href='kopi_susu.php';" />
  <?
 }else{
$TglJam = date("d.m.Y-H:i:s");
$KodeSuplier=$KodeSuplier."-$a[Level]";
if($a[Level]==98){
$sipan = mysql_query("INSERT INTO
`supplier3` (`id`, `KodeSuplier`, `NamaSuplier`, `Alamat`, `Kota`, `CP`, `Telp`, `Opr`, `TglJam`, `Level`, `Fax`, `Hp`, `Keterangan`, `email`, `KodeArea`, `KodeArea2`) VALUES (NULL, '$KodeSuplier', '$NamaSuplier','$Alamat', '$Kota' ,'$CP', '$Telp', '$a[Nama]', '$TglJam', '$IdUsaha', '$Fax', '$Hp', '$Keterangan', 
'$email', '$KodeArea', '$KodeArea2')");
}elseif($a[Level]==6){
 $sipan = mysql_query("INSERT INTO
`supplier2` (`id`, `KodeSuplier`, `NamaSuplier`, `Alamat`, `Kota`, `CP`, `Telp`, `Opr`, `TglJam`, `Level`, `Fax`, `Hp`, `Keterangan`, `email`, `KodeArea`, `KodeArea2`) VALUES (NULL, '$KodeSuplier', '$NamaSuplier','$Alamat', '$Kota' ,'$CP', '$Telp', '$a[Nama]', '$TglJam', '$IdUsaha', '$Fax', '$Hp', '$Keterangan', 
'$email', '$KodeArea', '$KodeArea2')");
}else{ 
echo "INSERT INTO `supplier` (`id`,`KodeSuplier`,`NamaSuplier`,`Alamat`,`Kota`,`CP`,`Telp`,`Opr`,`TglJam`,`Level`) 
VALUES (NULL,'$KodeSuplier','$NamaSuplier','$Alamat','$Kota','$CP','$Telp','$a[Nama]','$TglJam','$a[Level]')<br><br>";
 $sipan = mysql_query("INSERT INTO `supplier` (`id`,`KodeSuplier`,`NamaSuplier`,`Alamat`,`Kota`,`CP`,`Telp`,`Opr`,`TglJam`,`Level`) 
VALUES (NULL,'$KodeSuplier','$NamaSuplier','$Alamat','$Kota','$CP','$Telp','$a[Nama]','$TglJam','$a[Level]')");
} 
if($sipan){
header("Location:./kopi_susu.php");
}else{
echo "SIMPAN DATA GAGAL,....<br>if($a[Level]==6 && $dapa[id]>0){<br>SELECT * FROM supplier2 WHERE KodeSuplier='$KodeSuplier'<br>
ALAMAT  : $dapa[Alamat]
";
?>
  <input type="button" name="Kembas" value="Kembali" onclick="location.href='kopi_susu.php';" />
<?
}
}
?>
