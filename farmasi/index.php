<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==4){
?>
<html>
<head><style type='text/css'>
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
</script> <script language="JavaScript">
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
    <style type="text/css" title="currentStyle">
                @import "css/grid_sytles.css";
                @import "css/themes/smoothness/jquery-ui-1.8.4.custom.css";
    .style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
    .style8 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
    </style>

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js2/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js2/jquery-ui-1.7.custom.min.js"></script>

    <script  type="text/javascript" src="js2/jquery-search.js"></script>
	</head>
<body background="../gambar/bag.jpg">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="1055" colspan="3"><div align="left">
Halaman Farmasi
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="1021" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td><div align="center"><span class="style7"></span>
 <!--  <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="" class="style8" style="text-decoration:none"  onClick="wCompare_7dd0kd = window.open('duh_kebanjiran.php', 
  'wCompare_7dd0kd', 'top=120,width=480,height=170,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_7dd0kd.focus();">Ada Pesan Masuk...Klik Disni ya </a> --></div></td>
  </tr>
  <tr>
  <td ><div align="left" class="style7"><? echo "User :"; echo $a[User]; ?> </div></td>
  </tr>
  <tr>
              <td width="1021" bgcolor="#33FF00">
<div align="left">
  <ul class='menu' id='Awal'>
                  
                    <li><a href='#' class='menulink' style="text-decoration:none">PENJUALAN</a> 
                      <ul>
                        <li><a href="../Daftar/ed_d.php?ade=3">RAWAT JALAN</a></li>
                        <li><a href='../Daftar/fito_sayangku.php'>RAWAT INAP</a> 
                        </li>
                        <li><a  href="sulistiono.php">RESEP LUAR</a></li>
                      </ul>
                    </li> 
 
                    <li><a href='#' class='menulink' style="text-decoration:none">PEMBELIAN</a> 
                      <ul>
                        <li><a  href="XW_9.php">OBAT SUPPLIER</a></li>
                        <li><a  href="#">OBAT LANGSUNG</a></li>
                      </ul>
                    </li> 
                   <li><a href='#' class='menulink' style="text-decoration:none">RETUR</a> 
                      <ul>
                       
                        <li><a href="a_aws.php">RAWAT JALAN</a></li>
                         <li><a href="b6f.php" >RAWAT INAP</a> 
                       
                        </li>
                      
                        <li><a  href="x2.php">RESEP LUAR</a></li>
                       
                        <li><a  href="7VF_A.php">PEMBELIAN</a></li>
                        <li><a  href="eli_adik_hari.php">INPUT BRG RUSAK/ED</a></li>
                      </ul>
                    </li> 
	          <li><a href='#' class='menulink' style="text-decoration:none">MASTERING DATA</a> 
                      <ul>
                        <li><a  href="data_obat.php">DATA OBAT</a></li>
                        <li><a  href="kompor.php">SUPPLIER</a></li>
                        <li ><a  href="XS.php">SATUAN</a></li>
                      
                        <li ><a  href="#" onClick="wCompare = window.open('N7H.php', 
  'wCompare', 'width=480,height=300,left=370,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">EMBALASE &amp; RACIKAN</a></li>
                        
                      </ul>
					  
                    </li>
                    <li><a href='#' class='menulink' style="text-decoration:none">LAPORAN</a> 
                      <ul>
                        <li ><a href="s_ff.php" >KARTU STK GLOBAL</a> 
						  <li ><a href="sd_0.php" >HPP</a> 
                        <li ><a href="#" class="sub">FARMASI >></a> 
                          <ul>
                            <li><a href="#" class="sub" >PEMBELIAN</a> 
                              <ul>
                                <li><a href="z9o.php">PER SUPPLIER</a></li>
                               <!--  <li><a href="b_09.php?Kat=Far">PER UNIT </a></li> -->
                                <li><a href="b_8.php?Kat=Far">FAKTUR </a></li>
                                <li><a href="b9_8.php?Kat=Far">DETAIL BELI </a></li>
                              </ul>
                            </li>
                            <li><a href="x20.php">JML RESEP & R</a></li>
                          </ul>
                        </li>
                        <li><a href="#"  onClick="wCompare = window.open('45i.php', 
  'wCompare', 'top=20,width=580,height=300,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">TARIK DATA</a></li>
                        <li><a href="S12.php"  >INFO STOK MIN</a></li>
                        <li><a href="#"  onClick="wCompare = window.open('d_9l_09.php', 
  'wCompare', 'top=20,width=580,height=300,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">NARKOTIKA &amp; PSIKOTROPIKA</a></li>
                        <li><a href="d_f.php" >FORM PERMINTAN BARANG</a></li>
                        <li><a href="#"  onClick="wCompare = window.open('a21z.php', 
  'wCompare', 'top=120,width=480,height=170,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">TRANSAKSI OBAT KELUAR</a></li>
                        <li><a href="d_f.php" >FORM PERMINTAN BARANG</a></li>
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
                    <li><a href="../keluar.php" class='menulink' style="text-decoration:none">KELUAR</a> 
                    </li>  
   
			       </ul>
  <script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('Awal','menuhover');
</script></div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}?>
