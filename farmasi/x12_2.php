<?
session_start();
include "../konek.php";
include "../salaman.php";
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
//
$kdkfjdd_Dfdfd = mysql_query("SELECT * FROM ri_resep WHERE id='$IdDetil'");
$ya =  mysql_fetch_array($kdkfjdd_Dfdfd);
if(!$ya[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head>

<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="a_98938493894.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="314" colspan="3"><div align="left" class="style1">
HALAMAN UPDATE RESEP<br />
<?
echo $ya[NoResep];
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="54">TGL</td>
<td width="8">:</td>
<td width="226"><div align="left">
<input name="TglX" type="text" class="style1" value="<? echo $ya[Tg]; ?>" size="2" maxlength="2" />
- 
<input name="Bln" type="text" class="style1" value="<? echo $ya[Bl]; ?>" size="2" maxlength="2" />
-
<input name="Thn" type="text" class="style1" value="<? echo $ya[Th]; ?>" size="4" maxlength="4" />
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">

</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="fgfgf" class="style1">
  <input  type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style1">
  </div></td>
  </tr>
</table>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>