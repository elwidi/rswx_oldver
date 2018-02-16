<?
session_start();
include "../konek.php";
 include "../ceke.php";
include "../alamat.php";
 $jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
//
 $kdfkdfkdf  = mysql_query("SELECT * FROM pecah_kwt WHERE IdKwt='$id'");
$yak = mysql_fetch_array($kdfkdfkdf);
//
?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<form action="i_001.php">
<table border="1">
<tr>
<td width="437" colspan="3"><div align="left" class="style1">
HALANAN UPDATE
</div></td> 
</tr>
<tr>
<td colspan="3" valign="top">
<table width="449" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
    <td>Jaminan</td>
    <td>:</td>
    <td><div align="left">
      <input type="text" name="Jaminan" size="14" maxlength="14" value="<? echo $yak[Jam]; ?>" />
    </div></td>
  </tr>
  <tr>
    <td>Pribadi</td>
    <td>:</td>
    <td><div align="left">
      <input type="text" name="NonJaminan" size="14" maxlength="14" value="<? echo $yak[NonJam]; ?>" />
	  <input type="hidden" name="id" value="<? echo $id; ?>">
	  <input type="hidden" name="param" value="<? echo $param; ?>">
	  
    </div></td>
  </tr>
 <tr>
 <td>Jenis</td>
 <td>:</td><td><div align="left">
 <? echo ucfirst(strtolower($param)); ?>
 </div></td>
 </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="submit" value="Update" name="fgfgf" class="style2">
	<input type="button" name="dfdfd" value="Selesai" onClick="window.close()">
	</div></td>
    </tr>
</table></td> 
</tr>
</table> 
</form>
<?
}else{

}
?>