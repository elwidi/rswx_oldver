<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
   if($KodeSuplier==''){
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
if($a[Level]==6){
$sipan = mysql_query("INSERT INTO `supplier2` (`id`,`KodeSuplier`,`NamaSuplier`,`Alamat`,`Kota`,`CP`,`Telp`,`Opr`,`TglJam`,`Level`) 
VALUES (NULL,'$KodeSuplier','$NamaSuplier','$Alamat','$Kota','$CP','$Telp','$a[Nama]','$TglJam','$a[Level]')");
}else{
$sipan = mysql_query("INSERT INTO `supplier` (`id`,`KodeSuplier`,`NamaSuplier`,`Alamat`,`Kota`,`CP`,`Telp`,`Opr`,`TglJam`,`Level`) 
VALUES (NULL,'$KodeSuplier','$NamaSuplier','$Alamat','$Kota','$CP','$Telp','$a[Nama]','$TglJam','$a[Level]')");
} if($sipan){
header("Location:./kopi_susu.php");
}else{
echo "SIMPAN DATA GAGAL,....<br>";
?>
  <input type="button" name="Kembas" value="Kembali" onclick="location.href='kopi_susu.php';" />
<?
}
}
?>
