<?
$NamaDokter = $_GET["NamaDokter"];
$esi = $_GET["esi"];
$IdPenjamin = $_GET["IdPenjamin"];
$NamaPenjamin = $_GET["NamaPenjamin"];
$IdRujukan = $_GET["IdRujukan"];
$NamaDokter = $_GET["NamaDokter"];
$IdDept = $_GET["IdDept"];
$IdDokter = $_GET["IdDokter"];
$budi = $_GET["budi"];
$NamaRujukan = $_GET["NamaRujukan"];
$NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$kadal = $_GET["kadal"];
$bas = $_GET["bas"];
$Alamat = $_GET["Alamat"];
$NamaBapak = $_GET["NamaBapak"];
$Telp = $_GET["Telp"];
$id = $_GET["id"];
$NamaPoli = $_GET["NamaPoli"];
header("Location:./sabar_ya.php?IdRujukan=$IdRujukan&IdPenjamin=$IdPenjamin&NamaRujukan=$NamaRujukan&IdDokter=$IdDokter&id=$id&IdDept=$IdDept");
?>