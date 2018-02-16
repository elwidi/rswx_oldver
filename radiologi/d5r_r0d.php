<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
//header("Location:../keluar2.php");
}
$kiksfdfddfdik_lll = mysql_query("SELECT * FROM pasrad2 WHERE IdTxn ='$IdBiaya'");
$c=mysql_fetch_array($kiksfdfddfdik_lll);
 			  $ksiksisk = mysql_query("SELECT NamaBiaya,NoBukti,id FROM txninap WHERE id='$IdBiaya'");
$nz= mysql_fetch_array($ksiksisk);
///

$lsdflklskds_7645745  =  mysql_query("SELECT NoUrut,id FROM norad WHERE NoTxn='$nz[NoBukti]'");
$eka=  mysql_fetch_array($lsdflklskds_7645745);
//
			
			if(!$eka[id]){
		//	header("Location:../keluar2.php");
			}
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
.style4 {
	color: #990000;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
-->
</style>
</head><?
 ?>
<body <? if($c[id]>0){ ?>  bgcolor="#99FFFF"<? }else{ ?> bgcolor="#FFCCCC"<? } ?>>

<div align="left">
<?
if($c[id]){
?>
<form action="jduj_9.php">
<? 
}else{
?>
<form action="jduj_9.php">
<? } ?>
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="543"  colspan="3" bgcolor="#990000"><div align="center" class="style2 style5">
        DETAIL DATA PASIEN RAWAT INAP <br />
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
    <td width="3"><span class="style4">:</span></td>
    <td width="291"><div align="left"><? echo $hh[NoPasien]; ?></div></td>
    </tr>
            <tr>
              <td>NAMA PASIEN</td><td><span class="style4">:</span></td>
              <td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?>
			 
			  <input type="hidden" name="id" value="<? echo $id; ?>">
			  <input type="hidden" name="IdBiaya" value="<? echo $IdBiaya; ?>">
			  <input type="hidden" name="IdStruk" value="<? echo $IdStruk; ?>">
			  <input type="hidden" name="IdPasien" value="<? echo $IdPasien; ?>">
			  <?

			  ?>
			  <input type="hidden"  name="NoUrut" value="<? echo $eka[id]; ?>">
			  <?
			  $pd = explode("-",$e); 
			  ?>
			  <input type="hidden" name="IdStruk2" value="<? echo $IdStruk; ?>">
			  <input type="hidden" name="IdPasien" value="<? echo $id; ?>">
			  </div></td>
    </tr>
            <tr>
              <td>PEMERIKSAAN RADIOLOGI</td><td><span class="style4">:</span></td>
              <td><div align="left">
                <?
 echo strtoupper($nz[NamaBiaya]);
?>
                
				</div></td>
    </tr>
            <tr valign="top">
              <td>KETERANGAN<br> <input  type="hidden" name="Struke" value="<? echo $IdStruk; ?>">
<li>
<input type="button" name="fgf" value="BACAAN HASIL 1"  onClick="wComparex = window.open('f54_0.php?IdStruk=<? echo $IdStruk; ?>&aku=<? echo $aku; ?>&Type=1&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();"  style="background:#FFFFFF"></li>
<li><input type="button" name="fgf" value="BACAAN HASIL 2" 
 onClick="wComparex = window.open('f54_0.php?IdStruk=<? echo $IdStruk; ?>&Type=2&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>&aku=<? echo $aku; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();" style="background:#FFFFFF"></li>
<li><input type="button" 
 onClick="wComparex = window.open('f54_0.php?IdStruk=<? echo $IdStruk; ?>&Type=3&IdBiaya=<? echo $IdBiaya;?>&id=<? echo $id; ?>&aku=<? echo $aku; ?>', 
  'wComparex', 'width=480,height=340,left=70,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex.focus();" name="fgf" value="BACAAN HASIL 3" style="background:#FFFFFF"></li></td>
              <td><span class="style4">:</span></td>
              <td><div align="left">
<?
$ldld_000 = mysql_query("SELECT * FROM bacaanhasilrad WHERE id='$doa'");
$ada_ya = mysql_fetch_array($ldld_000);
if($ada_ya[id]){
?><textarea rows="8" cols="45" name="Keterangan"><? echo $ada_ya[HasilBacaan]; ?></textarea>
<?
}else{
?><textarea rows="8" cols="45" name="Keterangan"><? echo $c[Keterangan]; ?></textarea>
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
			<td colspan="3" bgcolor="#990000"><div align="left">
			<input name="fgfg" type="submit" class="style1" value="Simpan" >
			<input name="fgfg" type="button" class="style1" onClick="window.close();" value="Selesai">
			<input name="FGF" type="button" class="style1" onClick="location.href='d_Ddd.php?id=<? echo $id;?>&NoBukti=<? echo $e; ?>';" value="Cetak Hasil Pemeriksaan">
			 
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