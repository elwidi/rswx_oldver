<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjkfjdkfdk = mysql_query("SELECT * FROM kelurahan WHERE id='$id'");
$hap = mysql_fetch_array($kdjfkdjkfjdkfdk);
?>
<html>
<head> <script language="JavaScript">
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
	font-size: 14px;
	font-weight: bold;
}
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
 <form action="yaya.php">
 <table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="504" colspan="3" ><div align="left" class="style1">
LIST DATA KELURAHAN
<br>
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style22">
<td width="92">Tambah</td>
<td width="8">:</td>
<td width="278"><div align="left">
<input type="text"  name="NamaKel"class="style22" size="20" maxlength="100" value="<? echo $hap[NamaKel]; ?>"><?
if($id>0){
?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<?
}
?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left"><?
if($id>0){
?>
<input type="submit" value="Update" name="kdjfkjdfd">
<?
}else{
?>
<input type="submit" value="Tambah" name="kdjfkjdfd">
<?
} ?><?
if($id>0){
?>
<input type="button" name="ddfdfdfd" value="Reset" onClick="location.href='c3ws.php';">
<?
}
?>
<input type="button" name="dkjfkdjfd" value="Selesai" onClick="window.close()">
</div></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style22">
<tr>
<td width="17" bgcolor="#990033"><span class="style2">No</span></td>
<td width="17" bgcolor="#990033"><span class="style2">ID</span></td>
<td width="198" bgcolor="#990033"><span class="style2">Nama Kelurahan</span></td>
<td width="74" bgcolor="#990033"><span class="style2">Opr</span></td>
<td width="99" colspan="2" bgcolor="#990033"><div align="center"><span class="style2">TglJam</span></div></td>
</tr>
<?
$nomer=1;
if($id>0){
$kdjfkdjkfdkfdjkfd = mysql_query("SELECT * FROM kelurahan WHERE id='$id'");
}else{
$kdjfkdjkfdkfdjkfd = mysql_query("SELECT * FROM kelurahan ORDER BY NamaKel");
}
while($nn = mysql_fetch_array($kdjfkdjkfdkfdjkfd)){
$nam = $nomer%2;
if($nam==1){
$warna='bgcolor="#CCFFCC"';
}else{
$warna='';
}
?>
<tr <? echo $warna;  ?> valign="top" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div  align="center"><? echo "#$nn[id]"; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaKel])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Opr])); ?></div></td>
<td><div align="center"><? echo $nn[TglJam]; ?></div></td>
<td    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
 onClick="location.href='c3ws.php?id=<? echo $nn[id]; ?>';"><div align="center">
Edit
</div></td>
</tr>
<?
$nomer++; } ?>
</table> 
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>