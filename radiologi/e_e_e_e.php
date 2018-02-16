<?
session_start();
include "../ceke.php";
include "../konek.php";
if($a[Level]==16){
$jdkj = mysql_query("SELECT * FROM txnrad WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
header("Location:../keluar2.php");
}
$kiksfdfddfdik_lll = mysql_query("SELECT * FROM pasrad WHERE IdTxn ='LU.$IdBiaya'");
$c=mysql_fetch_array($kiksfdfddfdik_lll);
 //
 
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
</head><?
 ?>
<body <? if($c[id]>0){ ?> bgcolor="#CCCCFF"<? }else{ ?>bgcolor="#FFFF99"<? } ?>>

<div align="left">
<?
if($c[id]){
?>
<form action="jduj_92.php">
<? 
}else{
?>
<form action="jduj_92.php">
<? } ?>
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="543"  colspan="3" bgcolor="#C9FF93"><div align="center" class="style2">
        DETAIL DATA PASIEN RADIOLOGI LUAR <br />
        <?
echo $hh[RegId];
?>
      </div></td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="201">NO RM</td>
    <td width="3">:</td>
    <td width="291"><div align="left"><? echo $hh[NoPasien]; ?></div></td>
    </tr>
            <tr>
              <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?>
			  <input type="hidden" name="id" value="<? echo $id; ?>">
			  <input type="hidden" name="IdBiaya" value="<? echo $IdBiaya; ?>">
			  </div></td>
    </tr>
            <tr>
              <td>PEMERIKSAAN RADIOLOGI</td><td>:</td><td><div align="left">
                <?
$ksiksisk = mysql_query("SELECT NamaBiaya,KodeBiaya FROM txnjalan WHERE id='$IdBiaya'");
$nz= mysql_fetch_array($ksiksisk);
echo strtoupper($nz[NamaBiaya]); echo " ($nz[KodeBiaya]) "; 
?>
                </div></td>
    </tr>
            <tr valign="top">
              <td>KETERANGAN<br>
<li>
<input type="button" name="fgf" value="BACAAN HASIL 1"  onClick="wComparex = window.open('f54_0.php?aku=bersabar&Type=1&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();"  style="background:#FFFFFF"></li>
<li><input type="button" name="fgf" value="BACAAN HASIL 2" 
 onClick="wComparex = window.open('f54_0.php?aku=bersabar&Type=2&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();" style="background:#FFFFFF"></li>
<li><input type="button" 
 onClick="wComparex = window.open('f54_0.php?aku=bersabar&Type=3&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();" name="fgf" value="BACAAN HASIL 3" style="background:#FFFFFF"></li></td>
              <td>:</td>
              <td><div align="left">
<?
$ldld_000 = mysql_query("SELECT * FROM bacaanhasilrad WHERE id='$doa'");
$ada_ya = mysql_fetch_array($ldld_000);
if($ada_ya[id]){
?><textarea rows="8" cols="40" name="Keterangan"><? echo $ada_ya[HasilBacaan]; ?></textarea>
<? }else{ ?><textarea rows="8" cols="40" name="Keterangan"><? echo $c[Keterangan]; ?></textarea>
<? } ?>
			  </div></td>
            </tr>
           <tr valign="top">
              <td>KESAN</td>
              <td>:</td>
              <td><div align="left"> 
			  <textarea rows="2" cols="30" name="Kesan"><?   echo $c[Kesan]; ?></textarea>
			  </div></td>
            </tr>
			 <tr valign="top">
              <td>SARAN</td>
              <td>:</td>
              <td><div align="left">
			  <textarea name="Saran" cols="30" rows="2" id="Saran"><?  echo $c[Saran]; ?></textarea>
			  </div></td>
            </tr>
			<?
			if($c[id]){
			?>
			<tr>
			<td colspan="3"><div align="left"><?
			echo "LAST UPDATE : "; echo strtoupper($c[Opr]); echo " || $c[Jam]"; 
			?></div></td>
			</tr>
			<? } ?>
			<tr>
			<td colspan="3" bgcolor="#C9FF93"><div align="left">
			<input name="fgfg" type="submit" class="style1" value="Simpan" >
			<input name="fgfg" type="button" class="style1" onClick="window.close();" value="Selesai">
			</div></td>
			</tr>
          </table>
    </div>    </td>
    </tr>
  </table>
  </form>
</div>
</body>
</html><?
}else{

}
?>