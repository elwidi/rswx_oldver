<?php 
 session_start();
 include "../konek.php";
 include "../ceke.php";
 $biX = date("m")-0;
 $hiX= date("d")-0;
 $tiX= date("Y")-0;
 //
  $umurnya = mysql_query("SELECT 	NoPasien,JenisKelamin,tgllhr FROM datapasien WHERE id='$id'");
 $k=mysql_fetch_array($umurnya);
  //
$kjdfkdjkd_0909090s= mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$k[NoPasien]' AND TglMasuk='$hiX' AND BlnMasuk='$biX' AND ThnMasuk='$tiX'");
$yg = mysql_fetch_array($kjdfkdjkd_0909090s);

if($yg[id]){
/*
 echo "MAAF PASIEN SUDAH DIDAFTARKAN  <br>
 TGL : $yg[TglMasuk]-$yg[BlnMasuk]-$yg[ThnMasuk] OLEH "; ?><font color="#990000"><b><i> <? echo "$yg[Operator]"; ?></i></b></font><? 
 echo "<br>$yg[JamMasuk] KE POLI : $yg[Bagian]<br> DOKTER : $yg[NamaDokter]<br>";
*/
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 29px;
	font-weight: bold;
	color: #990000;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 29px;
	font-weight: bold; color:#006633
	
}
.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #0000CC;
}
-->
</style>
</head>
<body>
<div align="left">
<table width="796" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="788" height="34" colspan="3"><div align="left" class="style1">
KONFIRMASI DATA PERINGGATAN !!!......
</div></td>
</tr>
<tr>
<td height="79" colspan="3" valign="top">
<div align="left">
<span class="style2">PASIEN INI SUDAH DIDAFTARKAN</span> <BR>
<?
echo "TGL : $yg[TglMasuk]-$yg[BlnMasuk]-$yg[ThnMasuk] OLEH "; ?><font color="#990000"><b><i> <? echo "$yg[Operator]"; ?></i></b></font><? 
 echo "<br>$yg[JamMasuk] KE POLI : $yg[Bagian]<br> DOKTER : ";?>
 <font color="#003333"><b><u>
 <?  echo "$yg[NamaDokter]<br>";
?></u></b></font>
</div></td>
 </tr>
</table>
</div>
</body>
</html>
<?
 }else{
 header("Location:./sabar_ya.php?id=$id&NamaPoli=%");
 }
 ?>
 <br>
 <input type="button" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="fgfgf" value="Lanjut >>>" onClick="location.href='sabar_ya.php?id=<? echo $id; ?>';" class="style3">
  <input type="button" name="fggff" value="Kembali<<<"  onClick="location.href='index.php';" class="style3" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >  