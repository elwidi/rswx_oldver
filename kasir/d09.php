<?
session_start();
include "../konek.php";
include "../ceke.php";
 $kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
if($Detil>0){
$simp = mysql_query("INSERT INTO  `diskonrinap` 
(`id`, `IdPasien`, `Diskon`, `Opr`, `TglJam`) VALUES
(NULL, '$DetilX', '$Diskon', '$a[Nama]', '$TglJam')");
$sk = mysql_query("UPDATE `diskonrinap`  SET Diskon='$Diskon',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$DetilX'");

}else{
$simp = mysql_query("INSERT INTO  `diskonrinap` 
(`id`, `IdPasien`, `Diskon`, `Opr`, `TglJam`) VALUES
(NULL, '$id', '$Diskon', '$a[Nama]', '$TglJam')");
$sk = mysql_query("UPDATE `diskonrinap`  SET Diskon='$Diskon',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$id'");
}
header("Location:../keluar2.php");
}
?>