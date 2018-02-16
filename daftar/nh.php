<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<table  border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="238" colspan="3"><div align="left" class="style1">
LIST PILIHAN
</div></td>
</tr>
<TR>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr  onClick="location.href='d9.php?apa=2';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td width="21">1</td>
<td width="189">DAFTAR BARU </td>
</tr>
<tr  onClick="location.href='d9.php?apa=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td>2</td>
  <td>RAWAT JALAN </td>
</tr>
<tr  onClick="location.href='d9.php?apa=4';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td>3</td>
  <td>RAWAT INAP </td>
</tr>
<tr  onClick="location.href='d9.php?apa=5';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td height="20">4</td>
  <td>BOOKING PASIEN </td>
</tr>
<tr  onClick="location.href='d9.php?apa=6';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td height="20">5</td>
  <td>PASIEN BATAL </td>
</tr>
</table>
</div>
</td>
</TR>
</table>
</div>
</body>
</html>