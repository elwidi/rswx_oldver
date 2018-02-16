<?php  
session_start();
include "../konek.php";
// include "../ceke.php";
// include "../y23.php";
 ?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
 <style type="text/css">
<!--
.style2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
-->
 </style>
 </head>
 <body>
 <div align="left">
 <table>
 <tr>
 <td>Nama</td><td>:</td><td><div align="left">
 <input type="text" name="Nama" maxlength="120" size="34" />
 <input type="submit" value="Submit" name="fgfg" />
 <input  type="button" name="fgf3" value="Tambah Data"   onClick="wCompare334 = window.open('4e.php', 
  'wCompare334', 'width=680,height=300,left=470,Top=140, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare334.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style2"></div></td>
 </tr>
<tr valign="top">
<td colspan="3"><div align="left">
 <table border="1">
<tr>
<td width="20">No</td>
<td width="92">User</td>
<td width="122">Nama</td>
<td width="274">Bagian</td>
<td width="72">Level</td>
</tr>
<?
$no=1;
 $naman= mysql_query("SELECT * FROM konco ORDER BY Nama LIMIT 0,100");
 while($tp = mysql_fetch_array($naman)){ 
?>
<tr valign="top"  onClick="wCompare = window.open('d5e.php?id=<?php  echo $tp[id]; ?>', 
  'wCompare', 'width=580,height=400,left=370,Top=134,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo $tp[User]; ?></div></td>
<td><div align="left"><? echo $tp[Nama]; ?></div></td>
 <td><div align="left"><?php      $kkdkdkkd2 = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$tp[KodeBagian]'");
  $bb2 = mysql_fetch_array($kkdkdkkd2);
  echo ucfirst(strtolower($bb2[NamaBagian])); ?></div></td> 
  <td><div align="center"><?
  echo $tp[Level]; ?></div></td>
</tr>
<?
$no++; } ?>
</table>
</div></td>
</tr> 
</table>
 </div>
 </body>
 </html>