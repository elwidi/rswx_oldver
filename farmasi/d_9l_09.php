<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style3 {ffont-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#003366}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
color:#003366
	font-weight: bold;
	font-weight: bold;
	color: #990000;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#003366
}
-->
</style>
</head>
<body>
 <div align="left">
 <form action="7u7u7_00.php">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="562" colspan="3">
   <div align="left" class="style4">LAPORAN PENGGUNAAN <br>NARKOTIK &amp; PSIKOTROPIKA <br>
   </div></td>
 </tr>
  <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style1">
   <tr>
   <td width="92"><span class="style5">PERIODE</span></td>
   <td width="3">:</td>
   <td width="471"><div align="left">
     <span class="style15 style2 style8  style3">
     <select name="tgl1" class="style5" id="tgl1">
       <option value="<? echo date("d")-0; ?>"><? echo date("d")-0;?></option>
	    <?
		 
$ttg= 1;
while($ttg<32){
?>
       <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
       <? $ttg++; } ?>
     </select>
     <select name="bln1" class="style5" id="select2">
       <option value="<? echo date("m")-0;?>"><? echo date("m")-0; ?></option>
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
     - 
     <select name="tgl2" class="style5" id="tgl2">
       <option value="<? echo date("d")-0; ?>"><? echo date("d")-0;?></option>
	    <?
		 
$ttg= 1;
while($ttg<32){
?>
       <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
       <? $ttg++; } ?>
     </select>
<select name="bln2" class="style5" id="bln2">
<option value="<? echo date("m")-0;?>"><? echo date("m")-0; ?></option>
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
<select name="thn1" class="style5" id="thn1">
  <option value="<? echo date("Y"); ?>"><? echo date("Y");?></option>
 </select>
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <?
 if($id=='x'){
 ?>
 <input type="hidden" name="anak" value="baik">
 <? 
 }else{
 ?><input type="hidden" name="anak" value="3">
 <? } ?>
 <input type="hidden" name="IdPer" value="<? echo $IdPer; ?>">
  
     </span>   </div></td>
   </tr>
   <tr>
   <td colspan="3"><div align="center">
  &nbsp;
   </div></td>
   </tr>
   <tr>
   <td colspan="3"><div align="center">
   <input type="submit" value="Submit" name="g" class="style5">
   <input type="button" name="fggf" value="Kembali" onClick="window.close()" class="style5">
   </div></td>
   </tr>
   </table>
   </div></td>
 </tr>
 </table>
 </form>
 </div>
</body>
</html>
 