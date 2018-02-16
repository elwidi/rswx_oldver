<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id =$_GET["id"];
$Usere =$_GET["Usere"];
$IdBagian =$_GET["IdBagian"];
$Level =$_GET["Level"];
$Nik =$_GET["Nik"];
$foto =$_GET["foto"];
 $Nama =$_GET["Nama"];

  if($a[Level]==1){
$TglJam=date("d.m.Y-H:i:s");
$sim = mysql_query("UPDATE  `konco` SET `User` =  '$Usere',
`KodeBagian` = '$IdBagian',
 `Opr` = '$a[id]',
`TglJam` = '$TglJam',
`Level` = '$Level',
`Nik` = '$Nik',
`Nama` = '$Nama',
`Foto` = '$foto' WHERE `konco`.`id` =$id");
  ?><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c88.php";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>
<?php 
}?>