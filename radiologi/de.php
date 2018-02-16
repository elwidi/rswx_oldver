<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$KodeBiaya = $_GET["KodeBiaya"];
$NamaBiaya = $_GET["NamaBiaya"];
$Total = $_GET["Total"];
$Film = $_GET["Film"];
$Kelompok = $_GET["Kelompok"];
$Developer = $_GET["Developer"];
$Listrik = $_GET["Listrik"];
$Map = $_GET["Map"];
$SewaAlat = $_GET["SewaAlat"];
$JasaDokter = $_GET["JasaDokter"];
$JasaRujuk = $_GET["JasaRujuk"];
$JasaRs = $_GET["JasaRs"];

$kdjfkdjfkd = mysql_query("SELECT * FROM TarifRad WHERE id='$id'");
$ii = mysql_fetch_array($kdjfkdjfkd);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$TglJam=date("d.m.Y-H:i:s");
    $simp = mysql_query("UPDATE `TarifRad` SET `KodeBiaya` =  '$KodeBiaya',
`NamaBiaya` = '$NamaBiaya',
`Total` = '$Total',
`Film` = '$Film',
`Kelompok` = '$Kelompok',
`Developer` = '$Developer',
`Listrik` = '$Listrik',
`Map` = '$Map',
`SewaAlat` = '$SewaAlat',
`JasaDokter` = '$JasaDokter',
`JasaRujuk` = '$JasaRujuk',
`JasaRs` = '$JasaRs',
 `Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `TarifRad`.`id` =$id");
if($simp){
 }else{
echo "SIMPAN  DATA GAGAL";
}
 ?><? } ?> <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xas.php?NamaBiaya=<? echo $NamaBiaya; ?>&ha=<? echo $ha; ?>&se=<? echo $se; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
