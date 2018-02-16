<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
?>
<html>
<head></head>
<body>
<div align="left">
<table border="1">
<tr>
<td>No</td><TD>IdBiaya</TD><TD>nama biaya</TD><td>REC</td>
</tr>
<?
$no=1;
$ldjfldkflfdkl = mysql_query("SELECT * FROM txnjalan2 order by IdBiaya ");
while($b = mysql_fetch_array($ldjfldkflfdkl)){
$TglJam=date("d.m.Y-H:i:s");//
$KeyID="$b[IdBiaya].$b[BlnMasuk].$b[ThnMasuk]";
$iai = mysql_query("INSERT INTO 
`lab_bulan` 
(`id`, `KeyID`, `NamaBiaya`, `Opr`, `TglJam`,  `Bln`, `Thn`) VALUES 
(NULL, '$KeyID', '$b[NamaBiaya]', '$a[User]', '$TglJam', '$b[BlnMasuk]', '$b[ThnMasuk]')");
//
?>
<tr>
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo $b[IdBiaya]; ?></div></td>
<td><div align="left"><? echo $b[NamaBiaya]; ?></div></td>
<td><div align="center"><?
if($iai){
echo "ok-$b[id]";
}else{
echo "-";
}
?></div></td>
</tr>
<?
$no++; } ?>
</table>
</div>
</body>
</html>