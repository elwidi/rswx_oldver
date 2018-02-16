<?
session_start();
 include "../konek.php";
 include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
  $Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari");
$x = mysql_fetch_array($Bus);
if(!$x[id]){
header("Location:./permen_karet.php");
}
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style12 {font-size: 12px}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
</head>
<body>

<div align="left">
  <table width="337" height="154" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <tr bgcolor="#CDC0FE">
      <td colspan="12"><div align="center" class="style1">
        LIST DATA BIAYA LAB
        <br>BDS KEY : <? echo $NamaBiayak; ?>
      </div></td>
    </tr>
    <tr>
      <td colspan="12">
      <div align="left">&nbsp;</div></td>
    </tr>
    <tr bgcolor="#CDC0FE" class="style4">
      <td width="30"><span class="style9">NO</span></td>
     <td width="164"><span class="style9">NAMA BIAYA </span></td>
      <td width="58"><div align="right"><span class="style9">HARGA</span></div></td>
      <td width="59"><div align="center"><span class="style9">ITM SSTG</span></div></td>
    </tr>
    <?
$nno=1;
$ddat = mysql_query("SELECT * FROM  tabelbiayax WHERE   NamaBiaya like '$NamaBiayak%' LIMIT 0,120");
 while($sa = mysql_fetch_array($ddat)){
$pre = $nno%2;
if($pre==1){
$warna='bgcolor="#FFFF66"';
}else{
$warna='';
}
 ?>
    <tr  <? echo $warna; ?>onClick="location.href='sangar_burung.php?xe=<? echo $sa[id]; ?>&hari=<? echo $hari; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
       <td><div align="center" class="style11 style12"><? echo $nno; ?></div></td>
     <td><div align="left" class="style5"><? echo strtoupper($sa[NamaBiaya]); ?></div></td>
     <td width="58"><div align="right" class="style5"><? echo number_format($sa[Tiga]); ?></div></td>
        
 					<td><div align="center"><?
 $hjp= mysql_query("SELECT COUNT(id) AS jj FROM sublab WHERE IdBiaya='$sa[id]'");
 $uio = mysql_fetch_array($hjp);
 echo $uio[jj];
?></div></td>

    </tr>
    <? $nno++; } ?>
    <tr bgcolor="#CDC0FE">
      <td colspan="10">&nbsp;</td>
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