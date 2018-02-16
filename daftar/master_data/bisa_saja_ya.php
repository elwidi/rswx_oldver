<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
//NamaKelas=%25PE&makan=tahu
$NamaKelas = $_GET["NamaKelas"];
$makan = $_GET["makan"];
$iki = $_GET["iki"];
$KodeKelas = $_GET["KodeKelas"];
$ela=$_GET["ela"];
 if($a[Level]==2){?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF33';
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
	font-size: 12px; color: #000000;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000003; }
.style7 {color: #000066; font-weight: bold; }
.style8 {
	color: #990000;
	font-style: italic;
}
-->
</style>
</head><body background="../gambar/bag.jpg">
<div align="center">

<div align="left">
  <table width="1225" border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF">
   <tr bgcolor="#58BB4F"class="style1">
<td colspan="3" >
	List Data Ruangan
		  </td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style4 style8"><? include "../../kucrit.php"; ?>.</div></td>
</tr>

 <?
 if($ela>0){
 
 }else{
 ?>   <tr>
      <td colspan="2"><div align="left" class="style1">
        <form target="_self">
		<table border="0" cellpadding="2" cellspacing="2" class="style1">
		<?
		if($iki==3){
		?>
		<tr>
		<td>KELAS</td><TD>:</TD><td><div align="left">
		<select name="Kelas" class="style4">
 		<option value="1">--Pilih Kelas--</option>
	   <?
	   $oso = mysql_query("SELECT KodeKelas FROM kelas ORDER BY NamaKelas");
	   while($uspa = mysql_fetch_array($oso)){
	   ?>
	   <option value="<? echo $uspa[KodeKelas]; ?>" onClick="location.href='bisa_saja_ya.php?iki=3&makan=7&KodeKelas=<? echo $uspa[KodeKelas]; ?>';"><? 
	   $sjksjdks = mysql_query("SELECT NamaKelas FROM kelas WHERE KodeKelas='$uspa[KodeKelas]'");
	   $isaps = mysql_fetch_array($sjksjdks);
	   echo strtoupper($isaps[NamaKelas]);
	   ?></option>
<? } ?>
		</select>
		</div></td>
		</tr>
		<? 
		}elseif($iki==9){
		?>
		<tr>
		<td>LANTAI</td><td>:</td><td><div align="left">
		<select name="Lantai" class="style4">
		<option value="0">--PILIH LANTAI--</option>
 		<option value="s" onClick="location.href='bisa_saja_ya.php?iki=9&makan=2';">Lantai II</option>
		<option value="s" onClick="location.href='bisa_saja_ya.php?iki=9&makan=3';">Lantai III</option>
		<option value="s" onClick="location.href='bisa_saja_ya.php?iki=9&makan=4';">Lantai IV</option>
		<option value="s" onClick="location.href='bisa_saja_ya.php?iki=9&makan=5';">PUD</option>
		</select>
		</div></td>
		</tr>
		<? 
		}else{
		?><tr>
		<td width="100">NAMA RUANGAN </td>
		<td width="8">:</td>
		<td width="619"><div align="left">
		<input name="NamaKelas" type="text" class="style4" size="20" maxlength="20">
		<input type="hidden" name="makan" value="tahu">
 		</div></td>
		</tr>
		<? } ?>
		<tr>
		<td colspan="3" valign="top" bgcolor="#993300">
		<div align="left">
 		<input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="dfdf" type="submit" class="style4" value="Sort">
		<?
		if($iki==9){
		}else{
		?><input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="dffd" type="button" class="style4" onClick="location.href='bisa_saja_ya.php?iki=9';" value="Sort Per Lantai">
		<? } ?>
		 <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="dffd" type="button" class="style4" onClick="location.href='bisa_saja_ya.php?iki=3';" value="Sort Kelas">
		 <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="dfdf" value="Input Kelas" onClick="location.href='se.php';" class="style4">
		 <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="fgfg" type="button" class="style4" onClick="location.href='ek.php';" value="Isi Ruangan Baru"> 
		<input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="dffd" type="button" class="style4" onClick="location.href='bisa_saja_ya.php?makan=bubur';" value="Tampil Semua">
		<input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="dffd" type="button" class="style4" onClick="location.href='../index.php';" value="Kembali">
		</div>		</td>
		</tr>
		</table>
		</form>
	  </div></td>
    </tr>
	<? }?>
    <tr>
      <td width="610" valign="top">
        <div align="left">
          <table width="613" border="0" cellpadding="2" cellspacing="2" class="style4">
            <tr bgcolor="#D4D0C8">
              <td width="21" bgcolor="#58BB4F"><span class="style7">NO</span></td>
			  <td>REC</td>
    <td width="56" bgcolor="#58BB4F"><span class="style7"><a href="bisa_saja_ya.php?makan=bub" style="text-decoration:none">NO RUANGAN</a></span></td>
	<td width="56" bgcolor="#58BB4F"><span class="style7">NO BED</span></td>
    <td width="143" bgcolor="#58BB4F"><span class="style7">NAMA RUANGAN</span></td>
    <td width="45" bgcolor="#58BB4F"><span class="style7"><a href="bisa_saja_ya.php?makan=bubu" style="text-decoration:none">
	KELAS</a></span></td>
    <td width="46" bgcolor="#58BB4F"><div align="right" class="style7">RP/HARI</div></td>
    <td width="86" bgcolor="#58BB4F"><span class="style7">LANTAI</span></td>
 	  <td width="170" bgcolor="#58BB4F"><span class="style7">KETERANGAN</span></td>
    </tr>
            <?
$nos=1;
if($makan=='bub'){
$kesa_po = mysql_query("SELECT * FROM ruangan   ORDER BY NoRuangan ");
}elseif($makan=='bubu'){
$kesa_po = mysql_query("SELECT * FROM ruangan   ORDER BY NamaKelas ");
}elseif($makan=='bubur'){
$kesa_po = mysql_query("SELECT * FROM ruangan   ORDER BY Lantai ");
}elseif($makan==7){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  KodeKelas='$KodeKelas' ORDER BY Lantai LIMIT 0,30");
}elseif($makan==1){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  Lantai='Lantai I' ORDER BY Lantai  LIMIT 0,30");
}elseif($makan==2){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  Lantai='Lantai II' ORDER BY Lantai LIMIT 0,30");
}elseif($makan==3){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  Lantai='Lantai III' ORDER BY Lantai LIMIT 0,30");
}elseif($makan==4){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  Lantai='Lantai IV' ORDER BY Lantai LIMIT 0,30");
}elseif($makan==5){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  Lantai='PUD' ORDER BY Lantai LIMIT 0,30");
}elseif($makan=='tahu'){
$kesa_po = mysql_query("SELECT * FROM ruangan WHERE  NamaRuangan LIKE '$NamaKelas%' ORDER BY Lantai LIMIT 0,30");
}else{
$kesa_po = mysql_query("SELECT * FROM ruangan ORDER BY Lantai LIMIT 0,30");
}
while($re = mysql_fetch_array($kesa_po)){
$res = $nomer %2;
if($res==1){
$warna ='bgcolor="#B4FAA8"';
}else{
$warna ='';
}
if($ela==$re[id]){
?><tr bgcolor="#FFCCCC"><?
}else{
?> 
 <tr <? echo $warna; ?> onClick="location.href='bisa_saja_ya.php?makan=<? echo $makan; ?>&iki=<? echo $iki; ?>&makan=<? echo $makan; ?>&ela=<? echo $re[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style1">
 <? } ?>
              <td><div align="center"><? echo $nos; ?></div></td>
			  <td><div align="center"><? echo "#$re[id]"; ?></div></td>
      <td><div align="left"><?
  echo $re[NoRuangan]; 
  ?></div></td>
  <TD><div align="center"><? echo $re[NoBed];  ?></div></TD>
      <td><div align="left"><? echo strtoupper($re[NamaRuangan]); ?></div></td>
      <td><div align="left"><? echo strtoupper($re[NamaKelas]); ?></div></td>
      <td><div align="right"><?
 echo number_format($re[RpHari]); 
  ?></div></td>
      <td><div align="left"><? echo  ($re[Lantai]); ?></div></td>
	       
		        <td><div align="left"><? 
				 
	  echo strtoupper($re[Keterangan]);
	   ?></div></td>
    </tr>
            <? $nos++; } ?>
            <tr>
              <td colspan="9" bgcolor="#58BB4F">&nbsp;</td>
      </tr>
          </table>
    </div>    </td><td width="601" valign="top">
	<div align="left">
	<?
	if($ela>0){
	?>
	<form action="ddf9099.php">
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<tr>
	<td width="136">ID</td>
	<td width="8">:</td>
	<td width="399"><div align="left"><?
	echo "#$ela";
	$ski_0dkkdf = mysql_query("SELECT * FROM ruangan WHERE id='$ela'");
	$ii= mysql_fetch_array($ski_0dkkdf);
	$ksisk2 = mysql_query("SELECT Tarif,id FROM kelas WHERE id='$ii[IdKelas]'");
  $yu2 = mysql_fetch_array($ksisk2);
	?>
	<input type="hidden" name="KodeKelas" value="<? echo $ii[KodeKelas]; ?>">
	<input type="hidden" name="id" value="<? echo $ela; ?>">
	<input type="hidden" name="reka" value="<? echo $yu2[id]; ?>">
	</div></td>
	</tr>
	<tr>
	<td>LANTAI</td><td>:</td><td><div align="left">
	<input type="hidden" name="ubub" value="<? echo $yu2[id]; ?>">
	  <select name="Lantai" class="style4">
        <option value="<? echo $ii[Lantai]; ?>"><? echo $ii[Lantai]; ?></option>
        <option value="LANTAI I">LANTAI I</option>
	    <option value="LANTAI II">LANTAI II</option>
        <option value="LANTAI III">LANTAI III</option>
        <option value="LANTAI IV">LANTAI IV</option>
       </select>
	   <input type="hidden" name="makan" value="<? echo $makan; ?>">
	</div></td>
	</tr>
	<tr>
	<td>NO BED</td><td>:</td><td><div align="left">
	<input type="text" name="NoBed" maxlength="30" size="14" value="<? echo $ii[NoBed]; ?>" class="style4">
	</div></td>
	</tr>
	<tr>
	<td>NO RUANGAN</td><tD>:</tD><td><div align="left">
	  <input type="text" name="NoRuangan" maxlength="30" size="14" value="<? echo $ii[NoRuangan]; ?>" class="style4">
	</div></td>
	</tr>
	<tr>
	  <td>NAMA  KELAS</td>
	  <td>:</td>
	  <td><div align="left">
	  
<select name="Kel" class="style1">
<option value="<? echo $ii[KodeKelas]; ?>"><?  
$jshdjshdjsdds898898_ksjdksjd = mysql_query("SELECT NamaKelas,Tarif FROM kelas WHERE KodeKelas='$ii[KodeKelas]'");
$eve = mysql_fetch_array($jshdjshdjsdds898898_ksjdksjd);
echo strtoupper($eve[NamaKelas]);
   ?></option>
<?
$jdhjdhf =  mysql_query("SELECT id,KodeKelas FROM kelas ORDER BY NamaKelas");
while($ee = mysql_fetch_array($jdhjdhf)){
?>
<option value="<? echo $ee[KodeKelas]; ?>"><?
$jshdjshdjsd = mysql_query("SELECT NamaKelas FROM kelas WHERE id='$ee[id]'");
$ko = mysql_fetch_array($jshdjshdjsd);
echo $ko[NamaKelas];
 ?></option>
<? } ?>
</select>
	  <?
	  //echo strtoupper($ii[NamaKelas]);
	  ?></div></td>
	  </tr>
	  <tr>
	  <td>TARIF</td><td>:</td><td><div align="left"><?
	  if($ii[RpHari]==0){
	  ?>
	  <input type="text" name="Tarif" maxlength="15" size="15" value="<? echo $eve[Tarif]; ?>">
	  <? 
	  }else{
	  ?>
	  <input type="text" name="Tarif" maxlength="15" size="15" value="<? echo $ii[RpHari]; ?>">
	  <? } ?>
	  </div></td>
	  </tr>
	  <tr>
	  <td>KELOMPOK</td><td>:</td><td><div align="left">
	  <select name="IdKel" class="style1">
	  <?
	$jsm2 = mysql_query("SELECT NamaKelompok,id FROM KelompokRuangan WHERE id='$ii[KodeKelompok]'");
	  $km2 = mysql_fetch_array($jsm2);
	  if($km2[id]){
	  ?>
	  <option value="<? echo $km2[id]; ?>"><?  echo strtoupper($km2[NamaKelompok]); ?></option>
	  <? 
	  }else{
	  ?><option value="">--KELOMPOK--</option>
	  <? } ?>
	  <?
	  $JUJ = mysql_query("SELECT * FROM KelompokRuangan ");
	  while($cc = mysql_fetch_array($JUJ)){
	  ?>
	  <option value="<? echo $cc[id]; ?>"><?
	  $jsm = mysql_query("SELECT NamaKelompok FROM KelompokRuangan WHERE id='$cc[id]'");
	  $km = mysql_fetch_array($jsm);
	  echo strtoupper($km[NamaKelompok]); 
	  ?></option>
	  <? } ?>
	  </select>
	  </div></td>
	  </tr>
	<tr valign="top">
	  <td>NAMA RUANGAN</td>
	  <td>:</td>
	  <td><div align="left">
	  <textarea rows="2" cols="30" name="NamaRuangan"><? echo $ii[NamaRuangan]; ?></textarea>
	   </div></td>
	  </tr>
	  <tr valign="top">
	  <td>KETERANGAN</td><Td>:</Td><td><div align="left">
	  <textarea rows="2" cols="30" name="Keterangan"><?
	  echo $ii[Keterangan]; ?></textarea>
	  </div></td>
	  </tr>
	<tr>
	  <td>LAST UPDATE </td>
	  <td>:</td>
	  <td><div align="left"><?
	 echo strtoupper($ii[Opr]); echo " || $ii[TglJam]"; 
	  ?></div></td>
	  </tr>
	<tr>
	  <td colspan="3" bgcolor="#58BB4F">
	  <div align="left">
	  <input name="ddfd"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="submit" class="style4" value="Update">
	  <input name="ddffd"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="button" class="style4" onClick="location.href='bisa_saja_ya.php?iki=<? echo $iki; ?>&makan=<? echo $makan; ?>';" value="Reset">
	  <input name="dffd2"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" class="style4" onClick="location.href='../index.php';" value="Kembali">
	  </div>	  </td>
	  </tr>
	</table>
	</form>
	<? } ?>
	</div>
	</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="top" bgcolor="#66CC99">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
<?
}?>