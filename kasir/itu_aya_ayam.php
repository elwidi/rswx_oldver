<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$id = $_GET [ "id" ];
  $MstKey = $_GET["MstKey"];
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==5 || $a[Level]==16){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style2 {font-size: 12px}
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style4 {font-size: 10px}
.style5 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; }
.style6 {color: #000000}
.style7 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #000000; }
-->
</style>
</head>
<body>

<div align="left">
  <table width="700" height="84" border="0" cellpadding="2" cellspacing="2">
    <tr  bgcolor="#FFCCCC">
      <td width="21" bgcolor="#60BC59"><span class="style7">NO</span></td>
    <td width="54" bgcolor="#60BC59"><span class="style7">NO STRUK</span></td>
    <td width="118" bgcolor="#60BC59"><span class="style7">DOKTER</span></td>
    <td width="165" bgcolor="#60BC59"><span class="style7">BAGIAN</span></td>
    <td width="57" bgcolor="#60BC59"><span class="style7">TGL</span></td>
     <td width="72" bgcolor="#60BC59"><div align="center" class="style6"><span class="style3">USER</span></div></td>
<td width="169" bgcolor="#60BC59"><div align="center" class="style6">
  <div align="left"><span class="style3">BAGIAN</span></div>
</div></td>
    </tr>
    <?
$nax=1;
 $nno = mysql_query("SELECT * FROM datastruk WHERE MstKey='$MstKey'  AND KodeBagian!='x'  ORDER BY id desc");
  while($f = mysql_fetch_array($nno)){
 
?><tr> 
        
      <td><div align="center" class="style1 style4"><? echo $nax; ?></div></td>
    <td><div align="left" class="style5"><? echo "#MM-$f[id]"; ?></div></td>
    <TD><div align="left" class="style5"><? echo $f[NamaDokter]; ?></div></TD>
    <TD><div align="left" class="style5"><? echo ucfirst(strtolower($f[NamaBagian])); ?></div></TD>
    <td><div align="left" class="style5"><? echo "$f[Tgl]/$f[Bln]$f[Thn]"; ?></div></td>
      <td><div align="center" class="style5"><? echo $f[Opr]; ?></div></td>
	  <td><div align="left" class="style5"><?
	  $kdkdjdk = mysql_query("SELECT KodeBagian FROM konco WHERE Nama='$f[Opr]'");
	  $sf =  mysql_fetch_array($kdkdjdk);
	  $jsujs = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$sf[KodeBagian]'");
	  $yhk = mysql_fetch_array($jsujs);
	  echo ucfirst(strtolower($yhk[NamaBagian]));
	  ?></div></td>
    </tr>
    <? $nax++; } ?>
    <TR  bgcolor="#FFCCCC">
      <TD colspan="7" bgcolor="#60BC59">&nbsp;</TD>
    </TR>
  </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>