<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
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
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style7 {color: #666666}
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
    <tr onClick="location.href='565m.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td width="556" height="52" colspan="3"><div align="left">
	  <table border="0" cellpadding="1" cellspacing="1">
	  <tr valign="top">
	  <td width="93"><div align="center"><img src="../gb/gb.png" width="91" height="83">
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
    <tr >
      <td valign="top"><div align="left">
        <table width="580" border="0" cellpadding="2" cellspacing="2">
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
                  <tr valign="top">
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td><div align="left"><?
					$KDJFKD_fG = mysql_query("SELECT Alamat FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
					$upo = mysql_fetch_array($KDJFKD_fG);
					echo $upo[Alamat];
					?></div></td>
                  </tr>
                  </table>
      </div>      </td><td width="268" valign="top">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style4">
            <tr>
              <td width="74">REG</td>
      <td width="8">:</td>
      <td width="172"><div align="left"><? $kikj2 = mysql_query("SELECT NoUrut FROM norad WHERE NoTxn='$hh[RegId]'");
 $dapat2 = mysql_fetch_array($kikj2);
 if($dapat2[NoUrut]>0){
 echo "$dapat2[NoUrut]";
 }else{
 ?> <? 
   $kikj = mysql_query("SELECT NoUrut FROM norad ORDER BY NoUrut DESC");
 $dapat = mysql_fetch_array($kikj);
 $Baru = $dapat[NoUrut]+1;
$TglJam=date("d.m.Y-H:i:s");
$isi =mysql_query("INSERT INTO  `norad` (`NoUrut`, `NoTxn`, `Opr`, `TglJam`) 
VALUES ('$Baru', '$hh[RegId]', '$a[Nama]', '$TglJam')");
  echo "$Baru"; ?>
 
 <? 
 } ?></div></td>
      </tr>
            <tr>
              <td>POLI</td><td>:</td><td><div align="left"><? echo strtoupper($hh[Bagian]); ?></div></td>
      </tr>
            <tr>
              <td>DOKTER</td><td>:</td><td><div align="left"><? echo $hh[NamaDokter]; ?></div></td>
      </tr>
            <tr>
              <td>RUJUKAN</td>
              <td>:</td>
              <td><div align="left"><?
			  echo $hh[RujukanDari];
			  ?></div></td>
            </tr>
            </table>
      </div>
      </td>
      </tr>
          </table>
      </div></td>
    </tr>
	<tr>
      <td><hr></td>
    </tr><tr>
	<td valign="top"><div align="left">
	<table width="563" border="0" cellpadding="2" cellspacing="2"> 
	<tr>
	<td width="546" colspan="3"><i class="style4">Hasil Sbb: </i>	
	</tr>
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
	$ksiksisk = mysql_query("SELECT * FROM pasrad WHERE IdPasien='$id' ");
	while($sa= mysql_fetch_array($ksiksisk)){
	?>
	<tr>
 	<td  colspan="2" ><div align="left"><strong><? echo  ($sa[NamaTxn]); ?>:</strong></div></td> 
	</tr>
	<tr>
	<td width="68">&nbsp;</td><td width="480">
	<div align="left"><?
	echo  ($sa[Keterangan]);
	?></div>
	</td> 
	</tr>
	  <tr>
	  <td colspan="2" valign="top"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style4">
	  <tr valign="top">
	<td width="56">KESAN</td><td width="482"><div align="left"><? echo  ($sa[Kesan]); ?></div></td>
	</tr>
	  <tr valign="top">
	    <td>SARAN</td>
	    <td><div align="left"><? echo $sa[Saran]; ?></div></td>
	    </tr>
	  </table>
	  </div></td>
	  </tr>
	 
 <? 
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
	<td><div align="right">BEKASI, 
	  <?
	//tgl hari ini
 //	 echo date("d.m.Y");
	 //tgl periksa
 	 echo "$hh[TglMasuk]/$hh[BlnMasuk]/$hh[ThnMasuk]";
	 ?>	
	  </div>
	</tr>
	<tr>
	  <td height="39">    	  </tr>
	<tr><?
	$ldkfldfd_Fg = mysql_query("SELECT Sik FROM dokter where id='$hh[KodeDokter]'");
	$dhy = mysql_fetch_array($ldkfldfd_Fg);
	?>
	  <td><div align="right">(  I Gde Kota Sp Rad )   <br>Sik : <?
	  echo $dhy[Sik];
	  ?>  </div>
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

}
?>
