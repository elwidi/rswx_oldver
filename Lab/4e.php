<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$z = $ii;
$kdjkdjkfd_Fgf = mysql_query("SELECT * FROM kwitansirj WHERE RegId='$ii[RegId]'");
$nn = mysql_fetch_array($kdjkdjkfd_Fgf);
//
if($nn[id]=='s4444'){
echo "TRANSAKSI INI SUDAH SELESAI <br>DI BAYAR DI KASIR TGL : $nn[TglBayar]-$nn[BlnBayar]-$nn[ThnBayar]<br>OLEH $nn[Kasir] : JAM: $nn[JamBayar]";
}elseif(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){

	$ndsa = "$z[id].$z[RegId]";
	$djkdjkdfd = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
$ads = mysql_query("SELECT COUNT(id) as jj FROM txnjalan2 WHERE RegId='$ii[RegId]'");
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
$RegId="$id.$z[RegId]";
$TglJam=date("d.m.Y-H:i:s");
  
 $isikpao = mysql_query("INSERT INTO  `urutanlab` (`id`,`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`
 , `Tgl`, `Bln`, `Thn`)
 VALUES ('NULL','RJ.$id', '$KeyID', '$NoUrut', '$RegId', '$z[NoPasien]', '$z[NamaPasien]', '$TglJam', '$a[Nama]','$z[TglMasuk]','$z[BlnMasuk]','$z[ThnMasuk]')");
 }

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
.style3 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
  style1554 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}       .style24 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;}
    .style6 {font-size: 9px}
    </style> 
</head>
<script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("susu_bantal2.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>", "wCompare", "width=660,height=400,left=400,Top=150, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

//--></script>
<body <? if($ada==3){ ?> onLoad="toCompare()"<? } ?>>
<div  align="left"> 
  <blockquote>
    <blockquote>
	<?
	if($nn[id]){
	
	}else{
	?>
      <form target="_self">
        <? } ?><table width="1169" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
          <tr bgcolor="#59BA54" class="style24">
            <td height="28" colspan="2" bgcolor="#FFFFFF">
             Halaman Txn Lab</td>
      </tr>
          <tr>
            <td colspan="3" bgcolor="#FFCCCC" class="style3"><strong>HALAMAN PEMERIKSAAN LAB RAWAT JALAN</strong> </td>
      </tr>
          <tr  class="style24">
            <td width="390" colspan="" valign="top"><div align="left">
              <table border="0" cellpadding="2" cellspacing="2" class="style2">
                <?
   $Key="RJ.$id";
  $sdsd343 = mysql_query("SELECT NoUrut,id FROM urutanlab  where IdPasien='$Key' ORDER BY id DESC");
$xd = mysql_fetch_array($sdsd343);

  if($xd[NoUrut]){
  ?>
                <tr>
                  <td>No Urut </td>
                  <td>:</td><td><div align="left"><? 
  echo "$xd[NoUrut]";
  ?></div></td>
        </tr>
                <?
  }
  ?>
                <tr>
                  <td width="133">RegId</td>
                  <td width="8">:</td>
        <td width="194"><div align="left">
          <?
  echo "$ii[RegId]";
  ?>
          </div></td>
        </tr>
                <tr>
                  <td>TglMasuk/Jam</td>
                  <td>:</td><td><div align="left"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk] $ii[JamMasuk]"; ?></div></td>
        </tr>
                <tr>
                  <td>No Rm </td>
                  <td>:</td>
          <td><div align="left"><? echo $ii[NoPasien]; ?></div></td>
        </tr>
                <tr>
                  <td>Nama Pasien </td>
                  <td>:</td>
          <td><div align="left"><? echo ucfirst(strtolower($ii[NamaPasien])); ?></div></td>
        </tr>
                <tr>
                  <td>Umur</td>
                  <td>:</td><td><div align="left"><?  echo "$ii[Umur] Thn ";
  $pc = explode(":",$ii[BlnUmur]); 
  echo "$pc[0] Bln $pc[1] Hr"; 
   ?></div></td>
        </tr>
                <tr>
                  <td>Dokter</td>
                  <td>:</td>
          <td><div align="left"><? echo ucfirst(strtolower($ii[NamaDokter])); ?></div></td>
        </tr>
                <tr>
                  <td>Bagian</td>
                  <td>:</td>
          <td><div align="left"><? echo ucfirst(strtolower($ii[Bagian])); ?></div></td>
        </tr>
                <tr>
                  <td>Penjamin</td>
                  <td>:</td>
          <td><div align="left"><? echo ucfirst(strtolower($ii[NamaPer])); ?></div></td>
        </tr>
                <tr>
                  <td>Rujukan</td>
                  <td>:</td>
          <td><div align="left"><? echo ucfirst(strtolower($ii[RujukanDari])); ?>
            <input type="hidden" name="id" value="<? echo $id; ?>">
            <input type="hidden" name="ada" value="3">
            
            </div></td>
        </tr>
                <tr>
                  <td>Pemeriksaan</td>
                  <td>:</td>
          <td><input type="text" name="NamaBiaya" maxlength="50" size="20" class="style2"<?  if($nn[id]){ ?> disabled="disabled"<?}else{  } ?>></td>
        </tr>
                <tr>
                  <td colspan="3"><div align="left">
                    <a href="../Farmasi/wahit.php?id=<? echo $id; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">Input Obat / Alkes</a>
                    </div></td>
        </tr>
                </table>
        </div></td><td width="765" valign="top"><div align="left">
          <iframe src="s3w.php?id=<? echo $id; ?>" width="700" height="300" frameborder="0"></iframe>
        </div></td>
      </tr>
	  <tr>
	  <td colspan="3" bgcolor="#000000"><div align="left">
  <?
	  if($xd[NoUrut]>0){
	  ?>
  <?
		} 
	if($nn[id]){}else{
	
	?>
  <input type="button" name="fgf" value="Tambah Pemeriksaan" onClick="location.href='cekar_cekir2.php?RegId=<? echo $ii[RegId]; ?>';" class="style2"><? } ?>
  <? } ?>
	    <span class="style6">
	      <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="dfjfhf" type="button" class="style3" onClick="location.href='a_d.php?id=<? echo $id; ?>';" value="Cetak Struk">
	      </span>
	    <?
	if($nn[id]){}else{
	?><input name="ffgfg" type="button" class="style3" onClick="wCompare = window.open('d23c.php?id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=300,left=70,Top=189,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Ambil /Paket"><? } ?>
	    <input type="button" name="fgf" value="Selesai" onClick="location.href='../Daftar/ed_d.php';" class="style2">
	    <input type="button" name="fgf2" value="Depan" onClick="location.href='index.php';" class="style3"><?
	$ldjfkjdkfdf_Dfdfd = mysql_query("SELECT COUNT(id) as jj FROM tampil_lab WHERE IdPasien='$ii[id]'");
	$uha = mysql_fetch_array($ldjfkjdkfdf_Dfdfd);
	if($uha[jj]>0){
	?>
	    <input type="button" name="dfdfd_dff" value="Reset Page" onClick="location.href='jajaha_dd.php?id=<? echo $id; ?>';" style="background:#FFCC33">
	    <? } ?> </div></td>
	  </tr>
	    <tr>
  <td colspan="3" bgcolor="#000066"><div align="left">
  <input type="submit" value="Submit" name="fgf" class="style2"><?
  $kju = mysql_query("SELECT COUNT(id) AS hh FROM cetak_hasil_lab  WHERE RegId='$ii[RegId]'");  
$nok = mysql_fetch_array($kju);
if($nok[hh]>0){
	  ?>    <input type="button" name="fggf" value="Tamplkan Edit Dalam 1 Form " onClick="wCompare = window.open('fo_sk.php?id=<? echo $id; ?>', 
  'wCompare', 'width=900,height=440,left=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" class="style2" style="background:#CCFF00">
	<? }?><?
  if($xd[NoUrut]>0){
  ?>
  <input type="button" name="ghgh" value="Hapus Nomer Urut "  style="background:#FFFF00" onClick="wCompare = window.open('23_f.php?id=<? echo $id; ?>&bala=<? echo $bf[id]; ?>', 
  'wCompare', 'width=480,height=340,left=30,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"   class="style2">
  <?
  }else{
 if($bx[jj]>0){ ?><input type="button" name="fgf" value="Simpan NoUrut" onClick="location.href='4e3.php?id=<? echo $id;
		?>&bala=1';" class="style2"><? } ?>
		<? } ?><?
		if($bx[jj]>0){
		?>
    <input type="button" name="fgf" value="Cetak Hasil" onClick="location.href='cekar_cekir.php?akan=11&RegId=<? echo $ii[RegId]; ?>';" class="style2">
 
  </div></td>
  </tr>
        </table>
      </form>
    </blockquote>
  </blockquote>
</div>
</body>
</html>
<? 
}
?>