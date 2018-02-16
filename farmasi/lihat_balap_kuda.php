<?
session_start();
include "../konek.php";
include "../salaman.php";
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
.style21 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="463" colspan="3"><div align="left">
<span class="style1">HALAMAN UPDATE TRANSAKSI OBAT</span><br />
<table border="0" cellpadding="1" cellspacing="1" class="style21">
<tr>
<td width="107">NO RM</td>
<td width="3">:</td>
<td width="143"><div align="left"><? echo $ii[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style21">
<tr>
<td width="18" bgcolor="#FFCCCC"><strong>NO</strong></td>
<td width="138" bgcolor="#FFCCCC"><strong>NO RESEP</strong></td>
<td width="75" bgcolor="#FFCCCC"><strong>TGL</strong></td>
<td width="39" bgcolor="#FFCCCC"><div align="center"><strong>ITEM</strong></div></td>
<td width="156" bgcolor="#FFCCCC"><div align="left"><strong>UNIT</strong></div></td>
</tr>
<?
$nomer=1;
$kdjfkdjkfd = mysql_query("SELECT * FROM ri_resep WHERE IdPasien='$ii[id]'");
while($dd = mysql_fetch_array($kdjfkdjkfd)){
?>
<tr  

  onClick="wCompare0_79sss = window.open('x12_2.php?IdDetil=<? echo $dd[id]; ?>&id=<? echo $id; ?>', 
  'wCompare0_79sss', 'width=380,height=150,left=100,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare0_79sss.focus();" 
	
	
 onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div  align="left"><?  echo $dd[NoResep]; ?></div></td>
<td><div align="left"><? echo "$dd[Tg]-$dd[Bl]-$dd[Th]"; ?></div></td>
<td><div align="center"><? 
 
$lkdklfkdlfd_Dfdfdlf = mysql_query("SELECT COUNT(id) as jj FROM jualobat2 WHERE JamTran='$dd[NoResep]'");
$dapat  = mysql_fetch_array($lkdklfkdlfd_Dfdfdlf);
echo number_format($dapat[jj]);
 
 ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($dd[NamaUnit])); ?></div></td>
</tr>
<?
$nomer++; } ?> 
</table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>