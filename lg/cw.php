<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#993333">
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #CCCCCC;
}
-->
</style>

  <span class="style1">YAKIN DATA INI AKAN DIKIRIM SEBAGAI PERMINTAAN KE FARMASI</span><br />
 <font color="#FFFFFF"><b><?
 echo "MT-$id<br>";
 ?></b>
 <input type="button" name="ggfgf" value="YA" onclick="location.href='b4e.php?id=<? echo $id; ?>';" />
  || 
  <input type="button" name="ffgfgf" value="TIDAK" onclick="window.close()" />
<?
 }
 ?> </body>
</html>
