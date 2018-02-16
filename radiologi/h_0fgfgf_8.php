<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
header("Location:../keluar.php");
}
if(!$awal){
$awal=0;
$akir=1;
}else{
$awal=$awal;
$akir=$akir;
}
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
-->
</style><script language="JavaScript">
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
</head>
<body>

<div align="left">
  <table width="564" border="0" cellpadding="2" cellspacing="2">
    <tr onClick="location.href='../kasir/sabar_itu_baik.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td width="556" colspan="3"><div align="center">
        <table border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td valign="top" width="99"><div align="left">
               
              </div></td>
    <td width="426" valign="top"><div align="left">
      <table border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td width="340">&nbsp;</td>
    </tr>
        <tr>
          <td>&nbsp;</td>
    </tr>
        <tr>
          <td>&nbsp;</td>
    </tr>
        <tr>
          <td>&nbsp;</td>
    </tr>
        </table>
    </div></td>
    </tr>
          </table>
    </div></td>
    </tr><tr>
      <td><hr></td>
    </tr>
    <tr onClick="location.href='h_0fgfgf_8.php?id=<? echo $id; ?>&awal=<? echo $awal+1; ?>&akir=1';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td valign="top"><div align="left">
        <table width="563" border="1">
          <tr>
            <td colspan="3"><div align="center" class="style4">
              HASIL PEMERIKSAAN RADIOLOGI
              </div></td>
      </tr>
          <tr>
            <td colspan="2" valign="top">
              <div align="left">
                <table border="0" cellpadding="2" cellspacing="2" class="style4">
                  <tr>
                    <td width="104">NO RM</td>
      <td width="8">:</td>
      <td width="150"><div align="left"><? echo $hh[NoPasien]; ?></div></td>
      </tr>
                  <tr>
                    <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?></div></td>
      </tr>
                  <tr>
                    <td>UMUR</td><td>:</td><td><div align="left">
                      <?
  $pos= explode(":",$hh[BlnUmur]);
  echo "$hh[Umur] Thn $pos[0] Bln $pos[1] Hari";
  ?>
                      </div></td>
      </tr>
                  </table>
      </div>      </td><td width="268" valign="top">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style4">
            <tr>
              <td width="74">NO MANUAL </td>
              <td width="8">:</td>
      <td width="172"><div align="left"><? echo $hh[MstKey]; ?></div></td>
      </tr>
            <tr>
              <td>KELAS</td><td>:</td><td><div align="left"><? $splo = explode("-",$hh[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan); 
echo "$j[NamaKelas]"; ?></div></td>
      </tr>
            <tr>
              <td>DOKTER</td><td>:</td><td><div align="left"><? echo $hh[KetDokter]; ?></div></td>
      </tr>
            </table>
      </div>
      </td>
      </tr>
          </table>
      </div></td>
    </tr>
	<tr>
	<td valign="top"><div align="left">
	<table width="563" border="0" cellpadding="2" cellspacing="2"> 
	<tr>
	<td width="546" colspan="3"><i class="style4">TEMAN SEJAWAT, YTH : </i>	</tr>
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<table width="562" border="0" cellpadding="2" cellspacing="2" class="style4">
	<!-- <tr>
	<td><strong>NO</strong></td>
	<td><strong>NAMA PEMERIKSAAN</strong></td>
	<td><strong>KETERANGAN</strong></td>
	<td><strong>KESAN</strong></td>
	</tr>
	-->
	<?
	$nomer=1;
	$ksiksisk = mysql_query("SELECT * FROM pasrad2 WHERE IdPasien='$id' LIMIT $awal,$akir");
	while($sa= mysql_fetch_array($ksiksisk)){
	?>
	<tr>
 	<td width="202"><div align="left"><? echo strtoupper($sa[NamaTxn]); ?><strong> :</strong> </div></td> 
	</tr>
	<tr>
	<td>&nbsp;</td><td width="346">
	<div align="left"><?
	echo  ($sa[Keterangan]);
	?></div>
	</td> 
	</tr>
<!-- 	<tr>
	<td>KESAN <strong>:</strong></td>
	</tr>
	<tr>
<td>&nbsp;</td>	<td width="346"><div align="left"><? //echo strtoupper($sa[Kesan]); ?></div></td>
	</tr>
	--><? 
	$nomer++; 
	}?>
	
	</table>
	</div>
	</td>
	</tr>
	</table>
	</div></td>
	</tr>
	<tr valign="top">
	<td><div align="right">
	<table width="185" border="0" cellpadding="2" cellspacing="2" class="style4">
	<tr>
	<td><div align="center">BEKASI, 
	  <?
	//tgl hari ini
 //	 echo date("d.m.Y");
	 //tgl periksa
 	 echo "$hh[TglMasuk]/$hh[BlnMasuk]/$hh[ThnMasuk]";
	 ?>	
	  </div>	</tr>
	<tr>
	  <td height="39">    	  <div align="center"></div>	  </tr>
	<tr>
	  <td><div align="center">( dr Wiryanto SpRad )<br>
	        <? echo date("H:i:s"); ?>     </div>	  </tr>
	</table>
	</div></td>
	</tr>
  </table>
</div>
</body>
</html>
<? 
}else{

}
?>
