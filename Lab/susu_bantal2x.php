<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$bala = $_GET["bala"];
$id = $_GET["id"];
$NoBukti  = $_GET["NoBukti"];
$Dus = $_GET["Dus"];
$NamaBiaya = $_GET["NamaBiaya"];
$arahin = $_GET["arahin"];
$DtPsn = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$a21 = mysql_fetch_array($DtPsn);
if(!$a21[id]){
header("Location:./rambut_gondrong.php");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 ?>
<html>
<head>
<style type="text/css">
<!--
.style2 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style5 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style9 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style12 {font-size: 10px; font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; }
.style14 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style15 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC99';
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
<table width="483" height="135" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bordercolor="#FFCCFF" bgcolor="#FFCCFF" class="style2">
<td colspan="8" bgcolor="#FFFFFF"><div align="center" class="style15">
LIST BIAYA TRANSAKSI
<br>
<? 
$Naba = mysql_query("SELECT NoPasien,NamaPasien,transferKe,NamaPer FROM keluarmasukpasien WHERE id='$id'");
$kk = mysql_fetch_array($Naba);
$xsa = explode("-",$kk[transferKe]);
echo "$kk[NoPasien] / $kk[NamaPasien]<br>";
//kelas
 $hhj = mysql_query("SELECT KodeKelas,NamaKelas,NamaRuangan FROM ruangan where id='$xsa[0]'");
 $bua=mysql_fetch_array($hhj);
 echo "$bua[NamaRuangan] ($bua[KodeKelas])";
 if($bua[KodeKelas]=='2'  || $bua[KodeKelas]=='3' ){
 $kuci = "%-1"; 
 }elseif($bua[KodeKelas]=='I'  || $bua[KodeKelas]=='UT' ){
 $kuci = "%-2"; 
  }elseif($bua[KodeKelas]=='IIB'){ 
$kuci = "%-3"; 
}elseif($bua[KodeKelas]=='III'){
 $kuci = "%-4"; 
 }else{
$kuci = "%"; 
 }
//echo $kuci;
?></div></td>
</tr>
 <TR bgcolor="#ECE9D8" class="style5">
<TD width="23" bgcolor="#D4D0C8"><span class="style14">NO</span></TD>
   <td width="232" bgcolor="#D4D0C8"><span class="style14">NAMA BIAYA</span></td>
 <td width="66" bgcolor="#D4D0C8"><div align="right"><strong><span class="style5">HARGA</span></strong></div></td>
   <td width="55" bgcolor="#D4D0C8"><span class="style14">ITEM KMP</span></td>
   <td bgcolor="#D4D0C8"><strong>SELISIH</strong></td>
 </TR>
<?
$no=1;
    $datas= mysql_query("SELECT * FROM tabelbiayax WHERE NamaBiaya LIKE '$NamaBiaya%'  LIMIT 0,100");
 while($as = mysql_fetch_array($datas)){
?> 
 <tr onClick="location.href='kakusU.php?NoBukti=<? echo $NoBukti; ?>&KodeDokter=<? echo $as21[KodeDokter]; ?>&id=<? echo $id; 
?>&IdBiaya=<? echo $as[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
class="style5">
  <td><div align="center" class="style9 style12"><span class="style12"><? echo $no; ?></span></div></td>
  <td><div align="left" class="style12"><? echo strtoupper($as[NamaBiaya]);   ?></div></td>
  <td><div align="right" class="style12"><? echo number_format($as[Harga]); ?></div></td>
  <td><div align="center" class="style12"><?
 $hjp= mysql_query("SELECT COUNT(id) AS jj FROM sublab WHERE IdBiaya='$as[id]'");
 $uio = mysql_fetch_array($hjp);
 echo $uio[jj];
?></div></td>
<td><div align="right"><? if($Sel!=0){ ?><font color="#FF0000"><b><i><? echo number_format($Sel); ?></i></b></font><? 
}else{
echo ".";
} ?></div></td>
</tr>
<? $no++; } ?>
<tr bgcolor="#ECE9D8">
<td colspan="8" bgcolor="#D4D0C8">&nbsp;</td>
</tr>
</table>
</div>
</body>
</html>
<?
}else{
 echo "MAAF ANDA ADALAH USER LEVEL,...$a[level],...Jadi Tidak memiliki akses ,...KE HALAMAN INI,...<BR>";
?>
<a href="index.php">Kembali</a>
<?
  } 
?> 