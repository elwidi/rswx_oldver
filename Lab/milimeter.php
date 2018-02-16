<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $har = $_GET["hari"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?><html>
<head>
<style type="text/css">
<!--
.style6 {font-family: Arial, Helvetica, sans-serif;font-size: 12px; color:#000000}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#FFFFFF }
.style13 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #FFFFFF; }
.style14 {color: #FFFFFF}
.style15 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.style16 {color: #FFFFFF; font-weight: bold; }
-->
</style><script language="JavaScript">
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
</head>
<body>
<div align="center">
<table border="0" cellpadding="1" cellspacing="2">
<tr bgcolor="#9966CC">
<td width="24" height="22" bgcolor="#333333"><span class="style13">NO</span></td>
<td width="177" bgcolor="#333333"><span class="style13">KODE LAB</span></td>
<td width="329" bgcolor="#333333"><span class="style13">NAMA BIAYA</span></td>
<td width="72" bgcolor="#333333"><div align="right" class="style14"><span class="style15">HARGA</span></div></td>
</tr>
<?
$cek_ck = mysql_query("SELECT RegId FROM kwitansirj WHERE RegId ='$RegId'");
$ssS = mysql_fetch_array($cek_ck);

$nni = 1;
$hjh = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$RegId'");
while($ss = mysql_fetch_array($hjh)){ 
////
///$flkflklfg = mysql_query("SELECT id FROM LabRujukan WHERE IdTx='LR.$ss[id]'");
//$mb =mysql_fetch_array($flkflklfg);
///
if($mb[id]){
?>
<tr  <?
if($iin==$ss[id]){ ?>  <? }else{  
?>  onClick="location.href='milimeter.php?hari=<? echo $hari; ?>&RegId=<? echo $ss[RegId]; ?>&iin=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?> bgcolor="#FF9966" class="style6" >
<? 
}elseif($ssS[RegId]){
?>
<tr> 
<? 
}else{ //jajan_terus.php
?> <tr  <?
if($iin==$ss[id]){ ?>  bgcolor="#FFFF00"<? }else{  
?>  onClick="location.href='milimeter.php?hari=<? echo $hari; ?>&RegId=<? echo $ss[RegId]; ?>&iin=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?> class="style6" >
<? } ?>
<td><div align="center"><? echo " $nni";  ?></div></td>
<td><div align="left"><? 
$DtBiaya = mysql_query("SELECT * FROM tabelbiayax WHERE id='$ss[IdBiaya]'");
$pk = mysql_fetch_array($DtBiaya);
echo strtoupper($pk[KodeBiaya]);
?></div></td>
<?
if($iin==$ss[id]){ ?>
<td colspan="2"><div align="left"> <a  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="jajan_terus.php?hari=<? echo $hari; ?>&id=<? echo $hari; ?>&RegId=<? echo $ss[RegId]; ?>&iin=<? echo $ss[id]; ?>" style="text-decoration:none">HAPUS</a> || 

 <!-- <? /* <a href="#"  onClick="wCompare = window.open('nuy2.php?hari=<? echo $hari; ?>&IdTx=<? echo $ss[id]; ?>', 
  'wCompare', 'width=580,height=400,left=450,Top=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">RUJUK</a> */ ?>--> </div></td>
<? }else{  
?><td><div align="left"><? echo strtoupper($ss[NamaBiaya]);   ?></div></td>
<td><div align="right"><? echo number_format($ss[Harga]); 
$tHarga= $tHarga + $ss[Harga];
?></div></td>
<? } ?></tr>
<? $nni++; } ?>
<tr bgcolor="#9966CC" class="style8">
<td colspan="3" bgcolor="#333333"><div align="center" class="style16">TOTAL</div></td>
<td bgcolor="#333333"><div align="right" class="style16"><? echo number_format($tHarga); ?></div></td>
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