<?
session_start();
include "../konek.php";
include "../ceke.php";
$badak = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$b = mysql_fetch_array($badak);
if(!$b[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==1){
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
 </style>
 </head>
 <body>
 <div align="left">
 <form action="iak8.php">
 <table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
 <td colspan="3"><div align="left" class="style1">
 Update Tanggal Pesan Daftar <br>
 </div></td>
 </tr>
 
 <tr>
 <td width="65">Tgl Asli</td>
 <td width="6">:</td>
 <td width="315"><div align="left">
 <input name="TglMasuk" type="text" class="style1" value="<? echo $b[TglMasuk]; ?>"  size="2" maxlength="2" />
-
 <input name="BlnMasuk" type="text" class="style1" value="<? echo $b[BlnMasuk]; ?>"  size="2" maxlength="2" />
-
 <input name="ThnMasuk" type="text" class="style1" value="<? echo $b[ThnMasuk]; ?>"  size="4" maxlength="4" />
 <input type="hidden" name="id" value="<? echo $id; ?>">
 </div></td>
 </tr>
  <tr>
 <td colspan="3"> <div align="left">Akan diUpdate Oleh:
  <?
 echo $a[User];
 ?>
   </div></td>
  </tr>

 <tr>
 <td colspan="3">&nbsp;</td>
 </tr>
 <tr>
 <td colspan="3"><div align="left">
 <input type="submit" value="Simpan" name="fgfg" />
 <input type="button" name="fgfg" value="Selesai" onClick="window.close()" />
 </div></td>
</tr>
 </table>
 </form>
 </div>
 </body>
 </html>
 <?
}
?>