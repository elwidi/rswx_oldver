<?
session_start();
include "../konek.php";
include "../ceke.php";
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
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="397" colspan="3"><div align="left" class="style1">
LIST AKTIFITAS USER DISITEM BARU <br />
UNIT LABORATORIUM
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="24" bgcolor="#ECE9D8"><strong>NO</strong></td>
<td width="142" bgcolor="#ECE9D8"><strong>USER</strong></td>
<td  colspan="2"width="80" bgcolor="#ECE9D8"><div align="center"><strong>AKTIFITAS</strong></div></td>
 </tr>
<?
$nomer=1;
$kdjkfdjf = mysql_query("SELECT * FROM konco WHERE KodeBagian='19'");
while($xx = mysql_fetch_array($kdjkfdjf)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $xx[User]; ?></div></td>
<td><div align="center"><? 
$kdjkjdkfd = mysql_query("SELECT COUNT(id) AS hh FROM txnjalan2 WHERE Opr='$xx[Nama]'");
$ya = mysql_fetch_array($kdjkjdkfd);
echo $ya[hh];
?></div></td>
<td><div align="center">
<a href="#" onClick="wCompare_9877 = window.open('c4fff_df.php?id=<? echo $xx[id]; ?>', 
  'wCompare_9877', 'width=580,height=500,left=270,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_9877.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">Detail</a>
</div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>