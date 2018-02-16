<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 ?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style> </head>
 <body>
 <form  target="_self">
<table width="422" border="0" cellpadding="2" cellspacing="2">
 <tr valign="top">
 <td colspan="3">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
<td width="414" colspan="3"><div align="left">
<span class="style1">List Data Tarif</span><br>
User Log : <? echo $a[Nama]; echo "/ $a[Level]"; ?>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="303"><input type="text" name="NamaBiaya"    placeholder="NamaBiaya"  maxlength="120" size="23">
<input type="submit" value="Sort" name="fgfgf">
<input type="button" name="fgfg" value="Kembali" onClick="location.href='../kasir/index.php';"></td>
</tr>
</table>
</div></td>
</tr>
 </table>
 </td> 
 </tr>
 <tr valign="top">
 <td colspan="3"><div align="left">
 <table border="1">
 <tr>
 <td width="28" bgcolor="#F0F0F0"><div align="center"><strong>No</strong></div></td>
<td width="181" bgcolor="#F0F0F0"><strong>Nama</strong></td>
<td width="72" bgcolor="#F0F0F0"><div align="right"><strong>Harga</strong></div></td>
<td width="33">&nbsp;</td>
<td bgcolor="#F0F0F0" colspan="2">Radiologi?</td>
</tr>
<?
$no=1;
$Pjr =strlen($NamaBiaya); 
 if($a[Level]==16 && !$Pjr){
$naman = mysql_query("SELECT * FROM tabelrj WHERE Jns Not Like '1' ORDER BY NamaBiaya LIMIT 0,100");
}elseif($Pjr>1){ 
$naman = mysql_query("SELECT * FROM tabelrj WHERE NamaBiaya Like '%$NamaBiaya%' ");
}else{
$naman = mysql_query("SELECT * FROM tabelrj ORDER BY id Desc limit 0,50 ");
}
while($ii = mysql_fetch_array($naman)){
$gab = $no%2;
if($ii[Jns]==1 && $a[Level]==16){
$warna='  bgcolor="#CC9999"';
}elseif($gab==1){
$warna=' bgcolor="#FFFFCC"';
}else{
$warna='';
} ?>
<tr  <? echo $warna; ?> valign="top" class="style2">
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo $ii[NamaBiaya]; ?></div></td>
<td><div align="right"><?
echo number_format($ii[Harga]);
?></div></td><td><div align="center"><a href="#" style="text-decoration:none"
     onClick="wCompare = window.open('sett_jasa_dokter.php?Tarif=<? echo $ii[id]; ?>', 
  'wCompare', 'top=0,width=580,height=440,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Sett</a></div></td>
	 <td width="35"    onclick="location.href='aasi.php?id=<? echo $ii[id]; ?>';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><div align="center"> 	Ya</div></td>
	 <td width="35"   onclick="location.href='aasi.php?id=<? echo $ii[id]; ?>';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><div align="center">Tdk</div></td>
 </tr>
<? $no++; } ?> </table>
 </div></td>
 </tr>
 

</table>
</form> </body>
 </html>

 