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
$NamaDokter = $_GET["NamaDokter"];
$NamaPer = $_GET["NamaPer"];

$dddddata = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$awe = mysql_fetch_array($dddddata);
$tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
$MstKey = "$tgl$bln$thn:$awe[NoPasien]";
$kesa_dhjdf = mysql_query("SELECT id,NoPasien FROM keluarmasukpasien WHERE MstKey='$MstKey'");
$iu_po = mysql_fetch_array($kesa_dhjdf);
if($iu_po[id]){
header("Location:./fito_sayangku.php?makan=jajan&NoPasien=$iu_po[NoPasien]");
}
include "latar.php";
 ?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99CCCC';
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
.style6 {font-family: Arial, Helvetica, sans-serif}
-->
</style></head>
<body bgcolor="#D1B9FE">
<div align="center">
 <table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#E0DFE3" class="style2">
<td colspan="3"><div align="center" class="style3">
  <div align="center">AMBIL DATA BAGIAN 
  <? echo "<br>$MstKey"; ?></div>
</div></td>
</tr>
 <form  target="_self">
<tr>
<td colspan="3">
<table border="0">
<tr class="style2">
<td width="121">Sort Nama Poli </td><td width="19"><div align="center"><em><strong>:</strong></em></div></td>
<td width="212"><input type="text" name="NamaBag" size="20" maxlength="20" >
<input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>">
<input type="hidden" name="IdJal" value="<? echo $IdJal; ?>">
<input type="hidden" name="KodeRujuk" value="<? echo $KodeRujuk; ?>">
<input type="hidden" name="KeyID" value="<? echo $KeyID; ?>">
<input type="hidden" name="var" value="<? echo $var; ?>">
<input type="hidden" name="hari2" value="bojo"> 
<input type="hidden" name="ela" value="<? echo $ela; ?>">
</td>
</tr>
<tr class="style2">
<td colspan="3"><div align="center">
  <input type="submit" class="style2" value=" Sort "  accept="sds">
  <input name="cel" type="button" class="style2" onClick="location.href='asssmi.php?hari=<? echo 'lanang'; ?>&id=<? echo $id; ?>&&var=<? echo $var; ?>';" value="Tampil Semua">
   
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
<td width="111"><div align="center"><span class="style4">KODE BAG </span></div></td>
<td width="303"><div align="center"><span class="style4">NAMA BAG </span></div></td>
</tr><?
$no=1;
  $data2 = mysql_query("SELECT * FROM bagian WHERE NamaBagian like '$NamaBag%' 
 AND NamaBagian NOT LIKE 'poli%' AND id!=1  AND id!=12  AND id!=3  AND id!=11
  AND id!=17  AND id!=14  AND id!=16  AND id!=24  AND id!=25  AND id!=27  AND id!=45  AND id!=62  AND id!=63 AND id!=28 AND id!=44");
   while($a2 = mysql_fetch_array($data2)){
?>
<tr bgcolor="#FFFFFF"  class="style4" onClick="location.href='leboke2.php?ela=<? echo $ela; ?>&var=<? echo $var; ?>&IdJal=<? echo $IdJal; ?>&KeyID=<? echo $KeyID; ?>&KodeBag=<? echo $a2[id]; ?>&KodeRujuk=<? echo $KodeRujuk; ?>&KodeDokter=<? echo $KodeDokter; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td  ><div align="center" class="style6"><? echo $no; ?></div></td>
<td  ><div align="center" class="style6">
<? echo $a2[id]; ?></div></td>
<td  ><div align="left" class="style6"><? echo strtoupper($a2[NamaBagian]);
echo " ($a2[id])"; ?></div></td> 
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
  