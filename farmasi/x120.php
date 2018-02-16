 <?
session_start();
include "../konek.php";
include "../ceke.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
 $lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);
if(!$yh[id]){
echo "NOMER FAKTUR TIDAK DIKENAL,...<br>";
}elseif(!$kk[id]){
echo "DATA NOMER PO TIDAK DIKENAL,....<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="637" colspan="3"><div align="left">
<span class="style1">YAKIN TRANSKSI INI AKAN DIBUKA ?</span><BR />
<input name="DFDFD" type="button" class="style1" onClick="location.href='x_ddd.php?IdPo=<? echo $kk[id]; ?>&dimas=<? echo $yh[id]; ?>';" value="YA" />
 || <input name="fgfgfg" type="button" class="style1" onClick="window.close()" value="TIDAK" />
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>