<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($ukur=='hari'){
//header('Refresh: 1');
}
?>
<html>
<head>
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
.style2 {font-family: Georgia, "Times New Roman", Times, serif}
    .style3 {
	font-size: 18px;
	color: #FFFF99;
}
    .style4 {font-family: Georgia, "Times New Roman", Times, serif; color: #FFFFFF; font-size:11 }
.style8 {
	font-size: 11px;
	font-weight: bold;
}
.style9 {font-size: 11px}
.style10 {color: #FFFFFF; font-weight: bold; font-size: 11px; }
    .style11 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
    </style>

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js2/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js2/jquery-ui-1.7.custom.min.js"></script>

    <script  type="text/javascript" src="js2/jquery-search.js"></script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="969" colspan="3" bgcolor="#54B64E"><div align="left"><span class="style2 style1 style3"><strong>
Farmasi Gudang
</strong></span><br />
<div align="left">
<span class="style11">Sistem Logistik Online</span>
<table border="0" cellpadding="2" cellspacing="2" class="style4">
<tr>
<td width="128" class="sub"  ><span class="style8">USER LOG</span></td>
<td width="8" class="sub" ><span class="style9" >:</span></td>
<td width="426" class="sub"><div align="left" class="style10">
<?
echo strtoupper($a[Nama]);
?>
</div></td>
</tr>
<tr>
<td class="style9 sub"><strong>BAGIAN</strong></td>
<td class="sub"><span class="style10">:</span></td>
<td class="sub"><div align="left" class="style10"><? 
$kdjfd_fg = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$bp= mysql_fetch_array($kdjfd_fg);
echo strtoupper($bp[NamaBagian]); echo " ( $a[Level] )"; ?></div></td>
</tr>
</table>
</div>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
          <table width="1015" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="1002" bgcolor="#33FF00"> 
                <ul class='menu' id='menugambreng'>
                  <li><a href='' class='menulink'>PERSEDIAAN</a> 
                    <ul>
                      <?
					   if($a[Level]==11){
					   ?>
                      <li><a href="b6ta.php">ORDER UNIT</a></li>
                      <li><a href="b6ta.php?as=3">ORDER FIX</a></li>
                      <?
					   }else{					   ?>
                      <li><a href="index.php?ukur=hari">PERMINTAAN KE FARMASI</a></li>
                      <? } ?>
                      <li><a  href="#" class="sub">STOK OPNAME</a> 
                        <ul>
                          <li><a href="p9.php" class="menu" >Obat/Alkes</a></li>
                          <li><a href="ela_adik_fito.php" class="menu" >Brg Umum</a></li>
                        </ul>
                      </li>
                      <li><a  href="x9.php">RETUR</a></li>
                    </ul>
                  </li>
	              <li class="menu"><a href="../lg/index.php"  class="menulink" >LAPORAN</a> 
                    <ul>
                      <li class="sub"><a href="#" class="sub">LOG FARMASI</a> 
                        <ul>
                          <li class="sub"><a href="s_d.php">AMPRAHAN UNIT</a></li>
                          <li class="sub"><a href="s_d2.php">INFO STOK UNIT</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="sub">LOG UMUM</a> 
                        <ul>
                          <li><a href="s_0.php" >AMPRAHAN UNIT</a></li>
                          <li><a href="#" >LOG UMUM</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
	              <li class="menu"><a href="../3w.php"  class="menulink" >KEMBALI</a></li>
	              <li class="menu"><a href="../keluar.php"  class="menulink" >KELUAR</a></li>
	   </ul>
	   </ul>
  <script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script></td>
  </tr>
  <tr valign="top">
    <td><div align="left">
	<?
  	$ukure = strlen($ukur); 
	 if($a[Level]==6){
  include "t90a3.php";
		}elseif($a[Level]==11){
	include "iws.php";
}elseif($ukure>0){
 $file="$ukur.php";
  include "$file";
} ?> 
	</div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>