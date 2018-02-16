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
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style5 {font-size: 14px}
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
    <tr onClick="location.href='../radiologi/minum_jamu_telor_bebek.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td width="556" height="52" colspan="3"><div align="left">
	  <table border="0" cellpadding="1" cellspacing="1">
	  <tr valign="top">
	  <td width="93"><div align="center"><img src="../gb/gb.png" width="110" height="87">
	  </div></td><td width="463"><div align="left">
	  <table height="85" border="0" cellpadding="1" cellspacing="1">
	  <tr>
	  <td width="450"><span class="style5">RS YADIKA</span></td>
	  </tr> 
	  <tr class="style4"> 
	  <td><div align="left" class="style7">Jl Kelurahan Jakarta No 40 Pondok Gede-Bekasi </div></td>
	  </tr>
	  <tr class="style4">
	    <td><span class="style7">Telp (021 xxx, Fax (021) 8483047 </span></td>
	    </tr>
	  <tr class="style4">
	    <td><div align="right" class="style5">Unit Radiologi </div></td>
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
      <td width="172"><div align="left"><? 
$o9j = mysql_query("SELECT * FROM noradman WHERE NoTxn='$NoBukti'");
$npo= mysql_fetch_array($o9j);
echo $npo[NoMan];

	  ?></div></td>
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
 	$ksiksisk = mysql_query("SELECT * FROM pasrad2 WHERE IdPasien='$id' ");
	while($sa= mysql_fetch_array($ksiksisk)){
	?>
	<tr>
 	<td  colspan="2" ><div align="left"><? echo strtoupper($sa[NamaTxn]); ?><strong> :</strong> </div></td> 
	</tr>
	<tr>
	<td colspan="2">
	  <div align="left" class="style5"><?
	echo  ($sa[Keterangan]);
	?></div></td>
	</tr>
  <tr>
	  <td colspan="2" valign="top"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style4">
	  <tr valign="top">
	<td width="56">KESAN</td><td width="482"><div align="left"><? echo strtoupper($sa[Kesan]); ?></div></td>
	</tr>
	  <tr valign="top">
	    <td>SARAN</td>
	    <td><div align="left"><? echo $sa[Saran]; ?></div></td>
	    </tr><? 
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
	  <td><div align="center">( <? 
	  echo $hh[KetDokter];
	  ?> )<br>
	        <? 
			$kjkf_445 = mysql_query("SELECT Sik FROM dokter WHERE id='$hh[Dokter]'");
			$uap = mysql_fetch_array($kjkf_445);
			echo $uap[Sik];
			 ?>     </div>	  </tr>
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
