<?php
session_start();
include "../konek.php";
include "../ceke.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><style type="text/css">
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
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1"> 
<tr  class="style1">
<td width="446" colspan="3"><div align="left">
LIST DATA transfer<br />
<?
echo $x[NamaPasien]; echo "($x[NoPasien])";
?>
</div></td>
</tr>
<tr>
  <td colspan="3" valign="top">
  <div align="left">
  <table width="407" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="24" height="19" bgcolor="#990000"><div align="center"><span class="style3">No</span></div></td>
  <td width="37" bgcolor="#990000"><span class="style3">Tgl</span></td>
  <td width="58" bgcolor="#990000"><div align="center" class="style3">Jam</div></td>
  <TD width="188" bgcolor="#990000"><span class="style3">Kelas</span></TD>
  <TD width="104" bgcolor="#990000"><div align="right" class="style3">Rp</div></TD>
  </tr>
  <?
  $nomer=1;
  $kdfdkjfkd = mysql_query("SELECT * FROM transfer WHERE IdMasuk='$id'");
  while($vv = mysql_fetch_array($kdfdkjfkd)){
  $pc = $nomer%2;
  if($pc==1){
  $warna='';
  }else{
    $warna='bgcolor="#A8F68D"';
  }
  if($Detil==$vv[id]){
  ?>
  <form action="ddf_F.php">
  <tr>
  <td colspan="5"><div align="left">
  Rp<input type="text" name="RpPerKamar" value="<? echo $vv[RpPerKamar]; ?>" maxlength="14" size="12" class="style2"> Alasan
  <input type="text" name="Alasan" maxlength="255" size="12" class="style2">
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="Detil" value="<? echo $Detil; ?>">
  <input type="submit" value="&gt;&gt;&gt;" class="style2" style="background:#CCFF33">
  <input  type="button" name="fgf" value="&lt;&lt;&lt;" onClick="location.href='n78.php?id=<? echo $id; ?>';" class="style2"  style="background:#CCFF33">
  </div></td>
  </tr>
  </form>
  <?
  }else{
  ?>
  <tr <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='x2ww.php?id=<? echo $id; ?>&Detil=<? echo $vv[id]; ?>';" >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo "$vv[tgl]-$vv[bln]-$vv[thn]"; ?></div></td>
  <td><div align="center"><? echo $vv[jam]; ?></div></td>
  <td><div align="left"><? echo $vv[NamaKelas]; ?></div></td>
  <td><div align="right"><? echo number_format($vv[RpPerKamar]); ?></div></td> 
  </tr>
<? } ?>
  <?
  $nomer++; } ?>  <tr>
    <td colspan="5" bgcolor="#990000">&nbsp;</td>
    </tr>
  </table>
  </div>
  </td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>