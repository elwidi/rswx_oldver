<?
session_start();
include "../konek.php";
include "../ceke.php";
$mbak = $_GET["mbak"];
$ada = $_GET["ada"];
 ?>
<html>
<head>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif;font-size: 12px}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style6 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
 
  <form action="sws.php">
    <div align="left">
     <table border="0" cellpadding="2" cellspacing="2" class="style3">
       <tr>
         <td height="40" colspan="3" bgcolor="#666666"><div align="center" class="style4 style6">
           SORT PER PERIODE </div></td>
    </tr>
       <tr>
         <td colspan="3"><span class="style5">.</span></td>
    </tr>
       <tr>
         <td width="114">PERIODE</td>
    <td width="3">:</td>
    <td width="233"  ><div align="left">
	<span class="style15 style2 style8  style3">
	<select name="Bln" class="style5" id="bln2">
          <option value="<? echo date("m")-0; ?>"><? 
		$bln = date("m");
		include "../bulan.php";
		?></option><option value="1">Januari</option>
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
        <select name="Thn" class="style5" id="thn1">
          <option value="<? echo date("Y");?>"><? echo date("Y");?></option>
          <?
$hyh = 2013;
while($hyh<=2020){
?><option value="<? echo $hyh; ?>"><? echo $hyh; ?></option><? 
$hyh++;
}
?></select>
        </span></div></td>
    </tr>
 <tr>
 <td>BAGIAN</td><td>:</td><td><div align="left">
 <select name="KodeBagian" class="style5">
 <option value="19">Laboratorium</option>
 <option value="23">Apotik</option>
 <option value="12">Radiologi</option>
 </select>
 </div></td>
 </tr>        <tr>
         <td height="43">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
       <tr>
         <td colspan="3" bgcolor="#666666">
           <div align="center">
             <input name="fgg" type="submit" class="style5" value="Proses">
             <input name="ghgh" type="button" class="style5" onClick="window.close()" value="Kembali">
          </div></td>
      </tr>
     </table>
   </div>
 </form>
</div>
</body>
</html> 
