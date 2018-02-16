<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style3 {
		font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;}
-->
</style>
 </head>
<body alink="#000000" vlink="#000000" link="#000000">
 <div align="left">
  <table border="1" cellpadding="0" cellspacing="0">
    <tr  class="style4" >
      <td  onClick="location.href='3p.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" width="524"><div align="center"><strong>BUKTI LAYANAN <br>
          POLIKLINIK</strong></div></td>
      <td   onClick="location.href='ed_d.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  width="460"><div align="center"><strong>PELAYANAN</strong></div></td>
</tr>
<tr valign="top">
      <td height="219" rowspan="2" >
<div align="left">
 <table  border="0" cellpadding="1" cellspacing="1">
		        <tr valign="top">
		          <td width="347" ><div align="left" class="tabeldata">
		            
                  <table  border="0" class="style3" cellpadding="2" cellspacing="2"  >
                    <tr valign="top">
		                <td width="116">No RM</td>
			        <td width="10">:</td>
			        <td width="250"><div align="left"><? echo $b[NoPasien]; ?></div></td>
			        </tr> 
		              <tr valign="top">
		                <td>Tgl Reg</td><td>:</td><td><div align="left"><? echo "$b[TglMasuk] "; $bln=$b[BlnMasuk]; $thn1=$b[ThnMasuk];
			include "../bulan.php";  echo " $b[JamMasuk]";?></div></td>
			        </tr>
		              <tr valign="top">
		                <td class="style10"><span class="style21">Umur</span></td>
                  <td>:</td>
                  <td class="style10"><div align="left" class="style21"><?  echo $b[Umur]; ?> Th <?
		  $ceki = explode(":",$b[BlnUmur]);
		  echo "$ceki[0] Bln   $ceki[1] Hari";
		  ?></div></td>
			        </tr>
		              <tr valign="top">
		                <td >Nama Pasien </td>
			          <td>:</td>
			          <td ><div align="left"><? echo $b[NamaPasien]; ?></div></td>
			          </tr>
		              <tr valign="top">
		                <td >Asal Dokter </td>
			          <td>:</td>
			          <td ><div align="left"><? echo ucfirst(strtolower($b[RujukanDari])); ?></div></td>
			          </tr>
		              <tr valign="top">
		                <td >Ruangan</td>
			          <td>:</td>
			          <td ><div align="left"><? 
			  echo ucfirst(strtolower($b[Bagian]));
			  ?></div></td>
			          </tr>
		              <tr valign="top">
		                <td >Dokter</td>
			          <td>:</td>
			          <td ><div align="left"><? echo $b[NamaDokter]; ?></div></td>
			          </tr>
		              <tr valign="top">
		                <td >Cara Bayar </td>
			          <td>:</td>
			          <td ><div align="left" ><? echo ucfirst(strtolower($b[NamaPer])); ?></div></td>
			          </tr>
		              <tr valign="top">
		                <td >Pj Biaya </td>
			          <td>:</td>
			          <td ><div align="left"><? 
			  echo $b[NamaPj2];
			  ?></div></td>
			          </tr>
	                </table> 
		          </div></td><td width="170" ><div align="left" class="tabeldatareg">
				  
		            <table border="0" cellpadding="1" cellspacing="1"  class="style3">
		              <tr valign="top"><?
			$pc = explode("-",$b[RegId]);
			?>
		                <td width="54">NoUrut</td>
			        <td width="10">:</td>
			        <td width="100"><div align="left"><? echo $pc[2]; ?></div></td>
			        </tr>
		              <tr valign="top">
		                <td>Reg</td><td>:</td><td><div align="left"><? echo "$pc[0]-$pc[1]"; ?></div></td>
			        </tr>
	                </table>
			        </div> </td>
	            </tr>
	        </table>
</div></td>
      <td height="179"> 
        <div align="left"></div></td>
</tr>
<tr valign="top">
<td><div  align="left">
          <table height="85" border="0" cellpadding="1" cellspacing="1" class="style3">
            <tr valign="bottom">
              <td width="200" height="83"> ( <? echo ucfirst(strtolower($b[NamaDokter])); ?> 
                ) </td>
              <td width="209"> <div align="right">( Petugas
                  ) </div></td>

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