<?
session_start();
include "../konek.php";
include "../ceke.php";
$bln1=$bln1-0;
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
.style9 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div align="left" class="style10">
LAPORAN TRANSAKSI PER KELAS
<br>
PERIODE : <?
echo "$tgl1 sd $tgl2 ";
$bln=$bln1;
include "../bulan.php";
 ?> </div></td>
</tr>
<tr>
  <td colspan="3">
    <span class="style11"><A href="index.php" style="text-decoration:none">KEMBALI</A> || 
	<a href="j_0kkj.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none">DETIL </a>
	|| 
    <a href="a2n.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none">PER KELAS</a> || 
    <a href="#" style="text-decoration:none">GLOBAL</a></span> </td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="1">
<tr>
<td width="56" bgcolor="#999999"><div align="center"><span class="style9">NO</span></div></td>
<td width="220" bgcolor="#999999"><span class="style9">KELAS</span></td>
<td width="85" bgcolor="#999999"><div align="center" class="style9">JML<BR />
  TXN</div></td>
</tr>
<?
$nomer=1;
$kdkdf = mysql_query("SELECT * FROM kelas ORDER BY KodeKelas");
while($vv = mysql_fetch_array($kdkdf)){
?>
<tr onClick="wCompare = window.open('bts_d.php?id=<? echo $vv[id]; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; 
?>&bln1=<? echo $bln1;?>&thn1=<? echo $thn1; ?>', 
  'wCompare', 'width=580,height=380,left=270,Top=20,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style9">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $vv[NamaKelas];
   ?></div></td>
<td><div align="center"><?
   $kjfkfogfgdfdfdf= mysql_query("SELECT COUNT(id) AS jj from txninap3 where NamaKelompok='Radiologi' AND Kelas='$vv[NamaKelas]' AND Tgl<=$tgl2 AND Tgl>=$tgl1 AND Bln=$bln1 AND Thn=$thn1");
 $ya = mysql_fetch_array($kjfkfogfgdfdfdf);
if($ya[jj]>0){
echo $ya[jj];
}else{
echo "-";
}
?></div></td>
</tr>

<?
$trt=$trt+ $ya[jj];
$nomer++; } ?>
<tr>
  <td colspan="2" bgcolor="#999999"><div align="center">TOTAL</div></td>
  <td bgcolor="#999999"><div align="center"><? echo number_format($trt); ?></div></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body> 
</html>