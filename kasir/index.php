<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 
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
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 23px;
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
<TD width="421" height="44" colspan="3"><div align="left" class="style6">HALAMAN KASIR 
 
</div></TD>
</tR>
<tr>
      <td colspan="3" class="style3"> User : 
        <?
echo  ($a[User]);  
$kdodkdk_0d9fd = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$yk = mysql_fetch_array($kdodkdk_0d9fd);
echo " / "; echo ucfirst(strtolower($yk[NamaBagian]));
echo " /($a[KodeBagian])";
?>
        <br>
<?
include "sif.php";
?>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="0" cellspacing="0">
 <tr> 
                    
              <td width="1019"  colspan="7" bgcolor="#33FF00"><?
 			  ?>
<ul class='menu' id='menugambreng'>
                        
                  <li><a href='#' class='menulink'>PASIEN</a> 
                    <ul>
                       <li><a href="../Daftar/ed_d.php">RAJAL </a></li>
                     <li><a  href="<? echo $filex; ?>">RANAP</a></li>
                     </ul>
                  </li>
 
                  <li><a href="#" class="menulink">UTILITY</a> 
                    <ul>
                      <li> <a href="d_Ee.php" style="text-decoration:none">KWITANSI 
                        BTL</a></li>
                      <li> <a href="mah_h.php" style="text-decoration:none">REVISI 
                        PENJAMIN</a></li>
                      <li> <a href="x23.php" style="text-decoration:none">BYR 
                        AKTE/MATERAI</a></li>
                    <li> <a href="../tarif/index.php" style="text-decoration:none">TARIF 
                        </a></li>  
                      
                      <li> <a href="as_ss.php" style="text-decoration:none">KWT 
                        RETUR</a></li>
                    </ul>
                  </li>
   
                  <li><a href='' class='menulink'>LAPORAN</a> 
                    <ul>
                      <li><a href="#"
			    onClick="wCompare = window.open('kCik_09.php', 
  'wCompare', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >TRANSAKSI</a></li>
                   
                      <li><a href="#"
			    onClick="wCompare = window.open('o02.php?tag=lama', 
  'wCompare', 'top=230,width=780,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >LAPORAN VAKSIN</a></li>
                      <li><a href="#"
			    onClick="wCompare = window.open('o02.php?tag=piye', 
  'wCompare', 'top=230,width=780,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >LAPORAN PERKIRAAN LAHIR</a></li>
                      <li><a href=""     onClick="wCompare = window.open('o02.php?tag=iklas', 
  'wCompare', 'top=230,width=780,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">LAPORAN ANC</a></li>
	  <li><a href=""     onClick="wCompare = window.open('o02.php?tag=sabar', 
  'wCompare', 'top=230,width=780,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">LAPORAN KB</a></li>
	  <li><a href=""     onClick="wCompare = window.open('o02.php?tag=doaku', 
  'wCompare', 'top=230,width=780,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">JDWAL KONTROL</a></li>
                  
                    </ul>
                  </li>
			   <li><a href="#" class="menulink">Logistik Online</a> 
                      <ul>
                        <li><a href="../lg/index.php?ukur=hari" class="menulink">Farmasi 
                          Gd</a></li>
                        <li><a href="../lg/index.php?ukur=hari2" class="menulink">Apotik</a></li>
                        <li><a href="../lg/index.php?ukur=hari3" class="menulink">Logistik 
                          Umum</a></li>
                      </ul>
                    </li>
	 
			      <li><a  href="../keluar.php" class='menulink'>KELUAR</a> </li>
		 
			    
  </ul>
  <script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script></td>
    </tr></table>
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
</table>
</div>
</body>
</html>