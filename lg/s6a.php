<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header('Refresh: 2');
$sdksjksjdsk = mysql_query("SELECT * FROM bagian WHERE id='$id'");
$uy = mysql_fetch_array($sdksjksjdsk);
if(!$uy[id]){
echo "DATA BAGIAN TIDAK DIKENAL";
}else{
?>
<html>
<head><head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF00';
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
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="682" colspan="3"><div align="left" class="style1">
DETAIL DATA STOK OPNAME <br />
<?
echo $uy[NamaBagian];
?>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td width="24" bgcolor="#CCCCCC"><strong>NO</strong></td>
   <td width="53" bgcolor="#CCCCCC"><strong>TGL</strong></td>
  <td width="188" bgcolor="#CCCCCC"><strong>OBAT/ALKSE</strong></td>
  <td width="52" bgcolor="#CCCCCC"><div align="center"><strong>STOK</strong></div></td><td width="84" bgcolor="#CCCCCC"><strong>SATUAN</strong></td>
   
  </tr>
  <?
  $nomer=1; $nemer=1;
  $kdjfkdjfd_dkdfd  = mysql_query("SELECT * FROM stok_opm WHERE IdUnit='$uy[id]'");
  while($ii = mysql_fetch_array($kdjfkdjfd_dkdfd)){
  $pes = $nomer%2;
  if($pes==1){
  $warna='bgcolor="#FFCCCC"';
  }else{
  $warna='';
  } ?>
  <tr <? echo $warna; ?> >
  <td><div align="center"><?
  echo $nomer; 
  ?></div></td>
 	<td><div align="right"><? 
 	echo "$ii[Tgl]-$ii[Bln]-$ii[Thn]";
   ?></div></td>
<td><div align="left"><? echo $ii[NamaObat]; ?></div></td>
   
   <td onClick="location.href='v98.php?IdObat=<? echo $ii[IdObat]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><div align="center"><?
   $IdObat=$ii[IdObat];
   include "stok.php";
   ?></div></td>
   <td><div align="left"><? echo $ii[NamaSatuan]; ?></div></td> 
  </tr>

  <?
   $nomer++;    } ?>
   <tr>
    <td colspan="5" bgcolor="#CCCCCC"><div align="center"><strong>&nbsp;</strong></div></td>
   </tr>
 
</table>
  </div></td>
</tr>
</table>
</body>
</html>
<? } ?>