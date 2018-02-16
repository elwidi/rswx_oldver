<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//
$j_Ffgfgfkkj = mysql_query("SELECT * FROM anak_labe WHERE id='$bele'");
$yg = mysql_fetch_array($j_Ffgfgfkkj);
$Var=$yg[Param];
 $ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$ss = mysql_fetch_array($ada);
$kjdkdfd_Dfdfdf = mysql_query("SELECT * FROM urutanlab where id='$fas'");
$dapa = mysql_fetch_array($kjdkdfd_Dfdfdf);
if(!$dapa[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif(!$ss[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
$TglJam=date("d.m.Y-H:i:s");
$ha = "$dapa[id]-$dapa[KeyID]";
 $simp = mysql_query("INSERT INTO  
  `teks_lab` (`id`, `Vare`, `Isian`, `IdPasien`, `Opr`, `TglJam`, `NoBukti`, `Judul`, `Stak`) VALUES
   (NULL, '$Var', '$Isian', '$fito', '$a[User]', '$TglJam', '$ha', '$Judul','$Kunci')");
   header("Location:./w_0.php?dimas=sembuh&fas=$fas&fito=$fito");
 
    } ?>