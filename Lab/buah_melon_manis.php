<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 ?>
  <html>
 <head><style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style8 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000099;
}
.style9 {color: #990000}
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
 <?
 if($hari==5){
 ?>
 <tr>
 <td colspan="11" bgcolor="#FFCC99"><div align="center" class="style8"><span class="style9">YAKIN DATA INI AKAN DI COPY ?</span><br>
 <a href="lagu.php?nv_ct=2&hari=<? echo $hari; ?>&id=<? echo $id; ?>&id2=<? echo $id2; ?>" style="text-decoration:none ">YA</a>
  || <a href="ikan_goreng.php?id=<? echo $id; ?>"  style="text-decoration:none ">BATAL</a></div></td>
 </tr>
 <? 
 }else{
 ?><tr>
 <td colspan="11"><div align="center">
              <SPAN class="style3">
 LIST DATA SUB ITEM LAB
 </SPAN>
            </div></td>
 </tr>
 <? } ?>
 <tr bgcolor="Silver">
<td width="22">
            <SPAN class="style3">NO</SPAN>
      </td>
		  <td class="style3">ID</td>
		  <td width="71">
            <SPAN class="style3">NAMA BIAYA</SPAN>
          </td><TD width="38">
            <SPAN class="style3">HASIL</SPAN>
          </TD><td width="205">
            <SPAN class="style3">NILAI NORMAL</SPAN>
          </td><td width="35">
            <SPAN class="style3">MAXP</SPAN>
          </td><td width="46">
            <SPAN class="style3">MAXW</SPAN>
          </td><td width="58">
            <SPAN class="style3">MINP</SPAN>
          </td><td width="105">
            <SPAN class="style3">MINW</SPAN>
          </td><td width="51">
            <SPAN class="style3">SATUAN</SPAN>
          </td>
<td width="41">
            <SPAN class="style3">ITEM</SPAN>
      </td>
 </tr>
 <?
 $no=1;
  if($hari==5){
  $ddat = mysql_query("SELECT * FROM sublab WHERE IdBiaya='$id2' ORDER BY id");
 }else{
  $ddat = mysql_query("SELECT * FROM sublab WHERE IdBiaya='$id' ORDER BY id");
 }
 while($as = mysql_fetch_array($ddat)){
 $pre =  $no%2;
 if($pre==1){
$warna='  bgcolor="#D5FDDA"';
}else{
$warna='';
} 
if($hari==6 || $a[Level]==9 ||  $a[Level]==112 || $a[level]==7){
?>
<tr class="style3"  <? echo $warna; ?>   valign="top"> 
<? 
}else{ ?>
 <tr onClick="location.href='bahan_bakar_airx.php?del=<? echo $as[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  <? echo $warna; ?>   valign="top"> 
 <? } ?>
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
<td><div align="left"  class="style3"><? 

 $jkop = mysql_query("SELECT COUNT(id) as jj FROM sublab_2 WHERE IdBiaya='$id-$as[id]'");
 $nbx = mysql_fetch_array($jkop);
 echo $nbx[jj];   //echo "($as[id])";
 ?></div></td>
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
<tr bgcolor="Silver"><TD colspan="11"><div align="center"><?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){ }else{
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
