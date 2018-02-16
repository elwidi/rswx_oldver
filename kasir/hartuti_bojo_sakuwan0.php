<?php
session_start();
include "../konek.php";
include "../ceke.php";
 $IdSt = $_GET["IdSt"];
$IdStruk = $_GET["IdStruk"];
$MstKey = $_GET["MstKey"];
$Id = $_GET["IdPasien"];
 if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==16){
 
   $ambil = mysql_query("SELECT * FROM txninap3 WHERE id='$IdBiaya'");
    $x = mysql_fetch_array($ambil);
  
   ?>
   <html>
   <head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 12px;
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style3 {font-size: 10px}
.style5 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.style16 {
	font-weight: bold;
	font-style: italic;
	color: #FF0000;
}
.style19 {
	font-style: italic;
	color: #FF0000;
}
.style21 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; font-style: italic; color: #FF0000; }
.style23 {
	color: #FFFFFF;
	font-weight: bold;
}
.style24 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
   </style>
   </head>
   <body>
   <div align="center">
   <form action="fito_mirip_ayah.php"> 
   <table width="550" border="0" cellpadding="2" cellspacing="2" bgcolor="#D4D0C8">
   <tr bgcolor="#FFCCCC">
   <td colspan="3" bgcolor="#006600"><div align="center" class="style1"><span class="style23">DETAIL TRANSAKSI <br>
   STRUK : <? echo $x[NoBukti]; ?> </span><br>
   <? echo "MstKey : $MstKey "; ?>
   <input type="hidden" name="MstKey" value="<? echo $MstKey; ?>">
   <input type="hidden" name="id" value="<? echo $id; ?>">
   <input type="hidden" name="IdStruk" value="<? echo $IdStruk; ?>">
   <input type="hidden" name="MstKey" value="<? echo $MstKey; ?>">
   <input type="hidden" name="IdPasien" value="<? echo $IdPasien; ?>">
   </div></td>
   </tr>
<input name="NoBukti" type="hidden" class="style1" value="<? echo $x[NoBukti]; ?>" size="20" maxlength="20">
   <tr>
   <td width="167" class="style1 style2 style3">
              <div align="left" class="style10">
        NAMA BIAYA        </div>        </td>
   <td width="3">
              <div align="left" class="style10 style16">
                <div align="center">:</div>
        </div>        </td>
   <td width="360" class="style1">
              <div align="left" class="style10">
<? echo strtoupper($x[NamaBiaya]); ?>        </div>        </td>
   </tr>
   <tr class="style1">
<td>TGL</td><td>:</td><td><div align="left"><span class="style15 style2 style8  style3">
  <select name="TglX" class="style24" id="Tgl">
   <option value="<? echo $x[Tgl]; ?>"><?  echo $x[Tgl]; ?></option>
    <?
		 
$ttg2= 31;
while($ttg2>0){
?>
    <option value="<? echo $ttg2;  ?>"><? echo $ttg2;  ?></option>
    <? $ttg2--; } ?>
  </select>
/
<select name="Bln" class="style24" id="Bln">
   <option value="<? echo $x[Bln]; ?>"><?  echo $x[Bln]; ?></option>

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
<select name="Thn" class="style24" id="Thn">
   <option value="<? echo $x[Thn]; ?>"><?  echo $x[Thn]; ?></option>
  <?
$hyh = 2011;
while($hyh<=2020){
?>
  <option value="<? echo $hyh; ?>"><? echo $hyh; ?></option>
  <? 
$hyh++;
}
?>
</select>
</span>

</div></td>
</tr>

   <tr>
   <td class="style5">
              <div align="left" class="style10">
        HARGA        </div>        </td>
   <td>
              <div align="left" class="style15 style19">
                <div align="center">:</div>
        </div>        </td>
   <td class="style1"><div align="left" class="style10">
            <div align="left">
                  <input type="text" name="Harga" value="<? echo $x[Harga]; ?>"  maxlength="15" size="15">
                <input type="hidden" name="Id" value="<? echo $x[id]; ?>">
				<input type="hidden" name="IdPasien" value="<? echo $IdPasien; ?>">
				<input type="hidden" name="MstKey" value="<? echo $x[MstKey]; ?>">
                <input type="hidden" name="IdBiaya" value="<? echo $IdBiaya; ?>">
            </div>
              </div></td>
   </tr>
   <tr>
   <td class="style5">
              <div align="left" class="style10">
        QTY        </div>        </td>
   <td>
              <div align="left" class="style21">
                <div align="center">:</div>
        </div>        </td>
   <TD class="style1">
              <div align="left" class="style10">
                <div align="left"><input type="text" name="Qty" maxlength="3" size="3" value="1"></div>
        </div>        </TD>
   </tr>
   <tr>
   <td class="style5">
              <div align="left" class="style10">
        JML HARGA        </div>        </td>
   <td><div align="center" class="style21">:</div></td>
   <td class="style1"><div align="left" class="style10">
    <? echo number_format($x[JumlahHarga]); ?></div></td>
   </tr>
   
   <tr bgcolor="#FFCCCC">
   <td colspan="3" bgcolor="#006600"><div align="center">
     <input  name="sdd"  type="submit" class="style1" value="Ganti" > 
<?
	if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
	 
	$dkjfdkfdl = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$x[MstKey]'");
	$bp = mysql_fetch_array($dkjfdkfdl);
	//
	
	//
	?><? } ?>
 <input name="dfdff" type="button" class="style1"  onClick="location.href='33cf.php?IdBiaya=<? echo $IdBiaya; ?>&MstKey=<? 
   echo $MstKey; ?>&id=<? echo $id; ?>&IdStruk=<? echo $IdStruk;   ?>';" value="Hapus"> 
   </div></td>
   </tr>
   </table>
   </form>
   </div>
   </body>
   </html>
   <? 
}else{
header("Location:./keluar.php");
}
?>
