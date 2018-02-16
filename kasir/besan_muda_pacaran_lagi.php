<?
session_start();
include "../konek.php";
include "../ceke.php";
 $NamaDokter= $_GET["NamaDokter"];
$id = $_GET["id"];
$ikan = $_GET["ikan"];
$KodeDokter  = $_GET["KodeDokter"];
$IdDept = $_GET["IdDept"];
$kjkdjkdfd_dfd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($kjkdjkdfd_dfd);
if(!$x[id]){
echo "RECORD SET DATA TIDAK DIKENAL";
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==16){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style24 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#CCCCCC'
	}
	//-->
	</script>
</head>
<body>

<div align="left">
  <table width="883" border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF">
    <tr>
    <td colspan="3"><div align="center" class="style1">
      <div align="left">MEMBUAT STRUK TRANSAKSI RAWAT INAP<br>
            <? 
echo "$x[MstKey]";
?>
        </div>
    </div></td>
    </tr>
    <tr>
      <td height="23" colspan="3"><span class="style2">.</span></td>
    </tr><?
	if($KodeDokter>0 && $IdDept>0){
	?><form action="nola_anak_baik.php"> 
	<?
	}else{
	
	} ?>
	 <?
	 $nah = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$KodeDokter'");
	  $ta = mysql_fetch_array($nah);
	   if($IdDept>0 && $KodeDokter>0){
	?>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style2">
	<td width="215" >NAMA DOKTER</td>
	<td width="3">:</td>
	<td width="438"><div align="left">
	<?
	echo strtoupper($ta[NamaDokter]);
	?>
	</div></td>
	</tr>
	<tr class="style2">
	<td>BAGIAN</td><td>:</td><td><div align="left"><?
	$tea = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$IdDept'");
	$trp = mysql_fetch_array($tea);
	echo strtoupper($trp[NamaBagian]);
	?>
	<input type="hidden" name="IdDept" value="<? echo $IdDept; ?>">
	<input type="hidden" name="IdDokter" value="<? echo $KodeDokter; ?>">
	<input type="hidden" name="id" value="<? echo $id; ?>">
	</div></td>
	</tr>
	<tr>
	<td colspan="3"><div  align="left">&nbsp;</div></td>
	</tr>
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<input type="submit" value="Proses" name="dfdf">
	<input type="button" name="ghghg"  value="Kembali" onClick="location.href='besan_muda_pacaran_lagi.php?id=<? echo $id; ?>';">
	</div>
	</td>
	</tr>
</table>
</div>
</td>
</tr>
	<?  
	  }elseif($KodeDokter>0 && !$IdDept){
	  ?>
	  <form target="_self">
	  <tr class="style2">
	  <td colspan="3"><div align="left">
	  <?
	 
	  echo strtoupper($ta[NamaDokter]);
	  ?>
	  </div></td>
	  </tr>
<tr>
<td colspan="2" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">

  <tr>
	  <td width="167">NAMA SUB/DEP</td><td width="8">:</td><td width="382"><div align="left">
	  <input type="text" name="NamaDept" maxlength="120" size="20">
	  <input type="hidden" name="id" value="<? echo $id; ?>">
	  <input type="hidden" name="KodeDokter" value="<? echo $KodeDokter; ?>">
	  <input type="hidden" name="makan" value="dulu">
      <input type="submit" value="Sort" name="dfdf2">
      <input type="button" name="fgfg2" value="Kembali" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';">	  
	  </div></td> 
	  </tr>
	  <tr>
	  <td colspan="3" valign="top">
	  <div align="left"></div>
	  </td>
	  </tr>
</table>
</div>
</td><td>ff</td>
</tr>
	  </form>
	  <? 
	  }else{
	  ?>
    <tr>
      <td height="23" colspan="2" valign="top">
	  <div align="left">
	  <form target="_self"> 
	  <table border="0" cellpadding="2" cellspacing="2">
	  <tr class="style2">
	  <td width="149">NAMA DOKTER</td><td width="4">:</td><td width="414"><div align="left">
	  <input type="text" name="NamaDokter" maxlength="100" size="20">
	  <input type="hidden" name="ikan" value="2">
	  <input type="hidden" name="id" value="<? echo $id; ?>">
<input type="submit" value="Sort" name="dfdf"> <input type="button" name="fgfg" value="Kembali" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';">
	  </div></td>
	  </tr>
	  <tr>
	  <td colspan="3"><div align="left">
	  <table border="1" bgcolor="#CCCCCC" class="style24">
	  <tr bgcolor="#FF99CC">
	  <td width="23"><strong>NO</strong></td>
	  <td width="33"><strong>#ID</strong></td>
	  <td width="233"><strong>DOKTER</strong></td> 
 	  </tr>
	  <?
	  $ko=1;
	  if($ikan==2){
	  $gaga = mysql_query("SELECT * FROM dokter WHERE NamaDokter LIKE '$NamaDokter%'");
	  }else{
	  $gaga = mysql_query("SELECT * FROM dokter ORDER BY NamaDokter Limit 0,100");
	  }
	  while($aa = mysql_fetch_array($gaga)){
	  ?>
	  <tr
	  onClick="location.href='besan_muda_pacaran_lagi.php?id=<? echo $id; ?>&KodeDokter=<? echo $aa[id]; ?>&IdDept=<? echo $aa[IdBagian]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style24">
	  <td><div align="center"><? echo $ko; ?></div></td>
	  <td><div align="left"><? echo $aa[id]; ?></div></td>
	  <td><div align="left"><? echo strtoupper($aa[NamaDokter]); ?></div></td>
 	  </tr>
 	  <? $ko++; } ?>
	   <tr bgcolor="#FF99CC" class="style24">
	    <td colspan="4">&nbsp;</td>
	    </tr></table>
	  </div></td>
	  </tr>
	  </table>
	  </form>
	  </div>
	  </td>
      <td width="287">.</td>
    </tr>
	<? } ?>
  </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
 ?>
 
 