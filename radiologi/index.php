<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $pcd =explode("-",$a[Nik]);
  $Nik=strtoupper($pcd[0]);
if($Nik=='DR'){
header("Location:./565m.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 ){
header("Location:../3w.php");
}elseif($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-16' WHERE id='$a[id]'");
}
if($a[User2]=='admin'){
$udd_00 = mysql_query("UPDATE konco SET Level=16 WHERE id='$a[id]' AND User='admin'");
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
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

</head>
<body>
<table border="0" cellpadding="2" cellspacing="2" >
<tr>
<td colspan="3" valign="top">
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
		  </td>
</tr>
<tr>
<td colspan="3" valign="top"> 
<table border="0" cellpadding="1" cellspacing="1">
 <tr>
                    
          <td width="1019"  colspan="7" bgcolor="#33FF00">
<ul class='menu' id='menugambreng'>
              <li><a href='#' class='menulink'>PASIEN</a> 
                <ul>
                  <li><a href="../Daftar/ed_d.php">RAJAL</a></li>
                  <li><a  href="../Daftar/fito_sayangku.php">RANAP</a></li>
                 </ul>
              </li> 
  
              <li><a href='' class='menulink'>PROSES </a> 
                <ul>
                  <li><a href="565m.php?ngkos=telp" >INPUT PEMERIKSAAN</a></li>
                  <li><a  href="565m.php" >BACA HASIL PEMERIKSAAN</a></li>
                </ul>
              </li>
             <li><a href='' class='menulink' >MASTERING DATA</a> 
                <ul>
                  <li><a  href="../Lab/dapas.php">DT PASIEN RS</a></li> 
                 
                <li> <a href="../tarif/index.php" style="text-decoration:none">TARIF 
                        </a></li>  </ul>
              </li>
               
			   <li><a href="#" class="menulink">Laporan</a> 
                <ul>
                  <li><a href="" class="menulink">Farmasi 
                    Gd</a></li>
                  <li><a href="" class="menulink">Apotik</a></li>
                  <li><a href="" class="menulink">Logistik 
                    Umum</a></li>
                </ul>
              </li>
			 
              <li><a  href="../keluar.php" class='menulink'>KELUAR</a> </li>
 
  </ul>
  <script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script></td>
    </tr>
	<tr>
	<td colspan="7"><div align="left" class="style3">
	USER LOG : <?
	echo "$a[User] / $a[Level]";
//	echo "-$belajar_sa_bar[id]";?>
	</div></td>
	</tr>
 <tr>
   <td  colspan="7"><div align="left"><table width="1019" height="76" border="0" cellpadding="2" cellspacing="2" class="style1">
<?
if($ngkos=='telp'){
?>
<tr  bgcolor="#999999">
<? 
}else{
?>
<tr bgcolor="#D4D0C8">
<? } ?>
<td><div align="center"><strong>NO</strong></div></td><td><div align="center"><strong>NO RAD</strong></div></td>
 <td><strong>NO TXN</strong></td><td><strong>NO RM</strong></td><td><strong>NAMA PASIEN</strong></td> 
<td><strong>BAGIAN</strong></td> 
<td>PEMERIKSAAN</td>
<?
if($ngkos!='telp'){
?>
<td><strong>KETERANGAN</strong></td>
<td><strong>KESAN</strong></td>
<? } ?>
 <td><strong>OPR</strong></td><td><strong>TGL</strong></td><td><strong>JAM</strong></td>
</tr>
<?
$nomer=1;
if($ada=='sajalah'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoMan='$NoMan'  ORDER BY id DESC LIMIT 0,100");
}elseif($ada=='baru'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NamaPasien LIKE '$NamaPasien%'   ORDER BY id DESC LIMIT 0,100");
}elseif($ngkos=='telp'){
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoTxn!='' AND Stat=0   ORDER BY id DESC LIMIT 0,100");
}else{
$dkjfkdjfd = mysql_query("SELECT * FROM norad WHERE NoTxn!=''  AND Stat=1 ORDER BY id DESC LIMIT 0,100");
}
while($b= mysql_fetch_array($dkjfkdjfd)){
 $pecah = explode("-",$b[NoTxn]);
if($pecah[0]=='RL'){
$dfdi989= mysql_query("SELECT NamaBiaya,id FROM txnjalan WHERE RegId='$pecah[1]-$pecah[2]'");
$nbs = mysql_fetch_array($dfdi989);
$NP=$nbs[NamaBiaya];
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad WHERE IdTxn='LU.$nbs[id]'");
$mn = mysql_fetch_array($kjkdjksjdk);
$warna ='bgcolor="#FFCCCC"';

}elseif($pecah[0]=='MM'){
$sdksjkss000 = mysql_query("SELECT NamaBiaya,id,MstKey FROM txninap3 WHERE NoBukti='$b[NoTxn]'");  
$nh = mysql_fetch_array($sdksjkss000);
///
$kdjk9090 = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$nh[MstKey]'");
$nok = mysql_fetch_array($kdjk9090);
 //
$NP="$nh[NamaBiaya]";
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad2 WHERE NoBukti='$b[NoTxn]'");
$mn = mysql_fetch_array($kjkdjksjdk);
$warna ='bgcolor="#CCFFCC"';
}else{
$dfdi989= mysql_query("SELECT NamaBiaya,id FROM txnjalan WHERE RegId='$b[NoTxn]'");
$nbs = mysql_fetch_array($dfdi989);
$NP=$nbs[NamaBiaya];
$kjkdjksjdk = mysql_query("SELECT Keterangan,Kesan FROM pasrad WHERE IdTxn='$nbs[id]'");
$mn = mysql_fetch_array($kjkdjksjdk);
$noma = $nomer%2;
if($noma==1){
$warna =' bgcolor="#C6FFC6"';
 }else{
$warna ='';
}
}?>

<?
if(!$nok[id] && $pecah[0]=='MM'){
?><tr  <? echo $warna; ?>><?
}elseif($pecah[0]=='MM'){
 echo "$nok[id]<br>"; ?>
<tr <? echo $warna; ?>  onClick="wCompare = window.open('d5r_r0d.php?e=<? echo $b[NoTxn]; ?>&IdBiaya=<? echo $nh[id]; ?>&id=<? echo $nok[id]; ?>', 
  'wCompare', 'width=780,height=640,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? 
}else{
 ?><tr 
onClick="location.href='jm.php?id=<? echo $b[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <?
echo "$warna";
?>  valign="top" >
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>  
<td><div align="center"><? echo $b[NoUrut]; ?></div></td>
 <td><div align="left"><? echo $b[NoTxn];

 ?></div></td>
<td><div align="center"><? echo $b[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($b[NamaPasien])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($b[NamaBagian])); ?></div></td>
<td><div align="left"><?
echo ucfirst(strtolower($NP)); 
 ?></div></td><?
if($ngkos!='telp'){
  ?> 
<td><div align="left"><? echo $mn[Keterangan]; ?></div></td> 
<td><div align="left"><? echo $mn[Kesan]; ?></div></td>
<? } ?>
 
 <td><div align="left"><? 
echo strtoupper($b[Opr]); 
?></div></td>
<td><div align="right"><?
echo "$b[Tgl]-$b[Bln]-$b[Thn]";
?></div></td>
<td><div align="left"><?
echo $b[TglJam];
 ?></div></td>
</tr>
<?
$nomer++; } ?>
<?
if($ngkos=='telp'){
?>
<tr bgcolor="#FFCCCC">
<? 
}else{
?>
<tr bgcolor="#D4D0C8">
<? } ?>
  <td colspan="13" >&nbsp;</td>
  </tr>
</table></div></td>
 </tr>
</table>
 </td>
</tr>
</table>


</body>
</html>