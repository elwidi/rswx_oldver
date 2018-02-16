<?
session_start();
include "../konek.php";
include "../salaman.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){

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
	font-size: 12px;
}

-->
</style><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
</head>
<body>
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2"> 
<tr>
<td width="496" colspan="3"><div align="left" class="style1">
LIST DATA SATUAN <br>
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="114">NAMA SATUAN </td>
<td width="4">:</td>
<td width="347"><div align="left">
<input type="text" name="NamaSatuan" maxlength="30" size="20" class="style2">
<input type="hidden" name="mas" value="2">
 </div></td>
</tr>
<tr>
<td colspan="3" ><div align="left">
<input type="submit" value="Submit" name="fgf" class="style2">
<input type="button" name="fgf" value="Tambah"   class="style2" onClick="wCompare = window.open('u7.php', 
  'wCompare', 'width=380,height=200,left=420,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
<input type="button" name="fgf" value="Kembali" onClick="location.href='index.php';" class="style2">
</div></td>
</tr>
</table>
 </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="498" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="17" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="229" bgcolor="#D4D0C8"><strong>NAMA SATUAN </strong></td>
<td width="117" bgcolor="#D4D0C8"><strong>OPR</strong></td><td width="105" bgcolor="#D4D0C8"><strong>TGLJAM</strong></td>
</tr>
<?
$nomer =1;
if($mas==2){
$kdjfkdjd = mysql_query("SELECT * FROM satuan WHERE NamaSatuan LIKE '$NamaSatuan%' ORDER BY NamaSatuan");
}else{
$kdjfkdjd = mysql_query("SELECT * FROM satuan ORDER BY id DESC");
}
while($mm = mysql_fetch_array($kdjfkdjd)){
$par = $nomer%2;
if($par==1){
$warna=' bgcolor="#FFCC99"';
}else{
$warna=' bgcolor="#C0FED5"';
}
?>
<tr valign="top" <? echo $warna; ?> onClick="wCompare = window.open('u7.php?id=<? echo $mm[id]; ?>', 
  'wCompare', 'width=380,height=200,left=420,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($mm[NamaSatuan]); ?></div></td>
<td><div align="left"><? echo strtoupper($mm[Opr]); ?></div></td>
<td><div align="left"><? echo $mm[TglJam]; ?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="4" bgcolor="#D4D0C8">&nbsp;</td>
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
<?
}else{} ?>
