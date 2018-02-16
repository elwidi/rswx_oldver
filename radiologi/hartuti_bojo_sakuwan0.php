<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$IdSt = $_GET["IdSt"];
$IdStruk = $_GET["IdStruk"];
$MstKey = $_GET["MstKey"];
$id = $_GET["id"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
   $ambil = mysql_query("SELECT * FROM txninap WHERE id='$id'");
   }else{
   $ambil = mysql_query("SELECT * FROM txninap3 WHERE id='$id'");
   }
   $x = mysql_fetch_array($ambil);
 
   $cekap = mysql_query("SELECT * FROM TarifUgd WHERE id='$x[KodeBiaya]'");
   $pp = mysql_fetch_array($cekap);
   if(!$x[id]){
   header("Location:./txn_inap.php?MstKey=$MstKey&NoStruk=$IdSt");
   }
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
-->
   </style>
   </head>
   <body>
   <div align="center">
   <form action="fito_mirip_ayah.php"> 
   <table width="550" border="0" cellpadding="2" cellspacing="2" bgcolor="#D4D0C8">
   <tr bgcolor="#FFCCCC">
   <td colspan="3" bgcolor="#000000"><div align="center" class="style1"><span class="style23">DETAIL TRANSAKSI <br>
   STRUK : <? echo $x[NoBukti]; ?> </span><br>
   <? echo "MstKey : $MstKey "; ?>
   <input type="hidden" name="MstKey" value="<? echo $MstKey; ?>">
   <input type="hidden" name="id" value="<? echo $id; ?>">
   <input type="hidden" name="IdStruk" value="<? echo $IdStruk; ?>">
   </div></td>
   </tr>
<input name="NoBukti" type="hidden" class="style1" value="<? echo $x[NoBukti]; ?>" size="20" maxlength="20">
   <tr>
   <td width="215" class="style1 style2 style3">
              <div align="left" class="style10">
        NAMA BIAYA        </div>        </td>
   <td width="3">
              <div align="left" class="style10 style16">
                <div align="center">:</div>
        </div>        </td>
   <td width="310" class="style1">
              <div align="left" class="style10">
<? echo strtoupper($x[NamaBiaya]); ?>        </div>        </td>
   </tr>
   <tr class="style1">
<td>DOKTER</td><td>:</td><TD><select name="KodeDokter" disabled class="style1">
 <option value="<? echo $x[KodeDokter]; ?>"><? echo $x[NamaDokter]; ?></option>
 <?
 $Dokter = mysql_query("SELECT KodeDokter FROM datadokter ORDER BY NamaDokter");
 while($kk = mysql_fetch_array($Dokter)){
 ?>
 <option value="<? echo $kk[KodeDokter]; ?>"><?
    $Nama = mysql_query("SELECT NamaDokter FROM datadokter WHERE KodeDokter='$kk[KodeDokter]'");
	$gg = mysql_fetch_array($Nama);
 echo $gg[NamaDokter];
  ?></option>
 <? } ?>
 </select> (<? echo $IdStruk;  ?>)</TD>
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
                </div>
              </div></td>
   </tr>
   <tr>
   <td class="style5">
              <div align="left" class="style10">
        DISKON        </div>        </td>
   <td>
              <div align="left" class="style21">
                <div align="center">:</div>
        </div>        </td>
   <TD class="style1">
              <div align="left" class="style10">
                <div align="left"><input name="Disc" type="text" class="style1" value="<? echo $x[Disc]; ?>" size="3" maxlength="3">
			 
			<?
			  $JasaDok= number_format((($pp[JasaDokter]/$x[Harga])*100),2);
			  $JasMed= number_format((($pp[JasaMedik]/$x[Harga])*100),2);
			  $JasRad= number_format((($pp[JasaRadiasi]/$x[Harga])*100),2);
			  $JasaSar= number_format((($pp[JasaSarana]/$x[Harga])*100),2);
			  $JasaRs= number_format((($pp[JasaRs]/$x[Harga])*100),2);
			  $BhpAlkes= number_format((($pp[BhpAlkes]/$x[Harga])*100),2);
			  $BhpNonAlkes= number_format((($pp[BhpNonAlkes]/$x[Harga])*100),2); 
			  $JasaKirim = number_format((($pp[JasaKirim]/$x[Harga])*100),2);

			?><input type="hidden" name="JasaDok" value="<? echo $JasaDok; ?>">
			<input type="hidden" name="JasMed" value="<? echo $JasMed; ?>">
			<input type="hidden" name="JasRad" value="<? echo $JasRad; ?>">
			<input type="hidden" name="JasaSar" value="<? echo $JasaSar; ?>">
           <input type="hidden" name="BhpAlkes" value="<? echo $BhpAlkes; ?>">
           <input type="hidden" name="BhpNonAlkes" value="<? echo $BhpNonAlkes; ?>">
		              <input type="hidden" name="JasaKirim" value="<? echo $JasaKirim; ?>">
		</div>
        </div>        </TD>
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
   <td colspan="3" bgcolor="#000000"><div align="center">
     <input  name="sdd"  type="submit" class="style1" value="Ganti"  disabled="disabled"> 
<?
	if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
	 
	$dkjfdkfdl = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$x[MstKey]'");
	$bp = mysql_fetch_array($dkjfdkfdl);
	//
	
	//
	?><? } ?>
 <input name="dfdff" type="button" class="style1"  onClick="location.href='33cf.php?MstKey=<? 
   echo $MstKey; ?>&id=<? echo $id; ?>&IdStruk=<? echo $IdStruk; ?>&IdSt=<? echo $IdSt;   ?>';" value="Hapus"> 
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
