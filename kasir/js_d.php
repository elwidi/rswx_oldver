<?
session_start();
include "../salaman.php";
 include "../konek.php";
 $Tgl=$_GET["tgl1"];
 $Bln =$_GET["bln1"];
 $Thn= $_GET["thn1"];
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
header('Refresh: 2');
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCC66';
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
.style2 {
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
<td width="833" colspan="3"><div align="left">
 <table width="361" border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td colspan="3"><div align="left">
LAPORAN HARIAN KASIR 
 RAWAT INAP </div></td>
</tr>
<tr>
<td width="103">KASIR</td>
<td width="7">:</td>
<td width="229"><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
</tr>
<tr>
<td>PERIODE</td><td>:</td><td><div align="left">
 <?
$bln=$Bln; echo "$Tgl ";
include "../bulan.php";
?>
</div></td>
</tr>
<tr>
  <td>SHIFT</td>
  <td>:</td>
  <td><?
  if($Shift==1){
  echo "SATU";
  }elseif($Shift==2){
  echo "DUA";
  }elseif($Shift==3){
  echo "TIGA";
  }else{
  echo "SEMUA";
  }
  ?></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td><div align="left">
  <span class="style1"><a href="index.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">KEMBALI</a> || 
 <a href="j_0kkj.php?Shift=<? echo $Shift; ?>&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">RWT JALAN</a> || 

  <font color="#990000"><b><i> RWT INAP</i></b></font></span></div></td>
</tr> 
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="17" bgcolor="#FFCCCC"><strong>NO</strong></td>
  <td width="47" bgcolor="#FFCCCC"><strong>NO KWT</strong></td>
  <td width="62" bgcolor="#FFCCCC"><strong>NO RM</strong></td>
  <td width="222" bgcolor="#FFCCCC"><strong>NAMA PASIEN</strong></td>
  <td width="68" bgcolor="#FFCCCC"><div align="right"><strong>DEBET</strong></div></td><td width="63" bgcolor="#FFCCCC"><div align="right"><strong>KREDIT</strong></div></td><td width="65" bgcolor="#FFCCCC"><div align="right"><strong>TUNAI</strong></div></td><td width="66" bgcolor="#FFCCCC"><div align="right"><strong>JAMINAN</strong></div></td>
   <td width="174" bgcolor="#FFCCCC"><strong>PENJAMIN</strong></td>
  </tr>
  <?
  $nomer=1;
  if($Shift>=1 && $Shift<=3){
  $kdjfkdjfd = mysql_query("SELECT * FROM penerimaandp WHERE tgl='$Tgl' AND bln='$bln1' and thn='$thn1' and Shift=$Shift");
    }else{
  $kdjfkdjfd = mysql_query("SELECT * FROM penerimaandp WHERE tgl='$Tgl' AND bln='$bln1' and thn='$thn1'");
  }
  while($zz = mysql_fetch_array($kdjfkdjfd)){
  ?>
  <tr    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? 
	if($zz[JenisDp]==1){
?><font color="#000099"><B><? 	echo "RIC:$zz[id]"; ?></B></font><? 
	}else{
	echo "RID:$zz[id]";
	}  ?></div></td>
    <td><div align="center"><? echo $zz[NoPasien]; ?></div></td>
    <td><div align="left"><? echo strtoupper($zz[NamaPasien]); ?></div></td> 
    <td><div align="right"><? echo number_format($zz[Db]);
	$to_1 = $to_1 + $zz[Db]; ?></div></td>
    <td><div align="right"><? echo number_format($zz[Kk]);
		$to_2 = $to_2 + $zz[Kk];
		 ?></div></td>
    <td><div align="right"><? echo number_format($zz[Tunai]);
		$to_3 = $to_3 + $zz[Tunai];
	 ?></div></td>
    <td><div align="right"><? echo number_format($zz[Jam]);
		$to_4 = $to_4 + $zz[Jam];
		 ?></div></td>
     <td><div align="left"><? echo strtoupper($zz[NamaPer]); ?></div></td>
  </tr>
  <?
  $nomer++; } ?>
  <tr>
    <td colspan="4" bgcolor="#FFCCCC"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($to_1); ?></strong></div></td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($to_2); ?></strong></div></td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($to_3); ?></strong></div></td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($to_4); ?></strong></div></td>
    <td bgcolor="#FFCCCC"><div align="left"><strong>
      <? 
	$to = $to_1+$to_2+$to_3+$to_4;
	echo number_format($to); ?>
    </strong></div></td>
	  </tr> 
  </table>
  </div> </td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>