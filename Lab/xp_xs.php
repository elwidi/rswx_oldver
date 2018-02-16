<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 $id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $gatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$as = mysql_fetch_array($gatr);
  ?>
<html>
<head>
<style type="text/css">
<!--
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style8 {color: #000000}
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body bgcolor="#DBDBDB">

<div align="left">
  <table bgcolor="#DBDBDB" border="0" cellpadding="2" cellspacing="2">
     <tr>
    <td width="578" valign="top">  <form action="s_dddd.php"> 
        <div align="left">
          <table width="509" border="0" cellpadding="2" cellspacing="2" class="style4">
          <input type="hidden" name="ff2"  value="<? echo $ff2; ?>">
          
 
          <tr>
          <td colspan="3"><? echo $a[level]; ?>&nbsp;</td>
          </tr>
           <tr>
          <td width="116"><div align="left"><span class="style4">Nama Biaya </span></div></td><td width="4"><div align="center"><strong>:</strong></div></td><td width="369"><div align="left" class="style4">
           <? echo $as[NamaBiaya];  ?> 
		   <input type="hidden" name="id" value="<? echo $id; ?>">
          </div></td>
          </tr>
		  <tr >
		<td>Kelompok 1 </td>
		<td><strong>:</strong></td>
		<td><div align="left">
		<input name="Kelompok1" type="text" class="style4" value="<? echo $as[Kelompok1]; ?>" size="30" maxlength="120" >
		</div></td> 
     </tr>
	 <tr>
		<td>Kelompok 2 </td>
		<td><strong>:</strong></td>
		<td><div align="left">
		<input name="Kelompok2" type="text" class="style4" value="<? echo $as[Kelompok2]; ?>" size="30" maxlength="120" >
		</div></td> 
     </tr>
	 <tr>
		<td>Kelompok 3 </td>
		<td><strong>:</strong></td>
		<td><div align="left">
		<input name="Kelompok3" type="text" class="style4" value="<? echo $as[Kelompok3]; ?>" size="30" maxlength="120" >
		</div></td> 
     </tr>
          <tr bgcolor="#000033">
          <td colspan="3" bgcolor="#59BA54"><div align="center" class="style8">
            <span class="style11">.            </span>
            <input name="simpan" type="submit" class="style11" value="Simpan">
            <input name="kmba" type="button" class="style11" onClick="window.close()" value="Tutup">
           
			 
           </div></td>
          </tr>
          </table>
        </div>
      </form></td> 
    </tr>
  </table>
</div>
</body>
</html>

<? } ?>






