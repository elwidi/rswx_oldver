<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jkjk_jhj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($jkjk_jhj);
if(!$ii[id]){
header("Location:./j.php");
}
  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==14 || $a[Level]==9){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
	font-size: 18px;  color: #333333;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000; }

-->
</style>
</head>
<body>
<div align="center">
<form action="e.php">
  <table border="0" align="left" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
  <tr class="style2">
  <td width="494" colspan="3"><div align="center">
    DETIL DATA PASIEN<br />
  <?
echo strtoupper($ii[NamaPasien]);
echo " ( $ii[MstKey] ) ";
?>
  </div></td>
  </tr>
  <tr>
    <td colspan="3"><span class="style4">.</span></td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style4">
  <tr>
  <td width="155">NO RM</td>
  <td width="8"><strong>:</strong></td>
  <td width="414"><div align="left"><? echo $ii[NoPasien]; ?></div></td>
  </tr>
  <tr>
  <td>NAMA PASIEN</td><td><strong>:</strong></td><td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
  </tr>
  <tr>
    <td>PENJAMIN</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo strtoupper($ii[NamaPer]); ?></div></td>
  </tr>
  <tr>
  <td>DOKTER</td><td><strong>:</strong></td>
  <td><div align="left"><? echo $ii[KetDokter]; ?></div></td>
  </tr>
  <tr>
  <td>TGL MASUK</td><td><strong>:</strong></td>
  <td><div align="left"><? echo "$ii[TglMasuk]/$ii[BlnMasuk]/$ii[ThnMasuk]"; ?></div></td>
  </tr>
  <tr>
  <td>JAM MASUK</td><td><strong>:</strong></td>
  <td><div align="left"><? echo $ii[JamMasuk]; ?></div></td>
  </tr>
 <tr>
  <td>TYPE BAYAR</td><td>:</td><td><div align="left">
  <?
$bala=3;
include "../type_bayar.php";
?>
  </div></td>
  </tr>
  <tr>
  <td colspan="3" bgcolor="#D4D0C8"><div align="center">
    JENIS BAYAR : <? 
$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$iin'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]); ?>
  </div></td> 
  </tr>
   <?
 ?>
  <!-- <tr>
<td>JENIS DP</td><td>:</td><td><div align="left">
<select name="JenisDp" class="style5">
<option value="0">DP</option>
<option value="1">PULANG</option>
</select>
</div></td>
</tr>
-->
    
  <tr>
  <td>TUNAI</td><td><strong>:</strong></td>
  <td><div align="left">
    <input type="text"  name="Tunai" class="style5" size="14" maxlength="14" value="<? echo $Tunai; ?>">
    <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="iin" value="<? echo $iin; ?>">
  </div>
  <input type="hidden" name="nil" value="<? echo $nil; ?>"></td>
  </tr>
  <tr>
  <td>KK</td><td>:</td><td><div align="left">
  <input type="text" name="Kk" class="style5" size="14" maxlength="14" value="<? echo $Kk; ?>">
  </div></td>
  </tr>
  <tr>
  <td>DB</td><td>:</td><td><div align="left">
  <input type="text" name="Db" class="style5" size="14" maxlength="14" value="<?  echo $Db; ?>">
  </div></td>
  </tr>
    
  <tr>
  <td>JAM</td><td>:</td><td><div align="left">
  <?
if($Tag>0){
?>
  <input type="text" name="JamP" class="style5" size="14" maxlength="14" value="<? echo $Tag; ?>"><? 
}else{
?>
  <input type="text" name="JamP" class="style5" size="14" maxlength="14" value="<? echo $Jam2; ?>">
  <? } ?>
  </div></td>
  </tr>
  <tr>
  <td>KETERANGAN</td><td>:</td><td><div align="left">
  <textarea rows="3" cols="30" name="Keterangan"><? echo "SETORAN RAWAT INAP : $ii[NoPasien] AN: $ii[NamaPasien]"; ?></textarea>
  </div></td>
  </tr>
  <tr>
  <td colspan="3"><div align="center">
    <input type="radio"  name="we" value="0" checked="checked"> DP
    || <input type="radio" name="we" value="1"> Pulang   
  </div></td>
  </tr>
    </table>
  </div>  </td>
  </tr>
  
  <tr>
  <td colspan="3"><div align="center">
  <input name="fgf" type="submit" class="style5" value="Proses" > 
   
    <input type="button" name="fggf" value="Selesai" onClick="window.close()" class="style5">
  </div></td>
  </tr>
  
  </table>
</form>
</div>
</body>
</html>
<?
}else{
header("Location:../keluar.php");
}
?>
