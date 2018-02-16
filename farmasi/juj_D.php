<?
session_start();
include "../konek.php";
include "../ceke.php";
$mbak = $_GET["mbak"];
$ada = $_GET["ada"];
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);

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
           CEK HISTORY DATA <? 
echo strtoupper($ii[NamaObat]); 
		   ?></div></td>
    </tr>
       <tr>
         <td colspan="3"><span class="style5">.</span></td>
    </tr>
      <tr>
         <td width="114">PERIODE</td>
    <td width="3">:</td>
    <td  ><div align="left">
	 
      <span class="style15 style2 style8  style3">
        <select name="tgl1" class="style5" id="tgl1">
          <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
          <?
		 
$ttg= 1;
while($ttg<32){
?>
          <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
          <? $ttg++; } ?>
          </select>
        <?
		if($mbak=='iin'){}else{
		?><select name="bln1" class="style5">
         <option value="<? echo date("m")-0; ?>"><? 
		$bln = date("m");
		include "../bulan.php";
		?></option> <option value="1">Januari</option>
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
		   <? } ?>
        - 
        <select name="tgl2" class="style5" id="tgl2">
          <?
		 
$ttg2= 31;
while($ttg2>0){
?>
          <option value="<? echo $ttg2;  ?>"><? echo $ttg2;  ?></option>
          <? $ttg2--; } ?>
          </select>
        /
        <select name="bln2" class="style5" id="bln2">
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
        <select name="thn1" class="style5" id="thn1">
          <option value="<? echo date("Y");?>"><? echo date("Y");?></option>
          <?
$hyh = 2011;
while($hyh<=2020){
?><option value="<? echo $hyh; ?>"><? echo $hyh; ?></option><? 
$hyh++;
}
?></select>
        </span></div></td>
    </tr>
 <input type="hidden" name="id" value="<? echo $id; ?>">
        <tr>
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
