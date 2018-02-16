<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $Nama = $_GET["Nama"];
$Usere = $_GET["Usere"];
$IdBagian = $_GET["IdBagian"];
$Nik = $_GET["Nik"];
 if($Nik==''){
 echo "HARAP MASUKAN NIK ";
}elseif($Usere==''){
echo "HARAP ISIKAN  USER ID";
}elseif($Nik==''){
echo "HARAP ISIKAN NIK";
}elseif($Nama==''){
echo "HARAP ISIKAN NAMA ";
}elseif($a[Level]==1){
$TglJam=date("d.m.Y-H:i:s");
    $sim = mysql_query("INSERT INTO  `konco` 
	(`id`, `User`, `Pass`, `KodeBagian`, `Opr`, `TglJam`, `Level`, `Nik`, `Nama`, `Foto`) 
	VALUES (NULL, '$Usere', '', '$IdBagian', '$a[id]', '$TglJam', '$Level', '$Nik', '$Nama', '')");
if($sim){
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="d4000.php";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html><?
}else{
echo "SIMPAN DATA GAGAL";
}

}?>
 
