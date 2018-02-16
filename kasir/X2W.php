<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-9' WHERE id='$a[id]'");
}
$Kwit = mysql_query("SELECT * FROM kwitansirj where id='$NoKwt'");
$dapa = mysql_fetch_array($Kwit);

if($FiLaDim[Dua]!='on'){
echo "SDR "; ?><font color="#990000"><b><i><? echo strtoupper($a[Nama]); ?></i></b></font> <?
echo "TIDAK DIIJIN KAN MASUK KE HALAMAN INI";
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ){
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
<script language="JavaScript">
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
    <style type="text/css" title="currentStyle">
                @import "css/grid_sytles.css";
                @import "css/themes/smoothness/jquery-ui-1.8.4.custom.css";
    .style4 {
	color: #FFFFFF;
	font-weight: bold;
}
    </style>

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js2/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js2/jquery-ui-1.7.custom.min.js"></script>

    <script  type="text/javascript" src="js2/jquery-search.js"></script>

</head><body>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tR>
<TD colspan="3"><div align="left">
  <img src="../gambar/kasir.png" width="1262" height="156">
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
<form action="d12.php">
<?
}else{
?>
<form target="_self">
<? } ?>
<table width="322" border="0" cellpadding="1" cellspacing="1" class="style3">
<?
if($dapa[id]){
?>
<tr>
<td>JAM</td><td>:</td><td><div align="left"><input type="text" name="Jam" maxlength="14" size="12" value="<? echo $dapa[Jam]; ?>" class="style3"></div></td>
</tr>
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
<?
if($NoKwt>0){
?>
<input type="button" name="fgfg" class="style3" value="Reset" onClick="location.href='X2W.php';">
<?
}
?><input type="button" name="fgfgf" value="Selesai" onClick="location.href='index.php';"  class="style3"/>
</div></td>
</tr>
 </table>
</form>
</div>
</td><td width="930" valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style3">
<tr>
<td width="25" bgcolor="#000000"><span class="style4">NO</span></td><td width="40" bgcolor="#000000"><span class="style4">NO KWT</span></td><td width="39" bgcolor="#000000"><span class="style4">NO RM</span></td><td width="78" bgcolor="#000000"><span class="style4">NAMA PASIEN</span></td><td width="129" bgcolor="#000000"><span class="style4">BAGIAN</span></td><td width="165" bgcolor="#000000"><span class="style4">DOKTER</span></td><td width="58" bgcolor="#000000"><div align="center"><span class="style4">JAM</span></div></td><td width="48" bgcolor="#000000"><div align="center"><span class="style4">DB</span></div></td><td width="57" bgcolor="#000000"><div align="center"><span class="style4">TUNAI</span></div></td>
<td width="60" bgcolor="#000000"><div align="center"><span class="style4">Kk</span></div></td>
<td width="157" bgcolor="#000000"><span class="style4">JENIS BAYAR</span></td>
</tr>
<?
$nomer=1;
if($NoKwt>0){
$ldfkldkldklfd = mysql_query("SELECT * FROM kwitansirj WHERE id='$NoKwt'");
}else{
$ldfkldkldklfd = mysql_query("SELECT * FROM kwitansirj ORDER BY id desc limit 0,20");
}
while($ss = mysql_fetch_array($ldfkldkldklfd)){
$ytys = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$ss[RegId]'");
$hh = mysql_fetch_array($ytys);
$per = $nomer%2;
if($per==1){
$warna='';
}else{
$warna='bgcolor="#FFFF99"';
}
?>
<tr <? echo $warna; ?>   onClick="location.href='X2W.php?NoKwt=<? echo $ss[id]; ?>';" valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="center"><? echo $ss[id]; ?></div></td>
    <td><div align="center"><? echo $ss[NoPasien]; ?></div></td>
  <td><div align="left"><? echo strtoupper($ss[NamaPasien]); ?></div></td>
  <td><div align="left"><? if($hh[Bagian]==''){
?><font color="#990000"><?   echo "Belum Terdaftar";?></font><? 
  }else{
  echo $hh[Bagian]; 
  }?></div></td>
  <td><div align="left"><? if($hh[NamaDokter]==''){
  ?><font color="#990000"><? echo "Tidak Terdaftar"; ?></font><? 
  }else{
  echo $hh[NamaDokter];
  } ?></div></td>
  <td><div align="center"><? if($ss[Jam]>0){
  echo number_format($ss[Jam]);
  }else{
  echo "-";
  } ?></div></td>
  <td><div align="center"><? 
  if($ss[Db]>0){
  echo number_format($ss[Db]);
  }else{
  echo "-";
  } ?></div></td>
  <td><div align="center"><?
  if($ss[Kk]>0){
   echo number_format($ss[Kk]); 
   }else{
   echo "-";
   } ?></div></td>
  <td><div align="center"><? 
  if($ss[Tunai]>0){
  echo number_format($ss[Tunai]);
  }else{
  echo "-";
  }  ?></div></td>
  <td><div align="left"><? echo strtoupper($ss[NamaType]); ?></div></td>
</tr>
<?
$nomer++; } ?>
<tr>
  <td colspan="11" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</div></td></tr></table>
</div> 
</body>
</html>
<? }else{
echo "ANDA TIDAK BOLEH AKSES HALAMAN INI "; ?><font color="#990000"><b><? echo " $a[Nama]"; ?></b></font><? 
}
?>