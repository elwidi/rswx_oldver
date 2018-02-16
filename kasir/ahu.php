<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
  }
.style3 {
	color: #0000CC;
	font-style: italic;
	font-size: 12px;}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
 
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="27" bgcolor="#ECE9D8"><div align="center"><strong>NO</strong></div></td>
<td width="38">REC NO</td>
<td width="59" bgcolor="#ECE9D8"><strong>TGL</strong></td>
<td width="74" bgcolor="#ECE9D8"><strong>NO RM</strong></td>
<td width="121" bgcolor="#ECE9D8"><strong>NAMA PASIEN</strong></td>
<td width="134" bgcolor="#ECE9D8"><strong>JENIS</strong></td>
<td width="134" bgcolor="#ECE9D8"><strong>BERITA</strong></td>
<td width="132" bgcolor="#ECE9D8"><strong>OPR </strong></td> 
</tr>
<?
$nomer=1;
$kdjkfdkfdfdf = mysql_query("SELECT * FROM akti_perawat order by id desc limit 0,50");
while($nn = mysql_fetch_array($kdjkfdkfdfdf)){
$na = $nomer%2;
if($na==1){
$warna='bgcolor="#D3FDBB"';
}else{
$warna='';
} 
if($nn[Jenis]==1){
$class='class="style3"';
}else{
$class='';
}
if($nn[IdOpr]==$a[id]){
?><tr <? echo $class; ?> valign="top" <? echo $warna; ?> onClick="wCompare_9998jjjj = window.open('cdddfd_Df.php?id=<? echo $nn[id]; ?>',  
  'wCompare_9998jjjj', 'width=680,height=200,left=300,Top=150, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_9998jjjj.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >
<? }else{
?><tr <? echo $warna; ?> ><?
} ?><td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="center">#<? echo $nn[id]; ?></div></td>
<td><div align="left"><? echo "$nn[Tgl]-$nn[Bln]-$nn[Thn]"; ?></div></td>
<td><div align="left"><? echo $nn[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaPasien])); ?></div></td>
<td><div align="left"><? if($nn[Jenis]==1){
echo "Rawat Jalan";
}elseif($nn[Jenis]==2){
echo "Rawat Inap";
}else{
echo "?";
} ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Keterangan])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Nama])); ?></div></td>
</tr>
<?
$nomer++; } ?><tr valign="top" <? echo $warna; ?> >
  <td colspan="8" bgcolor="#ECE9D8"><span class="style3">.</span></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>