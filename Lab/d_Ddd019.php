<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $dfdfd_FDddgatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
 $ii = mysql_fetch_array($dfdfd_FDddgatr);
if($Param==''){
echo "HARAP ISIKAN PARAMETER,...";
}elseif(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP............";
}elseif($a[Level]==12){
$TglJam=date("d.m.Y-H:i:s");
	$imp = mysql_query("INSERT INTO  `anak_labe` (`id`, `IdBiaya`, `Param`, `Opr`, `TglJam`) VALUES
	 (NULL, '$id', '$Param', '$a[User]', '$TglJam')");
	 header("Location:./doraemon_filem_lucu.php?id=$id&bak=mandi");
} 
 ?>