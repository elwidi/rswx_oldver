<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$NoBukti = $_GET["NoBukti"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$z = $ii;
if(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){

///////////////////////////////////////////////////////////////////
$ads = mysql_query("SELECT COUNT(id) as jj FROM txninap2 WHERE NoBukti='LAB-$NoBukti'");
$bx = mysql_fetch_array($ads);
//
if($bx[jj]>0 && $bala==1){
//
 $KeyID=date("d").date("m")."-".date("Y");
//
$kiakaik = mysql_query("SELECT NoUrut FROM urutanlab  where KeyID='$KeyID' ORDER BY id DESC");
$p = mysql_fetch_array($kiakaik);
//
$NoUrut=$p[NoUrut]+1;
$RegId="$id.LAB-$NoBukti";
$TglJam=date("d.m.Y-H:i:s");
  $hi=date("d");$bi=date("m");$ti=date("Y");
  $isikpao = mysql_query("INSERT INTO  `urutanlab` (`id`,`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`
  , `Tgl`, `Bln`, `Thn`)
 VALUES ('NULL','RI.$NoBukti', '$KeyID', '$NoUrut', '$RegId', '$z[NoPasien]', '$z[NamaPasien]', '$TglJam', '$a[Nama]','$hi','$bi','$ti')");
  }// end of bx[jj]
//////////////////////////////////////////////////////////////////
   ?>

<html>
<head>
 <style type='text/css'>
/*
Tema: LEGO
Oleh: http://hompimpaalaihumgambreng.blogspot.com
*/
ul.menu               {list-style:none;margin:10px 0;padding:0;height:33px;background-color:#FFFFFF;font:11px Verdana,Arial;}
ul.menu *             {margin:0;padding:0;}
ul.menu a             {display:block;text-decoration:none;color:#7eb7fb;}
ul.menu li            {position:relative;float:left;}
ul.menu ul            {position:absolute;z-index:100;top:32px;left:0;background-color:#7eb7fb;display:none;opacity:0;list-style:none;-webkit-box-shadow:0 3px 5px #aaa;-moz-box-shadow:0 3px 5px #aaa;box-shadow:0 3px 5px #aaa;}
ul.menu ul li         {position:relative;border:0;width:150px;margin:0;}
ul.menu ul li a       {display:block;padding:7px 15px 7px;background-color:#084a9b;color:#7eb7fb;}
ul.menu ul li a:hover {background-color:#ffe30a;color:#fff;}
ul.menu ul ul         {left:150px;top:-1px;}
ul.menu .menulink     {padding:10px 15px 10px;font-weight:bold;text-transform:uppercase;background:#FFFFFF;color:#000000;}
ul.menu .menulink:hover,
ul.menu .menuhover    {background:#449400;color:#caecac;}
ul.menu .sub          {background:#084a9b url(http://2.bp.blogspot.com/-x-_lO7zXjg4/Tk453ebAeHI/AAAAAAAAAvE/XXjrwOz0MbM/s1600/arrowgambreng.gif) 138px 10px no-repeat;color:#7eb7fb;}
ul.menu .sub:hover    {color:#fff;}
 </style>
  <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style2 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style223 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
  style1554 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}       .style24 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;}
    .style26 {color: #FFFFFF}
    .style27 {
	font-size: 10px;
	font-weight: bold;
	font-style: italic;
}
.style30 {color: #000099; font-weight: bold; }
    </style> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("susu_bantal2x.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>&NoBukti=<? echo $NoBukti; ?>", "wCompare", "width=550,height=430,left=500,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
  //--></script> 
</head> 
<body <? if($ada==3){ ?> onLoad="toCompare()"<? } ?>>
<div  align="left"> 
<form target="_self">
<table width="1102" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bgcolor="#59BA54" class="style24">
  <td height="65" colspan="2" bgcolor="#59BA54">
    <div align="left">
      <?
	   $file='';
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
          <img src="<? echo $file; ?>">      </div></td></tr>
	  <TR>
	  <td colspan="3" bgcolor="#D4D0C8"><div align="left" class="style2">
	    <div align="center"><em>
	      HALAMAN PEMERIKSAAN RAWAT INAP
	      </em></div>
	  </div></td>
	  </TR>
<tr  class="style24">
  <td width="390" colspan="" valign="top"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
   <?
   $kksjskj = mysql_query("SELECT * FROM urutanlab WHERE IdPasien='RI.$NoBukti'");
   $yep = mysql_fetch_array($kksjskj);
   if($yep[id]){
   ?>
   <tr>
   <td bgcolor="#FF9999">NO URUT</td>
   <td bgcolor="#FF9999">:</td>
   <td bgcolor="#FF9999"><div align="left"><? echo $yep[NoUrut]; ?></div></td>
   </tr>
   <?
   }
    $paj = strlen($NoBukti);
   if($paj>0){
  ?>
  <tr>
  <td bgcolor="#FFFF66"><span class="style30">NO TXN</span></td>
  <td bgcolor="#FFFF66"><span class="style30">:</span></td>
  <td bgcolor="#FFFF66"><div align="left" class="style30"><? 
  echo "LAB:$NoBukti"; ?></div></td>
  </tr>
  <?
  }
   ?>
  <tr>
  <td width="133">MSTKEY</td>
  <td width="8">:</td>
  <td width="194"><div align="left">
  <?
  echo "$ii[MstKey]";
  ?>
  </div></td>
  </tr>
  <tr>
  <td>TGL/JAM MASUK</td><td>:</td><td><div align="left"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk] $ii[JamMasuk]"; ?></div></td>
  </tr>
  <tr>
    <td>NO RM</td>
    <td>:</td>
    <td><div align="left"><? echo $ii[NoPasien]; ?></div></td>
  </tr>
  <tr>
    <td>NAMA PASIEN </td>
    <td>:</td>
    <td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
  </tr>
  <tr>
  <td>UMUR</td><td>:</td><td><div align="left"><?  echo "$ii[Umur] Thn ";
  $pc = explode(":",$ii[BlnUmur]); 
  echo "$pc[0] Bln $pc[1] Hr"; 
   ?></div></td>
  </tr>
  <tr>
    <td>DOKTER</td>
    <td>:</td>
    <td><div align="left"><? echo $ii[KetDokter]; ?></div></td>
  </tr>
  <tr>
    <td>RUANGAN</td>
    <td>:</td>
    <td><div align="left"><? 
	$splo = explode("-",$ii[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaRuangan]);
 ?></div></td>
  </tr>
  <tr>
  <td>KELAS</td><TD>:</TD><td><div align="left"><? echo $j[NamaKelas]; ?></div></td>
  </tr>
  <tr>
    <td>PENJAMIN</td>
    <td>:</td>
    <td><div align="left"><? echo strtoupper($ii[NamaPer]); ?></div></td>
  </tr>
  <tr>
    <td>RUJUKAN</td>
    <td>:</td>
    <td><div align="left"><? echo strtoupper($ii[NamaRujukan]); ?>
	<input type="hidden" name="id" value="<? echo $id; ?>">
	<input type="hidden" name="NoBukti" value="<? echo $NoBukti; ?>">
	<input type="hidden" name="ada" value="3">
	 
	
	</div></td>
  </tr>
  <?
   if($paj>0){
  ?>
  <tr>
    <td>PEMERIKSAAN</td>
    <td>:</td>
    <td><input type="text" name="NamaBiaya" maxlength="50" size="20" class="style2"></td>
  </tr>
  <tr>
  <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input type="submit" value="Submit" name="fgf" class="style2">
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="dfjfhf" type="button" class="style2" onClick="location.href='jshdshudsh.php?id=<?
		    echo $id; ?>&NoBukti=<? echo $NoBukti; ?>';" value="Cetak Struk"    style="background:#ECE9D8"> <?
$lmpa = mysql_query("SELECT count(id) as hh FROM cetak_hasil_labinap WHERE RegId='$ii[MstKey]' AND NoBukti='LAB-$NoBukti'");
$pop = mysql_fetch_array($lmpa);
if($pop[hh]>0){
?>
                   <input name="fgfg" type="button" class="style2" style="background:#FFFF00" onClick="wCompare = window.open('12_09.php?id=<? echo $id; ?>&NoBukti=<? echo $NoBukti;?>', 
  'wCompare', 'width=980,height=400,left=10,Top=70,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  value="Isikan Pemeriksaan Hasil">
                   <? 
} 
 $dasPx = mysql_query("SELECT COUNT(id) AS hh FROM txninap2 WHERE MstKey='$z[MstKey]' AND NoBukti='LAB-$NoBukti'");
$rr = mysql_fetch_array($dasPx);
if($rr[hh]>0){
?><input name="fggg"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" class="style2" onClick="location.href='siuInap.php?RegId=<? 
echo $ii[MstKey]; ?>&NoBukti=<? echo $NoBukti; ?>&gundul=pacul&ff=2';" value="Cetak Hasil Lab"    style="background:#ECE9D8"> 
<? } ?>
    
	<?
	if($yep[id]){
	?><input type="button" name="ghgh" value="Hapus Nomer Urut"  style="background:#99CC33"  onClick="wCompare = window.open('23_f2.php?id=<? echo $id; ?>&NoBukti=<? echo $NoBukti; ?>', 
  'wCompare', 'width=480,height=340,left=30,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   class="style2">
	<? }else{ ?>
	<input type="button" name="ghgh" value="Simpan Nomer Urut" style="background:#FF6699" 
		onClick="location.href='h.php?id=<? echo $id; ?>&NoBukti=<? echo $NoBukti; ?>&bala=1';" class="style2">
		<? } ?><input type="button" name="fgf" value="Selesai" onClick="location.href='../Daftar/fito_sayangku.php';" class="style2">
  </div></td>
  </tr>
  <? }else{ ?>
  <tr>
  <td colspan="3" bgcolor="#666666" ><div align="center"><?
  $Pak ="LAB-".date("dmy.H:i:s");
  ?>
  <input name="DFD" type="button" class="style2"  onClick="location.href='h7.php?id=<? echo $id; ?>&Dus=<? echo $Pak; ?>';" value="Buat NoBukti">
  <input type="button" name="fgf" value="Cek Data" onClick="wCompare3eee = window.open('x.php?id=<? echo $id; ?>', 
  'wCompare3eee', 'width=380,height=300,left=210,Top=170,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3eee.focus();"   class="style2">
  <input type="button" name="fgf" value="Kembali" onClick="location.href='index.php';" class="style2">
  </div></td>
  </tr>
  <? } ?>
  </table>
  </div></td><td width="698" valign="top"><div align="left">
  <table width="601" border="0" cellpadding="1" cellspacing="1" class="style223">
  <tr>
  <td width="41" height="24" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
  <td width="189" bgcolor="#59BA54"><strong>NAMA BIAYA</strong></td>
  <td width="63" bgcolor="#59BA54"><div align="right"><strong>HARGA</strong></div></td>
  <td width="40" bgcolor="#59BA54"><div align="center"><strong>QTY</strong></div></td>
  <td width="70" bgcolor="#59BA54"><div align="right"><strong>TOTAL</strong></div></td>
  <td bgcolor="#59BA54" colspan="2"><strong>OPR</strong></td>
   </tr>
  <?
  $nomer =1;
   $kjdkdjf  = mysql_query("SELECT * FROM txninap2 WHERE MstKey='$ii[MstKey]' and NoBukti='LAB-$NoBukti'");
  while($aa = mysql_fetch_array($kjdkdjf)){
  ?>
  <tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo strtoupper($aa[NamaBiaya]);?></div></td>
  <td><div align="right"><? echo number_format($aa[Harga]); ?></div></td>
  <td><div align="center"><? echo number_format($aa[Qty]); ?></div></td>
  <td><div align="right"><? echo number_format($aa[JumlahHarga]); 
  $tot = $tot + $aa[JumlahHarga];
  ?></div></td>
  <td width="113"><div align="left"><? echo strtoupper($aa[Opr]); ?></div></td>
  <td width="63" bgcolor="#FFFF99"><a href="#" class="style2 style27" style="text-decoration:none"  onClick="wCompare3WW = window.open('U.php?NoBukti=<? echo $NoBukti; ?>&dimas=ela&id=<? echo $id; ?>&IdDetil=<? echo $aa[id]; ?>', 
  'wCompare3WW', 'width=580,height=140,left=330,Top=250,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3WW.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">HAPUS</a>  </tr>
 
  <?
  $nomer++; } ?> <tr>
    <td colspan="4" bgcolor="#59BA54"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#59BA54"><div align="right" class="style26"><? echo number_format($tot); ?></div></td>
  </tr>
  </table>
  </div></td>
</tr>
  </table>
  </form>
</div>
</body>
</html>
<? 
}
?>