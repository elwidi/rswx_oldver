<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==3){
?>
<html>
<head>
<title></title><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
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
    .style4 {
	color: #990000;
	font-weight: bold;
}
    .style5 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic; font-size:12px
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
<TD colspan="3" bgcolor="#5B922C"><div align="left">
Halaman Kasir Ganti penjamin
</div></TD>
</tR>
<tr class="style3">
<td colspan="3" bgcolor="#FFFFFF"><div align="left" class="style4">
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
$kdkjdkdjdkd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ee = mysql_fetch_array($kdkjdkdjdkd);
if($ee[id]){
?><form action="3sas.php"><?
}else{
?>
  <form target="_self">
  <? } ?>
  <table width="354" border="0" cellpadding="1" cellspacing="1" class="style3">
 <?
 if($ee[id]){
 ?>
 <tr>
 <td>NO RM</td><td>:</td><td><div align="left"><?
 echo $ee[NoPasien]; 
 ?></div></td>
 </tr>
 <tr>
 <td>NAMA PASIEN</td><td>:</td><td><div align="left"><?
 echo strtoupper($ee[NamaPasien]); 
 ?></div></td>
 </tr>
 <tr>
 <td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$ee[TglMasuk] "; 
 $bln=$ee[BlnMasuk]; $thn1=$ee[ThnMasuk];
 include "../bulan.php";
  ?></div></td>
 </tr>
 <tr>
 <td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $ee[JamMasuk];?></div></td>
 </tr>
 <tr>
 <td>OPR</td><TD>:</TD><TD><div align="left"><? echo strtoupper($ee[Operator]); ?></div></TD>
 </tr>
 <TR>
 <TD>BAGIAN</TD><td>:</td><td><div align="left"><?
 echo strtoupper($ee[Bagian]); 
 ?>
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <input type="hidden" name="NoPasien" value="<? echo $NoPasien; ?>">
 <input type="hidden" name="NamaPasien" value="<? echo $NamaPasien; ?>">
 </div></td>
 </TR>
 <tr>
 <td>DOKTER</td><td>:</td><td><div align="left"><? echo $ee[NamaDokter]; ?></div></td>
 </tr>
 <tr>
 <td>PENJAMIN</td><td>:</td><td><div align="left">
 <select name="KodePer" class="style3">
 <option value="<? echo $ee[KodePer]; ?>"><? echo strtoupper($ee[NamaPer]); ?></option>
 <?
 $ksiks = mysql_query("SELECT id FROM dataperusahaan WHERE id!='#ee[KodePer]' ORDER BY NamaPer");
 while($px = mysql_fetch_array($ksiks)){
 ?>
 <option value="<? echo $px[id]; ?>"><?
 $psa = mysql_query("SELECT NamaPer FROM dataperusahaan WHERE id='$px[id]'");
 $hb = mysql_fetch_array($psa);
 echo strtoupper($hb[NamaPer]);
 ?></option><? } ?>
 </select>
 </div></td>
 </tr>
 <tr valign="top">
 <td>ALASAN</td><td>:</td><td><div align="left">
 <textarea rows="3" cols="30" name="Alasan" class="style3"></textarea>
 </div></td>
 </tr>
 <?
 }else{
 ?><tr>
  <td width="159">NO RM</td>
  <td width="4">:</td>
  <td width="241"><div align="left">
  <input type="text" name="NoPasien" maxlength="30" size="15" class="style3">
  </div></td>
  </tr>
  <tr>
    <td>NAMA PASIEN </td>
    <td>:</td>
    <td><input type="text" name="NamaPasien" maxlength="60" size="25" class="style3"></td>
  </tr>
  <? } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="submit" value="Simpan" name="fgfg" class="style3" style="background:#99FFCC">
	<?
	if($id>0 || $NoPasien!='' || $NamaPasien!=''){
	?>
	<input type="button" name="fgfgf" value="Reset" onClick="location.href='mah_h.php';" class="style3"  style="background:#99FFCC">
	<?
	 $kdidkidkd_000dfms = mysql_query("SELECT Count(id) as jj FROM dataupdate WHERE IdUpdate='$id'");
 $ss= mysql_fetch_array($kdidkidkd_000dfms); 
if($ss[jj]>0){
?>
<input type="button" name="fgfgf" value="Cek Detil" class="style3"  <? echo $warna; ?>  onClick="wCompare = window.open('xqaa.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=300,left=370,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<?
}

	}
	?>
	<span class="style5">
	<input type="button" name="fgfgf" value="Selesai" onClick="location.href='index.php';" class="style3"  style="background:#99FFCC">
	.</span></div></td>
    </tr>
  </table>
</form>
</div>
</td><td width="1115" valign="top"><div align="left">
<table width="842" border="0" cellpadding="2" cellspacing="2" class="style3">
<tr>
<td width="28" bgcolor="#46A541"><div align="center"><strong>NO</strong></div></td>
<td width="39" bgcolor="#46A541"><strong>NO RM</strong></td>
<td width="58" bgcolor="#46A541"><strong>TGL MSK</strong></td>
<td width="217" bgcolor="#46A541"><strong>NAMA PASIEN</strong></td>
<td width="135" bgcolor="#46A541"><strong>DOKTER</strong></td>
<td width="139" bgcolor="#46A541"><strong>BAGIAN</strong></td>
<td width="182" bgcolor="#46A541"><strong>PENJAMIN</strong></td>
 </tr>
 <?
 $nomer=1;
 if($NoPasien!=''){
 $kfjkfjgkfjkgfgf = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien' order by id desc LIMIT 0,20");
 }else{
 $kfjkfjgkfjkgfgf = mysql_query("SELECT * FROM rwtjalan WHERE NamaPasien LIKE '$NamaPasien%'  order by id desc  LIMIT 0,20");
 }
 while($bb = mysql_fetch_array($kfjkfjgkfjkgfgf)){
 $kdidkidkd_000dfm = mysql_query("SELECT Count(id) as jj FROM dataupdate WHERE IdUpdate='$bb[id]'");
 $u= mysql_fetch_array($kdidkidkd_000dfm); $prc = $nomer%2;
 if($u[jj]>0){
 $warna='bgcolor="#CCCCFF"'; 
 }elseif($prc==1){
 $warna='bgcolor="#FFFF66"';
 }else{
  $warna='';
 } 
 if($id==$bb[id]){
 ?><tr valign="top" bgcolor="#000000" class="style5"><?
 }else{
 ?>
<tr  <? echo $warna; ?>  onClick="location.href='mah_h.php?id=<? echo $bb[id]; ?>&NoPasien=<? echo $NoPasien; ?>&NamaPasien=<? echo $NamaPasien; ?>';" valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
<? } ?>
   <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
  <td bgcolor="#FFCCFF"><div align="right"><?
  echo "$bb[TglMasuk]-$bb[BlnMasuk]-$bb[ThnMasuk]";
  ?></div></td>
  <td><div align="left"><? echo strtoupper($bb[NamaPasien]); ?></div></td>
  <td><div align="left"><? echo $bb[NamaDokter]; ?></div></td>
  <td><div align="left"><? echo $bb[Bagian]; ?></div></td>
  <td><div align="left"><? echo strtoupper($bb[NamaPer]); ?></div></td>
</tr>
<?
$nomer++; } ?>
 </table>
</div></td></tr></table>
 
</div> 
</body>
</html>
<? }else{
echo "ANDA TIDAK BOLEH AKSES HALAMAN INI "; ?><font color="#990000"><b><? echo " $a[Nama]"; ?></b></font><? 
}
?>