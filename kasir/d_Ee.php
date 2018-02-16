<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
 $Kwit = mysql_query("SELECT * FROM kwitansirj where id='$NoKwt'");
$dapa = mysql_fetch_array($Kwit);

if($a[Level]==3){
?>
<html>
<head>
    <title></title>
<style type='text/css'>
/*
Tema: LEGO
Oleh: http://hompimpaalaihumgambreng.blogspot.com
*/
ul.menu               {list-style:none;margin:10px 0;padding:0;height:33px;background-color:#ffffff;font:11px Verdana,Arial;}
ul.menu *             {margin:0;padding:0;}
ul.menu a             {display:block;text-decoration:none;color:#7eb7fb;}
ul.menu li            {position:relative;float:left;}
ul.menu ul            {position:absolute;z-index:100;top:32px;left:0;background-color:#7eb7fb;display:none;opacity:0;list-style:none;-webkit-box-shadow:0 3px 5px #aaa;-moz-box-shadow:0 3px 5px #aaa;box-shadow:0 3px 5px #aaa;}
ul.menu ul li         {position:relative;border:0;width:150px;margin:0;}
ul.menu ul li a       {display:block;padding:7px 15px 7px;background-color:#084a9b;color:#7eb7fb;}
ul.menu ul li a:hover {background-color:#ffe30a;color:#fff;}
ul.menu ul ul         {left:150px;top:-1px;}
ul.menu .menulink     {padding:10px 15px 10px;font-weight:bold;text-transform:uppercase;background:#ffffff;color:#006633;}
ul.menu .menulink:hover,
ul.menu .menuhover    {background:#449400;color:#caecac;}
ul.menu .sub          {background:#084a9b url(http://2.bp.blogspot.com/-x-_lO7zXjg4/Tk453ebAeHI/AAAAAAAAAvE/XXjrwOz0MbM/s1600/arrowgambreng.gif) 138px 10px no-repeat;color:#7eb7fb;}
ul.menu .sub:hover    {color:#fff;}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size:12px}
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
    <style type="text/css" title="currentStyle">
                @import "css/grid_sytles.css";
                @import "css/themes/smoothness/jquery-ui-1.8.4.custom.css";
    .style5 {
	font-size: 3em;
	color: #003333;
}
    </style>

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js2/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js2/jquery-ui-1.7.custom.min.js"></script>

    <script  type="text/javascript" src="js2/jquery-search.js"></script>

</head><body background="../gambar/bag.jpg">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0">
<tR>
<TD colspan="3"><div align="left">
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
</div></TD>
</tR>
<tr class="style3">
<td colspan="3"><div align="left">
USER LOG : <? echo strtoupper($a[Nama]); echo " ($a[Level])";?><br>
<?
$ksik = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$jj = mysql_fetch_array($ksik);
echo strtoupper($jj[NamaBagian]); 
?>
</div></td>
</tr>
 <tr>
 <td colspan="2" valign="top">
<div align="left">
<?
if($dapa[id]){
?>
<form action="f_ff.php">
<?
}else{
?>
<form target="_self">
<? } ?>
<table width="322" border="0" cellpadding="1" cellspacing="1" class="style3">
<?
if($dapa[id]){
?>
<tr valign="top">
<td>ALASAN</td><td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Alasan"class="style3"></textarea>
<input type="hidden" name="id" value="<? echo $dapa[id]; ?>">
</div></td>
</tr>
<? }else{ ?>
<tr valign="top">
<td width="98">NO KWT</td>
<td width="3">:</td>
<td width="234"><div align="left">
<input  type="text" name="NoKwt" maxlength="20" size="12" class="style3" />
</div></td>
</tr>
 <? } ?><tr>
<td colspan="3">&nbsp;</td>
</tr>

<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Submit" name="fgfg" class="style3" />
<input type="button" name="fgfgf" value="Selesai" onClick="location.href='index.php';"  class="style3"/>
</div></td>
</tr>
 </table>
</form>
</div>
</td><td width="930" valign="top"><div align="left">
<?
 if($dapa[id]){
?>
<table border="0" cellpadding="2" cellspacing="2" class="style3">
<tr>
<td width="128">NO KWT</td>
<td width="10">:</td>
<td width="381"><div align="left"><?
echo "KWT:$dapa[id]";
?></div></td>
</tr>
<tr>
<td>NAMA/NO PASIEN</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($dapa[NamaPasien])); echo " ($dapa[NoPasien])"; 
?></div></td>
</tr>
<tr>
  <td>JAM</td>
  <td>:</td>
  <td><div align="left"><? echo number_format($dapa[Jam]); ?></div></td>
</tr>
<tr>
  <td>KK</td>
  <td>:</td>
  <td><div align="left"><? echo number_format($dapa[Kk]); ?></div></td>
</tr>
<tr>
  <td>DB</td>
  <td>:</td>
  <td><div align="left"><? echo number_format($dapa[Db]); ?></div></td>
</tr>
<tr>
  <td>TUNAI</td>
  <td>:</td>
  <td><div align="left"><? echo number_format($dapa[Tunai]); ?></div></td>
</tr>
<tr><?
$gtn=$dapa[Tunai]+$dapa[Db]+$dapa[Kk]+$dapa[Jam];
?>
<td>TOTAL</td><td>:</td><td><div align="left"><? echo number_format($gtn); ?></div></td>
</tr>
<tr>
  <td>TYPE BAYAR </td>
  <td>:</td>
  <td><div align="left"><? echo strtoupper($dapa[NamaType]); ?></div></td>
</tr>
</table>
<?
}
?>
</div></td></tr></table>
</div> 
</body>
</html>
<? }else{
echo "ANDA TIDAK BOLEH AKSES HALAMAN INI "; ?><font color="#990000"><b><? echo " $a[Nama]"; ?></b></font><? 
}
?>