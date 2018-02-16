<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$NamaICD = $_GET["NamaICD"];
$jksksjs = mysql_query("SELECT * FROM icdx WHERE id='$id'");
$xx = mysql_fetch_array($jksksjs);
if(!$xx[id]){
header("Location:../../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
-->
</style>
</head>
<body>
<div align="left">
<form action="7y_h.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="462" height="29" colspan="3"><div align="left">
<strong>DETAIL DATA ICD</strong><br />
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="121">ICD_CODE</td>
  <td width="4"><strong>:</strong></td>
  <td width="314"><div align="left">
  <input name="ICD_CODE" type="text" class="style2" size="20" maxlength="20" value="<? echo $xx[ICD_CODE]; ?>">
  </div></td>
  </tr>
  <tr>
    <td>TERMINAL_CODE </td>
    <td><strong>:</strong></td>
    <td><div align="left">
        <input name="TERMINAL_CODE" type="text" class="style2" size="20" maxlength="20" value="<? echo $xx[TERMINAL_CODE]; ?>">
    </div></td>
  </tr>
  <tr valign="top">
    <td>DESCRIPTION </td>
    <td><strong>:</strong></td>
    <td><div align="left">
        <textarea name="DESCRIPTION" cols="40" rows="3" class="style2"><? echo $xx[DESCRIPTION]; ?></textarea>
		<input type="hidden" name="id" value="<? echo $id; ?>">
    </div></td>
  </tr>
  <tr  valign="top">
    <td>TERJEMAHAN </td>
    <td><strong>:</strong></td>
    <td><div align="left">
        <textarea name="TERJEMAHAN" cols="30" rows="3" class="style2"><? echo $xx[TERJEMAHAN]; ?></textarea>
    </div></td>
  </tr>
   <tr>
    <td>KATEGORI </td>
    <td><strong>:</strong></td>
    <td><div align="left">
        <input name="KATEGORI" type="text" class="style2" size="20" maxlength="20" value="<? echo $xx[KATEGORI]; ?>">
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><span class="style4">.</span></td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">
<input type="submit" value="Update : Rec#<? echo $id; ?>" name="fgf" class="style2" style="background:#FFCCCC">
<input type="button" name="fgf" value="Selesai" onClick="window.close()" class="style2" style="background:#FFCCCC">
	</div></td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</form>
</div>
</body>
</html> 
 <? 
 }else{
 
 }
?>
