<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$sjhdjshdjsds = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$ii = mysql_fetch_array($sjhdjshdjsds);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){

?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color:#333333
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color:#333333
}
.style5 {color: #FFFF00; font-weight: bold; }
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color:#000000
}
-->
</style>
</head>
<body  bgcolor="#333333">

<div align="left">
<form action="r4.php">
  <table border="1" bgcolor="#FFFFFF">
    <tr class="style2">
      <td width="388" colspan="3" bgcolor="#D4D0C8"><div align="center">
        TAMBAHKAN KARTU PASIEN<br />
        REC : <?
echo "#$id";
?>
      </div></td>
    </tr>
    <tr valign="top">
      <td colspan="3">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="154">NO RM</td>
      <td width="8"><span class="style5">:</span></td>
      <td width="211"><div align="left"><? echo $ii[NoPasien]; ?></div></td>
      </tr>
            <tr>
              <td>NAMA PASIEN</td><td><span class="style5">:</span></td><td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
      </tr>
            <tr>
              <td bgcolor="#990000">PENJAMIN UTAMA</td><td bgcolor="#990000"><span class="style5">:</span></td><td bgcolor="#990000"><div align="left"><?
  $juj = mysql_query("SELECT NamaPer FROM dataperusahaan WHERE id='$ii[KodePer]'");
  $n= mysql_fetch_array($juj);
  echo strtoupper($n[NamaPer]);
//  echo $ii[KodePer];
  ?></div></td>
      </tr>
            <tr>
              <td>PENJAMIN TAMBAHAN </td>
        <td><span class="style5">:</span></td>
        <td><div align="left">
          <select name="KodePer" class="style9">
             <?
$kkddjdjd  =  mysql_query("SELECT id FROM dataperusahaan Order by NamaPer");
while($xp =  mysql_fetch_array($kkddjdjd)){
?>
            <option value="<? echo $xp[id]; ?>">
              <? 
$kjdjd = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$xp[id]'");
$vk = mysql_fetch_array($kjdjd);
echo strtoupper($vk[NamaPer]);
?>
              </option>
            <? } ?>
            </select>
			<input type="hidden" name="id" value="<? echo $id; ?>">

			</div></td>
      </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#000066">
			  <div align="left">
			  <input type="submit" value="Update" name="fgfg" class="style9">
			  <?
			  $kjkdfd  = mysql_query("SELECT COUNT(id) AS kk FROM AssPasien WHERE IdPasien='$id'");
			  $hpo = mysql_fetch_array($kjkdfd);
			  ?>
			  <input type="button" name="dfkdf"	 value="Cek Data SET : <? echo $hpo[kk]; ?>" 
			   onClick="window.open('er7.php?id=<? echo $id; ?>','mywindow6','width=650,height=300,left=10,top=5,screenX=100,screenY=100')" class="style9">
			  <input type="button" name="fggf" value="Tutup" onClick="window.close()" class="style9">
			  </div>
			  </td>
            </tr>
          </table>
      </div>      </td>
    </tr> 
  </table>
  </form>
</div>
</body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>

