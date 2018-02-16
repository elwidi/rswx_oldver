<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
 header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
 		?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif; color:#666666
}
.style3 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif; color:#000000
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
 </style>
 </head>
 <body>
  <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="425" colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <?
 if($kk[Stak]==2){
 ?> <tr onClick="location.href='XW_9.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">

 <? }else{ ?>
 <tr onClick="location.href='x23.php?kembang=<? echo $kembang; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? } ?>
 <td width="44"><img  src="../gb/gb.png" width="87" height="66"></td>
 <td width="378" valign="top"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="368"><span class="style1"><?
 echo strtoupper($fkd[Nama]);
 ?></span></td>
 </tr>
 <tr>
   <td><span class="style2"><? echo strtoupper($fkd[Jalan]); ?></span></td>
 </tr>
 <tr>
   <td class="style2"> Telp.  <? echo $fkd[Telp]; ?> 
	  FAX : <? echo $fkd[Fax]; ?></td>
 </tr>
 <tr>
   <td class="style2">e-mail : <? echo $fkd[email]; ?></td>
 </tr>
 </table>
 </div></td>
 </tr>
 </table>
 </div></td> 
 </tr>
 <tr>
   <td colspan="3"><hr /></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="1" cellspacing="1">
   <tr valign="top">
   <td width="427" colspan="3"><div align="center">
   <table border="1" cellpadding="1" cellspacing="1">
   <tr onClick="location.href='de_D.php?kembang=<? echo $kembang; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
   <td width="415" colspan="3"><div align="center" class="style4">SURAT pesanAN</div></td>
   </tr>
   <tr>
   <td colspan="3"><div align="center">
   <table border="0" cellpadding="2" cellspacing="2" class="style3">
   <tr>
   <td width="123">NO SP</td>
   <td width="3">:</td>
   <td width="300"><div align="left"><? echo $kk[NoPo]; ?></div></td>
   </tr>
   <tr>
   <td>NAMA SUPPLIER </td>
   <td>:</td><td><div align="left"><? echo strtoupper($kk[NamaSupplier]); ?></div></td>
   </tr>
   <?
   $jdujdudjd = mysql_query("SELECT * FROM supplier WHERE id='$kk[IdSupplier]'");
   $bv = mysql_fetch_array($jdujdudjd);
   echo $bv[NamaSupplier];
   ?>
   <tr>
   <td>SALES</td><td>:</td><td><div align="left"><? echo strtoupper($bv[CP]); ?></div></td>
   </tr>
   <tr>
   <td>ALAMAT</td><td>:</td><td><div align="left"><? echo strtoupper($bv[Alamat]); ?></div></td>
   </tr>
   </table>
   </div></td>
   </tr>
   </table>
    </div></td>
   </tr>
    <td colspan="3" valign="top"><div align="left">
	<table border="1">
	<tr class="style3">
	<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
	<td width="211" bgcolor="#D4D0C8"><div align="left"><strong>URAIAN</strong></div></td>
	<td width="68" bgcolor="#D4D0C8"><div align="center"><strong>JUMLAH</strong></div></td>
	<td width="102" bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
	</tr>
	<?
	$nomer=1;
 	$kdjdj = mysql_query("SELECT * FROM podetil77x WHERE IdPox='$id' AND IdFaktur=$dimas");
 	while($jj = mysql_fetch_array($kdjdj)){
	?>
	<tr class="style3">
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo strtoupper($jj[NamaBarang]); //echo " || $jj[id] - $jj[Stat]";?></div></td>
	<td><div align="center"><?
	echo $jj[Qty];
	?></div></td>
	<td><div align="left"><? echo strtoupper($jj[NamaSatuan]); ?></div></td>
	</tr>
	<? $nomer++; } ?>
	</table>
	</div></td>
   <tr>
    <tr>
   <td colspan="3"><span class="style5">.</span></td>
 </tr>
 <tr>
   <td colspan="3" valign="top"><div align="center">
   <table border="0" cellpadding="2" cellspacing="2">
   <tr valign="top">
   <td width="196"><div align="left">
   <table width="170" height="111" border="0" cellpadding="2" cellspacing="2" class="style3">
   <tr>
   <td width="193"><div align="center">MENYETUJUI</div></td>
   </tr>
   <tr>
   <td height="47"><div align="center"></div></td>
   </tr>
   <tr>
   <td> <div align="center">( ............................... ) </div></td>
   </tr>
   </table>
   </div></td><td width="213"><div align="right">
    <table width="193" border="0" cellpadding="2" cellspacing="2">
   <tr valign="top">
   <td><div align="left">
   <table width="207" height="99" border="0" cellpadding="2" cellspacing="2" class="style3">
   <tr>
   <td width="199" ><div align="center">MENYETUJUI<br />
     LOGISTIK</div></td>
   </tr>
   <tr>
   <td><div align="center"></div></td>
   </tr>
   <tr>
   <td> <div align="center">( ..................................... ) </div></td>
   </tr>
   </table>
   </div></td>
   </tr>
   </table>
   </div></td>
    </tr>
   </table>
   </div></td>
 </tr>
 
 </table>
 </div>
 </body>
 </html>
 <? } ?>