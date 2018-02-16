<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//ela=&var=2&IdJal=&KodeDokter=5&hari=ok&id=19152
$ela = $_GET["ela"];
$KodeDokter= $_GET["KodeDokter"];
$var  = $_GET["var"];
$IdJal = $_GET["IdJal"];
$hari = $_GET["hari"];
$id = $_GET["id"];
$NamaDokter = $_GET["NamaDokter"];
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
	</script>
<style type="text/css">
<!--
.style2 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style3 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style4 {font-size: 12px}
.style5 {font-size: 10px}
-->
</style></head>
<body bgcolor="#D1B9FE">
<div align="center">
 <table border="0" cellpadding="2" cellspacing="2"> 
<tr bgcolor="#E0DFE3" class="style2">
<td colspan="3"><div align="center" class="style3">
  <div align="center">AMBIL DATA DOKTER</div>
</div></td>
</tr>
 <form  target="_self">
<tr>
<td colspan="3">
<table border="0">
<tr class="style2">
<td>Sort Nama Dokter </td><td>:</td>
<td><input type="text" name="NamaDokter" size="20" maxlength="20" >
 <input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>">
 <input type="hidden" name="IdJal" value="<? echo $IdJal; ?>">
 <input type="hidden" name="var" value="<? echo $var; ?>">
 <input type="hidden" name="ela" value="<? echo $ela; ?>">
  </td>
</tr>
<tr class="style2">
<td colspan="3"><div align="center">
  <input type="submit" class="style2" value=" Sort "  accept="sds">
  <!-- <input type="button" name="cel" value="Tampil Semua" onClick="location.href='jikudoktr.php?hari=<? //echo 'masku'; ?>&id=<? //echo $id; ?>';"> -->
  <input name="kembali" type="button" class="style2" onClick="window.close()" value="Kembali">
</div></td>
</tr>
<input type="hidden" name="hari" value="<? echo $hari; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</table>
</td>
</tr>
</form>
<tr bgcolor="#E0DFE3" class="style2">
<td width="31"><div align="center" class="style4">
  <div align="center">NO</div>
</div></td>
<td width="111"><div align="left"><span class="style4">KODE DOKTER</span></div></td>
<td width="303"><div align="center"><span class="style4">NAMA DOKTER</span></div></td>
</tr><?
$no=1;
 if($NamaDokter !=''){
$datas = mysql_query("SELECT * FROM rujukan WHERE NamaRujukan like '$NamaDokter%'");
}else{
 $datas = mysql_query("SELECT * FROM rujukan "); 
 }
while($ad = mysql_fetch_array($datas)){
if($hari=='masku'){
?>
<tr onClick="location.href='leboke2.php?KeyIDX=<? echo $KeyIDX; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $ad[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? }elseif($hari=='ok'){ ?>
<tr onClick="location.href='leboke2.php?KeyIDX=<? echo $KeyIDX; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $ad[id]; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? }else{ } ?>
<td><div align="center" class="style2"><? echo $no; ?></div></td>
<td><div align="center" class="style2"><? 
if($hari=='masku'){ ?>
<A href="leboke2.php?var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $ad[id]; ?>&id=<? echo $id; ?>" style="text-decoration:none "><? echo $ad[id]; ?></A>
<? }elseif($hari=='ok'){ ?>
<A href="leboke2.php?var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $ad[id]; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>" style="text-decoration:none "><? echo $ad[id]; ?></A>
<? }else{  } ?>
</div></td>
<td><div align="left" class="style2"><? echo $ad[NamaRujukan]; ?></div></td>
</tr>
<?
$no++;
}
?>
<tr bgcolor="#E0DFE3">
<td colspan="3"><span class="style5">.</span></td>
</tr>
</table>
 </div>
</body>
 </html>
  