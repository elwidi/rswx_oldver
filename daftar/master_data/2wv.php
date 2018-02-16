<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jhsdjshjds  = mysql_query("SELECT * FROM alasanbatal WHERE id='$id'");
$xx = mysql_fetch_array($jhsdjshjds);
 if($a[Level]==2){?>
 <html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #66CC00;
}
-->
</style>
</head>
<body>
<div align="left">
<?
if($xx[id]){
?><form action="ed_sd.php"><? 
}else{
?>
<form action="ed_d.php">
<? } ?>
<table width="1219" border="0" cellpadding="2" cellspacing="2">
 <tr bgcolor="#58BB4F"class="style1">
<td colspan="3" ><img src="../../gambar/pendaftaran.gif"></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style2">
  <?
 include "../../kucrit.php"; 
?>
  .</div></td>
</tr>
<TR>
<td colspan="3"   valign="top">
<div align="left">
<table width="1134" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="402"><div align="left">
<table width="411" border="0" cellpadding="1" cellspacing="1" >
<tr valign="top">
<td width="103" height="69"><span class="style1">ALASAN</span></td>
<td width="10">:</td>
<td width="275"><div align="left">
<textarea name="Alasan" cols="35" rows="4" class="style1"><? echo $xx[Alasan]; ?></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fgf" type="submit" class="style1" value="Simpan">
<input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="ffg" type="button" class="style1" onClick="location.href='../index.php';" value="Selesai">
</div></td>
</tr>
</table>
</div></td>
<td width="718"><div align="left">
<table width="722" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="29" bgcolor="#58BB4F"><strong>NO</strong></td>
<td width="431" bgcolor="#58BB4F"><strong>ALASAN</strong></td>
<td width="125" bgcolor="#58BB4F"><strong>OPR</strong></td>
<td width="107" bgcolor="#58BB4F"><strong>TGL JAM</strong></td>
</tr>
<?
$nomer =1;
$kdjfdkfjkdf = mysql_query("SELECT * FROM alasanbatal ORDER BY id DESC");
while($bb = mysql_fetch_array($kdjfdkfjkdf)){
?>
<tr  onClick="location.href='2wv.php?id=<? echo $bb[id]; ?>'" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($bb[Alasan]); ?></div></td>
<td><div align="left"><? echo strtoupper($bb[Opr]); ?></div></td>
<td><div align="left"><? echo $bb[TglJam]; ?></div></td>
</tr>
 <?
$nomer++; } ?><tr>
  <td colspan="4" bgcolor="#58BB4F">&nbsp;</td> 
  </tr>
</table>
</div></td>
</tr>
</table>
</div>
</td>
</TR>
</table>
</form>
</div>
</body>
</html> 
<? 
}
?>