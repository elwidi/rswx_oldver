<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==2){
 $NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$kadal = $_GET["kadal"];
$bas = $_GET["bas"];
$Alamat = $_GET["Alamat"];
$NamaBapak = $_GET["NamaBapak"];
$Telp = $_GET["Telp"];
$id = $_GET["id"];
$Tgl=$_GET["Tgl"];
$Bln  = $_GET["Bln"];
$Thn= $_GET["Thn"];
$ikikak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($ikikak);
//
  $pode = explode("-",$pp[tgllhr]);
  ?>
<html>
<head>
<?
include "ceka_c2.php";
 ?>
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
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
}
 </style>
<script type='text/javascript'>
//<![CDATA[
var menu=function(){var t=15,z=500,s=6,a;
function dd(n){this.n=n; this.h=[]; this.c=[]}
dd.prototype.init=function(p,c){a=c; var w=document.getElementById(p), s=w.getElementsByTagName('ul'), l=s.length, i=0;
for(i;i<l;i++){var h=s[i].parentNode; this.h[i]=h; this.c[i]=s[i];
h.onmouseover=new Function(this.n+'.st('+i+',true)');
h.onmouseout=new Function(this.n+'.st('+i+')');}}
dd.prototype.st=function(x,f){var c=this.c[x], h=this.h[x], p=h.getElementsByTagName('a')[0];
clearInterval(c.t); c.style.overflow='hidden';
if(f){p.className+=' '+a;
if(!c.mh){c.style.display='block'; c.style.height=''; c.mh=c.offsetHeight; c.style.height=0}
if(c.mh==c.offsetHeight){c.style.overflow='visible'}
else{c.style.zIndex=z; z++; c.t=setInterval(function(){sl(c,1)},t)}}else{p.className=p.className.replace(a,''); c.t=setInterval(function(){sl(c,-1)},t)}}
function sl(c,f){var h=c.offsetHeight;
if((h<=0&&f!=1)||(h>=c.mh&&f==1)){if(f==1){c.style.filter=''; c.style.opacity=1; c.style.overflow='visible'}
clearInterval(c.t); return}
var d=(f==1)?Math.ceil((c.mh-h)/s):Math.ceil(h/s), o=h/c.mh;
c.style.opacity=o; c.style.filter='alpha(opacity='+(o*100)+')';
c.style.height=h+(d*f)+'px'}
return{dd:dd}}();
//]]>
</script>
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
.style1 {
	color: #FFCCCC;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style2 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style333 {
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
}   .style14 {
	font-size: 18px;
	font-weight: bold;
}
    .style18 {color: #FFFFFF}
    .style20 {color: #FFFFFF; font-weight: bold; }
    .style21 {
	color: #000099;
	font-weight: bold;
}
    .style22 {color: #000099}
    .style23 {color: #EFEFEF}
    .style24 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;}
    .style25 {
	color: #999933;
	font-style: italic;
}
    </style> 
</head>
</head><body background="../gambar/bag.jpg">
<div align="center">
<table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr valign="top">
<td width="905" height="41" colspan="3"><div align="left">
<table border="1" cellpadding="1" cellspacing="1">
<tr valign="top">
<td width="110"  ><div align="center">Gambar</div></td>
<td width="1224"><div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr valign="top">
<td width="799" height="68" >Halaman Pendaftaran <br>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="59">User</td>
<td width="8">:</td>
<td width="264"><div align="left"><?
echo $a[User];
?></div></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><div align="left"><?
echo $a[Nama];
?></div></td>
</tr>
</table></td>
</tr>
</table>
</div></td>
</tr> 
</table>
</div></td>
</tr> 
     <tr valign="top" bgcolor="#33FF00"> 
      <td colspan="2" bgcolor="#FFFFFF"> 
        <div align="left">
 
<ul class='menu' id='menugambreng'>
            <li><a href=''    class='menulink'>PASIEN</a> 
              <ul>
           <li><a href='index.php?kadal=6'>DAFTAR BARU</a> </li> 
                <li><a href='ed_d.php?ade=3'>RAWAT JALAN</a></li>
                <li><a href='fito_sayangku.php'>RAWAT INAP</a></li>
                
                <li><a href='x09_8.php'>BOOKING PASIEN</a></li>
                <li><a href='xw.php'>PASIEN BATAL</a></li>
              
              </ul>
            </li>
			
			
            <li><a href='#' class='menulink' style="text-decoration:none">MASTER 
              DATA</a> 
              <ul>
                <li><a href="index.php?NoPasien=&NamaPasien=a&kadal=3&bas=8">DATA 
                  PASIEN</a></li>
                <li><a  href="master_data/bg_m.php">DATA DOKTER</a></li>
                <li><a  href="master_data/3zsx.php">DATA RUJUKAN</a></li>
                <li><a   href="master_data/bisa_saja_ya.php">DATA RUANGAN</a></li>
                <li><a   href="master_data/mas_iqbal_baik.php">DATA ICD</a></li>
                <li><a   href="master_data/2wv.php">ALASAN BATAL RJ</a></li>
                <li><a   href="master_data/xx2.php">PENJAMIN</a></li>
               </ul>
             
            </li>
	    
             <li> <a href='#' class='menulink' style="text-decoration:none">LAPORAN</a>  
              <ul>
                <li class="sub"><a href="#" class='sub'>RL Rawat Jalan</a> 
                  <ul>
                    <li><a  href="laporan/p_61.php">RL 4B</a></li>
                   </ul>
			    </li>
				  
				  <li class="sub"><a href="#" class='sub'>Morbilitas</a> 
                  <ul>
                    <li><a    onClick="wCompare = window.open('x01_s.php?mas=popong', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" href="#">Morbilitas 1</a></li>
               
                  </ul>
				  </li>
				<li>
              <li><a href='#' class='sub' style="text-decoration:none">Produktifitas</a> 
                  <ul>
                    <!--  <li><a  href="laporan/s_s.php">EXECUTIF REPORT INPATIEN</a></li> 
                  -->
                   <!-- laporan/c.php -->
				   <li><a  href="#"    onClick="wCompare = window.open('x01_s.php', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">Poduktifitas Poli RJ</a></li>
                <!--laporan/xc.php-->    <li><a   href="#"  onClick="wCompare = window.open('x01_s.php?mas=bagong', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">Poduktifitas dr RJ</a></li> 
                    <li><a  href="laporan/9c.php"  >Poduktifitas Assuransi RJ</a></li>
                  </ul>
                </li>
               
              </ul>
            </li> 
			
			
    
			  	  
        
            <li> <a href="../keluar.php" class="menulink">KELUAR</a> </li>
		
			    
</ul><script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script>
</div></td>
</tr> 
<?
if($a[KodeBagian]==22){
?><tr>
<td colspan="2" valign="top">
<div align="left">
<table width="1100" border="0" cellpadding="2" cellspacing="2" class="style1">
              <tr  bgcolor="#58BB4F">
                <td width="21" class="style2" ><span class="style3">NO</span></td>
    <td width="39" class="style2" ><strong>REGID</strong></td>
    <td width="39" class="style2" ><strong>TGL</strong></td>
    <td width="66" class="style2" ><strong>JAM MASUK</strong></td>
    <td width="99" class="style2" ><strong>NO RM </strong></td>
    <td width="141" class="style2" ><strong>NAMA PASIEN</strong></td>
    <td width="106" class="style2" ><strong>POLI</strong></td>
    <td width="133" class="style2" ><strong>DOKTER</strong></td>
    <td width="27" class="style2" ><div align="center"><strong>USIA</strong></div></td>
    <td width="218" class="style2" ><strong>PENJAMIN</strong></td>
    <td width="68" class="style2" ><strong>BARU/LAMA</strong></td>
     <td width="112" class="style2" ><div align="center"><strong>APT</strong></div></td>
     <td width="112" class="style2" ><div align="right"><strong>POLI</strong></div></td>
     <td width="112" class="style2" ><div align="right"><strong>LAB</strong></div></td>
    <td width="112" class="style2" ><div align="right"><strong>RAD</strong></div></td>
    <td width="112" class="style2" ><div align="right"><strong>FISH</strong></div></td>
    <td width="112" class="style2" ><strong>ICD</strong></td>
    <td width="112" class="style2" ><strong>KWT</strong></td>
    <td width="112" class="style2" ><strong>KASIR</strong></td>
    <?
if($a[Level]==98){
?><td width="112" class="style2" ><strong>DIET</strong></td>
    <? 
}else{
?>
                <td width="112" class="style2" ><strong>KARTU</strong></td>
                <td width="112" class="style2" ><strong>RUJUKAN</strong></td>
     <? } ?></tr>
              <?
$nomer=1;
$tgl =date("d");
$bln=date("m");
$thn=date("Y");
$pj = strlen($NamaPasien);
 $pjk2 = strlen($NoPasien);
 $mas = $_GET["mas"];
$tgl1= $_GET["tgl1"];
$tgl2= $_GET["tgl2"];
$bln1= $_GET["bln2"];
$thn1= $_GET["thn1"];

if($mas=='panji'){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' AND KodeDokter='$IdDokter' ORDER BY NamaPasien desc limit 0,30"); 
}elseif($mas=='gatot'){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' AND KodeBagian='$IdBagian' ORDER BY NamaPasien desc limit 0,30") ;
  }elseif($mas=='miduk'){
  $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE 
 TglMasuk>=$tgl1 AND TglMasuk<=$tgl2  AND BlnMasuk=$bln1  AND ThnMasuk=$thn1 ORDER BY NamaPasien desc limit 0,30");
}elseif($pjk2>0){
  $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien' ORDER BY id desc limit 0,3");
}elseif($pj>0){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY NamaPasien desc limit 0,30");
}else{
 $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' ORDER BY id desc ");  
 }
while($vv = mysql_fetch_array($msjsmsm)){
//
$kdjfkdjf_Fgf  = mysql_query("SELECT id FROM vaksin_pasien where IdPasen='$vv[id]'");
$np = mysql_fetch_array($kdjfkdjf_Fgf);
//
$pec = $nomer%2;
if($vv[TypeJam]>0){
$clas='class="style4" bgcolor="#FF9999"'; 
}else{
$clas='';

}
if($pec==1){
$warna ='bgcolor="#CCFFCC"';
}else{
$warna ='';
}
$ksisk_Sds = mysql_query("SELECT id,Kasir FROM kwitansirj WHERE RegId='$vv[RegId]'");
$ub = mysql_fetch_array($ksisk_Sds);
if($ub[id]){
$warna =$warna. " ".' class="style4"';
}else{
$warna=$warna;
}
if($a[Level]==98){
?><tr <? echo $warna; ?>   onClick="wCompare_01bz = window.open('../Kasir/x10_mx.php?id=<? echo $vv[id]; ?>', 
  'wCompare_01bz', 'width=580,height=300,left=270,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01bz.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    ><? 
}elseif($a[Level]==9 || $a[Level]==91 || $a[Level]==77 || $a[Level]==212){
?>
                <tr    valign="top"   <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../Kasir/u.php?id=<? echo $vv[id]; ?>';"  ><?
}elseif($a[Level]==26){
?>
                <tr  valign="top"   <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../Radiologi/4e.php?id=<? echo $vv[id]; ?>';"  >
                  <?
}elseif($a[Level]==21|| $a[Level]==4){
 ?>
                <tr  valign="top" <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../Farmasi/wahit.php?id=<? echo $vv[id]; ?>';"  >
                  <? 
}elseif($a[Level]==22){
?> 
                <tr valign="top"  <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../Lab/4e.php?id=<? echo $vv[id]; ?>';"  >
                  <? 
}else{?> 
                <tr  valign="top" <? echo $warna; ?>    onClick="wCompare = window.open('3wza.php?id=<? echo $vv[id]; ?>', 
  'wCompare', 'width=780,height=220,left=370,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
                  <? } ?>
                  <tD bgcolor="#FF99CC" class="style2" <? if($np[id]){ ?><? } ?>><div align="center"><? echo $nomer; ?></div></tD>
    <td class="style2"><div align="left"><? echo $vv[RegId];?></div></td>
    <td class="style2"><div align="right"><?
echo "$vv[TglMasuk]-$vv[BlnMasuk]-$vv[ThnMasuk]";
?></div></td>
    <td class="style2"><div align="left"><? echo $vv[JamMasuk];?></div></td>
    <td class="style2"><div align="left"><? echo $vv[NoPasien];?></div></td><?
$kjkdfd_DFdfdf = mysql_query("SELECT *  FROM  pj_rajal  Where IdRajal='$vv[id]'");
$hgb = mysql_fetch_array($kjkdfd_DFdfdf);
  $kljkdfd_Dfdfd2 = mysql_query("SELECT * FROM karyawan WHERE IdPasien='$vv[IdPasien]'");
$yx2 =  mysql_fetch_array($kljkdfd_Dfdfd2);
if($yx2[id]){
$clas='bgcolor="#FEEADC"';
}else{
$clas=$clas;
}
?>
                  <td class="style2"   <? echo $clas; ?>><div align="left"><? echo ucfirst(strtolower($vv[NamaPasien])); //
if($hgb[id]){
 ?> (<font color="#990000"><i><? echo $hgb[RmPj]; ?></i></font> )<? 
}
 ?></div></td>
    <td class="style2"><div align="left"><? echo ucfirst(strtolower($vv[Bagian]));  ?></div></td>
    <td class="style2"><div align="left"><? echo ucfirst(strtolower($vv[NamaDokter]));  //echo "($vv[KodeDokter])";?></div></td>
    <td class="style2"><div align="center"><? echo $vv[Umur]; ?></div></td>
    <td class="style2"><div align="left"><?
 if($vv[KodePer]==38){
 ?><font  color="#003399"><i><?
 echo ucfirst(strtolower($vv[NamaPer]));
 ?></i></font><? 
 }elseif($vv[KodePer]==83){
?><font color="#FF0033"><b><i><?   echo ucfirst(strtolower($vv[NamaPer]));
 ?></i></b><? 
}else{ 
 echo ucfirst(strtolower($vv[NamaPer]));
 } ?></div></td>
    <td class="style2"><div align="center"><? echo $vv[LB]; ?></div></td><?
$kdjkfdfd_Dfdfd = mysql_query("SELECT COUNT(id) AS jj FROM rj_resep WHERE IdPasien='$vv[id]'");
$bp = mysql_fetch_array($kdjkfdfd_Dfdfd);

?>
                  <td bgcolor="#FFFF99" class="style2" <? if($bp[jj]>0){ ?><? } ?> ><div align="center"><?
 echo $bp[jj];
?></div></td> 
    <?
$kikidkdik = mysql_query("SELECT SUM(Harga) AS jj FROM txnugd WHERE IdPasien='$vv[id]'");
  $cc = mysql_fetch_array($kikidkdik);
?>
                  <td bgcolor="#FFFFCC" class="style2" <? if($cc[jj]>0){ ?> <? } ?>><div align="right"><?
 
  echo number_format($cc[jj]); 
?></div></td>
    <td class="style2"><div align="right"><?
  $kdjfkdjfkdf  = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$vv[RegId]'");
  $js = mysql_fetch_array($kdjfkdjfkdf);
  echo number_format($js[kk]);
?></div></td><?
 $ksiskisks_334343  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$vv[RegId]' AND KodeKelompok='Rad'");
  $h_12 = mysql_fetch_array($ksiskisks_334343);
?>
                  <td bgcolor="#CCCCCC" class="style2" <? if($h_12[jj]>0){ ?> <? } ?>><div align="right"><?
  
  echo number_format($h_12[jj]); 
?></div></td><?
  $ksiskisks_334343X  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$vv[RegId]' AND KodeKelompok='Fis'");
  $h_12X = mysql_fetch_array($ksiskisks_334343X);
?>
                  <td bgcolor="#FFCCCC" class="style2" <? if($h_12X[jj]>0){ ?> <?  } ?>><div align="right"><?
   echo number_format($h_12X[jj]); 
?></div></td>
    <td class="style2"><div align="left"><?
 $jdsfjdjf = mysql_query("SELECT KodeIcd FROM icd_rj WHERE IdPasien='$vv[id]'");
while($jk = mysql_fetch_array($jdsfjdjf)){
echo "<i>$jk[KodeIcd],</i>";;
}
?></div></td>
    
<td class="style2"><div align="left">
  <?
 
if($ub[id]){
?><font color="#990000"><? echo "KWT:$ub[id]";?></font><? 
}else{
echo "-";
}
?></div></td>
    <td class="style2"><div align="left"><?
if($ub[id]){ ?><i><font color="#009900"><? 
echo strtoupper($ub[Kasir]); 	
 ?></font></i><? }
?></div></td><?
if($a[Level]==98){
$sjdksjdksjskdds_Sdsds  = mysql_query("SELECT * FROM diet WHERE IdPasien='X.$vv[id]'");
$ha = mysql_fetch_array($sjdksjdksjskdds_Sdsds);
echo $ha[Keterangan];
?>
                  <td class="style2"><div align="left"><? echo $ha[Keterangan];
 ?></div></td>
     <? }else{?>
                  <td class="style2"><div align="left"><? echo $vv[Kartu]; ?></div></td>
                  <td class="style2"><div align="left"><? echo $vv[RujukanDari]; ?></div></td>
    <? } ?>
                </tr>
              <?
$nomer++; } ?><tr  bgcolor="#58BB4F" valign="top">
                <tD colspan="20" >&nbsp;</tD>
      </tr>
          </table>
</div></td> 
</tr><?
}
?>
 <tr bgcolor="#59BA54">
<td valign="top" bgcolor="#FFFFFF"><div align="left">
<?
if($kadal==5){

}else{
?>
<form target="_self">
<? } ?>
<?
if($a[KodeBagian]==22){ }else{
?>
<table width="500" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="176">NO RM</td>
<td width="3">:</td>
<td width="273"><div align="left"><input name="NoPasien" type="text" class="style2" size="20" maxlength="20"  <? if($kadal==6){}else{ ?>?
autofocus="autofocus" <? } ?>/>
</div></td>
</tr>
<tr>
 
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><input  name="NamaPasien" type="text" class="style2" size="25" maxlength="20">
<input type="hidden" name="kadal" value="3" />
<input type="hidden" name="bas"   value="8">
 <!-- || <input name="fgf" type="button" class="style3" value=">>?"  style="background:#FFFF00" onClick="wComparecx = window.open('../tst/index.php', 
  'wComparecx', 'width=480,height=400,left=70,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecx.focus();"s> -->
</div>
</tr>
<tr>
<td>ALAMAT</td><td>:</td><td><div align="left"><input name="Alamat" type="text" class="style2" size="30" maxlength="30" />
</div></td>
</tr>
<tr>
<td>PENANGGUNG JAWAB</td><td>:</td><td><div align="left"><input name="NamaBapak" type="text" class="style3" size="30" maxlength="30" />
</div></td>
</tr>
<tr>
<td>NO TELP </td>
<td>:</td><td><div align="left">
<input name="Telp" type="text" class="style3" id="Telp" value="<? echo $Telp; ?>" size="20" maxlength="50">
</div></td>
</tr>
 <tr>
  <td>TGL LAHIR</td><td>:</td><td><div align="left"><span class="style15 style2 style8  style3">
    <input type="text" name="Tgl" maxlength="2" size="2" > - 
	<input type="text" name="Bln" maxlength="2" size="2" >
	-
	<input type="text" name="Thn" maxlength="4" size="4" >
  </span>
  
  </div></td>
  </tr>
  <tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Submit" name="ffgf" >
  </div></td>
  </tr>
  <tr>
  <td colspan="3" bgcolor="#990000"><div align="left" class="style18">
  <span class="style23">TOTAL DATA PASIEN :
  <?
  $KISKI_DKFD = mysql_query("SELECT COUNT(id) AS jj FROM datapasien");
  $nn = mysql_fetch_array($KISKI_DKFD);
  echo number_format($nn[jj]);
  ?>
  </span>||  </div></td>
  </tr>
   </table>
   <?
}    // end of $a[KodeBagian]==22
   ?>
<?
if($kadal==5){

}else{
?></form
><? } ?>
</div></td><td width="738" valign="top" bgcolor="#FFFFFF" class="style1">
<div align="left">
<?
if($kadal==88 || $kadal==58){
?>
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="434" colspan="3"><div align="center">
LIST DATA TINDAKAN
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style2">
<tr>
<td width="18" bgcolor="#99FF00" class="style2">NO</td>
<td width="34" bgcolor="#99FF00" class="style2">KODE</td>
<td width="196" bgcolor="#99FF00" class="style2">NAMA </td>
<td width="90" bgcolor="#99FF00" class="style2">OPR</td>
<td width="62" bgcolor="#99FF00" class="style2">TGL JAM</td>
</tr>
<?
$nomere = 1;
if($kadal==58){
$dkjfkdf  = mysql_query("SELECT * FROM Operasi");
}else{
$dkjfkdf  = mysql_query("SELECT * FROM Tindakan");
}
while($sm = mysql_fetch_array($dkjfkdf)){
if($makan==$sm[id]){
?>
<tr bgcolor="#990000">
<td bgcolor="#66FF33"><div align="center"><? echo $nomere; ?></div></td>
<td bgcolor="#66FF33"><div align="left"><? if($kadal==58){
echo $sm[KodeOperasi]; 
}else{
echo $sm[KodeTindakan]; 
}?></div></td>
<td bgcolor="#66FF33"><div align="left"><? 
if($kadal==58){
echo strtoupper($sm[NamaOperasi]);
}else{
echo strtoupper($sm[NamaTindakan]);
} ?></div></td>
<td colspan="2" bgcolor="#66FF33"><div align="left">
<input name="fggf" type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style333" onClick="location.href='fmn.php?bas=8&kadal=<? echo $kadal; ?>&makan=<? echo $sm[id]; ?>';" value="Hapus">
</div></td>
</tr>
<? 
}else{
?>
<tr  onClick="location.href='index.php?bas=8&kadal=<? echo $kadal; ?>&makan=<? echo $sm[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomere; ?></div></td>
<td><div align="left"><? if($kadal==58){
echo $sm[KodeOperasi];
}else{
echo $sm[KodeTindakan];
} ?></div></td>
<td><div align="left"><? 
if($kadal==58){
echo strtoupper($sm[NamaOperasi]);
}else{
echo strtoupper($sm[NamaTindakan]);
} ?></div></td>
<td><div align="left"><? echo strtoupper($sm[Opr]); ?></div></td>
<td><div align="left"><? echo $sm[TglJam]; ?></div></td>
</tr>
<? } ?>
<? $nomere++; } ?><tr>
  <td colspan="5" bgcolor="#99FF00">&nbsp;</td>
  </tr>
</table>
</div></td>
</tr>
</table>
<? 
}elseif($kadal==90 || $kadal==11){
?>
<table border="1" class="style2">
<tr>
<td width="699"><div align="center">
INPUT DATA <? 
if($kadal==11){
?>OPERASI<? 
}else{
?>TINDAKAN
<? }?>
</div></td>
</tr>
<tr>
<td valign="top">
<div align="left">
<form action="ez.php">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="231">KODE <? 
if($kadal==11){
?>OPERASI<? 
}else{
?>TINDAKAN
<? }?></td>
<td width="10">:</td>
<td width="419"><div align="left">
<input type="text" name="KodeTindakan" maxlength="20" size="10">
<?
if($kadal==11){
?>
<input type="hidden" name="opa" value="1">
<? 
}else{
?><input type="hidden" name="opa" value="2"><? 
}
?>
</div></td>
</tr>
<tr>
  <td>NAMA <? 
if($kadal==11){
?>OPERASI<? 
}else{
?>TINDAKAN
<? }?> </td>
  <td>:</td>
  <td><div align="left">
  <input type="text" name="NamaTindakan" maxlength="120"  size="30">
  </div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3">
  <div align="center">
  <input name="fgf" type="submit" class="style333" value="Submit">
  <?
 if($kadal==11){
 $dkfkdjkdf  = mysql_query("SELECT COUNT(id) AS jj FROM Operasi");
 }else{
  $dkfkdjkdf  = mysql_query("SELECT COUNT(id) AS jj FROM Tindakan");
  }
  $vp = mysql_fetch_array($dkfkdjkdf);
  
 if($kadal==11){
 ?><input name="dfdf" type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style333" onClick="location.href='index.php?bas=8&kadal=58';" value="Cek Data : <? echo $vp[jj]; ?>"><? 
 }else{ ?>
  <input name="dfdf" type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style333" onClick="location.href='index.php?bas=8&kadal=88';" value="Cek Data : <? echo $vp[jj]; ?>">
  <? } ?>
  <input name="fgfg" type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style333" onClick="location.href='index.php';" value="Kembali">
  </div>  </td>
  </tr>
</table>
</form>
</div></td>
</tr>
</table>
<? 
}elseif($kadal==44){
?>
 <iframe src="../t.php" width="800" height="400" frameborder="0"></iframe> 
<? 
}elseif($kadal==6){
include "dabar.php";
}elseif($kadal==5 && $pp[id]){
?>
<form action="simpan_pasien.php">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
<td width="185">No Rm </td>
<td width="3">:</td>
<td width="387"><div align="left">
<input name="NoPasien" type="text"   class="style3" value="<? echo $pp[NoPasien]; ?>" size="20" maxlength="50">
   </div></td>
</tr>
<tr>
  <td>Nama Pasien </td>
  <td>:</td>
  <td><div align="left">
  <input name="NamaPasien" type="text" class="style333" value="<? echo $pp[NamaPasien]; ?>" size="30" maxlength="50">
  </div></td>
</tr>
<tr>
<td>Status Penanggung Jwb </td>
<td>:</td><td><div align="left">
<select name="JenisPj" class="style3">
<option value="<? echo $pp[JenisPj]; ?>"><? echo $pp[JenisPj];  ?></option>
<option value="Sendiri">Sendiri</option>
<option value="Orang Tua">Orang Tua</option>
<option value="Suami">Suami</option>
<option value="Istri">Istri</option>
<option value="Anak">Anak</option>
<option value="Saudara">Saudara</option>
<option value="Pihak Lain">Pihak Lain</option>
</select>
</div></td>
</tr>
<tr>
<td>Nama Penanggung Jawab</td><td>:</td><td><div align="left">
<input name="NamaPj2"  type="text" class="style3" value="<? echo $pp[NamaPj2]; ?>" size="20" maxlength="100">
</div></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td><td><div align="left">
<input name="AlamatPj"  type="text" class="style3" value="<? echo $pp[AlamatPj]; ?>" size="20" maxlength="100">
</div></td>
</tr>
<tr>
<td>No Ktp</td><td>:</td><td><div align="left">
<input type="text" name="NoKtp" maxlength="100" size="15" value="<? echo $pp[NoKtp]; ?>" class="style3">
</div></td>
</tr>
<tr>
  <td>Nama Suami/Istri </td>
  <td>:</td>
  <td><input name="NamaOrtu" type="text" class="style333" value="<? echo $pp[NamaOrtu]; ?>" size="30" maxlength="50"></td>
</tr>
<tr>
<td>Nama Ortu </td>
<td>:</td><td><div align="left">
<input name="AlamatOrtu" type="text" class="style333" value="<? echo $pp[AlamatOrtu]; ?>" size="30"  maxlength="120">
</div></td>
</tr>
<tr>
  <td>Tmp Lahir </td>
  <td>:</td>
  <td><input name="TempatLhr" type="text" class="style333" value="<? echo $pp[TempatLhr]; ?>" size="30" maxlength="50">
  <input type="hidden" name="id" value="<? echo $id; ?>">  </td>
</tr>
<tr>
  <td>Tgl Lhr </td>
  <td>:</td>
  <td><? $pecah = explode("-",$pp[tgllhr]);
  ?>
  <input name="Tgl" type="text" class="style333" value="<? echo $pecah[0]; ?>"  size="2"   maxlength="2">
  - 
    <input name="Bln" type="text" class="style333" value="<? echo $pecah[1]; ?>"  size="2" maxlength="2">
-
  <input name="Thn" type="text" class="style333" value="<? echo $pecah[2]; ?>"  size="4" maxlength="4">  </td>
</tr>
<tr>
  <td>Status Kawin </td>
  <td>:</td>
  <td>
  <select name="StatusNikah" class="style333">
  <option value="<?   echo $pp[StatusNikah]; ?>"><?
    if($pp[StatusNikah]==1){
  echo "BELUM NIKAH";
  }elseif($pp[StatusNikah]==2){
  echo "NIKAH";
  }elseif($pp[StatusNikah]==3){
  echo "DUDA";
  }elseif($pp[StatusNikah]==4){
  echo "JANDA";
  }?></option>
  <option value="2">Kawin</option>
  <option value="1">Belum Kawin</option>
  <option value="3">Duda</option>
  <option value="4">Janda</option>
  </select>  </td>
</tr>
<tr>
  <td>Pendidikan</td>
  <td>:</td>
  <td><div align="left">
  <select name="Pendidikan" class="style333">
 
 <option value="<? echo $pp[Pendidikan]; ?>"><?
  if($pp[Pendidikan]==1){ echo "TK"; }elseif($pp[Pendidikan]==2){
  echo "SD"; }elseif($pp[Pendidikan]==3){ echo "SLTP";
  }elseif($pp[Pendidikan]==4){
  echo "SLTA"; }elseif($pp[Pendidikan]==5){
  echo "Perguruan Tinggi";
  }else{
  echo "Lain-Lain";
  }
  ?> 	<option  value="6">Lain-Lain</option><option value="1">TK</option>
	<option value="2">SD</option>
	<option value="3">SLTP</option>
	<option value="4">SLTA</option>
	<option value="5">PERG. TINGGI</option>
   </select>
  </div></td>
</tr>
<tr>
<td>Gol Darah </td>
<td>:</td><td><div align="left">
<select name="GolDarah" class="style3">
<option value="<? echo $pp[GolDarah]; ?>"><? if($pp[GolDarah]==1){
echo "A"; }elseif($pp[GolDarah]==2){ echo "B"; }elseif($pp[GolDarah]==3){ echo "AB"; }elseif($pp[GolDarah]==4){
echo "O"; }else{ } ?></option>
<option value="1">A</option>
<option value="2">B</option>
<option value="3">AB</option>
<option value="4">O</option>
</select>
</div></td>
</tr>

<tr>
  <td>Pekerjaan</td>
  <td>:</td>
  <td> 
   <select name="Pekerjaan" class="style333">
   <option value="<? echo $pp[Pekerjaan]; ?>"><? echo $pp[Pekerjaan]; ?></option>
   	 <option value="LAIN-LAIN">LAIN-LAIN</option>
 	 <option value="PNS">PNS</option>
 	 <option value="SWASTA">SWASTA</option>
	 <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
	 <option value="PETANI">PETANI</option>
	 <option value="BURUH">BURUH</option>
	 <option value="PENSIUNAN">PENSIUNAN</option>
	 </select></td>
</tr>
<tr>
  <td>Tgl Masuk </td>
  <td>:</td>
  <td><div align="left"><?
  $pcd = explode("-",$pp[TglMasuk]);
  ?>
  <input name="Tgs" type="text" class="style333" value="<? echo $pcd[0]; ?>" size="2" maxlength="2">
  - <input name="Bls" type="text" class="style333" value="<? echo $pcd[1]; ?>" size="2" maxlength="2">
  -
  <input name="Ths" type="text" class="style333" value="<? echo $pcd[2]; ?>" size="4" maxlength="4">
  </div></td>
</tr>
<tr>
  <td>Jenis Kelamin </td>
  <td>:</td>
  <td><?
  //echo $pp[JenisKelamin];
  ?>
  
  <select name="JenisKelamin" class="style333">
  <option value="<? echo $pp[JenisKelamin]; ?>"><?
    if($pp[JenisKelamin]=='P' || $pp[JenisKelamin]=='W'){
  echo "PEREMUAN"; }else{
  echo "LAKI-LAKI"; }
    ?></option>
  <option value="PERMPUAN">PEREMPUAN</option>
  <option value="LAKI-LAKI">LAKI-LAKI</option>
  </select>
  <input type="hidden" name="bas" value="8">  </td>
</tr>
<tr>
  <td>Agama</td>
  <td>:</td>
  <td><select name="Agama" class="style333">
  <option value="<? echo $pp[KodeAgama]; ?>"><? if($pp[KodeAgama]==1){
  echo "Islam";
  }elseif($pp[KodeAgama]==2){
  echo "Kristen";
  }elseif($pp[KodeAgama]==3){
  echo "Katolik";
  }elseif($pp[KodeAgama]==4){
  echo "Hindu";
  }elseif($pp[KodeAgama]==5){
  echo "BUDHA";
  }else{
  echo "LAIN-LAIN";
  }   ?></option>
  <option value="1">Islam</option>
	<option value="2">Kristen</option>
	<option value="3">Katholik</option>
	<option value="4">Hindu</option>
	<option value="5">Budha</option>
		<option value="6">Lainnya</option>
  </select></td>
</tr>
<tr valign="top">
  <td>Alamat</td>
  <td>:</td>
  <td><textarea name="Alamat" cols="40" rows="2" class="style3"><? echo $pp[Alamat]; ?></textarea></td>
</tr>
 <tr>
  <td>Telpon</td>
  <td>:</td>
  <td><input name="Telp" type="text" class="style333" value="<? echo $pp[Telp]; ?>" size="30" maxlength="80"></td>
</tr><?
/*
<tr>
<td>KodePer</td>
<td>:</td><td><div align="left">
  <select name="KodePer" class="style333">
    <option value="<? echo $pp[KodePer]; ?>"><? 
	$kjdjd2 = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$pp[KodePer]'");
$vk2 = mysql_fetch_array($kjdjd2);
echo strtoupper($vk2[NamaPer]);    ?></option>
    <?
$kkddjdjd  =  mysql_query("SELECT id FROM dataperusahaan Order by NamaPer");
while($xp =  mysql_fetch_array($kkddjdjd)){
?>
    <option value="<? echo $xp[id]; ?>">
      <? 
$kjdjd = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$xp[id]'");
$vk = mysql_fetch_array($kjdjd);
echo strtoupper($vk[NamaPer]);
?>
      </option>
    <? } ?>
  </select>
</div></td>
</tr>
 <tr>
<td>No Kartu </td>
<td>:</td><td><div align="left">
<input name="NoKartu" type="text" class="style3" value="<? echo $pp[NoKartu]; ?>"  size="20" maxlength="50">
</div></td>
</tr>
 */
 ?><tr>
  <td>Opr</td>
  <td>:</td>
  <td><? echo $pp[Opr]; ?></td>
</tr>
<tr>
  <td>TglJam</td>
  <td>:</td>
  <td> <? echo $pp[TglJam]; ?></td>
</tr>
<tr>
  <td>Update By </td>
  <td>:</td>
  <td><div align="left"><?
  echo strtoupper($a[Nama]); echo " || "; echo date("d-m-Y.H:i:s");
  ?></div></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3" bgcolor="#CCFF00">
  <div align="left">
  <input name="dfjhdjf" type="submit" class="style333" value="Simpan" >
   <input  name="fgfg" type="button" disabled="disabled" class="style333" onClick="location.href='re.php?id=<? echo $id; ?>';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Hapus">
   <input  name="jdjdf" type="button" class="style333" onClick="location.href='index.php';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Batal">
  .</div>  </td>
  </tr>
</table>
</form>
<? 

 }elseif($kadal==4 && $pp[id]){
 ?>
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<?
if($yx2[id]){
?>
<tr>
  <td colspan="3" bgcolor="#990000">
    <div align="center" class="style18"><strong>PASIEN INI ADALAH KARYAWAN<br>
      NIK  : 
          <?
echo $yx2[Nik];
?>
      </strong></div></td>
</tr><? 
}else{
?><tr>
<td colspan="3" bgcolor="#99FF33">
<div align="center">
<span class="style21">DETAIL DATA PASIEN </span><br>
</div></td>
</tr>
<? } ?>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="187">No Rm </td>
<td width="3">:</td>
<td width="389"><div align="left"><? echo $pp[NoPasien]; ?></div></td>
</tr>
<tr>
<td>Nama Pasien </td>
<td>:</td><td><div align="left"><? echo ucfirst(strtolower($pp[NamaPasien])); ?></div></td>
</tr>
<tr>
<td>Tgl Lahir </td>
<td>:</td><td><div align="left"><? echo $pp[tgllhr]; ?></div></td>
</tr>
<tr>
  <td>Alamat</td>
  <td>:</td>
  <td><div align="left"><? echo ucfirst(strtolower($pp[Alamat])); ?>
  //
  <? 
echo ucfirst(strtolower($pp[Kelurahan])); 
echo " ,";
echo ucfirst(strtolower($pp[Kecamatan])); 
echo " ,";
echo ucfirst(strtolower($pp[Kota])); 
  ?><br>Rt :<?
  echo $pp[Rt];
  ?> Rw :<?
  echo $pp[Rw]; ?></div></td>
</tr>
<tr>
<td height="29">Detail Alamat (<span class="style25">Kelurahan</span> )</td>
<TD>:</TD><td><div align="left">
<input name="text" type="text" class="style2" id="suggest2" />
</div></td>
</tr>
<tr>
  <td>Opr</td>
  <td>:</td>
  <td><div align="left"><? echo ucfirst(strtolower($pp[Opr])); ?></div></td>
</tr>
<tr>
  <td>Tgl Jam </td>
  <td>:</td>
  <td><div align="left"><? echo $pp[TglJam]; ?></div></td>
</tr>
<?
$ldfldfdD_Dfdfd =  mysql_query("SELECT * FROM induk_karyawan WHERE IdPasien='$id'");
$jp = mysql_fetch_array($ldfldfdD_Dfdfd);
if($jp[id]){
?>
<tr>
<td bgcolor="#FCE4AD">Tanggungan Nik </td>
<td bgcolor="#FCE4AD">:</td>
<td bgcolor="#FCE4AD"><div align="left"><? 
$kdjfkdfd_fgfgf = mysql_query("SELECT * FROM karyawan WHERE id='$jp[IdKaryawan]'");
$upa = mysql_fetch_array($kdjfkdfd_fgfgf);
echo  ucfirst(strtolower($upa[Nama])); echo "($upa[Nik] )";
?></div></td>
</tr>
<?
}
$kljkdfd_Dfdfdfdfdfdd = mysql_query("SELECT * FROM karyawan WHERE IdPasien='$id'");
$z2 =  mysql_fetch_array($kljkdfd_Dfdfdfdfdfdd);
if($z2[Plafond]>0){
?>
<tr>
<td bgcolor="#D3FEC7">Plafond / Hak Cuti </td>
<td bgcolor="#D3FEC7">:</td>
<td bgcolor="#D3FEC7"><div align="left">
<?
echo number_format($z2[Plafond]); echo " // $z2[Cuti] Hari"; 
?>
</div></td>
</tr>
<?
}
?>
<tr  >
<td height="32" colspan="3" bgcolor="#FFCC99">  <div  align="center" class="style14">
 <?
 
?>
PENJAMIN : 
    <?
	$kjdjd2 = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$pp[KodePer]'");
$vk2 = mysql_fetch_array($kjdjd2);
echo strtoupper($vk2[NamaPer]);   
?>
  </div></td>
</tr>
<tr>
  <td colspan="3" bgcolor="#FF3366"><div align="center">
    <?
			//  $kjkdfd  = mysql_query("SELECT COUNT(id) AS kk FROM AssPasien WHERE IdPasien='$id'");
			//  $hpo = mysql_fetch_array($kjkdfd);
			  ?>  
    <?
	if($pode[0]>=1 && $pode[0]<32 && $pode[1]>=1 && $pode[1]<=12 && $pode[2]<2020 &&  $pode[2]>=1920){ 
?>
    <input type="button" name="fgf"   value="Rencana Daftar"   onClick="location.href='w2_909.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style333">
	<input name="fgfgf" type="button" class="style2"  style="background:#99FF33" onClick="location.href='index.php?kadal=6&NoKartu=<? echo $pp[NoKartu];
	?>&NamaPasien=<? echo $pp[NamaPasien]; ?>&Alamat=<? echo $pp[Alamat]; ?>&TempatLhr=<? echo $pp[TempatLhr];
	 ?>&NamaOrtu=<? echo $pp[NamaOrtu]; ?>&AlamatOrtu=<? echo $pp[AlamatOrtu]; ?>&Telp=<? echo $pp[Telp]; ?>&tl=<? echo $pode[0]; ?>&thl=<? echo $pode[2]; ?>&bl=<? echo $pode[1]; ?>&agama=<? echo $pp[KodeAgama]; ?>';"  value="Copy Ke Dt Baru">
	<? }else{ ?>DATA TANGGAL LAHIR BELUM DIISI MOHON KOREKSI DATA DULU<? } ?>
  </div></td>
  </tr>
<tr>
  <td colspan="3" bgcolor="#CCFFCC">
  <div align="center">
  <?
$pode = explode("-",$pp[tgllhr]);
if($pode[0]>=1 && $pode[0]<32 && $pode[1]>=1 && $pode[1]<=12 && $pode[2]<2020 &&  $pode[2]>=1920){ 
  ?>
  <input  name="dfd" type="button" class="style3" onClick="location.href='x23.php?id=<? echo $id; ?>&NamaPoli=%';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Daftarkan Rawat Jalan">
    <?
	$tglD=date("d")-0; $blnD=date("m")-0; $thnD=date("Y");
	$kkkjjd_dd= mysql_query("SELECT KodePer,id,RujukanDari FROM rwtjalan WHERE IdPasien='$id' AND TglMasuk='$tglD' AND BlnMasuk='$blnD' AND ThnMasuk='$thnD'");
$entuk = mysql_fetch_array($kkkjjd_dd);
 if($entuk[id]){
$kdjfkjdfd_00_dfd = mysql_query("SELECT id FROM rujukan WHERE NamaRujukan='$entuk[RujukanDari]'");
$ikan_123=mysql_fetch_array($kdjfkjdfd_00_dfd);
	?><input  name="dfd" type="button" class="style3" onClick="location.href='leboke.php?KodeRujuk=<? echo $ikan_123[id]; ?>&KeyID=<? echo $entuk[KodePer]; ?>&var=2&id=<? echo $id; ?>';"   style="background:#FFFF66"   value="Daftarkan Rawat Inap">
	<? 
}else{
	?><input  name="dfd" type="button" class="style3" onClick="location.href='leboke.php?KeyID=<? echo $pp[KodePer]; ?>&var=2&id=<? echo $id; ?>';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Daftarkan Rawat Inap">
	<? } ?>
	<? }else{ echo "FORMAT TANGGAL LAHIR<BR>SALAH SILAHKAN PERBAIKI DULU<BR>"; } ?>
<input  name="dfjjdf" type="button" class="style3" onClick="location.href='index.php?bas=8';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Reset View">
  <input  name="djhjdf" type="button" class="style3" onClick="location.href='index.php?bas=8&kadal=5&id=<? echo $id; ?>';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Koreksi Data">
  </div>  </td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#66CCCC">
        <div align="center"></div></td></tr>
<tr>
  <td colspan="3" bgcolor="#FFFF00" valign="top">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style333">
  <tr>
  <td width="190">PERNAH RAWAT JALAN</td>
  <td width="4">:</td>
  <td width="356"><div align="left"><?
  $hy_sss = mysql_query("SELECT COUNT(id)  AS jj FROM rwtjalan WHERE NoPasien='$pp[NoPasien]'");
  $iu_ui = mysql_fetch_array($hy_sss);
  echo "$iu_ui[jj] KALI"; 
  ?> || <strong>
<?
if($aku=="tobat"){
?><a href="index.php?bas=8&kadal=4&id=<? echo $id; ?>"  style="text-decoration:none">CLEAR</a><? 
}else{
?>  <a href="index.php?bas=8&kadal=4&id=<? echo $id; ?>&aku=tobat"  style="text-decoration:none">DETIL KLIK DISINI</a>
<? } ?></strong> </div></td>
  </tr>
  <tr>
    <td>PERNAH RAWAT INAP </td>
    <td>:</td>
    <td><div align="left"><? 
	  $hy_sss2 = mysql_query("SELECT COUNT(id)  AS jj FROM keluarmasukpasien WHERE NoPasien='$pp[NoPasien]'");
  $iu_ui2 = mysql_fetch_array($hy_sss2);
  echo "$iu_ui2[jj] KALI"; 

	?>
       || <strong><?
	   if($aku=="doa"){
?><a href="index.php?bas=8&kadal=4&id=<? echo $id; ?>"  style="text-decoration:none">CLEAR</a><? 
	   }else{
	   ?><a href="index.php?bas=8&kadal=4&id=<? echo $id; ?>&aku=doa"  style="text-decoration:none">DETIL KLIK DISINI</a>
	   <? } ?></strong></div></td>
  </tr>
  <?
  if($aku=="tobat"){
  ?>
  <tr>
    <td colspan="3" bgcolor="#D4D0C8"><div align="left">
	<table border="1" class="style333">
	<tr>
	<td bgcolor="#CCFFCC">NO</td>
	<td bgcolor="#CCFFCC">REGID</td>
	<td bgcolor="#CCFFCC">BAGIAN</td>
	<td bgcolor="#CCFFCC">DOKTER</td>
	<td bgcolor="#CCFFCC">PENJAMIN</td>
	<td bgcolor="#CCFFCC">OPR</td>
	<td bgcolor="#CCFFCC">MASUK</td>
	<td bgcolor="#CCFFCC">JAMBAYAR</td>
	<td bgcolor="#CCFFCC">KASIR</td>
		<td bgcolor="#CCFFCC">ICD</td>
	</tr>
	<?
	$hs_op =1;
	$fres = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$pp[NoPasien]'");
	while($sai = mysql_fetch_array($fres)){
	?>
	<tr>
	<td><div align="left"><?
	echo $hs_op; 
	?></div></td>
	<td><div align="left"><?
	echo $sai[RegId]; 
	?></div></td>
	<td><div align="left"><? 
	echo strtoupper($sai[Bagian]); 
	?></div></td>
	<td><div align="left"><?
	echo $sai[NamaDokter];
	?></div></td>
	<td><div align="left"><?
	echo strtoupper($sai[NamaPer]);
	?></div></td>
	<td><div align="left"><?
	echo strtoupper($sai[Operator]);
	?></div></td>
	<td><div align="left"><?
	echo $sai[JamMasuk];
	?></div></td>
	<td><div align="left"><?
	$juj_kk = mysql_query("SELECT  Kasir,JamBayar FROM kwitansirj WHERE RegId='$sai[RegId]'");
	$issk = mysql_fetch_array($juj_kk);
	echo $issk[JamBayar]
	?></div></td>
	<td><div align="left"><?
	echo strtoupper($issk[Kasir]);
	?></div></td><TD><div  align="center"><? ?></div></TD>
	</tr>
	
	<? $hs_op++; } ?>
	<tr>
	  <td colspan="9" bgcolor="#CCFFCC">&nbsp;</td>
	  </tr></table>
	</div></td>
    </tr>
	<? } ?>
	<?
	
	if($aku=="doa"){
	?>
	<tr bgcolor="#CCCCCC">
	<td colspan="3" valign="top"> 
	<div align="left">
	<table border="1" class="style333">
	<tr>
	<td>NO</td><td>MSTKEY</td><td>NAMA PASIEN</td><td>TGL MASUK</td><td>JAM MASUK<td>TGL KELUAR</td><td>JAM KELUAR</td><td>OPR</td>
	</tr>
	<?
	$husa = 1;
	$usisun_ksdkfj = mysql_query("SELECT * FROM  keluarmasukpasien WHERE NoPasien='$pp[NoPasien]'");
	while($usio = mysql_fetch_array($usisun_ksdkfj)){
	?>
	<tr>
	<td><div align="center"><? 
	echo $husa; 
	?></div></td>
	<td><div align="left"><?
	echo $usio[MstKey];
	?></div></td>
	<td><div align="left"><?
	echo strtoupper($usio[NamaPasien]);
	?></div></td>
	<td><div align="left"><?
	echo $usio[TglMasuk];
	?></div></td>
	<td><div  align="left"><?
	echo $usio[JamMasuk];
	?>
	</div></td>
	<td><div align="left"><?
	echo $usio[TglKeluar];
	?></div></td>
	<td><div  align="left"><?
		echo $usio[JamKeluar];
		?>
	</div></td>
	<td><div align="left"><?
	echo strtoupper($usio[Opr]);
	?></div></td>
	</tr>
	<?  $husa++; } ?>
	</table>
	</div>	</td>
	</tr>
	<? 
	}
	?>
  </table>
  </div>  </td>
</tr>
</table>
<? 
}elseif($kadal==3){
?>
<table border="0" cellpadding="2" cellspacing="2" class="style3" >
<tr>
<td colspan="7"><div align="center">
<a href="#" style="text-decoration:none"
onClick="wCompare = window.open('i87_ii.php?NamaPasien=<? echo $NamaPasien; ?>', 
  'wCompare', 'width=680,height=500,left=70,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">TAMPILKAN DALAM JUMLAH BESAR BARIS</a>
</div></td>
</tr>
<tr >
<td width="17" bgcolor="#99FF00"><span class="style20 style22">NO</span></td>
<td width="56" bgcolor="#99FF00"><span class="style20 style22">NO RM</span></td>
<td width="216" bgcolor="#99FF00"><span class="style20 style22">NAMA PASIEN</span></td>
<td bgcolor="#99FF00"><span class="style20 style22">JK</span></td>
<td width="71" bgcolor="#99FF00"><span class="style20 style22">TGL LAHIR</span></td>
<td width="320" bgcolor="#99FF00"><span class="style20 style22">ALAMAT</span></td>
<!-- <td colspan="2" bgcolor="#99FF00"><span class="style20 style22">TELP</span></td> -->
</tr>
<?
$Tgl = $Tgl-0;
if($Tgl<10){
$Tgl = "0".$Tgl;
}else{
$Tgl = $Tgl;
}
$Bln=$Bln-0;
if($Bln<10){
$Bln = "0".$Bln;
}else{
$Bln=$Bln;
}
$Tir=$Tgl-0;
$Bir = $Bln-0;
$Tr = "$Tgl-$Bln-$Thn";
$Tr2 = "$Tir-$Bln-$Thn";
$Tr3 = "$Tgl-$Bir-$Thn";
$Tr4 = "$Tir-$Bir-$Thn";
 $no=1;
if($Telp!=''){
$dasa = mysql_query("SELECT * FROM datapasien WHERE Telp='$Telp' ORDER BY NoPasien DESC");
}elseif($NamaBapak!=''){ 
$dasa = mysql_query("SELECT * FROM datapasien WHERE NamaOrtu  Like  '$NamaBapak%'  ORDER BY NoPasien DESC   LIMIT 0,20");
}elseif($Alamat!=''){
$dasa = mysql_query("SELECT * FROM datapasien WHERE Alamat Like  '$Alamat%'  ORDER BY NoPasien DESC  LIMIT 0,20");
}elseif($NoPasien!=''){
$dasa = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$NoPasien'   ORDER BY NoPasien DESC LIMIT 0,20");
}elseif($Tgl>0 && $Bln>0 && $Thn>0){
$dasa = mysql_query("SELECT * FROM datapasien WHERE tgllhr = '$Tr' or
tgllhr = '$Tr2'  or tgllhr = '$Tr3' or tgllhr = '$Tr4'  ORDER BY NoPasien DESC");
}else{
$dasa = mysql_query("SELECT * FROM datapasien WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY NoPasien desc LIMIT 0,20");  
} 
while($s = mysql_fetch_array($dasa)){
//
$kljkdfd_Dfdfd = mysql_query("SELECT id FROM karyawan WHERE IdPasien='$s[id]'");
$yx =  mysql_fetch_array($kljkdfd_Dfdfd);
//
$ctr = explode("-",$s[NoPasien]);
if($yx[id]){
$warna='  bgcolor="#FFCCFF"';
}else{
$warna='';
} 
if($s[JenisKelamin]=='P'){
?>
<tr  bgcolor="#BCF9CE" onClick="location.href='index.php?bas=8&kadal=4&id=<? echo $s[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  valign="top">
<? 
}else{?>
<tr  onClick="location.href='index.php?bas=8&kadal=4&id=<? echo $s[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
  bgcolor="#FFFFCC" valign="top">
  <? } ?><td  ><div align="center" class="style333"><? echo $no; ?></div></td>
<td bordercolor="#000033"  ><div align="left" class="style333"><? echo $s[NoPasien]; ?></div></td>
<td <? echo $warna; ?>  ><div align="left" ><? echo strtoupper($s[NamaPasien]); ?></div></td> 
<td><div align="center"><? echo $s[JenisKelamin]; ?></div></td>
<td  ><div align="left" ><? 
echo $s[tgllhr]; ?></div></td>
<td  ><div align="left" ><? echo strtoupper($s[Alamat]); ?></div></td>
<!--<td  ><div align="left" ><? // echo strtoupper($s[Telp]); ?></div></td>
  <td><div align="left"><input type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="ffggf" value="Ambil" onClick="location.href=' ';"></div></td> -->
</tr>
<?
$no++;
} 
?>
<? } 
if(!$kadal){?><tr>
  <td colspan="7"   ><div align="left">
 <!--  <iframe src="uhy7.php" width="1200" height="200" frameborder="0"></iframe> -->
  </div></td>
  </tr>
  <? } ?>
</table>
</div>
</td>
</tr>
  </table>
</div>
</body>
</html>
<? 
}
?>