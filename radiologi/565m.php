<?
session_start();
 include "../konek.php";
include "../ceke.php";
  $pcd =explode("-",$a[Nik]);
  $Nik=strtoupper($pcd[0]);

 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
include "../hari.php";
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#62BE5B">
<td width="1123" colspan="3" valign="top"><div align="left">
<img src="../gambar/rad.gif">
</div></td>
</tr>
<tr>
<td  colspan="3"><div align="center" class="style2">
LIST DATA <? if($ngkos=='telp'){
?>INPUT <? 
}else{ ?>BACA<? } ?> HASIL PEMERIKSAAN<br />
 </div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tR>
<td width="117">NAMA PASIEN</td>
<td width="8">:</td>
<td width="414"><div align="left">
<input name="NamaPasien" type="text" class="style1" size="20" maxlength="30">
<input type="hidden" name="ngkos" value="<? echo $ngkos; ?>">
<input type="hidden" name="ada" value="baru">
</div></td>
</tR>
<tR>
  <td colspan="3"><div align="left">
  <input name="fggf" type="submit" class="style1" style="background:#CCFF00" value="Sort">
<?
if($Nik=='DR'){

}elseif($ngkos=='telp'){
?>
   <input name="fgfg"  type="button" class="style1" style="background:#FFCC99" onClick="location.href='565m.php';" value="Tampilan Baca Hasil">
<? 
}else{
?>  <input name="fgfg"  type="button" class="style1" style="background:#99FF66" onClick="location.href='565m.php?ngkos=telp';" value="Tampilan Input Hasil">
<? } ?><?
$pecahan = explode("-",$a[Nik]);
if($pecahan[0]=='dr'){
?>
<input name="fgf" type="button" class="style1" style="background:#CCFF00" onClick="location.href='../keluar.php';" value="Keluar"><? 
}else{
?><input name="fgf" type="button" class="style1" style="background:#CCFF00" onClick="location.href='index.php';" value="Kembali">
<? } ?>
  </div></td>
  </tR>
</table>
</form>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="1130" height="76" border="0" cellpadding="2" cellspacing="2" class="style1">
<?
if($ngkos=='telp'){
?>
<tr  bgcolor="#999999">
<? 
}else{
?>
<tr bgcolor="#D4D0C8">
<? } ?>
<td><strong>NO</strong></td><td><div align="center"><strong>NO RAD</strong></div></td>
 <td><strong>NO TXN</strong></td><td><strong>NO RM</strong></td><td><strong>NAMA PASIEN</strong></td> 
<td><strong>BAGIAN</strong></td> 
<td>PEMERIKSAAN</td>
<?
if($ngkos!='telp'){
?>
<td><strong>KETERANGAN</strong></td>
<td><strong>KESAN</strong></td>
<? } ?>
 <td><strong>OPR</strong></td><td><strong>TGL</strong></td><td><strong>JAM</strong></td>
</tr>
<?
$nomer=1;
if($ada=='sajalah'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoMan='$NoMan'  ORDER BY id DESC LIMIT 0,100");
}elseif($ada=='baru'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NamaPasien LIKE '$NamaPasien%'   ORDER BY id DESC LIMIT 0,100");
}elseif($ngkos=='telp'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoTxn!='' AND Stat=0   ORDER BY id DESC LIMIT 0,100");
}else{
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoTxn!=''  AND Stat=1 ORDER BY id DESC LIMIT 0,100"); //echo "1"; 
}
while($b= mysql_fetch_array($dkjfkdjfd)){
$pecah = explode("-",$b[NoTxn]);
if($pecah[0]=='RL'){
$dfdi989= mysql_query("SELECT NamaBiaya,id FROM txnjalan WHERE RegId='$pecah[1]-$pecah[2]'");
$nbs = mysql_fetch_array($dfdi989);
$NP=$nbs[NamaBiaya];
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad WHERE IdTxn='LU.$nbs[id]'");
$mn = mysql_fetch_array($kjkdjksjdk);
$warna ='bgcolor="#FFCCCC"';

}elseif($pecah[0]=='MM'){
$sdksjkss000 = mysql_query("SELECT NamaBiaya,id,MstKey FROM txninap3 WHERE NoBukti='$b[NoTxn]'");  
$nh = mysql_fetch_array($sdksjkss000);
///
$kdjk9090 = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$nh[MstKey]'");
$nok = mysql_fetch_array($kdjk9090);
 //
$NP="$nh[NamaBiaya]";
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad2 WHERE NoBukti='$b[NoTxn]'");
$mn = mysql_fetch_array($kjkdjksjdk);
$warna ='bgcolor="#CCFFCC"';
}else{
$dfdi989= mysql_query("SELECT NamaBiaya,id FROM txnjalan WHERE RegId='$b[NoTxn]'");
$nbs = mysql_fetch_array($dfdi989);
$NP=$nbs[NamaBiaya];
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad WHERE IdTxn='$nbs[id]'");
$mn = mysql_fetch_array($kjkdjksjdk);
 }
 $noma = $nomer%2;
if($noma==1){
$warna ='  bgcolor="#FFCCCC"';
 }else{
$warna ='';
}?>

<?
if(!$nok[id] && $pecah[0]=='MM'){
?><tr <? echo $warna; ?> ><?
}elseif($pecah[0]=='MM'){
 echo "$nok[id]<br>"; ?>
<tr <? echo $warna; ?>  onClick="wCompare = window.open('d5r_r0d.php?e=<? echo $b[NoTxn]; ?>&IdBiaya=<? echo $nh[id]; ?>&id=<? echo $nok[id]; ?>', 
  'wCompare', 'width=780,height=640,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? 
}else{
?><tr 
onClick="location.href='jm.php?id=<? echo $b[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <?
echo "$warna";
?>  valign="top" >
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>  
<td><div align="center"><? echo $b[NoUrut]; ?></div></td>
 <td><div align="left"><? echo $b[NoTxn];

 ?></div></td>
<td><div align="center"><? echo $b[NoPasien]; ?></div></td>
<td><div align="left"><? echo strtoupper($b[NamaPasien]); ?></div></td>
<td><div align="left"><? echo strtoupper($b[NamaBagian]); ?></div></td>
<td><div align="left"><?
echo strtoupper($NP); 
 ?></div></td><?
if($ngkos!='telp'){
  ?> 
<td><div align="left"><? echo $mn[Keterangan]; ?></div></td> 
<td><div align="left"><? echo $mn[Kesan]; ?></div></td>
<? } ?>
 
 <td><div align="left"><? 
echo strtoupper($b[Opr]); 
?></div></td>
<td><div align="right"><?
echo "$b[Tgl]-$b[Bln]-$b[Thn]";
?></div></td>
<td><div align="left"><?
echo $b[TglJam];
 ?></div></td>
</tr>
<?
$nomer++; } ?>
<?
if($ngkos=='telp'){
?>
<tr bgcolor="#FFCCCC">
<? 
}else{
?>
<tr bgcolor="#D4D0C8">
<? } ?>
  <td colspan="13" >&nbsp;</td>
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
