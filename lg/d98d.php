<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
//
$ldjfd090df = mysql_query("SELECT * FROM oder_1detil WHERE id='$IdDetil'");
$yh = mysql_fetch_array($ldjfd090df);
if(!$yh[id]){
echo "RECORD SET DATA TIDAK DIKENAL,...........";
}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
$d9dfd= mysql_query("DELETE FROM oder_1detil WHERE id='$IdDetil'");
if($d9dfd){
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="g6s.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"><? 
}else{
echo "HAPUS DATA GAGAL,.. SILAHKAN KONTAK ADMIN";
} ?>
<? } ?>
</body>
</html>