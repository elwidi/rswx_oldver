<?
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
$NamaDokter = $_GET["NamaDokter"]; $NamaPer = $_GET["NamaPer"];
?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
 .style5 {font-size: 10px}
.style6 {font-family: Arial, Helvetica, sans-serif}
.style7 {font-size: 10pxcolor: #000000}
.style8 {font-size: 10px;font-family: Arial, Helvetica, sans-serif; color: #000000; }
-->
</style></head>
<body bgcolor="#D1B9FE">
<div align="center">
 <table border="0" cellpadding="2" cellspacing="2"  >
<tr bgcolor="#E0DFE3" class="style2">
<td colspan="3"><div align="center" class="style3">
  <div align="center">AMBIL DATA ASSURANSI </div>
</div></td>
</tr>
<form  target="_self">
<tr>
<td colspan="3">
<table border="0">
<tr class="style2">
<td>Sort Nama Ass</td><td>:</td>
<td><input type="text" name="NamaPer" size="20" maxlength="20" >
<input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>">
<input type="hidden" name="KodeRujuk" value="<? echo $KodeRujuk; ?>">
<input type="hidden" name="IdJal" value="<? echo $IdJal; ?>">
<input type="hidden" name="var" value="<? echo $var; ?>">
<input type="hidden" name="ela" value="<? echo $ela; ?>">
 </td>
</tr>
<tr class="style2">
<td colspan="3"><div align="center">
  <input type="submit" class="style2" value=" Sort "  accept="sds">
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
<td width="31"><div align="center" class="style7">
  <div align="center">NO</div>
</div></td>
<td width="111"><div align="center"><span class="style7">KODE PER</span></div></td>
<td width="303"><div align="left"><span class="style7">NAMA PER</span></div></td>
</tr><?
$no=1;
if($NamaPer !=''){
$datas = mysql_query("SELECT * FROM dataperusahaan WHERE NamaPer like '$NamaPer%'");
}else{
 $datas = mysql_query("SELECT * FROM dataperusahaan LIMIT 0,50");
 }
while($ad = mysql_fetch_array($datas)){
?>
<tr class="style7" onClick="location.href='leboke2.php?pala=33&ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KodeRujuk=<? echo $KodeRujuk; ?>&KodeDokter=<? echo $KodeDokter; ?>&KeyIDX=<? echo $ad[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center" class="style6 style7"><? echo $no; ?></div></td>
<td><div align="center" class="style8 style6 style7">
 <? echo $ad[id]; ?> </div></td>
<td><div align="left" class="style8 style6 style7"><? echo strtoupper($ad[NamaPer]); ?></div></td>
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
  