<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$hari = $_GET["hari"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-size: 9px}
-->
</style>
</head>
<body>
<div align="left">
<form action="d878.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="86"><span class="style1">NAMA</span></td>
<td width="3">:</td>
<td width="242"><div align="left">
<input name="NamaDokter" type="text" class="style1" size="20" maxlength="30" />
<input type="hidden" name="hari" value="<? echo $hari; ?>">
</div></td> 
</tr>
<tr>
  <td colspan="3"><span class="style2">.</span></td>
  </tr>
<tr>
  <td colspan="3"><div align="left">
  <input name="fgf" type="submit" class="style1" value="Cari">
  <input name="ff" type="button" class="style1" onClick="window.close()" value="Selesai">
  </div></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>