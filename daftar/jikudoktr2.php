<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $var  = $_GET["var"];
$IdJal = $_GET["IdJal"];
$hari = $_GET["hari"];
 $ela = $_GET["ela"];
$var = $_GET["var"];
$IdJal = $_GET["IdJal"];
$masku = $_GET["masku"];
$id = $_GET["id"];
$KodeDokter = $_GET["KodeDokter"];
$KodeRujuk = $_GET["KodeRujuk"];
$KeyID = $_GET["KeyID"];
$KodeBag = $_GET["KodeBag"];
$NamaDokter = $_GET["NamaDokter"];
?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC00';
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
.style6 {color: #FFFFFF}
.style7 {font-size: 12px; color: #FFFFFF; }
-->
</style></head>
<body bgcolor="#CCCCCC">
<div align="center">
 <table border="0" cellpadding="2" cellspacing="2" >
<tr bgcolor="#996600" class="style2">
<td colspan="3"><div align="center" class="style3">
  <div align="center" class="style6">AMBIL   DOKTER</div>
</div></td>
</tr>
 <form  target="_self">
<tr>
<td colspan="3">
<table border="0">
<tr class="style2">
<td>Sort Nama Dokter </td><td>:</td>
<td><input name="NamaDokter" type="text" class="style2" size="20" maxlength="20" >
 <input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>">
 <input type="hidden" name="IdJal" value="<? echo $IdJal; ?>">
 <input type="hidden" name="var" value="<? echo $var; ?>">
 <input type="hidden" name="ela" value="<? echo $ela; ?>">  </td>
</tr>
<tr class="style2">
<td colspan="3"><div align="center">
  <input type="submit" class="style2" value=" Sort "  accept="sds">
  <!-- <input type="button" name="cel" value="Tampil Semua" onClick="location.href='jikudoktr2.php?hari=<? //echo 'masku'; ?>&id=<? //echo $id; ?>';"> -->
</div></td>
</tr>
<input type="hidden" name="hari" value="<? echo $hari; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</table></td>
</tr>
</form>
<tr bgcolor="#996600" class="style2">
<td width="31"><div align="center" class="style7">
  <div align="center">NO</div>
</div></td>
<td width="111"><div align="center" class="style6"><span class="style4">KODE DOKTER</span></div></td>
<td width="303"><div align="center" class="style6"><span class="style4">NAMA DOKTER</span></div></td>
</tr><?
$no=1;
if($NamaDokter !=''){
$data2 = mysql_query("SELECT * FROM dokter WHERE NamaDokter like '$NamaDokter%'");
}else{
 $data2 = mysql_query("SELECT * FROM dokter");
 }
while($ad = mysql_fetch_array($data2)){
if($ad[Stap]==1){
?><tr bgcolor="#FF9933"><?
}elseif($hari=='masku'){
?>
<tr onClick="location.href='leboke2.php?KodeRujuk=<? echo $KodeRujuk; ?>&KeyIDX=<? echo $KeyID; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $ad[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? }elseif($hari=='ok'){ ?>
<tr onClick="location.href='leboke2.php?KodeRujuk=<? echo $KodeRujuk; ?>&KeyIDX=<? echo $KeyID; ?>&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $ad[id]; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<? }else{ } ?>
<td><div align="center" class="style2"><? echo $no; ?></div></td>
<td><div align="center" class="style2">
<? if($hari=='masku'){ ?>
<a href="leboke2.php?var=<? echo $var; ?>IdJal=<? echo $IdJal; ?>&KodeDokter=<? echo $ad[id]; ?>&id=<? echo $id; ?>" style="text-decoration:none "><? echo $ad[id]; ?></a>
<? }elseif($hari=='ok'){ ?>
<a href="leboke2.php?var=<? echo $var; ?>IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $ad[id]; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>" style="text-decoration:none "><? echo $ad[id]; ?></a>
<? }else{ } ?>
</div></td>
<td><div align="left" class="style2"><? echo $ad[NamaDokter]; ?></div></td>
</tr>
<?
$no++;
}
?>
<tr bgcolor="#996600">
<td colspan="3"><span class="style5">.</span></td>
</tr>
</table>
</div>
</body>
 </html>
  