<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
//NoPasien=&NamaPasien=ardi&kadal=3&bas=8&Alamat=&NamaBapak=&Telp=
$NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$kadal = $_GET["kadal"];
$bas = $_GET["bas"];
$Alamat = $_GET["Alamat"];
$NamaBapak = $_GET["NamaBapak"];
$Telp = $_GET["Telp"];
?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6699';
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
	font-size: 14px;
}

-->
 </style>
 </head> 
 <body>
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="701" colspan="3"><div align="center">
 LIST DATA PASIEN BERDASARKAN PENCARIAN<br />
 NAMA : <? echo $NamaPasien; ?>
 </div></td>
 </tr>
 <tr valign="top">
 <td colspan="3"><div align="left">
 <table border="1" class="style1">
 <tr>
 <td width="24" bgcolor="#CCCCFF"><strong>NO</strong></td>
 <td width="77" bgcolor="#CCCCFF"><strong>NO RM</strong></td>
 <td width="243" bgcolor="#CCCCFF"><strong>NAMA PASIEN</strong></td>
 <td width="57" bgcolor="#CCCCFF"><strong>TGL LHR</strong></td>
 <td width="239" bgcolor="#CCCCFF"><strong>ALAMAT</strong></td>
 </tr>
 <?
 $nomer=1;
 $ksdjksjksd = mysql_query("SELECT * FROM datapasien  WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY NoPasien,id ASC LIMIT 21,200");
 while($xx = mysql_fetch_array($ksdjksjksd)){
 $pec = $nomer%2;
 if($pec==1){
 ?>
 <tr    onClick="location.href='r4rr.php?kadal=4&id=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" bgcolor="#E2FEFF">
 <? 
 }else{
 ?>
 <tr onClick="location.href='r4rr.php?kadal=4&id=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 <? } ?>
 <td><div align="center"><? echo $nomer;
 echo "($xx[id])"; ?></div></td>
 <td><div align="center"><? echo $xx[NoPasien];?></div></td>
 <td><div align="left"><? echo strtoupper($xx[NamaPasien]);?></div></td>
 <td><div align="center"><? 
 
 //$upda = mysql_query("UPDATE datapasien SET tgllhr='$pc[2]-$pc[1]-$pc[0]' where id='$xx[id]'");
 //echo "$pc[2]-$pc[1]-$pc[0]<br>";
 
  echo $xx[tgllhr];
   ?></div></td>
 <td><div align="left"><? echo $xx[Alamat];?></div></td>
 </tr>
 <? 
 $nomer++; } ?>
 </table>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><span class="style1">.</span></td>
 </tr>
 </table>
 </div>
 </body>
 </html>
 <?
 }
 ?>