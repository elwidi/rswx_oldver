<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  ?>
 <html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {color: #000000}
.style11 {
	font-size: 16;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style12 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
 <form  action="Bptalkah.php"> 
 <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bordercolor="#000000"  bgcolor="#FFCCCC">
<td height="52" colspan="3" bgcolor="#FF9933"><div align="center" class="style1 style9 style11">
PROSES JUAL OBAT BEBAS/RESEP LUAR<br>
APOTIK RS YADIKA- BEKASI </div></td>
</tr>
<tr>
<td height="21" colspan="3" bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left" class="style12"> </div></td>
</tr>
<?
if($RegId){
?>
<tr>
<td colspan="3" bordercolor="#EEFFFF" bgcolor="#EEFFFF">
<div align="center">
<?
$pot = explode("-",$RegId);
$ada_apa = mysql_query("SELECT Persen,NamaDepo,id FROM depo WHERE NamaDepo='$pot[0]'");
$xxo = mysql_fetch_array($ada_apa);
echo strtoupper($xxo[NamaDepo]); echo " || "; echo $xxo[Persen]; echo "%";
?>
<input type="hidden" name="RegId" value="<? echo $RegId; ?>">
<input type="hidden" name="Persen" value="<? echo $xxo[Persen]; ?>">
<input type="hidden" name="IdDepo" value="<? echo $xxo[id]; ?>">
  || <a href="Bpkrifai.php" style="text-decoration:none ">RESET</a>
</div>
</td>
</tr><?
}else{
?>
<tr bordercolor="#ECE9D8">
<td colspan="3" bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="center"><span class="style8">TYPE TXN :</span>  
    <select name="IdDepo" class="style8" >
     <option value="">--DEPO--</option>
    <?
$pcar= mysql_query("SELECT * FROM depo ");
while($ws = mysql_fetch_array($pcar)){
?>
    <option value="<? echo $ws[id]; ?>" onClick="location.href='buat_nomer_resep3.php?RL=<? echo $ws[NamaDepo]; ?>';">
    <?
 $kiuj = mysql_query("SELECT NamaDepo FROM depo WHERE id='$ws[id]'");
$dw = mysql_fetch_array($kiuj);
echo strtoupper($dw[NamaDepo]); // echo "($ws[id])";
  ?>
    </option>
    <? } ?>
      </select>
</div></td>
</tr>
<? } ?>
<tr bordercolor="#ECE9D8">
<td width="166" bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left"><span class="style8">NOMER TRANSAKSI</span></div></td><td width="13" bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="center" class="style8">
  <div align="left"><strong>:</strong></div>
</div></td><td width="244" bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left" class="style8"><? echo $RegId; ?>
</div></td>
</tr>

<tr bordercolor="#ECE9D8">
<td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left"><span class="style8">NOMER INDEX</span></div></td><td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="center" class="style8">
  <div align="left"><strong>:</strong></div>
</div></td><td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left" class="style8"><? //echo "#$op[id]"; ?></div></td>
</tr>

<tr bordercolor="#ECE9D8">
<td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left"><span class="style8">ID  RESEP</span></div></td><td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="center" class="style8">
  <div align="left"><strong>:</strong></div>
</div></td><td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left">
  <input name="NoResep" type="text" class="style8" size="20" maxlength="20">
 </div></td>
</tr>
<tr bordercolor="#ECE9D8">
<td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left"><span class="style8">NAMA PASIEN</span></div></td><td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="center" class="style8">
  <div align="left"><strong>:</strong></div>
</div></td>
<td bordercolor="#EEFFFF" bgcolor="#EEFFFF"><div align="left"><span class="style8">
    <input name="NamaPasien" type="text" class="style8" value="" size="20" maxlength="50">
	<input type="hidden" name="Pancing" value="ikan">
 	<input type="hidden" name="RegId" value="<? echo $RegId; ?>">
</span></div></td>
</tr>
<tr bordercolor="#ECE9D8">
<td colspan="3" bordercolor="#EEFFFF" bgcolor="#EEFFFF">&nbsp;</td>
</tr>
 <tr bordercolor="#FFCCCC"  bgcolor="#FFCCCC">
<td colspan="3" bordercolor="#A4FF1B" bgcolor="#FF9933"><div align="center">
  <input name="proes" type="submit" class="style8" value="Proses"> 
<input name="ksjs" type="button" class="style8" onClick="location.href='sulistiono.php';" style="background:#FFFF00" value="Cek Data Belum Lunas" >
<input name="ksjs" type="button" class="style8" onClick="location.href='sulistiono.php?cp=23';" value="Cek Data Lunas"style="background:#CCFFCC">
<input name="kembali" type="button" class="style8" onClick="location.href='index.php';" value="Kembali">
</div></td>
</tr>
 </table>
 </form>
</div>
</body>
</html> 
 <?
   }else{
 header("Location:./keluar.php");
 }?>