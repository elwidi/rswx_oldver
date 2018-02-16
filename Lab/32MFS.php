<?
session_start();
 include "../konek.php";
 include "../ceke.php";
if($a[Level]==12){
$xe = $_GET["xe"];
 
 $Bus = mysql_query("SELECT * FROM labumum WHERE id=$id");
$x = mysql_fetch_array($Bus);
//
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE id=$IdCucu");
$vv = mysql_fetch_array($kju);

?>
<html>
<head>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#FFFFCC">
<div align="left">
<form action="e_d.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="404" colspan="3"><div align="center" class="style5">
ISIKAN SUB HASIL<br />
<?
echo strtoupper($vv[NamaBiaya]); 
?>
</div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#FFCC66"><div align="center">
<input name="dffg" type="submit" class="style3" value="Upload Data" style="background:#CCFF99">
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFCCFF" class="style3">
<tr>
<td width="23" bgcolor="#666666"><span class="style4">NO</span></td>
<td width="115" bgcolor="#666666"><span class="style4">NAMA BIAYA</span></td>
<td width="244" colspan="2" bgcolor="#666666"><span class="style4">HASIL</span></td>
</tr><?
 $nomer=1;
$jdkjd998 = mysql_query("SELECT id FROM sublab WHERE NamaBiaya='$vv[NamaBiaya]'");
  $xa = mysql_fetch_array($jdkjd998);
   $jkop = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$vv[Idsublab]-$vv[IdBiaya]'");
  while($sp =  mysql_fetch_array($jkop)){
  //
     $Dimas="$x[id]-$vv[IdBiaya].$sp[id]";
    //
  $jdjdd = mysql_query("SELECT * FROM hasilcuculab3 WHERE Dimas='$Dimas'");
 $wp = mysql_fetch_array($jdjdd);
   if($dimas==$sp[id]){
  ?>
  
  <? 
  }else{?>
  <tr  class="style3">
  <TD><div align="center"><? echo $nomer; ?></div></TD><td><div align="left"><? echo  strtoupper($sp[NamaBiaya]); ?></div></td>
   <td><div align="left">
  <input  name="Hasil_<? echo $sp[id]; ?>" type="text" class="style3" value="<?  if($wp[id]){ echo "$wp[Hasil]"; }else{
  echo $sp[Hasil];} ?>" size="20" maxlength="80"> 
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="IdCucu" value="<? echo "$vv[Idsublab]-$vv[IdBiaya]"; ?>">
    </div></td>
   </tr>

  <? } ?>
  <?
   $bak = $pyt[Kelompok];
 $Ki=$ui[IdBiaya];
  $nomer++; } ?>  <tr  class="style3">
    <TD colspan="3" bgcolor="#666666">&nbsp;</TD>
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
<? 

}else{

}?>