<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
header("Location:../keluar2.php");
}
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF66CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="center">
<form action="df.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="center"><strong>
LIST DATA TRANSAKSI RADIOLOGI<br>
<?
echo $hh[RegId];
?>
</strong></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style3">
  <tr bgcolor="#FFFFFF">
  <td width="18" bgcolor="#66CC00"><strong>NO</strong></td>
  <td width="39" bgcolor="#66CC00"><strong>ID</strong></td>
  <td width="264" bgcolor="#66CC00"><strong>NAMA BIAYA</strong></td>
  <td bgcolor="#66CC00"><strong>QTY</strong></td>
  <td width="55" bgcolor="#66CC00"><div align="right"><strong>HARGA</strong></div></td>
  <td>Jaminan</td><td>NonJaminan</td>
  <td bgcolor="#66CC00"><strong>JUMLAH</strong></td>
  <td bgcolor="#66CC00"><strong>JAM</strong></td>
  </tr>
  <?
  $ada_ya = 1;
  if($aku=='rela'){
  $yatystsb = mysql_query("SELECT  Harga,JamTran,id,NamaBiaya,JumlahHarga,Qty FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Fis'");
  }else{
  $yatystsb = mysql_query("SELECT  Harga,JamTran,id,NamaBiaya,JumlahHarga,Qty FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
  } while($pp = mysql_fetch_array($yatystsb)){
    $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='R.$pp[id]'");
 $hg = mysql_fetch_array($kjdfkdfd_DFdf); if($ela==$pp[id]){
 
?>
  <tr bgcolor="#D4D0C8">
  <td><div align="center"><? echo $ada_ya; ?></div></td>
  <td><div align="center"><? echo "$pp[id]";  ?></div></td>
  <td><div align="left"><? echo strtoupper($pp[NamaBiaya]); ?></div></td>
   <td colspan="6"><div align="left">
   <input name="Harga" type="text" class="style3" value="<? echo $pp[Harga]; ?>" size="12" maxlength="12">
   <input type="text" name="Jaminan" value="<?  echo $hg[Jam]; ?>" maxlength="12" size="12" class="style3">
   <input type="hidden" name="param" value="Radiologi">
	  <input type="text" name="NonJaminan" value="<? echo $hg[NonJam]; ?>" maxlength="12" size="12" class="style3">
   <input type="hidden" name="id" value="<? echo $id; ?>">
    <input type="hidden" name="Id" value="<? echo $id; ?>"> 
   <input type="submit" value="Simpan" name="fgfgf" class="style3">
   <input type="hidden" name="ela" value="<? echo $ela; ?>">
 <!--<? /* <input name="fgf" disabled="disabled" type="button" class="style3" onClick="location.href='df.php?id=<? echo $id; ?>&ela=<? echo $ela; ?>';" value="Hapus"  style="background:#99CC66"> */ ?> -->
  </div></td>
  </tr>
  <? 
  }else{
  ?>
 <?
 if($mas=='budi'){
 ?>
 <tr bgcolor="#333333">
 <? 
 }else{
 ?> <tR<? if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){?> onClick="location.href='er_45.php?aku=<? echo $aku; ?>&id=<? echo $id; ?>&ela=<? echo $pp[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?>>
 <? } ?>
  <td><div align="center"><? echo $ada_ya; ?></div></td>
  <td><div align="center"><? echo "$pp[id]";  ?></div></td>
  <td><div align="left"><? echo strtoupper($pp[NamaBiaya]); ?></div></td>
    <td><div align="center"><? echo number_format($pp[Qty],2); ?></div></td>
	<td><div align="right"><? echo number_format($pp[Harga]); ?></div></td>
	 <td><div align="left">
   <?
   echo number_format($hg[Jam]);
   ?>
   </div></td>
      <td><div align="left">
   <?
   echo number_format($hg[NonJam]);
   ?>
   </div></td>
   <td><div align="right"><? echo number_format($pp[JumlahHarga],2); 
  $kpo = $kpo + $pp[JumlahHarga];
  ?></div></td>
  <td><div align="center"><? echo $pp[JamTran]; ?></div></td>
  </tR>
 <? } ?>
  <? $ada_ya++; } ?> <tR>
    <td colspan="4" bgcolor="#66CC00"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#66CC00"><div align="right"><strong><? echo number_format($kpo,2); ?></strong></div></td> 
  </tR>
</table>
</div>
</td>
</tr>

  </table>
  </form>
</div>
</body>
</html>