<?
session_start();
 include "../konek.php";
 include "../salaman.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 
 $Bus = mysql_query("SELECT * FROM labumum WHERE id=$id");
$x = mysql_fetch_array($Bus);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body bgcolor="#FFFF99">
<div align="left">
 <form action="23k_09k.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="7"><div align="center" class="style2">
ISIKAN HASIL PEMERIKSAAN LAB<br />
REG ID : <?
echo $x[RegId]; 
?> <br /><?
   echo strtoupper($x[NamaPasien]);   echo "($x[id])<br>";
   $ndsaw = "$x[id].$x[RegId]";
 	$djkdjkdfdw = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsaw'");
	$bfw = mysql_fetch_array($djkdjkdfdw);
	echo "($bfw[NoUrut])";
 ?>
</div></td>
</tr> 
<tr>
<td colspan="7" bgcolor="#FFFFFF"><div align="center"><span class="style1">
<input name="fgg" type="submit" class="style1" value="Upload Data Ke Form" style="background:#CCFF66">
</span></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
  <tr>
<td width="24" bgcolor="#99CCCC"><div align="center"><strong>NO</strong></div></td>
<td width="236" bgcolor="#000099"><span class="style4">NAMA BIAYA </span></td>
<td  colspan="2"width="195" bgcolor="#99CCCC"><strong>HASIL</strong></td> 
 </tr>
<?
$nomer=1;
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$x[RegId]'  ORDER BY Idsublab,id");
while($vv = mysql_fetch_array($kju)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaBiaya]); ?></div></td>
<td><div align="left">
<?
$jdkjd998 = mysql_query("SELECT id FROM sublab WHERE NamaBiaya='$vv[NamaBiaya]'");
  $xa = mysql_fetch_array($jdkjd998);
  	$jkop = mysql_query("SELECT COUNT(id) AS mm FROM sublab_2 WHERE IdBiaya='$vv[Idsublab]-$vv[IdBiaya]'");
  $sp =  mysql_fetch_array($jkop);
  if($sp[mm]>0){
  ?><input  name="Hasil_<? echo $vv[id]; ?>" type="hidden" class="style1" value="." size="20" maxlength="80">
<a href="#"  onClick="wCompare22 = window.open('32MFS.php?id=<? echo $id; ?>&IdCucu=<? echo $vv[id]; ?>', 
  'wCompare22', 'width=480,height=340,left=10,Top=134,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare22.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Isikan Pemeriksaan Hasil"   style="text-decoration:none">LIHAT DETAIL <? echo "($sp[mm])"; ?></a>
  <? 
  }else{
?><input  name="Hasil_<? echo $vv[id]; ?>" type="text" class="style1" value="<? echo $vv[Hasil]; ?>" size="20" maxlength="80">
<? } ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
   
</div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="7" bgcolor="#99CCCC">.</td>
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
}else{

}?>
