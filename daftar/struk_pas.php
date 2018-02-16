<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==2){
 $id = $_GET [ "id" ];
  $nakal = $_GET [ "nakal" ];
  
$badak = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$b = mysql_fetch_array($badak);
if(!$b[id]){
//header("Location:./daftar.php");
}?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script><script type="text/javascript">
<!--window.onload = function(){window.print();}-->
</script> <style type="text/css">
<!--
.style4 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;}
.style5 {
	font-size: 12px;
	font-weight: bold;font-family: Arial, Helvetica, sans-serif;
}
.style6 {
	font-size: 12px; color:#666666;font-family: Arial, Helvetica, sans-serif;
 }
 .style7{
	font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr onClick="location.href='ed_d.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  valign="top">
 <td width="138"><img src="../gb/gb.png" width="120" height="105" /></td>
 <td width="434" valign="top"><div align="left">
 <table border="0" cellpadding="1" cellspacing="1">
 <tr>
 <td width="333" class="style4"><strong>RS YADIKA</strong></td>
 </tr>
 <tr>
   <td><span class="style5">Kebayoran Lama </span></td>
 </tr>
 <tr class="style6">
   <td>Jl.Ciputat.Raya No 5 Kebayoran Lama </td>
 </tr>
 <tr class="style6">
   <td>Jakarta Selatan 12240 </td>
 </tr>
 <tr class="style6">
   <td>Telp 021-729 1074 </td>
 </tr>
 <tr class="style6">
   <td>Fax 021-728 5046 </td>
 </tr>
 </table>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="2" class="style4">BUKTI LAYANAN </td>
   </tr>
 <tr valign="top">
   <td colspan="2" class="style4"><div align="left">
    <table border="0" cellpadding="2" cellspacing="2">
	<tr valign="top">
	<td width="229"><div 
	align="left">
	<table width="229" border="0" cellpadding="1" cellspacing="1" class="style7"> 
   <tr>
   <td width="84">No Reg</td>
   <td width="9">:</td>
   <td width="143"><div align="left"><?
   echo "$b[RegId]";
   ?></div></td>
   </tr>
   <tr>
     <td>NoRm</td>
     <td>:</td>
     <td><div align="left"><?
	 echo $b[NoPasien];
	 ?></div></td>
   </tr>
   </table>
	</div></td><td width="307"><div align="left">
	 <table border="0" cellpadding="1" cellspacing="1" class="style7">
   <tr>
   <td width="111">Tgl . Jam</td>
   <td width="10">:</td>
   <td width="183"><div align="left"><?
   echo "$b[TglMasuk]-$b[BlnMasuk]-$b[ThnMasuk], $b[JamMasuk]";
   ?></div></td>
   </tr>
   <tr valign="top">
     <td>Nama Pasien </td>
     <td>:</td>
     <td><div align="left">
	 <?
	 echo $b[NamaPasien];
	 ?>
	 </div></td>
   </tr>
   </table>
	</div></td>
	</tr>
	</table>
   </div></td>
 </tr>
 <tr valign="top" class="style7">
   <td colspan="2" class="style7"><div align="center"><?
   echo $b[Umur]; echo " Thn $b[BlnUmur] "; ?><font color="#333333"><i>
   <?  echo "Type Pasien $b[NamaPer]";
   ?></i></font></div></td>
 </tr>
 <tr valign="top">
 <td colspan="2"><div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr valign="top">
 <td width="292"><div align="left">
 <table border="0" cellpadding="1" cellspacing="1" class="style7">
 <tr valign="top">
 <td width="79"><strong>Alamat</strong></td>
 <td width="8">:</td>
 <td width="183"><div align="left"><?
 $nahanahn = mysql_query("SELECT Alamat FROM datapasien WHERE id='$b[IdPasien]'");
 $ta = mysql_fetch_array($nahanahn);
 echo $ta[Alamat]; 
 
 ?></div></td>
 </tr>
 </table>
 </div></td><td width="245"><div align="left">
 <table width="268" border="0" cellpadding="1" cellspacing="1" class="style7">
 <td width="53"><strong>Dokter</strong></td>
 <td width="8">:</td>
 <td width="167"><div align="left">
 <?
 echo $b[NamaDokter];
 ?>
 </div></td>
 </table>
 </div></td>
 </tr>
 </table>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="2"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style7">
   <tr>
   <td width="238"><strong>Jasa Dokter</strong></td>
   <td width="298"><strong>Rp</strong></td>
   </tr>
   <tr>
   <td colspan="2"><hr></td>
   </tr>
   <tr>
     <td>Pemeriksaan </td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>TIndakan</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><strong>Jasa Sarana </strong></td>
     <td><strong>Rp</strong></td>
   </tr>
      <tr>
   <td colspan="2"><hr></td>
   </tr><tr>
     <td>Administrasi</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>Obat Alkes </td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>Lain - Lain </td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>Total</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr valign="top">
     <td colspan="2"><div align="center">
	 <table width="539" border="0" cellpadding="0" cellspacing="0">
	 <tr valign="top">
	 <td width="507"><div align="left">
	 <table border="0" cellpadding="0" cellspacing="0">
	 <tr valign="top">
	 <td width="214"><table border="0" cellpadding="0" cellspacing="0" class="style7">
       <tr>
         <td width="121">Icd</td>
       </tr>
       <tr>
         <td height="50">&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
       </tr>
     </table></td>
	 <td width="176"><table border="0" cellpadding="0" cellspacing="0" class="style7">
       <tr>
         <td width="121">Dokter</td>
       </tr>
       <tr>
         <td height="50">&nbsp;</td>
       </tr>
       <tr>
         <td><div align="left"><?
		 echo $b[NamaDokter];
		 ?></div></td>
       </tr>
     </table></td>
	 <td width="129"><table border="0" cellpadding="0" cellspacing="0" class="style7">
	 <tr>
	 <td width="121">Kasir</td>
	 </tr>
	 <tr>
	   <td height="50">&nbsp;</td>
	   </tr>
	 <tr>
	   <td>&nbsp;</td>
	   </tr>
	 </table></td>
	 </tr></table>
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
}else{
header("Location:./keluar.php");
}
?>