<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $kdjfkdkfd  = mysql_query("SELECT * FROM txnrad WHERE id='$id'");
 $ya = mysql_fetch_array($kdjfkdkfd);
 if(!$ya[id]){
echo "DATA TIDAK DIKENAL "; }else{
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="1">
<tr>
<td width="471" colspan="3"><div align="left" class="style1">
LIST DATA TRANSAKSI RADIOLODI<br />
<?
echo $ya[RegId];
?><br />
<?
echo $ya[NamaPasien];
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table   border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="23" bgcolor="#6699CC"><span class="style3">NO</span></td>
<td width="342" bgcolor="#6699CC"><span class="style3">NAMA BIAYA</span></td>
<td width="86" bgcolor="#6699CC"><div align="right" class="style3">HARGA</div></td>
</tr>
<?
$nomer=1;
$kdjfkdlfd  = mysql_query("SELECT * FRom txnjalan WHERE RegId='$ya[RegId]'");
while($up = mysql_fetch_array($kdjfkdlfd)){
?>
<tr valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $up[NamaBiaya]; ?></div></td>
<td><div align="right"><? echo number_format($up[Harga]); ?></div></td>
</tr>
<?
$tot = $tot  + $up[Harga];
?>

<?
$nomer++; } ?><tr>
  <td colspan="2" bgcolor="#6699CC"><div align="center">
    <span class="style3">TOTAL</span></td>
  <td bgcolor="#6699CC"><div align="right" class="style3">
    <?
  echo number_format($tot); 
  ?>
  </div></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>