<?
session_start();
include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
 $TglLahir = $_GET["TglLahir"];
 $ThnLahir  = $_GET["ThnLahir"];
 $JenisKelamin = $_GET["JenisKelamin"];
 $BlnLahir = $_GET["BlnLahir"];
 $Usia = $_GET["Usia"];
 $LbhBln = $_GET["LbhBln"];
 $Alamat = $_GET["Alamat"];
 $NamaPasien =$_GET["NamaPasien"];
 $HpTelp = $_GET["HpTelp"];
 $Usia = $_GET["Usia"];
 if($a[Level]==16){
$buku = mysql_query("SELECT * FROM pasienradluar WHERE id='$id'");
$h = mysql_fetch_array($buku);
if(!$h[id]){
header("Location:./mencret_jorok.php?id=1");
}
$sim = mysql_query("UPDATE `pasienradluar` SET `TglLahir`='$TglLahir',`BlnLahir`='$BlnLahir',
`ThnLahir`='$ThnLahir',`JenisKelamin`='$JenisKelamin',
 `Usia`='$Usia',`LbhBulan`='$LbhBln',`NamaPasien`='$NamaPasien', `Alamat`='$Alamat',
 `HpTelp`='$HpTelp',`Opr`='$a[Nama]' WHERE (`id`='$id') ");
if($sim){
header("Location:./jujur_kacang_ijo.php?id=$id");
}else{
echo "SIMPAN DATA GAGAL,....<br>";
}
}else{
header("Location:./keluar.php");
}
?>