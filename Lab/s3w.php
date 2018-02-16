<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header('Refresh: 2');$NamaBiaya = $_GET["NamaBiaya"];
$id = $_GET["id"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$z = $ii;
$kdjkdjkfd_Fgf = mysql_query("SELECT * FROM kwitansirj WHERE RegId='$ii[RegId]'");
$nn = mysql_fetch_array($kdjkdjkfd_Fgf);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <style type="text/css">
<!--
.style2 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style223 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style3 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
  style1554 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}       .style24 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;}
    .style26 {color: #FFFFFF}
    .style27 {
	font-size: 10px;
	font-weight: bold;
	font-style: italic;
}
    .style6 {font-size: 9px}
    </style> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
  <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
 <body>
<table width="554" border="0" cellpadding="1" cellspacing="1" class="style223">
  <tr>
  <td width="38" height="24" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
  <td width="136" bgcolor="#59BA54"><strong>NAMA BIAYA</strong></td>
  <td width="51" bgcolor="#59BA54"><div align="right"><strong>HARGA</strong></div></td>
  <td width="22" bgcolor="#59BA54"><div align="center"><strong>QTY</strong></div></td>
  <td width="122" bgcolor="#59BA54"><div align="right"><strong>TOTAL</strong></div></td>
  <td bgcolor="#59BA54" colspan="3"><strong>OPR</strong></td>
  </tr>
  <?
  $nomer =1;
   $kjdkdjf  = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$ii[RegId]'");
  while($aa = mysql_fetch_array($kjdkdjf)){
  $TglJam=date("d.m.Y-H:i:s");
  $KeyID="$aa[IdBiaya].$aa[BlnMasuk].$aa[ThnMasuk]";
$iai = mysql_query("INSERT INTO 
`lab_bulan` 
(`id`, `KeyID`, `NamaBiaya`, `Opr`, `TglJam`,  `Bln`, `Thn`) VALUES 
(NULL, '$KeyID', '$aa[NamaBiaya]', '$a[User]', '$TglJam', '$aa[BlnMasuk]', '$aa[ThnMasuk]')");
//

  //
  $kjkfdfd_Dfdfd = mysql_query("SELECT id,Stat FROM rujuk_lab WHERE IdDetil='$aa[id]'");
  $pa= mysql_fetch_array($kjkfdfd_Dfdfd);
  if($pa[id] && $pa[Stat]==0){
  $warna=' bgcolor="#FFCCCC"';
  }elseif($pa[id] && $pa[Stat]==1){
  $warna=' bgcolor="#66FF00"';
  }else{
    $warna='';
  }
  ///
  ?>
  <tr valign="top" <? echo $warna; ?>  >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo  ($aa[NamaBiaya]);?></div></td>
  <td><div align="right"><? echo number_format($aa[Harga]); ?></div></td>
  <td><div align="center"><? echo number_format($aa[Qty]); ?></div></td>
  <td><div align="right"><? echo number_format($aa[Total]); 
  $tot = $tot + $aa[Total];
  ?></div></td>
  <td width="117"><div align="left"><? echo strtoupper($aa[Opr]); ?></div></td><?
  if($nn[id]){}else{
  ?>
  <td width="46" bgcolor="#FFFF99"><a href="#" class="style2 style27" style="text-decoration:none"  onClick="wCompare3WW = window.open('U.php?id=<? echo $id; ?>&IdDetil=<? echo $aa[id]; ?>', 
  'wCompare3WW', 'width=580,height=140,left=330,Top=250,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3WW.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">HAPUS</a> </td>
	<td width="46" bgcolor="#FFFF99"><a href="#" class="style2 style27" style="text-decoration:none"  onClick="wCompare3WW_9DD = window.open('U_s.php?id=<? echo $id; ?>&IdDetil=<? echo $aa[id]; ?>', 
  'wCompare3WW_9DD', 'width=480,height=320,left=80,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3WW_9DD.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">RUJUKAN</a> </td>
    <? } ?> </tr>
 
  <?
  $nomer++; } ?> <tr>
    <td colspan="4" bgcolor="#59BA54"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#59BA54"><div align="right" class="style26"><? echo number_format($tot); ?></div></td>
  </tr>
 </table></body>
</html>
