<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
//
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE id='$ela'");
$mm = mysql_fetch_array($kju);
//
 $jkop = mysql_query("SELECT COUNT(id) AS kk FROM sublab_2 WHERE IdBiaya='$mm[IdBiaya]-$mm[IdSubLab]'");
$ada = mysql_fetch_array($jkop);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 && $ada[kk]>0){
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;color: #FFFFFF}
-->
</style>
</head>
<body bgcolor="#CCCC99">
<div align="center">
<form action="12_as.php">
  <div align="left">
    <table border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="3"><div align="center"><strong>
          UPDATE DATA SUB SUB LAB<br />
          <?
echo strtoupper($mm[NamaBiaya]);
?>
          </strong></div></td>
    </tr>
      <tr>
        <td colspan="3" bgcolor="#CCFF99"><div align="center"><span class="style1">
		<input name="fg" type="submit" class="style1" value="Update Semua Lakukan Klik Disini" style="background:#FFFFFF">
		<input type="hidden" name="fito" value="<? echo $fito; ?>">
		<input type="hidden" name="ceka" value="<? echo $ceka; ?>">
		<input type="hidden" name="ela" value="<? echo $ela; ?>">
		</span></div></td>
    </tr>
      <tr valign="top">
        <td colspan="3">
          <div align="left">
            <table border="1" bgcolor="#666666" class="style1">
              <tr>
                <td bgcolor="#000000"><span class="style2">NO</span></td><td bgcolor="#000000"><span class="style2">NAMA PEMERIKSAAN</span></td><td bgcolor="#000000"><span class="style2">HASIL</span></td><td bgcolor="#000000"><span class="style2">NILAI NORMAL</span></td><td bgcolor="#000000"><span class="style2">SATUAN</span></td><td bgcolor="#000000"><span class="style2">KETERANGAN</span></td>
    </tr>
              <?
$nomer=1;
$FDFDDDF = mysql_query("SELECT * FROM sublab_2  WHERE IdBiaya='$mm[IdBiaya]-$mm[IdSubLab]'");
while($xx = mysql_fetch_array($FDFDDDF)){
  $kunci="$ela-$xx[id]";
   $kdkkd = mysql_query("SELECT * FROM cetak_hasil_sublab WHERE IdSubLab='$kunci'");
  $ii = mysql_fetch_array($kdkkd);
?>
              <tr>
                <td ><div align="center" class="style3"><? echo $nomer; ?></div></td>
    <td ><div align="left" class="style3"><? echo strtoupper($xx[NamaBiaya]); ?></div></td>
	<td><div align="left">
	<input type="text" name="Hasil_<? echo $xx[id]; ?>" maxlength="80" size="20" value="<?
	 if($ii[id]){
	echo $ii[Hasil];
	}else{
	echo $xx[Hasil];
	} ?>" class="style1">
	</div></td>
	<td><div align="left">
	<input type="hidden" name="NilaiNormal_<? echo $xx[id]; ?>" maxlength="80" size="20" value="<?
	 if($ii[id]){
	 echo $ii[NilaiNormal];
	 }else{
	  echo $xx[NilaiNormal];
	  } ?>" class="style1">
	</div></td>
		<td><div align="left">
	<input type="hidden" name="Satuan_<? echo $xx[id]; ?>" maxlength="80" size="20" value="<?
	 if($ii[id]){
	 echo $ii[Satuan]; 
	 }else{
	  echo $xx[Satuan]; 
	  }?>" class="style1">
	</div></td>
		<td><div align="left">
	<input type="hidden" name="Keterangan_<? echo $xx[id]; ?>" maxlength="80" size="20" value="<? 
	 if($ii[id]){
	echo $ii[Keterangan]; 
	 }else{
	echo $xx[Keterangan];
	} ?>" class="style1">
	</div></td>
    </tr>
          
              <?
$nomer++; } ?>
               <tr>
                <td colspan="6" bgcolor="#000000">&nbsp;</td>
              </tr>   </table>
    </div>    </td>
    </tr>
    </table>
  </div>
</form> 
</div>
</body>
</html>
<? 
 }else{
 
 }
 ?>
