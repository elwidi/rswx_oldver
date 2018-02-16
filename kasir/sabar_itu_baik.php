<?php
session_start();
include "../konek.php";
include "../hari.php";
include "../ceke.php";
$iin = $_GET["iin"];
$dimas = $_GET["dimas"];
$hasil = $_GET["hasil"];
$tres = $_GET["tres"];
  $id = $_GET [ "id" ];
  $NamaBarang = $_GET["NamaBarang"];
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if($x[TglKeluar]!=0){
header("Location:../x23.php?id=$id");
}
 if(!$x[id]){
header("Location:./diono.php");
}
$Daat = mysql_query("SELECT id,NamaDokter FROM dokter WHERE id='$IdDokter'");
$sx= mysql_fetch_array($Daat);
 $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan); 
  $bandingX =date("m/d/Y"); // "$bln2/$tgl2/$thn1";
 $wktX = strtotime($bandingX);
 $compX = strtotime(date("m/d/Y",$wktX));
 $kiniX = strtotime("$x[BlnMasuk]/$x[TglMasuk]/$x[ThnMasuk]");
  $sekarX = ceil(($compX-$kiniX)/86400);

    $mulaiX=0;
 $disikX=1;
  while($mulaiX<$sekarX){
    $compareX = date("d/m/Y",$kiniX +$mulaiX*86400);
 $pecaX=explode("/",$compareX);
 $TgR=$pecaX[0]-0;
 $BlR=$pecaX[1]-0;
  $ThR=$pecaX[2]-0;
 $KeyID = "$TgR".$BlR.$ThR."-$j[id]";
$Nial=$j[RpHari]*20/100;
$NR=$j[RpHari]*20/100;
if($Nial<=100000){// && $id!=4){
$Nial=100000;
}else{
$Nial=$Nial;
} 
$tglXS = "$ThR-$BlR-$TgR";

$hari = date('l',strtotime($tglXS));
if($hari=="Sunday"){
$hari = "Minggu";
}elseif($hari=="Monday"){
$hari="Senin";
}elseif($hari=="Tuesday"){
$hari = "Selasa";
}elseif($hari=="Wednesday"){
$hari="Rabu";
}elseif($hari=="Thursday"){
$hari="Kamis";
}elseif($hari=="Friday"){
$hari="Jum at";
}elseif($hari=="Saturday"){
$hari="Sabtu";
}
$dino=$hari;
  $isikane = mysql_query("INSERT INTO 
`jasalayan` 
(`id`, `IdPasien`, `KeyID`,`NamaBiaya`,`Hari`, `NamaKelas`, `Tgl`, `Bln`, `Thn`, `Nilai`, `Nilai2`) VALUES 
(NULL,'$id', '$KeyID', 'Jasa Layanan','$dino','$j[NamaRuangan]/$j[NamaKelas]', '$TgR', '$BlR', '$ThR', '$Nial','$NR')");
//
$yhiuusds = mysql_query("UPDATE `Mitra`.`jasalayan` SET `Hari` = '$dino',
`NamaKelas` = '$j[NamaRuangan]/$j[NamaKelas]',
`Tgl` = '$TgR',
`Bln` = '$BlR',
`Thn` = '$ThR',
`Nilai` = '$Nial' WHERE  `KeyID` ='$KeyID'");
//
$mulaiX++; }
  ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#333333';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style6 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #003399; }
.style7 {color: #003399}
.style10 {
	color: #333333;
	font-style: italic;
	font-weight: bold;
}
.style17 {
	color: #990000;
	font-weight: bold;
	font-style: italic; font-size:12px
}
.style19 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #333333; font-style: italic; font-weight: bold; }
.style21 {color: #000000; font-weight: bold; }
.style28 {color: #FFFFFF}
.style29 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #FFFFFF; }
.style30 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #003399; font-style: italic; }
.style31 {	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
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
<body background="../gambar/bag.jpg">
<div align="center">
   <?
if($hasil>0){
?>
  <form action="d909_fg.php">
  <? 
}elseif($kandang=='sapi'){
}elseif($iin=='bojo'){
?>
  <form  target="_self">
  <? 
}else{
?>
  <form action="ela_anak_sayang.php"> 
  <? } ?>
   <table > 
  <tr  bgcolor="#FFCCCC">
<td colspan="3" bgcolor="#60BC59"><div align="left" ><?
	if($a[KodeBagian]==39){
$file='../keperawatan/images/ns_01.gif';
}else{
$file='../gambar/kasir.png';
}
?>
	<?
  	if($a[Level]==1){
	       $file='../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../gambar/cust ser.gif';
		   }elseif($a[Level]==11){
		   $file='../gambar/farmasi.gif';
		   }elseif($a[Level]==112){
		   $file='../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../gambar/keuangan.gif';
		   }elseif($a[Level]==12){
		   $file='../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../gambar/poli.gif';
		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==10){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
</div></td>
</tr>
 <tr>
<td width="299">
              <div align="left">
      <span class="style6">REG ID</span>              </div>        </td><td width="17">
               : 
            </td>
      <td width="399"><div align="left" class="style3 style7"><? echo $x[MstKey]; ?>
                   <input type="hidden" name="IdPasien" value="<? echo $id; ?>">
      </div></td>
</tr>
<tr>
<td>
              <div align="left">
                <span class="style6">TGL MASUK</span>              </div>        </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><td>
                 <div align="left" class="style6"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?> ||  <? 
				echo $x[JamMasuk]; 
				?></div>
             </td>
</tr>
<tr>
<td>
              <div align="left">
                <span class="style6">KELAS</span> </div> </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><td>
                 <div align="left" class="style6"><? 
				 
echo strtoupper($j[NamaRuangan]); ?></div>
             </td>
</tr>
 
 <tr>
<td>
              <div align="left">
                <span class="style6">NAMA PASIEN</span>              </div>        </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><TD>
                 <div align="left" class="style6"><? echo strtoupper($x[NamaPasien]); ?></div>
             </TD>
</tr>
<?
$kandang = $_GET["kandang"];
if($kandang=='sapi'){

}elseif($ipung==1){
?><!-- 
<tr valign="top">
<td bgcolor="#990000" class="style16">DOKTER GANTI</td>
<td bgcolor="#990000" class="style16">:</td>
<td bgcolor="#990000" class="style16"><div align="left">
  <span class="style21">
  <select name="Kodok" class="style3">
    <option value="">--PILIH DOKTER--</option>
    <? /*
$dhjdhfjdjsdfjn = mysql_query("SELECT id FROM dokter ORDER BY NamaDokter");
while($ff_i = mysql_fetch_array($dhjdhfjdjsdfjn)){
?>
    <option value="<? echo $ff_i[id]; ?>" onClick="location.href='frs.php?KodeDokter=<? echo $ff_i[id]; ?>&id=<? echo $id; ?>&makan=enak';">
      <?
$jhjdhf_kdfjdkfj = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$ff_i[id]'");
$rt = mysql_fetch_array($jhjdhf_kdfjdkfj);
echo $rt[NamaDokter]; 
 ?>
      </option>
    <? }  */ ?>
  </select>
  </span></div></td>
</tr>
-->
<?
}else{
?>
<tr>
<td bgcolor="#333333">
              <div align="left" class="style21 style28">
      <span class="style3">DOKTER</span>              </div>        </td>
<td bgcolor="#333333">
                 <div align="center" class="style29">:</div>      </td>
<td bgcolor="#333333">
                 <div align="left" class="style29"><?  echo $x[KetDokter]; ?></div>      </td>
</tr>
<? } ?>
 
<tr>
<td> <div align="left" class="style6">RUJUKAN
 </div></td><td><div align="center" class="style6"><strong>:</strong></div></td><td><div align="left" class="style6"><? echo $x[NamaRujukan]; ?></div></td>
</tr>
<?
$kdidkfkddj  = mysql_query("SELECT COUNT(id) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$upk = mysql_fetch_array($kdidkfkddj);
if($upk[jj]>0){
?>
<tr>
<td bgcolor="#FFFF99" class="style6"><em>BAYAR DP</em></td>
<td bgcolor="#FFFF99" class="style30">:</td>
<td bgcolor="#FFFF99" class="style6"><div align="left"><em><? echo $upk[jj]; ?> Kali || 
<a href="#" style="text-decoration:none" onClick="wCompare389j = window.open('6f2.php?id=<? echo $id; ?>', 
  'wCompare389j', 'width=810,height=400,left=270,Top=128,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare389j.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >CEK DETIL</a></em></div></td>
</tr>
<?
}
?>
<tr bgcolor="#000000">
<td bgcolor="#FFFFFF"><span class="style19">ASSURANSI</span></td>
<td bgcolor="#FFFFFF"><div align="center" class="style6 style10">:</div></td>
<td bgcolor="#FFFFFF"><div align="left" class="style19">
<? 
if($x[NamaPer]=="JAMSOSTEK ASURANSI" && $x[TglKeluar]==0){
?>
<a href="sambel_pete_wek.php?id=<? echo $id; ?>" style="text-decoration:none "> 
<? echo strtoupper($x[NamaPer]); ?></a><?
}else{
echo strtoupper($x[NamaPer]);
}  ?></div></td>
</tr>
<?
$dkdkdk_009 = mysql_query("SELECT SUM(Jam) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r = mysql_fetch_array($dkdkdk_009);
//
$dkdkdk_0092 = mysql_query("SELECT SUM(Db) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r2 = mysql_fetch_array($dkdkdk_0092);
//
$dkdkdk_0093 = mysql_query("SELECT SUM(Kk) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r3 = mysql_fetch_array($dkdkdk_0093);
//
$dkdkdk_0094 = mysql_query("SELECT SUM(Tunai) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r4 = mysql_fetch_array($dkdkdk_0094);
//
$gede = $u_r[jj]+$u_r2[jj]+$u_r3[jj]+$u_r4[jj];
  //$Nii =mysql_query("SELECT SUM(Nilai) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
 //$pop = mysql_fetch_array($Nii);
if($pop[jj]==$TBiayaX && $pop[jj]!=''){ }else{
?>
<?
 if($iin=='bojo' || $kandang=='sapi' || $a[Level]==1){

}else{
?>
<tr>
<td><span class="style6">PILIH NOMER STRUK </span></td>
<td><div align="center" class="style6"><strong>:</strong></div></td><td><div align="left" class="style6">
#MM-
    <input name="NoStruk" type="text" class="style6" size="20" maxlength="20" autofocus="autofocus"  >
 
<span class="style17 style28">.</span></div></td>
</tr>
<? } ?>
<? } 
   
if($kandang=='sapi' && $a[Level]!=16){
?>
<tr>
<td colspan="3"> 
<!-- <form action="sikan.php">--></td>
</tr>
<? 
}elseif($iin=='bojo' || $a[Level]==1){

}else{
?>
 
<tr bgcolor="#9DFDBA">
<td colspan="3" bgcolor="#006666"><div align="left">
<?
 
 ?> <?
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
}else{
?><?
} ?>
 <?
  if($a[Level]==91  || $a[Level]==112 || $a[Level]==16){ }else{
 ?>
 <?
if($FiLaDim[Sepuluh]=='on'){
?><input name="jdjhjdf" type="button"   onClick="wCompare6ttttt = window.open('v4dd.php?id=<? echo $id; ?>', 
  'wCompare6ttttt', 'width=580,height=300,left=270,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare6ttttt.focus();"  class="style29"  style="background:#000000"  value="Pulangkan Pasien">
 <? } ?><? } ?>
  <input name="sddf" type="submit" class="style3" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Prosses&gt;&gt;"      > 
<input name="dffff" type="button" class="style3"   onClick="wCompare = window.open('kripik_goreng.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=300,left=270,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   value="Cetak Struk">
	<input name="dffff" type="button" class="style3"   onClick="location.href='../Daftar/txn/f_f.php?id=<? echo $x[id]; ?>';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   value="Input Icd">  
<input name="dfff" type="button" class="style3" onClick="location.href='../Daftar/codot.php?id=<? echo $x[id]; ?>';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Ctk Kartu Daftar">
<?
if($FiLaDim[Lima]=='on'){
?><input name="dffgg" type="button" class="style3" onClick="location.href='../Farmasi/nando.php?id=<? echo $id; ?>';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Input Obat/Alkes">
<? } ?>
<input type="button" name="ghghg" value="Catat" onClick="location.href='cd_dfd2.php?id=<? echo $id; ?>';" class="style3">
<input name="dffgg" type="button" class="style3" onClick="location.href='../Daftar/fito_sayangku.php';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Kembali">
</div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#990000"><div align="left">
    <input name="fggfg" type="button" class="style3" onClick="location.href='besan_muda_pacaran_lagi.php?id=<? echo $id; ?>';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Buat Struk Baru">
     <?
	 if($FiLaDim[EmpatBelas]!='on'){?>
	 <input type="button" name="ffggff" value="Input Diet" onClick="wCompare_01bz = window.open('x10_m.php?id=<? echo $id; ?>', 
  'wCompare_01bz', 'width=580,height=300,left=270,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01bz.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"     style="background:#FFCC00">
	 <? }  
if($FiLaDim[Sebelas]=='on'){
?><input name="Baysdd" type="button" class="style3"   onClick="wCompare = window.open('r.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=500,left=470,Top=128,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Bayar Deposit">
	<? } ?>
    <input name="dfdfg" type="button" class="style3" onClick="location.href='../x23.php?id=<? echo $id; ?>';" value="Tampil Cetak Kwitansi"
	 onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	 <?
	 $usjsujssu = mysql_query("SELECT COUNT(id) AS hh FROM dataupdate WHERE IdUpdate='x.$id'");
	 $ygh = mysql_fetch_array($usjsujssu);
	 ?>
<input name="dfdfg" type="button" class="style3" onClick="wCompare = window.open('n78.php?id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=350,left=420,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  value="Ubah Harga Kamar Rinap ( <? echo $ygh[hh]; ?>)">
	
<input  <? echo $war; ?>  type="button" name="DFFD2" value="Vaksin" class="style31" onClick="wCompares2_0901 = window.open('yu90.php?id=<? echo $id; ?>', 
  'wCompares2_0901', 'width=980,height=540,left=200,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_0901.focus();"   >
</div></td>
</tr>
<? }  
if($iin=='bojo'|| $a[Level]==1){

}else{
?><tr>
<td colspan="3"><div align="left">
<iframe src="itu_aya_ayam.php?IdPasien=<? echo $IdPasien; ?>&MstKey=<? echo $x[MstKey]; ?>" width="729" height="200" frameborder="0"></iframe>  
</div></td>
</tr>
<? } ?>
<?
if($tres==3){

}elseif($dimas=='3'){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style6">
<tr>
<td width="18" bgcolor="#D4D0C8">NO</td>
<td width="140" bgcolor="#D4D0C8">NAMA BARANG</td>
<td width="68" bgcolor="#D4D0C8"><div align="right">HARGA</div></td>
<td width="73" bgcolor="#D4D0C8">OPR</td>
<td width="106" bgcolor="#D4D0C8">TGLJAM</td>
</tr>
<?
$no=1;
$kesas909= mysql_query("SELECT * FROM barang_logistik WHERE NamaBarang like '$NamaBarang%' AND NamaBarang NOT LIKE '%kosong%'");
while($kds = mysql_fetch_array($kesas909)){
?>
<tr onClick="location.href='sabar_itu_baik.php?hasil=<?  echo $kds[id]; ?>&IdPasien=<? echo $IdPasien; ?>&NamaBarang=<? echo $NamaBarang; ?>&id=<? echo $id; ?>&iin=bojo&dimas=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo strtoupper($kds[NamaBarang]); ?></div></td>
<td><div  align="right"><? echo number_format($kds[Harga]); ?></div></td>
<td><div align="left"><? echo strtoupper($kds[Opr]); ?></div></td>
<td><div align="left"><? echo $kds[TglJam]; ?></div></td>
</tr>
<? $no++; } ?>
</table>
</div></td>
</tr>
<? 
}
?>
</table>    
</form>
</body>
</html>
 