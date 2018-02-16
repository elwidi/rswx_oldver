<?
session_start();
include "../ceke.php";
 include "../konek.php";
 $Tgl=$_GET["tgl1"];
 $Bln =$_GET["bln2"];
 $Thn= $_GET["thn1"];
if($mas=='sabar'){
header("Location:./laporan/9c.php?Bln=$Bln&Thn=$Thn");
}elseif($mas=='bagong'){
header("Location:./laporan/xc.php?Bln=$Bln&Thn=$Thn");
}elseif($mas=='supran'){
header("Location:./laporan/malam_ampe_pagi_buat_prg.php?Bln=$Bln&Thn=$Thn");
}elseif($mas=='popong'){
header("Location:./laporan/teh_botol_pedes.php?Bln=$Bln&Thn=$Thn");
 }else{
header("Location:./laporan/c.php?Bln=$Bln&Thn=$Thn");
}
?>