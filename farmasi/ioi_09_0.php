<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$fkgjfkjgkfjgkfjgf = mysql_query("select * FROM golobat where id='$id'");
$dd = mysql_fetch_array($fkgjfkjgkfjgkfjgf);
if($a[id]>0){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
<form action="ddf_kk.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="401" colspan="3" bgcolor="#99CC66"><div align="center" class="style2">
GOLONGAN
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
<td width="127">NAMA GOLONGAN</td>
<td width="3">:</td>
<td width="251"><div align="left">
<input name="NamaGolongan"  value="<? echo $dd[NamaGolongan]; ?>"type="text" class="style1" size="30" maxlength="100" />
</div></td>
</tr>
<tr>
<td>UPPER</td><tD>:</tD><td><div align="left">
<input name="Upper" type="text" class="style1" value="<? echo $dd[Upper]; ?>" size="12" maxlength="12">
<input type="hidden" name="id" value="<? echo $id; ?>"
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input name="dfdf" type="submit" class="style1" value="Proses" />
 <input name="fgf" type="button" class="style1" onClick="window.close()" value="Selesai" />
</div></td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="center">
<table border="1" class="style1">
<tr>
<td width="18" bgcolor="#99CC66"><strong>NO</strong></td>
<td width="18" bgcolor="#99CC66"><strong>ID</strong></td>
<td width="176" bgcolor="#99CC66"><strong>NAMA GOLONGAN</strong></td>
<td width="89" bgcolor="#99CC66"><strong>UPPER</strong></td>
<td width="66" bgcolor="#99CC66"><div align="right"><strong>TGL</strong></div></td>
</tr>
<?
$nomer=1;
$kdikdidkdik = mysql_query("SELECT * FROM golobat ");
while($bb = mysql_fetch_array($kdikdidkdik)){
?>
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='ioi_09_0.php?id=<? echo $bb[id]; ?>';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $bb[id]; ?></div></td>
<td><div align="left"><? echo strtoupper($bb[NamaGolongan]); ?></div></td>
<td><div align="center"><? echo  ($bb[Upper]);  ?>%</div></td>
<td><div align="right"><? echo $bb[TglJam]; ?></div></td>
</tr>
<? $nomer++; }?><tr>
  <td colspan="5" bgcolor="#99CC66">&nbsp;</td>
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
}else{

}
?>
