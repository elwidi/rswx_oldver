<?
session_start();
include "../konek.php";
include "../salaman.php"; 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
 $idkidfd = mysql_query("UPDATE podetil77 SET IdPo77='$IdPo' WHERE id='$IdDetil'");
  header("Location:./c233.php?sabar_ya=hari&iin=bca&id=$id");
  ?>