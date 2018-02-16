<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdkldklfdfd  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($kjdkldklfdfd);
//
$kddkidkdkdk_Fgf = mysql_query("SELECT id,NoResep FROM rj_resep WHERE id='$IdResep'");
$yh = mysql_fetch_array($kddkidkdkdk_Fgf);
 if(!$yh[id]){
header("Location:../keluar2.php");
}elseif(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	
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
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="909" colspan="3"><div align="left" class="style1">
RETUR PENGELUARAN OBAT<br /><?
echo "$ii[RegId]";
?><br>
<?
echo strtoupper($ii[NamaPasien]); echo "("; 
echo $ii[NoPasien];  echo ")";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="DFFGFGF" value="Selesai" onClick="window.close()" style="background:#FF9900">
<input type="button" name="DFFGFGF" value="Cetak Bukti" onClick="location.href='f_f2322.php?id=<? echo $id; ?>&NoResep=<? echo $yh[NoResep]; ?>';" style="background:#FF9900">

</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="1" bordercolor="#FFCCCC" class="style22">
 <tr>
 <td width="17" bgcolor="#D4D0C8"><strong>NO</strong></td>
 <td width="243" bgcolor="#D4D0C8"><strong>NAMA OBAT</strong></td>
 <td width="49" bgcolor="#D4D0C8"><div align="center"><strong>QTY</strong></div></td>
 <td width="51" bgcolor="#D4D0C8"><strong>TOTAL</strong></td>
 <td width="38" bgcolor="#D4D0C8"><strong>RETUR</strong></td>
  <td width="38" bgcolor="#D4D0C8"><strong>NILAI</strong></td>
  <td width="366" bgcolor="#D4D0C8"><strong>ALASAN</strong></td>
 </tr>
 <?
 $nomer=1;
 $ldlkdlfd_0 = mysql_query("SELECT * FROM jualobat WHERE JamTran='$yh[NoResep]'");
 while($vv = mysql_fetch_array($ldlkdlfd_0)){
 //
 $ksiskik = mysql_query("SELECT * FROM returobatjalan WHERE IdJual='$vv[id]'");
 $pp = mysql_fetch_array($ksiskik);
 if($anak==$vv[id] && !$pp[id]){
 ?>
 <form action="d_ff.php">
 <tr valign="top" bgcolor="#FFFFCC">
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo strtoupper($vv[NamaObat]); ?></div></td>
 <td><div align="center"><? echo $vv[Qty]; ?></div></td>
 <td ><div align="left"><input name="Retur" type="text" class="style22" size="5" maxlength="10" >
  </div></td>
  <td colspan="4"><div align="left">
  <textarea name="Alasan" cols="40" rows="3" class="style22">Pembatalan Transaksi No:<? echo $yh[NoResep]; ?></textarea>
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="IdJual" value="<? echo $vv[id]; ?>">

  <input type="hidden" name="IdResep" value="<? echo $IdResep; ?>">
  <br>
  <input type="submit" value="Retur" name="ffg" class="style22">
  <input type="button" name="fgfg" value="Reset" onClick="location.href='d_Dfd.php?id=<? echo $id; ?>&IdResep=<? echo $IdResep; ?>';" class="style22">
  </div></td> </tr>
  </form>
 <? 
 
 }else{
 ?>
 <tr valign="top"  <?
 if($pp[id]){ ?> bgcolor="#CCFFCC"<? }else{
 ?>onClick="wCompare3p90_0 = window.open('a_0a.php?NoResep=<? echo $NoResep; ?>&id=<? echo $id; ?>&IdDetil=<? echo $vv[id]; ?>', 
  'wCompare3p90_0', 'width=480,height=400,left=370,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3p90_0.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   <? } ?> >
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo strtoupper($vv[NamaObat]); ?></div></td>
 <td><div align="center"><? echo $vv[Qty]; ?></div></td>
 <td><div align="right"><? echo number_format($vv[JmlHargaBeli]);
 $ty = $ty+$vv[JmlHargaBeli]; ?></div></td>
 <td><div align="center"><? 
 echo $pp[Qty]; ?></div></td>
 <TD><div align="right"><?
 echo number_format($pp[Total]);
 $tyR= $tyR + $pp[Total];
 ?></div></TD>
 
 <td><div align="left"><?
 echo $pp[Alasan]; 
 ?></div></td> 
 </tr>
 <? } ?>
 <?
 $nomer++; } ?> <tr>
   <td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
   <td bgcolor="#D4D0C8"><div align="right"><strong>
     <?
   echo number_format($ty);
    ?>
   </strong></div></td>
   <td colspan="2" bgcolor="#FFCCCC"><div align="right"><?
   echo number_format($tyR); ?></div></td>
   </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>