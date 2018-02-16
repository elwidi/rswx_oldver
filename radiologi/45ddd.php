<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 //
 $Bus = mysql_query("SELECT * FROM txnrad WHERE id=$id");
$x = mysql_fetch_array($Bus);
if(!$x[id]){
header("Location:../keluar2.php");
}else{

 $pcp=explode("-",$x[NoTxn]);
$o9j = mysql_query("SELECT * FROM noradman WHERE NoTxn='$pcp[1]-$pcp[2]'");
$op = mysql_fetch_array($o9j);
 //echo $op[NoMan];
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
<form action="sfffc.php"> 
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="491" colspan="3"><div  align="left">
BERIKAN NOMER URUT MANUAL : 
<input name="NoMan" type="text" class="style1" size="10"  maxlength="10" value="<? echo $op[NoMan] ?>" />
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="aku" value="berdoa">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="fg" type="submit" class="style1" value="Simpan" />
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