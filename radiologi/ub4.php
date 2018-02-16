<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$kdjfkdjfkd = mysql_query("SELECT * FROM TarifRad WHERE id='$id'");
$ii = mysql_fetch_array($kdjfkdjfkd);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 ?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="window-er4.php?NamaBiaya=<? echo $NamaBiaya; ?>&se=<? echo $se; ?>&ha=<? echo $ha; ?>";
self.close();
//-->
} 
</SCRIPT>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px; color:#000000
}
.style35 {
	font-size: 16;
	color: #FFFFFF;
}
-->
</style>
</head> 
<body bgcolor="#999999">
<div align="center">
    <table border="0" cellpadding="2" cellspacing="2">

    <tr>
      <td valign="top"><div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
		 <tr>
		 <td colspan="3" valign="top">
		 <table width="474" border="1">
		 <tr>
		  <td width="464" colspan="3" bgcolor="#000000"><div align="center" class="style35">
		  YAKIN DATA INI AKAN DI HAPUS?
		  <br>
		  <!-- <a href="ub2.php?id=<? // echo $id; ?>" style="text-decoration:none">YA</a> -->
		  <input type="button" value="YA" name="dfdf"  onClick="location.href='f_Fq.php?id=<? echo $id; ?>';">
		  || 
		  <!-- <a href="ub.php?id=<? // echo $id; ?>" style="text-decoration:none">TIDAK</a> -->
		  <input type="button" name="dffg" value="Tidak"  onClick="window.close()">
		  </div></td>
		  </tr>
		 </table>
		 </td>
		 </tr> 
            <tr>
              <td width="135">KODE BIAYA</td>
              <td width="3"><strong>:</strong></td>
              <td width="244"><div align="left">
                 <? echo $ii[KodeBiaya]; ?>
              </div></td>
            </tr>
            <tr>
              <td>NAMA BIAYA</td>
              <td><strong>:</strong></td>
              <td><div align="left">
               <? echo $ii[NamaBiaya]; ?>
              </div></td>
            </tr>
             
            
            <tr>
              <td colspan="3" bgcolor="#9966CC"><div align="center">
&nbsp; 			  </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
  </div>
</body>
</html>
<?
}else{
header("Location:../keluar.php");
}
?>