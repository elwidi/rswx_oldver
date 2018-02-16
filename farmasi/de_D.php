<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";

$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
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
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="425" colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <td width="44"><img  src="../gb/gb.png"  width="87" height="66"></td>
 <td width="378" valign="top"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="368"><span class="style1">
   <?
 echo strtoupper($fkd[Nama]);
 ?>
 </span></td>
 </tr>
 <tr>
   <td><span class="style2"><? echo strtoupper($fkd[Jalan]); ?></span></td>
 </tr>
 <tr>
   <td class="style2">Telp. <? echo $fkd[Telp]; ?> FAX : <? echo $fkd[Fax]; ?></td>
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
   <table width="579" border="0" cellpadding="1" cellspacing="1">
   <tr>
   <td width="415" colspan="3"><div align="center" class="style4">SURAT pesanAN</div></td>
   </tr>
   <tr>
     <td colspan="3">
         <div align="left">
           <table border="0" cellpadding="2" cellspacing="2" class="style3">
             <tr>
               <td width="123">NO SP</td><?
   $jdujdudjd = mysql_query("SELECT * FROM supplier WHERE id='$kk[IdSupplier]'");
   $bv = mysql_fetch_array($jdujdudjd);
   ?>
               <td width="3">:</td>
         <td width="300"><div align="left"><? echo $kk[NoPo]; ?></div></td>
         </tr>
             <tr>
               <td>NAMA SUPPLIER </td>
               <td>:</td><td><div align="left"><? echo strtoupper($kk[NamaSupplier]); ?></div></td>
         </tr>
             <tr>
               <td>SALES</td><td>:</td><td><div align="left"><? echo strtoupper($bv[CP]); ?></div></td>
         </tr>
             <tr>
               <td>ALAMAT</td><td>:</td><td><div align="left"><? echo strtoupper($bv[Alamat]); ?></div></td>
         </tr>
             </table>
         </div></td></tr>
   </table>
    </div></td>
   </tr>
    <td colspan="3" valign="top"><div align="left">
	<table border="1">
	<tr class="style3">
	<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
	<td width="211" bgcolor="#D4D0C8"><div align="left"><strong>URAIAN</strong></div></td>
	<td width="68" bgcolor="#D4D0C8"><div align="center"><strong>QTY</strong></div></td>
	<td width="68" bgcolor="#D4D0C8"><div align="right"><strong>HS</strong></div></td>
	<td width="68" bgcolor="#D4D0C8"><div align="right"><strong>TOTAL</strong></div></td>
	<td width="68" bgcolor="#D4D0C8"><div align="center"><strong>TOT+PPN</strong></div></td>
	<td width="102" bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
	</tr>
	<?
	$nomer=1;
 	$kdjdj = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id'");
 while($jj = mysql_fetch_array($kdjdj)){
	?>
	<tr class="style3">
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo strtoupper($jj[NamaBarang]); ?></div></td>
	<td><div align="center"><? 
	 echo number_format($jj[Qty]); 
	?></div></td>
	<td><div align="right">
	<?
	echo number_format($jj[Harga]);
	?>
	</div></td>
	<td><div align="right">
	<?
	echo number_format($jj[Total]);
	$tot = $tot + $jj[Total];
	$tots = $tots + $jj[Total];
	$PotRp = $PotRp + $jj[PotRp];

	?>
	</div></td>
	<td><div align="right"><?
	$ToPpn = $tot+($tot*10/100);
	echo number_format($ToPpn);
	$yty = $yty + $ToPpn;
	$ToPpn=0; $tot=0;
	 ?></div></td>
	<td><div align="left"><? echo strtoupper($jj[NamaSatuan]); ?></div></td>
	</tr>
 	<? $nomer++; } ?><tr class="style3">
	  <td colspan="4" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
	  <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tots); ?></strong></div></td>
	  <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($yty); ?></strong></div></td>
	  </tr>
	</table>
	</div></td>
   <tr>
    <tr valign="top">
   <td colspan="3"><div align="right">
   <table width="229" border="0" cellpadding="2" cellspacing="2" class="style3">
   <tr>
   <td width="81">TOTAL</td>
   <td width="8">:</td>
   <td width="123"><div align="right"><?
   echo number_format($yty);
   ?></div></td>
   </tr>
   <tr>
     <td>DISKON</td>
     <td>:</td>
     <td><div align="right"><?
	 echo number_format($PotRp); 
	 ?></div></td>
   </tr>
   <tr>
     <td>PPN</td>
     <td>:</td>
     <td><div align="right"><?
	 $SetDisk = $yty-$PotRp;
	 $SetDisk2 = 10/100*$SetDisk;
	 echo number_format($SetDisk2);
	 ?></div></td>
   </tr>
   <tr>
     <td>NETT0</td>
     <td>:</td>
     <td><div align="right"><?
	 $Bayar = $yty-$SetDisk2;
	echo number_format($Bayar); 
	 ?></div></td>
   </tr>
   </table>
   </div></td>
 </tr>
 <tr>
   <td colspan="3" valign="top"><div align="center">
   <table width="589" border="0" cellpadding="2" cellspacing="2">
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
   </div></td><td width="302"><div align="right">
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
 <?
 }
 ?>