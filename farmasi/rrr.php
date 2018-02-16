<?
session_start();
include "../konek.php";
include "../ceke.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($dik_dimas[sembilanbelas]!=1){
echo "ANDA TIDAK BERHAK MASUK KE HALAMAN INI";

}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
$TglJam=date("d.m.Y-H:i:s");
$uoda = mysql_query("UPDATE polog77 SET Cek=2,TglCek='$TglJam' WHERE id='$id'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c102.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
<?
}?>