<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];

 
$skksksk = mysql_query("SELECT * FROM konco WHERE id='$id'");
$ye = mysql_fetch_array($skksksk);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==1){
?>
<html>
<head>
</head>
<body>
<div align="left">
<form action="ER090.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="302" colspan="3"><div align="left">
SETTING DATA PASSWORD
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="102">PASSWORD LAMA</td>
<td width="3">:</td> <?  $Pae = "*************************"; //$ye[Pass];?>
<td width="189"><div align="left"><? echo "$Pae"; ?></div></td>
</tr>
<tr>
<td>RESET</td><td>:</td><td><div align="left">
<input name="PasW" type="text" id="PasW" size="15" maxlength="20" />
<input type="hidden" name="id" value="<?php  echo $id; ?>" />
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="fgf" type="submit" class="style1" value="Submit" />
<input name="fgf" type="button" class="style1" onClick="window.close()" value="Batal" />
</div></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php  
}
?>
