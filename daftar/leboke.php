<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $var  = $_GET["var"];
$IdJal = $_GET["IdJal"];
$hari = $_GET["hari"];
$velin = $_GET["velin"];
$id = $_GET["id"];
$KodeDokter = $_GET["KodeDokter"];
$KodeRujuk = $_GET["KodeRujuk"];
$KeyID = $_GET["KeyID"];
$KodeBag = $_GET["KodeBag"];
 $dddddata = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$awe = mysql_fetch_array($dddddata);
$k=$awe;  $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
$MstKey = "$tgl$bln$thn:$awe[NoPasien]";
$kesa_dhjdf = mysql_query("SELECT id,NoPasien FROM keluarmasukpasien WHERE MstKey='$MstKey'");
$iu_po = mysql_fetch_array($kesa_dhjdf);
if($iu_po[id]){
echo "PASIEN SUDAH DIDAFTARKAN....<br>";
?>
<input type="button" name="jdjdf" value="Kembali" onClick="location.href='fito_sayangku.php?NoPasien=<? echo $iu_po[NoPasien]; ?>&makan=jajan';">
<? 
}elseif(!$awe[id]){
echo "PASIEN TIDAK TERDAFTAR,,......<br>";
?>
<a href="dalang.php">Kembali</a>
<?
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
 ?>
 <html>
 <head><style type="text/css">
<!--
.style4 {font-size: 12px}
.style6 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style7 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style11 {font-family: "Courier New", Courier, mono; font-weight: bold; font-style: italic; color: #000066; }
.style13 {color: #336699}
.style14 {color: #009933}
.style15 {color: #993300}
.style16 {
	color: #990033;
	font-style: italic;
}
.style17 {color: #000099}
.style18 {color: #FFFFFF}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script></head>
 <body>
<div align="center">
<form action="simpan_daftar.php"> 
  <div align="left">
    <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
      <tr bgcolor="#000033">
        <td height="34" colspan="3" bordercolor="#000066" bgcolor="#003399"><div align="center" class="style7 style18">
          <font size="4" face="Arial, Helvetica, sans-serif">DAFTAR PASIEN RI </font></div></td>
    </tr>
      <tr bordercolor="#FFFFFF">
        <td colspan="3" bgcolor="#FFFF00">
		  <div align="center"><span style="font-family: Geneva, Arial, Helvetica, sans-serif"><a href="index.php?kadal=4&id=<? echo $id; ?>" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KEMBALI</a> || 
          <a href="leboke.php?id=<? echo $id; ?>&var=<? echo $var; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">RESET</a></span></div></td>
    </tr>
      <tr bordercolor="#FFFFFF" class="style4">
        <td width="144" height="24"><div align="left"><span class="style6">TglJam</span></div></td>
    <td width="23"><div align="center"><em><strong><span class="style6">:</span></strong></em></div></td><TD width="285"><div align="left"><span class="style6"><font color="#0000CC">
      <?
   $tg = date("d"); $bln = date("m"); $thn = date("Y");
   $tanggal = "$tg-$bln-$thn";
  include "hari.php";
   echo "$hari, $tanggal";
   ?> 
      <input type="hidden" name="tanggal" value="<? echo $tanggal; ?>">
      : 
      <? 
$jam =date("H:i:s");
echo "$jam";
?>
      <input type="hidden" name="jam" value="<? echo $jam; ?>">
      <input type="hidden" name="KeyID" value="<? echo $KeyID; ?>">
      </font></span></div></TD>
    </tr>
      <tr bordercolor="#FFFFFF" class="style4">
        <td height="24"><div align="left"><span class="style6">NoRm</span></div></td>
    <td><div align="center"><em><strong><span class="style6">:</span></strong></em></div></td>
    <td><div align="left" class="style6"><? echo $awe[NoPasien]; ?>
      <input type="hidden" name="NoPasien" value="<? echo $awe[NoPasien]; ?>"></div></td>
    </tr>
      <tr bordercolor="#FFFFFF" class="style4">
        <td height="23"><div align="left"><span class="style6">Nama Pasien </span></div></td>
    <td><div align="center"><em><strong><span class="style6">:</span></strong></em></div></td>
    <td><div align="left" class="style6"><? echo $awe[NamaPasien]; ?></div></td>
    </tr>
      <td><div align="left"><span class="style6">JenisKelamin</span></div></td>
    <td><div align="center"><em><strong><span class="style6">:</span></strong></em></div></td>
    <td><div align="left" class="style6">
      <div align="left">
        <input type="hidden" name="JenisKelamin" value="<? echo $awe[JenisKelamin]; ?>">
        <select  name="JenisKelamin" disabled="disabled">
          <option value="<? echo $awe[JenisKelamin]; ?>">
            <?  
			   if($awe[JenisKelamin]=='P'){
			   echo "WANITA";
			   }elseif($awe[JenisKelamin]=='L'){
			   echo "PRIA";
			   }else{
			   echo "?";
			   }
?> 
            </option>
          <option value="LAKI-LAKI">Pria</option>
          <option value="PEREMPUAN">Wanita</option>
          </select>
        </div>
    </div></td>
     <tr>
       <td colspan="3" bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
	 
      <?
if($KodeDokter !=''){
$namaDok = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$KodeDokter'");
$x = mysql_fetch_array($namaDok);
?>
 
      <tr class="style6">
        <td height="26"><div align="left">Dokter</div></td><td><div align="center"><strong><em>:</em></strong></div></td>
    <td><div align="left"><? echo $x[NamaDokter]; ?>
      <input type="hidden" name="NamaDokter" value="<? echo $x[NamaDokter]; ?>">
      <input type="hidden" name="IdJal" value="<? echo $IdJal; ?>">
      <input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>"></div></td>
    </tr>
      <? }else{ ?>
      <tr class="style6" onClick="wCompare = window.open('jikudoktr2.php?KodeRujuk=<? echo $KodeRujuk; ?>&KeyID=<? echo $KeyID; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&hari=masku&id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
        <td colspan="3"><div align="center" class="style11"><font size="3">1.<span class="style14">
          DOKTER TUJUAN</span></font></div></td> 
    </tr>
      <? } ?>
      <?
if($KodeRujuk !=''){

$namaDokz = mysql_query("SELECT NamaRujukan,id FROM rujukan  WHERE id='$KodeRujuk'");
$z = mysql_fetch_array($namaDokz);
?>
      
      <tr class="style6">
        <td height="25"><div align="left" class="style16 style17">Rujukan Dari </div></td>
    <td><div align="center" class="style17"><strong><em>:</em></strong></div></td>
    <td><div align="left" class="style17"><? echo ucfirst(strtolower($z[NamaRujukan])); ?> || <a href="" style="text-decoration:none" onClick="wCompare = window.open('jikudoktr.php?KeyIDX=<? echo $KeyID; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $KodeDokter; ?>&hari=ok&id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Update</a>
      <input type="hidden" name="NamaRujukan" value="<?  echo $z[NamaRujukan]; ?>">
      <input type="hidden"  name="KodeDok" value="<? echo $KodeRujuk;  ?>">
      </div></td>
    </tr>
      <? }else{
?>
      <tr bgcolor="#FFFFFF" class="style6" onClick="wCompare = window.open('jikudoktr.php?KeyIDX=<? echo $KeyID; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $KodeDokter; ?>&hari=ok&id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
        <td colspan="3"><div align="center" class="style11"><font size="3">2.<span class="style13">
          RUJUKAN  DARI    </span></font></div></td> 
    </tr>
      <?  } ?>
      <?
if($KeyID!=''){
?>
      <tr class="style6">
        <td height="24"><div align="left">Assuransi</div></td><td><div align="center"><strong>:</strong></div></td>
    <td><div align="left"> <? 
$namaP= mysql_query("SELECT * FROM dataperusahaan WHERE id='$KeyID'");
$g = mysql_fetch_array($namaP);
echo ucfirst(strtolower($g[NamaPer]));
?>
      <input type="hidden" name="KeyID" value="<? echo $KeyID; ?>"> || <a href="" style="text-decoration:none"   onClick="wCompare = window.open('asssmi.php?ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $KodeRujuk; ?>&KodeDokter=<? echo $KodeDokter; ?>&hari=lanang&id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >Update</a> </div></td></tr>
      <?
}else{
?>
      <tr bgcolor="#FFFFFF" class="style6"  
	   onClick="wCompare = window.open('asssmi.php?ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $KodeRujuk; ?>&KodeDokter=<? echo $KodeDokter; ?>&hari=lanang&id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
        <td colspan="3"><div align="center" class="style11"><font size="3">3.<span class="style15">
          ASSURANSI</span></font></div></td> 
    </tr>
      <? } ?>
          <input type="hidden" name="KodeDept" value="<? echo $d9[id]; ?>">
          <input type="hidden" name="NamaDept" value="<?  echo $d9[NamaBagian]; ?>">
      
      <?
if($KodeBag!=''){
?>
    
      <?
}else{
?>
      
      <? } ?>
	  <input type="hidden" name="JenisRawat" value="INAP">
     
      <tr class="style6">
        <td>Kelas</td>
        <td>:</td><td><div align="left">
          <select name="Kel" class="style6">
            <option value="-">PILIH KELAS</option>
            <?
$jdhjdhf =  mysql_query("SELECT id,KodeKelas FROM kelas WHERE NamaKelas !='' ORDER BY NamaKelas");
while($ee = mysql_fetch_array($jdhjdhf)){
?>
            <option value="<? echo $ee[id]; ?>" onClick="location.href='leboke.php?velin=<? echo $ee[KodeKelas]; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KeyID=<? echo $KeyID; ?>&KodeBag=<? echo $KodeBag; ?>&KodeRujuk=<? echo $KodeRujuk; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>';">
              <?
$jshdjshdjsd = mysql_query("SELECT NamaKelas FROM kelas WHERE id='$ee[id]'");
$ko = mysql_fetch_array($jshdjshdjsd);
echo $ko[NamaKelas];
 ?>
              </option>
            <? } ?>
            </select>
          </div></td>
      </tr>
      <?
  if($velin!=''){
  ?>
      <tr>
        <td colspan="3" bgcolor="#FFFF99"><div align="center">
          <?
  $ksdksjksd = mysql_query("SELECT NamaKelas FROM kelas WHERE KodeKelas='$velin'");
  $usc = mysql_fetch_array($ksdksjksd);
  echo strtoupper($usc[NamaKelas]);
  ?>
          </div></td>
      </tr>
      <tr bordercolor="#FFFFFF" class="style6">
        <td><div align="left">Ruangan</div></td><td><div align="center"><em><strong>:</strong></em></div></td><TD><div align="left">
          <select name="NoRuangan" class="style6">
            <option value="">--RUANGAN/KELAS/BED--</option>
            <?
	$Ruan = mysql_query("SELECT * FROM ruangan WHERE stat=0 AND KodeKelas='$velin'  ORDER BY NoRuangan,NoBed");
	while($j = mysql_fetch_array($Ruan)){
	?>
            <option value="<? echo $j[id]; ?>"><?  
			//$j[NamaRuangan] - 
			echo "Kamar $j[NoRuangan] Bed $j[NoBed]";  ?></option>
            <? } ?>
            </select>
        </div></TD></tr>
      <? } ?>
      <tr class="style6">
	<td>Penanggung Jawab</td><td>:</td><td><div align="left">
	<input name="NamaPj2" type="text" class="style2" value="<? echo $k[NamaPj2]; ?>" size="20" maxlength="100">
	</div></td>
	</tr>
	<tr class="style6">
	<td>Alamat Pj</td><td>:</td><td><div align="left">
	<input name="AlamatPj" type="text" class="style6" value="<? echo $k[AlamatPj]; ?>" size="20"  maxlength="100">
	</div></td>
	</tr>
	<tr class="style6">
	<td>Cara Bayar</td><td>:</td><td><div align="left">
	  <select name="CaraBayar" class="style6">
	<option value="-">-Cara Bayar-</option>
	<option value="Pribadi" >Pribadi</option>
	<option value="Asuransi" >Asuransi</option>
	</select>
	</div></td>
	</tr><tR class="style6">
        <td colspan="3"><div align="left">
		<input type="radio" name="Mat" value="0" checked="checked">materai
		 || 
		 <input type="radio" name="Mat" value="1">Non materai
		</div></td>
    </tR>
      <?
$dkjkdjfd  = mysql_query("SELECT COUNT(id) AS jj FROM ruangan WHERE stat=0 AND KodeKelas='$velin'");
$yep= mysql_fetch_array($dkjkdjfd);
if($yep[jj]>0){
?>
      <tr bordercolor="#000000" bgcolor="#000033">
        <td height="26" colspan="3" bgcolor="#003399"><div align="center">
          
		  
		  <input name="simpan" type="submit" class="style6" value="Daftarkan">
          <input name="batal" type="button" class="style6" onClick="location.href='leboke.php?var=<? echo $var; ?>&hari=masku&id=<? echo $id; ?>';" value="Reset"> 
          <input name="kebas" type="button" class="style6" onClick="location.href='index.php';" value="Kembali">
          </div></td>
    </tr>
      <? } ?>
    </table>
  </div>
</form>
</div>
 </body>
 </html>
 <? } ?>