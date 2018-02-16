<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
//IdPenjamin=&NamaDokter=%&id=116395&IdDept=1
$IdPenjamin = $_GET["IdPenjamin"];
$NamaDokter = $_GET["NamaDokter"];
$NamaPenjamin = $_GET["NamaPenjamin"];
$id = $_GET["id"];
$NamaPoli = $_GET["NamaPoli"];
$IdDokter = $_GET["IdDokter"];
$NamaRujukan = $_GET["NamaRujukan"];
$IdRujukan = $_GET["IdRujukan"];

$IdDept = $_GET["IdDept"];
$badak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($badak);
if(!$pp[id]){
header("Location:./daftar.php");
}
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
	font-size: 18px;
	color: #000000;
}
.style1231 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #ffffff;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
.style324 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
.style34343434399 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFF00;
	font-style: italic;
}
-->
</style>
<body bgcolor="#CCCCCC">

<div align="left"> 
  <table border="0" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
    <tr class="style1">
      <td colspan="3">
        <div align="left">DAFTARKAN PASIEN<br />
          <?
echo strtoupper($pp[NamaPasien]); echo " ($pp[NoPasien]) "; 
?>
          </div></td></tr>
    <tr>
      <td colspan="3"><span class="style1"><?
	  echo "TGL LAHIR : "; echo $pp[tgllhr];
	  ?></span></td>
    </tr>
    <tr>
      <td colspan="3"><div align="left" class="style3"><?
	  if($IdDept>0){
	  ?><input name="fgfg" type="button" class="style324" value="Cari Berdasarkan Nama Dokter" onClick="wCompare = window.open('de_rlkr2.php?IdPenjamin=<? echo $IdPenjamin; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>', 
  'wCompare', 'width=780,height=640,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<? } ?>&nbsp;
      </div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top">
        <div align="left">
		<form target="_self">
          <table width="534" border="0" cellpadding="2" cellspacing="2" class="style2">
            <tr>
              <td width="153">PILIH POLI</td>
              <td width="3">:</td>
              <td width="274"><div align="left">
               <?
		  if($IdDept>0){
		  $deper = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$IdDept'");
		  $ii = mysql_fetch_array($deper);
		  echo strtoupper($ii[NamaBagian]);
		  }else{
		  ?> <input name="NamaPoli" type="text" id="NamaPoli" size="20" maxlength="30">
				| <input name="ddff" type="button" class="style324" onClick="location.href='w2_909.php?NamaPoli=%&id=<? echo $id; ?>';" value="View">
				<? } ?>
                
				<input type="hidden" name="id" value="<? echo $id; ?>">
				<input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
				<input type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">
				<input type="hidden" name="IdDept" value="<? echo $IdDept; ?>"> 
				</div></td>
    </tr>
            <tr>
              <td>DOKTER</td><td>:</td><td><?
			  if($IdDept>0 && !$IdDokter){
		 
			  ?> <input type="text" name="NamaDokter" maxlength="30" size="20">
                | 
                  <input name="ddff2" type="button" class="style324" onClick="location.href='w2_909.php?NamaDokter=%&id=<? echo $id;  
				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">
				  <? }else{
				  ?><? 
				 	  $dokter = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$IdDokter'");
			  $oo = mysql_fetch_array($dokter);
			  echo strtoupper($oo[NamaDokter]); } ?></td>
    </tr>
	<?
	$kfjgkfgf  = mysql_query("SELECT * FROM dokterganti WHERE id='$budi'");
	$ede = mysql_fetch_array($kfjgkfgf);
	if($ede[id]){
	?>
	<tr>
	<td bgcolor="#FFFFFF">DOKTER SUBS</td>
	<td bgcolor="#FFFFFF">:</td>
	<td bgcolor="#FFFFFF"><div align="left"><? echo $ede[NamaDokter]; ?></div></td>
	</tr>
	<? 
	}
		?>
            <tr>
              <td>RUJUKAN</td><td>:</td><td><div align="left"><?
			   if($IdDept>0 && $IdDokter>0 && !$IdRujukan ){
			  ?><input type="text" name="NamaRujukan" maxlength="30" size="20">
			  | 
                  <input name="ddff2" type="button" class="style324" onClick="location.href='w2_909.php?budi=<? echo $budi; ?>&NamaRujukan=%&IdDokter=<? echo $IdDokter; ?>&id=<? echo $id;  
				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">
                  <? 
}else{
			  $kerja_sama = mysql_query("SELECT NamaRujukan FROM rujukan WHERE id='$IdRujukan'");
			  $ks = mysql_fetch_array($kerja_sama);
			  echo strtoupper($ks[NamaRujukan]);
			  }
			  ?></div></td>
    </tr>
            <tr> 
              <td>PENJAMIN</td><td>:</td><td><div align="left"><?
			   if($IdDept>0 && $IdDokter>0 && $IdRujukan>0 && !$IdPenjamin){
			  ?><input type="text" name="NamaPenjamin" maxlength="30" size="20">  | 
        |
  
				  <?
				   			  }else{
						$opsa = mysql_query("SELECT NamaPer FROM dataperusahaan WHERE id='$IdPenjamin'");	  
						$pps = mysql_fetch_array($opsa);
						if($IdPenjamin>0){
						echo strtoupper($pps[NamaPer]);
						}
			  }
			  ?> || <input name="ddff2" type="button" class="style324" onClick="location.href='w2_909.php?budi=<? echo $budi; ?>&NamaPenjamin=%&IdRujukan=<? 
  echo $IdRujukan; ?>&IdDokter=<? echo $IdDokter; ?>&id=<? echo $id;  
				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">
			  </div></td>
    </tr>
            <tR>
              <td colspan="3">&nbsp;</td>
    </tR>
            <tr>
              <td colspan="3"><div align="left">
                <input name="fgfg" type="submit" class="style324" value="Cari"> 
                <input type="button" name="dffg" value="Reset" onClick="location.href='w2_909.php?id=<? echo $id; ?>';" class="style324">
				<input name="jdjdfd" type="button" class="style324" onClick="location.href='index.php?kadal=4&id=<? echo $id; ?>';" value="Kembali">
              </div></td>
    </tr>
	<?
	    if($hari>0){
	  ?><tr>
	  <td colspan="3" bgcolor="#000066" valign="top">
	  <div align="left">
	  <table border="1" class="style34343434399">
	  <tr>
	  <td width="18" bgcolor="#333333">NO</td>
	  <td width="146" bgcolor="#333333">DOKTER</td>
	  <td width="139" bgcolor="#333333">SPC</td>
	  <td width="89" bgcolor="#333333">OPR</td>
	  <td width="100" bgcolor="#333333">TGL JAM</td>
	  </tr>
	  <?
	  $ns=1;
	  $kdjfkdjkdjfkdfd = mysql_query("SELECT * FROM dokterganti WHERE IdDokterAsli='$hari' AND UangDuduk=0");
	  while($za =  mysql_fetch_array($kdjfkdjkdjfkdfd)){
	  ?>
	  <tr  onClick="location.href='w2_909.php?budi=<? echo $za[id]; ?>&IdDokter=<? echo $hari; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	  <td><div align="center"><? echo $ns; ?></div></td>
	  <td><div align="left"><? echo $za[NamaDokter]; ?></div></td>
	  <td><div align="left"><? echo strtoupper($za[NamaSpc]); ?></div></td>
	  <td><div align="left"><? echo strtoupper($za[Opr]); ?></div></td>
	  <td><div align="left"><? echo $za[TglJam]; ?></div></td>
	  </tr>
	
	  <? $ns++; } ?>  <tr>
	    <td colspan="5" bgcolor="#333333">&nbsp;</td>
	    </tr>
	  </table>
	  </div>
	  </td>
	  </tr> <? 
	  }
	  ?> 
	<?
	if($IdDokter>0 && $IdPenjamin>0 && $IdRujukan>0 && $id>0 && $IdDept>0){
	?>
	<tr>
	<td colspan="3" bgcolor="#990000"><div align="left">
	<input name="djdjdfdf" type="button" class="style324" onClick="location.href='simpan_daftar2b.php?budi=<? echo $budi; ?>&id=<? echo $id; 
	?>&IdDept=<? echo $IdDept; 
	?>&IdDokter=<? echo $IdDokter; ?>&IdRujukan=<? echo $IdRujukan; 
	?>&IdPenjamin=<? echo $IdPenjamin; ?>&JenisRawat=JALAN';" value="Lakukan Proses">
	</div>	</td>
	</tr>
	 
	<? 
	}
	?>
          </table>
		  </form>
    </div>    </td><td width="642" valign="top">
	<div align="left">
	<?
	if($NamaPenjamin!=''){
	?>
	<table border="1" class="style2">
	<tr>
	<td width="17" bgcolor="#003333" class="style1231">NO</td>
	<td width="483" bgcolor="#003333" class="style1231">PENJAMIN</td>
		</tr> 
<?
	$kas=1;
	$ksas = mysql_query("SELECT NamaPer,id  FROM dataperusahaan WHERE NamaPer Like '$NamaPenjamin%'");
	while($ttp = mysql_fetch_array($ksas)){
	?>
	<tr onClick="location.href='w2_909.php?IdPenjamin=<? echo $IdPenjamin; ?>&budi=<? echo $budi; ?>&IdDokter=<? echo $IdDokter; ?>&IdRujukan=<? echo $IdRujukan; ?>&IdPenjamin=<? echo $ttp[id]; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<td><div align="center"><? 
	echo $kas; ?></div></td>
	<td><div align="left"><?
	echo strtoupper($ttp[NamaPer]);
	?></div></td>
	</tr>
 	<?
	$kas++;
	}
	?><tr>
	  <td colspan="2" bgcolor="#003333">&nbsp;</td>
	  </tr>
	</table>
	<? 
	}elseif($NamaRujukan!=''){
	?>
<table border="1">
<tr bgcolor="#000000" class="style2">
<td width="17" bgcolor="#333333" class="style1231">NO</td>
<td width="420" bgcolor="#333333" class="style1231">NAMA RUJUKAN </td>
</tr>
<?
$no=1;
$kdas2 = mysql_query("SELECT NamaRujukan,id FROM rujukan  WHERE NamaRujukan LIKE '$NamaRujukan%'");
while($rt = mysql_fetch_array($kdas2)){
?>
<tr 
 onClick="location.href='w2_909.php?IdPenjamin=<? echo $IdPenjamin; ?>&NamaPenjamin=%&budi=<? echo $budi; ?>&IdDokter=<? echo $IdDokter; 
 ?>&id=<? echo $id; 
 ?>&IdDept=<? echo $IdDept; ?>&IdRujukan=<? echo $rt[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style2">
<td><div  align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo strtoupper($rt[NamaRujukan]); ?></div></td>
</tr>
<?
$no++; }
?><TR>
	  <TD colspan="2" bgcolor="#333333">&nbsp;</TD>
	  </TR>
</table>	<? 
	}elseif(!$NamaPoli && $NamaDokter!=''){
?>
<table border="1">
<tr bgcolor="#000000" class="style1231">
<td width="17">NO</td>
<td width="223">NAMA DOKTER </td>
<td width="114"><div align="left">BAGIAN</div></td>
<td colspan="3">SUBST</td>
 </tr>
<?
$no=1;
if($NamaDokter!=''){
$kdas = mysql_query("SELECT * FROM dokter WHERE  IdBagian='$IdDept' AND NamaDokter LIKE '$NamaDokter%'");
 
}else{
$kdas = mysql_query("SELECT *  FROM dokter WHERE  IdBagian='$IdDept'"); 
}
while($ee = mysql_fetch_array($kdas)){
 if($b[kk]>0){
?><tr  class="style324" bgcolor="#FFCCCC">
<? 
}else{
?>
<tr 
class="style2">
 <? } ?>
<td><div  align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo strtoupper($ee[NamaDokter]); ?></div></td>
<td><div align="left"><? 
$jsjdhsjds = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$ee[IdBagian]'");
$zz = mysql_fetch_array($jsjdhsjds);
echo strtoupper($zz[NamaBagian]);
 ?></div></td>
<td width="47"><div align="center"><?
 echo "$b[kk]";
?></div></td>
<td width="51"><div align="left"><?
if($ee[Stap]==1){
?>Non Aktif<?
}else{
?>
<input name="ffg" type="button" class="style324" onClick="location.href='w2_909.php?IdPenjamin=<? echo $IdPenjamin; ?>&NamaRujukan=%&IdDokter=<? echo $ee[id]; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" value="Ambil">
<? } ?>
</div></td>
<td width="80"><div align="left">
<?
if($b[kk]>0){
?><input name="ffg" type="button" class="style324" onClick="location.href='w2_909.php?IdPenjamin=<? echo $IdPenjamin; ?>&hari=<? echo $ee[id]; ?>&NamaDokter=<? echo $NamaDokter; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" value="Subs">
<? } ?>
</div></td>
</tr>
<?
$no++; }
?><TR>
	  <TD colspan="6" bgcolor="#000000">&nbsp;</TD>
	  </TR>
</table>
<? 
	}elseif($NamaPoli!=''){
	?>
	<table width="313" border="1" class="style2">
	<tr>
	<td width="24" bgcolor="#000000" class="style1231"><strong>NO</strong></td>
	<td width="299" bgcolor="#000000" class="style1231"><strong>NAMA POLI</strong></td>
	<td>JML DR</td>

	</tr>
	<?
	$no=1;
	if($NamaPoli!=''){
	$kda = mysql_query("SELECT NamaBagian,id FROM bagian WHERE NamaBagian LIKE 'POLI%' AND NamaBagian LIKE '$NamaPoli%'");	
	}else{
 	$kda = mysql_query("SELECT NamaBagian,id FROM bagian WHERE NamaBagian LIKE 'POLI%'");
	}
	while($ee = mysql_fetch_array($kda)){
		$kiki_kjdkf = mysql_query("SELECT COUNT(id) AS kk FROM dokter WHERE IdBagian='$ee[id]'");
	$ue = mysql_fetch_array($kiki_kjdkf);
	?>
	<tr onClick="location.href='w2_909.php?IdPenjamin=<? echo $IdPenjamin; ?>&NamaDokter=%&id=<? echo $id; ?>&IdDept=<? echo $ee[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<td><div align="center"><? echo $no;  ?></div></td>
	<td><div align="left"><? echo ucfirst(strtolower($ee[NamaBagian])); ?></div></td>
	<td><div align="center"><?
 
	echo $ue[kk];
	?></div></td>
	</tr>
 	<? $no++; } ?>
	<tr  >
	  <td colspan="3" bgcolor="#000000">&nbsp;</td>
	  </tr>
	   
	  </table>
	<? 
	}else{
	
	}
	?>
	</div>
	</td>
    </tr>
  </table>
</div>
</body>
</head>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>