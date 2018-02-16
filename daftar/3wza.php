<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body bgcolor="#CCCCCC">

<div align="left">
  <table  border="0" cellpadding="2" cellspacing="2" >
    <tr  bgcolor="#59BA54">
      <td width="626"  colspan="3" bgcolor="#0000FF"><div align="left" class="style4">
          <div align="center">DETAIL DATA PASIEN<br />
            <?
echo "$uu[RegId]";
?>
          </div>
      </div></td>
    </tr>
    <tr>
      <td   colspan="3"><div align="center">
  <?
echo strtoupper($uu[NamaPasien]);
$ck = explode(":",$uu[JamMasuk]);
	$Depane = $ck[0]-0;
	if($Depane>1){
	echo "<br>";
	}?> 
  <?
echo " ( $uu[NoPasien] ) ";
?>
      </div></td>
    </tr><?
 
	if($Depane<=1){
	?>
	<tr>
	<td colspan="3"><div align="left">
	<table border="0" class="style2" cellpadding="1" cellspacing="1">
	<tr>
	<td width="66">TglMasuk</td>
	<td width="3">:</td>
	<td width="445"><div align="left">
	<? echo "$uu[TglMasuk]-$uu[BlnMasuk]-$uu[ThnMasuk]"; ?>
	</div></td>
	</tr>
	<tr>
	<td>JamMasuk</td><td>:</td><td><div align="left">
	<? echo $uu[JamMasuk];?>
	</div></td>
	</tr> 
	<tr>
	  <td>Lama/Baru</td>
	  <td>:</td>
	  <td><input type="radio" name="LB" value="L"  <? if($uu[LB]=='L'){ ?> checked="checked"<? } ?> onClick="location.href='xewa.php?id=<? echo $id; 
	  ?>&LB=L';">Lama 
	  <input type="radio" name="LB"  onClick="location.href='xewa.php?id=<? echo $id; 
	  ?>&LB=B';" value="B" <? if($uu[LB]=='B'){ ?> checked="checked"<? } ?> >
	  Baru ||  ( <? echo "$uu[LB]"; ?> / <font color="#993300"><? echo ucfirst(strtolower($uu[Operator]));  ?></font> )</td>
	  </tr>
	</table>
	</div></td>
	</tr>
	<? } ?>
    <tr>
      <td colspan="3" bgcolor="#FFFFFF">
        <div align="center" class="style2">Status Kembali: <?
	$paj = strlen($uu[Sta]);
		?>
          <input type="radio" name="Sta" value="1" <? if($paj>3){ ?> checked="checked"<? } ?> onClick="location.href='d_dddd.php?id=<? echo $id; 
		  ?>&Sta=1';"> 
          Ya
          || 
          <input type="radio" name="Sta" value="0" <? if($paj<=3){ ?> checked="checked"<? } ?> onClick="location.href='d_dddd.php?id=<? echo $id; 
		  ?>&Sta=0';"> 
      Tidak      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#0000FF"><div align="center">
          <span class="style2">.  </span>
          <input name="fgf" type="button" class="style2" onClick="location.href='d_Dd.php?dia=hari&id=<? echo $id; ?>';" value="Batalkan Txn">
          <input name="fgf" type="button" class="style2" onClick="location.href='d_Dd.php?id=<? echo $id; ?>';" value="Cetak Ulang Struk">
          <input name="fgf" type="button" class="style2"  onClick="location.href='d_Dd.php?dia=hah&id=<? echo $id; ?>';" value="Input Icd">
          <input type="button" name="ffgfg" value="Rujuk Ke T4Lain" onClick="location.href='d_Dd.php?dia=doa&id=<? echo $id; ?>';" class="style2" style="background:#FF6699">
          <input name="fgf" type="button" class="style2" onClick="window.close()" value="Selesai">
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#FFCC33"><div align="center"><?
	  $kjkdfd_DFdfdf = mysql_query("SELECT *  FROM  pj_rajal  Where IdRajal='$id'");
$xw = mysql_fetch_array($kjkdfd_DFdfdf);

	  /*
	  ?>
          <input name="fgf" type="button" class="style2"  onClick="location.href='d_Dd.php?IdPasien=<? echo $xw[IdPj]; ?>&dia=sopan&id=<? echo $id; ?>';" value="Tentukan Penanggung Jwab">
      */ ?>    <input  name="dfdfd" type="button" class="style2" onClick="location.href='dddd_0d.php?KodeRujuk=<? echo $ha[id]; ?>&id=<? echo $uu[IdPasien]; ?>&KeyID=<? echo $uu[KodePer]; ?>';" value="Rujuk Ke Rinap">
	   <input name="FGFG" type="button" class="style2" onClick="location.href='d_Dd.php?dia=baik&id=<? echo $id; ?>';" value="Update Data Penjamin/Rujukan/Dokter/Kartu">
      </div></td>
    </tr>
    <?
	$lkdlfd_DFdfdfd  = mysql_query("SELECT id FROM rujukan WHERE NamaRujukan='$uu[RujukanDari]'");
	$ha = mysql_fetch_array($lkdlfd_DFdfdfd);
	?><tr>
      <td colspan="3" bgcolor="#FFCC33"><div align="center"></div></td>
      </tr>
  </table>
</div>
</body>
</html>
<?
}
?>