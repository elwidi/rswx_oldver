<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $ikan  = $_GET["ikan"];
 if($a[Level]==12){
 ?>
  <html>
 <head><style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style11 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
 <body>
 <div align="center">
 <table bgcolor="White" border="0" cellpadding="2" cellspacing="2">
  <tr>
 <td height="21" colspan="11" bgcolor="#FFFFFF"><div align="center">
              <SPAN class="style11">
 LIST DATASUB SUB ITEM LAB </SPAN>
      </div></td>
 </tr>
  <tr bgcolor="Silver">
<td width="22" bgcolor="#FFFF99">
            <SPAN class="style3">NO</SPAN>      </td>
		  <td bgcolor="#FFFF99" class="style3">ID</td>
		  <td width="71" bgcolor="#FFFF99">
            <SPAN class="style3">NAMA BIAYA</SPAN>          </td>
		  <TD width="38" bgcolor="#FFFF99">
            <SPAN class="style3">HASIL</SPAN>          </TD>
		  <td width="205" bgcolor="#FFFF99">
            <SPAN class="style3">NILAI NORMAL</SPAN>          </td>
		  <td width="35" bgcolor="#FFFF99">
            <SPAN class="style3">MAXP</SPAN>          </td>
		  <td width="46" bgcolor="#FFFF99">
            <SPAN class="style3">MAXW</SPAN>          </td>
		  <td width="58" bgcolor="#FFFF99">
            <SPAN class="style3">MINP</SPAN>          </td>
		  <td width="105" bgcolor="#FFFF99">
            <SPAN class="style3">MINW</SPAN>          </td>
		  <td width="51" bgcolor="#FFFF99">
            <SPAN class="style3">SATUAN</SPAN>          </td>
<td width="41" bgcolor="#FFFF99">
            <SPAN class="style3">LEVEL</SPAN>      </td>
 </tr>
 <?
 
  $ddat = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$id-$del' ORDER BY id");
  while($as = mysql_fetch_array($ddat)){
  ?>
 <tr onClick="location.href='bahan_bakar_airxD.php?del=<? echo $as[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td><div align="center"  class="style3"><? echo $no; ?></div></td>
<td class="style3"><? echo "#$as[id]"; ?></td>
 <td><div align="left" class="style3"><? echo $as[NamaBiaya]; ?></div></td>
 <td><div align="left"  class="style3"><? echo $as[Hasil]; ?></div></td>
 <td><div align="left"  class="style3"><? echo $as[NilaiNormal]; ?></div></td>
 <td><div align="left"  class="style3"><? echo $as[MaxP]; ?></div></td>
 <td><div align="left"  class="style3"><? echo $as[MaxW]; ?></div></td>
 <td><div align="left"  class="style3"><?  echo $as[MinP]; ?></div></td>
 <td><div align="left"  class="style3"><? echo $as[MinW]; ?></div></td>
<td><div align="left"  class="style3"><? echo $as[Satuan]; ?></div></td> 
<td><div align="left"  class="style3"><? echo $as[Level]; ?></div></td>
<?
if($nv_ct==2){
?>
<td><div align="left"><?
$isak = mysql_query("INSERT INTO `sublab` (`id`,`IdBiaya`,`Kelompok`,`NamaBiaya`,`Hasil`,`Level`,`NilaiNormal`,`MaxP`,`MaxW`,`MinP`,`MinW`)
 VALUES (NULL,'$id','$as[Kelompok]','$as[NamaBiaya]','$as[Hasil]','$as[Level]','$as[NilaiNormal]','$as[MaxP]','$as[MaxW]','$as[MinP]','$as[MinW]')");
 if($isak){
 echo "OK";
 }else{
 echo "SIMPAN DATA GAGAL,....<br>";
 }?></div></td>
<? 
}
?>
</tr>
 <? $no++; } ?>
<tr bgcolor="Silver"><TD colspan="11" bgcolor="#FFFF99"><div align="center"><?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 ){ }else{
?><a href="nasi_pecl.php?hari=6&id=<? echo $id; ?>" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">HAPUSI TEM</a><? } ?></div></TD>
</tr>
 </table>
 </div>
 </body>
 </html>
 <? 
 }else{
 header("Location:./keluar.php");
 }
?>
