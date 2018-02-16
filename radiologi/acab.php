<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$kjdkfjdkfkd = mysql_query("SELECT * FROM norad WHERE id='$id'");
$ik = mysql_fetch_array($kjdkfjdkfkd);
$Nomer= $ik[NoUrut];
if(!$ik[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
///////////////////////////////////////////////////////
$pf = explode("-",$ik[NoTxn]);
if($pf[0]=='RSRL'){
 $jsksj = mysql_query("SELECT MstKey,NoPasien,NamaPasien FROM txninap WHERE NoBukti='$ik[NoTxn]'");
$oo = mysql_fetch_array($jsksj);
$NoPasien=$oo[NoPasien];
///
$kjkjdf = mysql_query("SELECT NamaBagian,NamaPer,Opr,TglMasuk,BlnMasuk,ThnMasuk,JamMasuk FROM keluarmasukpasien WHERE MstKey='$oo[MstKey]'");
$nm = mysql_fetch_array($kjkjdf);
$NamaPer=strtoupper($nm[NamaPer]);
$TglMasuk="$nm[TglMasuk]/$nm[BlnMasuk]/$nm[ThnMasuk]";
$JamMasuk=$nm[JamMasuk];
$Bagian=strtoupper($nm[NamaBagian]);

//
$NamaPasien=strtoupper($oo[NamaPasien]);
$Pendaftar = strtoupper($nm[Opr]);
 $JP="RAWAT INAP";
}elseif($pf[0]=='RL'){
 $ldkldklfd = mysql_query("SELECT Opr,id,NamaPasien FROM txnrad WHERE RegId='$pf[1]-$pf[2]'");
$kk = mysql_fetch_array($ldkldklfd);
 $NoPasien= $kk[id];
  $JP="RADIOLOGI LUAR";
  $Pendaftar = strtoupper($kk[Opr]);
$NamaPasien=strtoupper($kk[NamaPasien]);
$Bagian="RADIOLOGI LUAR";

}else{
 $kj9090 = mysql_query("SELECT Bagian,Operator,JamMasuk,TglMasuk,BlnMasuk,ThnMasuk,NamaPer,NoPasien,NamaPasien FROM rwtjalan WHERE RegId='$ik[NoTxn]'");
$pp = mysql_fetch_array($kj9090);
$NoPasien=$pp[NoPasien];
$NamaPasien=strtoupper($pp[NamaPasien]);
$Bagian=strtoupper($pp[Bagian]);
 $JP="RAWAT JALAN";
 $Pendaftar = strtoupper($pp[Operator]);

 $NamaPer=strtoupper($oo[NamaPer]);
 $NamaPer=strtoupper($pp[NamaPer]);
$TglMasuk="$pp[TglMasuk]/$pp[BlnMasuk]/$pp[ThnMasuk]";
$JamMasuk=$pp[JamMasuk];
}
///////////////////////////////////////////////////////////
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
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
<table border="1">
<tr>
<td width="368" colspan="3" bgcolor="#FFCCCC"><div align="center" class="style2">
INFORMASI DATA DETAIL<br />
<?
echo $ik[NoTxn];
?>
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div  align="center">
<table width="374" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="130">JENIS PERIKSA</td>
<td width="8"><div align="center"><strong>:</strong></div></td>
<td width="210"><div align="left">
<?
echo $JP;
?>
</div></td>
</tr>
<tr>
<td>NO PERIKSA</td><td><div align="center"><strong>:</strong></div></td><td><div align="left">
<?
echo $Nomer; 
?>
</div></td>
</tr>
<tr>
<td>NO RM</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><? echo $NoPasien; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><? echo $NamaPasien; ?></div></td>
</tr>
<tr>
<td>TGL DAFTAR</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><? 
$pck = explode("-",$ik[TglJam]);
echo $pck[0];
 ?></div></td>
</tr>
<tr>
<td>JAM PROSES</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><? echo $pck[1]; ?></div></td>
</tr>
<tr>
<td>OPR</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><? echo strtoupper($ik[Opr]);?></div></td>
</tr>
<?
if($NamaPer!=''){
?>
<tr>
<td>PENJAMIN</td><td>:</td><td><div align="left"><? echo strtoupper($NamaPer); ?></div></td>
</tr>
<tr>
<td>TGL MASUK</td><td>:</td><td><div align="left"><? echo $TglMasuk; ?></div></td>
</tr>
<tr>
<td>JAM MASUK</td><td>:</td><td><div align="left"><?  echo $JamMasuk; ?></div></td>
</tr>
<?
}
?>
<tr>
<td>PENDAFTAR</td><td>:</td><td><div align="left"><? 
echo $Pendaftar;
?></div></td>
</tr>
<tr>
<td>BAGIAN</td><td>:</td><td><div align="left">
<?
echo $Bagian; 
?>
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" bgcolor="#FFCCCC">&nbsp;</td>
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
}else{

}
?>