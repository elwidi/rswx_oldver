<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjkfdfd_fddfdfd  = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
$da  = mysql_fetch_array($kdjkfdfd_fddfdfd);
 	 ?><html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#3366CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #006633}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006633; }
-->
    </style></head>
	 <body alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
	 <div align="left">
	 <table  border="0" cellpadding="2" cellspacing="2">
	 <tr>
	 <td width="517" colspan="3"><div align="left" class="style1">
	   <font face="Arial, Helvetica, sans-serif">RETUR DATA OBAT<br />
	   <font color="#990000"><b><i>
	   <?
	 echo ucfirst(strtolower($da[NamaObat])); 
	 ?>
	   </i></b></font>	    </div></td>
	 </tr>
	 <tr>
<td colspan="3" bgcolor="#990000"><div align="left" class="style3">
<a href=""  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none" onClick="window.close()">Tutup</a> || <a href="ca.php?id=<? echo $var; ?>" style="text-decoration:none" >Pembelian</a> || 
Retur  
</div></td>
</tr><tr>
	 <td colspan="3" valign="top">
	 <div align="left">
	 <table border="0" cellpadding="2" cellspacing="2" class="style2">
	 <tr>
	 <td width="17" bgcolor="#0033CC"><span class="style3">NO</span></td>
	 <td width="32" bgcolor="#0033CC"><span class="style3">NO RM</span></td>
	 <td width="102" bgcolor="#0033CC"><span class="style3">NAMA PASIEN</span></td>
	 <td width="74" bgcolor="#0033CC"><span class="style3">NO RESEP </span></td>
	 <td width="31" bgcolor="#0033CC"><span class="style3">QTY</span></td>
	 <td width="86" bgcolor="#0033CC"><span class="style3">ALASAN</span></td>
	 <td width="72" bgcolor="#0033CC"><span class="style3">OPR</span></td>
	 <td width="51" bgcolor="#0033CC"><span class="style3">TGLJAM</span></td>
	 </tr>
	 <?
	 $nomer=1;
	  $iudfd_DFdfd7878 = mysql_query("SELECT * FROM returobatjalan WHERE IdObat='$id'");
	 while($bb  = mysql_fetch_array($iudfd_DFdfd7878)){
	 $KJDKFD_dFDF  = mysql_query("SELECT * FROM rwtjalan WHERE id='$bb[IdPasien]'");
	 $ya = mysql_fetch_array($KJDKFD_dFDF);
 $jm = $nomer%2;
if($jm==1){
$warna=' bgcolor="#FFFF99"';
}else{
$warna='';
} ?>
<tr <?  echo $warna; ?> valign="top"> <td><div align="center"><? echo $nomer; ?></div></td>
	 <td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb[NamaPasien])); ?></div></td>
	 <td><div align="left"><? echo $bb[NoResep]; ?></div></td>
	 <td><div align="center"><? echo number_format($bb[Qty]);
	 $tot  = $tot + $bb[Qty];  
	  ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb[Alasan])); ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb[Opr])); ?></div></td>
	 <td><div  align="left"><? echo $bb[TglJam]; ?></div></td>
	 </tr>
	
	 <? $nomer++; } 
	 ?>
	 <?
 	  $iudfd_DFdfd78782 = mysql_query("SELECT * FROM retur_inap WHERE IdObat='$id'");
	 while($bb2  = mysql_fetch_array($iudfd_DFdfd78782)){
	 $KJDKFD_dFDF2  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$bb2[IdPasien]'");
	 $ya2 = mysql_fetch_array($KJDKFD_dFDF2);
 $jm2 = $nomer%2;
if($jm2==1){
$warna2=' bgcolor="#FFFF99"';
}else{
$warna2='';
} ?>
<tr <?  echo $warna2; ?> valign="top" class="style5"> <td><div align="center"><? echo $nomer; ?></div></td>
	 <td><div align="left"><? echo $bb2[NoPasien]; ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb2[NamaPasien])); ?></div></td>
	 <td><div align="left"><? echo $bb2[NoResep]; ?></div></td>
	 <td><div align="center"><? echo number_format($bb2[Qty]);
	 $tot2  = $tot2 + $bb2[Qty];  
	  ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb2[Alasan])); ?></div></td>
	 <td><div align="left"><? echo ucfirst(strtolower($bb2[Opr])); ?></div></td>
	 <td><div  align="left"><? echo $bb2[TglJam]; ?></div></td>
	 </tr>
	
	 <? $nomer++; } 
	 ?>
	  <tr valign="top">
	   <td colspan="4" bgcolor="#000099" class="style3"><div align="center">TOTAL</div></td>
	   <td bgcolor="#000099" class="style3"><div align="center"><? echo number_format($tot+$tot2); ?></div></td>
	   </tr></table>
	 </div>
	 </td>
	 </tr>
	 </table>
	 </div>
	 </body>
	 </html> 