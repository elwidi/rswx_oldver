<?
session_start();
include "../salaman.php";
 include "../konek.php";
  ?><html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-size: 12px}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
-->
 </style><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="j_0kkj.php?tag=<? echo $tag; ?>&bln2=<? echo $bln2; ?>&iin=hari&tgl2=<? echo $tgl2; ?>&Shift=<? echo $Shift; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>";
self.close();
//-->
} 
</SCRIPT>
 </head>
 <body <? if($dion=="no"){ ?> onLoad="win44()"<? } ?> >
 <div align="center">
 <form target="_self">
 <table border="1">
 <tr>
 <td width="718" height="45" colspan="3" bgcolor="#000000"><div align="center" class="style4 style5">
 <?
 if($tag=='piye'){
 echo "LAPORAN PERKIRAAN LAHIR";
 }elseif($tag=='doaku'){
 echo "LAPORAN JADWAL PERIKSA";
 }elseif($tag=='jos'){
 echo "LAPORAN GDT";
 }elseif($tag=='tik'){
 echo "LAPORAN ANC";
 }elseif($tag=='sabar'){
 echo "LAPORAN KB";
 }elseif($tag=='lama'){
 echo "LAPORAN VAKSIN ";
 }elseif($tag=='iklas'){
 echo "LAPORAN ANC ";
 }else{
  echo "LAPORAN AKHIR HARI KASIR";  } ?></div></td>
 </tr>
 <tr>
 <td colspan="3">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
 <td colspan="3"><span class="style1">.</span></td>
 </tr>
 <tr>
 <td width="130"><span class="style9">TGL AWAL</span></td>
<td width="6"><div align="center" class="style3 style8  style2 style10">
  <div align="center">:</div>
</div></td>
<?
  $bukhhd = date("d");
		  $hdhd =date("m");
		  ?>
<td width="601"> <span class="style15 style2 style8  style3">
<select name="tgl1" class="style1" id="tgl1">
 		  <option value="<? echo $bukhhd; ?>"><? echo $bukhhd; ?></option>
		  <?
		 
$ttg= 1;
while($ttg<32){
?>
          <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
          <? $ttg++; } ?>
    </select> -
	<select name="bln1" class="style1" id="bln1">
  <option value="<? echo $hdhd; ?>"><? $bln=$hdhd;
  include "../bulan.php";   ?></option>
         <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
  </select> S/d <select name="tgl2" class="style1" id="tgl2">
 		  <option value="<? echo $bukhhd; ?>"><? echo $bukhhd; ?></option>
		  <?
		 
$ttg= 1;
while($ttg<32){
?>
          <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
          <? $ttg++; } ?>
    </select>
  /
  
  <select name="bln2" class="style1" id="bln2">
  <option value="<? echo $hdhd; ?>"><? $bln=$hdhd;
  include "../bulan.php";   ?></option>
         <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
  </select>
  / 
  <select name="thn1" class="style1" id="thn1">

<?
$awale = 2014;
while($awale<=2015){
?>       <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
<? $awale++; } ?>
<option value="2013">2013</option>
  </select>
  <input type="hidden" name="dion" value="no">
  <input type="hidden" name="tag" value="<? echo $tag; ?>">
  </span></td>
 </tr>
  <tr>
 <td colspan="3">&nbsp;</td>
 </tr>
 <tr>
 <td colspan="3" bgcolor="#000000"><div align="center">
 <input name="fggf" type="submit" class="style1" value="PROSES" style="background:#FFCC00" />
  <?
  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==12){?>
 <!-- <input type="button" name="fgf" value="CARI TARIF"  class="style1"   style="background:#FFCC00"
   onClick="wCompare2 = window.open('9BHG_h.php', 
  'wCompare2', 'width=300,height=320,left=70,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare2.focus();" /> -->
  <? }
  ?><input name="ffgf" type="button" class="style1" onClick="window.close()" value="SELESAI"  style="background:#FFCC00"/>
 </div></td>
 </tr>
 </table>
 </div>
 </td>
 </tr>

 </table>
 </form>
 </div>
 </body>
 </html>
 