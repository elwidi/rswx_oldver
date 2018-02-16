<?
session_start();
include "../konek.php";
include "../hari.php";
include "../ceke.php";
 $PasieR = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
$sjdksjdksjskdds_Sdsds  = mysql_query("SELECT * FROM diet WHERE IdPasien='X.$id'");
$ha = mysql_fetch_array($sjdksjdksjskdds_Sdsds);
if(!$x[id]){
echo "RECORD SET TIDAK BENAR.....";
}elseif($FiLaDim[EmpatBelas]!='on' || $a[Level]==98){ 
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
<form action="0a_sss.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="500" colspan="3"><div align="left">
<span class="style1">INPUT DATA DIET</span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="174">NO RM</td>
<tD width="8">:</tD>
<td width="299"><div align="left"><? echo $x[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo ucfirst(strtolower($x[NamaPasien])); ?></div></td>
</tr>
<tr valign="top">
  <td>KETERANGAN DIET </td>
  <td>:</td>
  <td><div align="left">
  <textarea rows="3" cols="40" name="Diet" class="style2"><? echo $ha[Keterangan]; ?></textarea>
  <input type="hidden" name="Type" value="1">
<input type="hidden" name="id" value="<? echo $id; ?>" />
  </div></td>
</tr>
<tr valign="top">
  <td>UPDATE TERAKHIR </td>
  <td colspan="2"><div align="left"> <? 
  echo ucfirst(strtolower($ha[Opr])); echo " || $ha[Tgl] ";
  $bln=$ha[Bln]; $thn1=$ha[Thn]; 
  include "../bulan.php";
  echo " Jam : $ha[Jam]"; 
  ?></div></td>
  </tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="ffgf" class="style2" />
  <input type="button" name="fgff" value="Selesai" onClick="window.close()" class="style2" />
  </div></td>
  </tr>
</table>
</div></td>
</tr>
</table>
</form>
</div>
</body> 
</html>
<?
}else{
echo "AKSES DI TOLAK,... ";
}?>