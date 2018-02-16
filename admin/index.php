<?php 
session_start();
/*include "../konek.php";
include "../ceke.php";
$hajahn_0098sdsndjnsnsjd = mysql_query("SELECT * FROM vasa where id='271275'");
$banbs = mysql_fetch_array($hajahn_0098sdsndjnsnsjd);
$cs=explode(".",$banbs[Vsk]);
 $sdsdsddsdsdss=$cs[0]; 
 
 $pend_124555=0;
 $vgafagafa_ojjnnn = strlen($sdsdsddsdsdss);
while($pend_124555<10){
$bag89988_0998hnnmn = (ord(substr($sdsdsddsdsdss,$pend_124555,1))+9);
 
if($bag89988_0998hnnmn>=120){
$bag89988_0998hnnmn=97;
}else{
$bag89988_0998hnnmn=$bag89988_0998hnnmn;
}
$nama_dapa.=chr($bag89988_0998hnnmn);
  $pend_124555++;
 $bag89988_0998hnnmn='';}  
if($nama_dapa!='mamrhwaaja'){
 $hanahgs = mysql_query("dELETE FROM konco where id>0");
//header("Location:./keluar.php");
}else{*/
?>
<html>
<head> <style type='text/css'>
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
</script></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="905" height="41" colspan="3"><div align="left">
<table border="1" cellpadding="1" cellspacing="1">
<tr>
<td width="110"  ><div align="center">Gambar</div></td>
<td width="775"><div align="left">
<table border="1" cellpadding="1" cellspacing="1">
<tr>
<td width="799" height="68" >Halaman Admin</td>
</tr>
</table>
</div></td>
</tr> 
</table>
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="894" height="23"><div align="left">
    <ul class='menu' id='menugambreng'>
            <li><a href='' class='menulink'>MASTER</a> 
              <ul>
                <li><a  href="index.php?vas=2">USER</a></li>
               </ul>
            </li>
			 <li><a href='' class='menulink'>Pindah Unit</a> 
              <ul>
                <li><a  href="">Pendaftaran</a></li>
                <li><a  href="">MedRec</a></li>
                <li><a  href="">Kasir</a></li>
                <li><a  href="">Farmasi</a></li>
               </ul>
            </li>
			 
              
            <li> <a href="../keluar.php" class="menulink">KELUAR</a> </li>
			 
		   
</ul><script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script>
</div></td>
</tr>
 <tr valign="top">
  <td height="23"><div align="left">
  <?
  if($vas==2){
  $file='usere.php';
   }else{
  
  }
  $hasna='width="900" frameborder="0" height="445"';
?> <iframe src="<? echo $file; ?>" <? echo $hasna; ?>   ></iframe> 
  </div></td>
</tr>
</table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
// }
 ?>