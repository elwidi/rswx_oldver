<?
session_start();
include "../konek.php";
include "../ceke.php";
 $dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
 $kaylaIsnaAkmalian = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$z[RegId]'");
 $h3 = mysql_fetch_array($kaylaIsnaAkmalian);
  $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE id='$oni'");
 $nn= mysql_fetch_array($kju);
 
  if($a[Level]==12 && !$h3[id] && $nn[id]){ 

?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
<table border="1">
<tr>
<td width="404" colspan="3"><div align="center" class="style2">
YAKIN DATA INI AKAN DI HAPUS?
<br />
<a href="s_011.php?id=<? echo $id; ?>&oni=<? echo $oni; ?>"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none" >YA</a> || 
<a    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="fo_sk.php?id=<? echo $id; ?>" style="text-decoration:none">TIDAK</a>
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td> 
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="135">NAMA BIAYA</td>
<td width="3">:</td>
<td width="264"><div align="left"><? echo strtoupper($nn[NamaBiaya]); ?></div></td>
</tr>
<tr>
<td>NILAI RUJUKAN</td><td>:</td><td><div align="left"><? echo strtoupper($nn[NilaiNormal]);?></div></td>
</tr>
<tR>
<td colspan="3">&nbsp;</td>
</tR>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}else{

}
?>