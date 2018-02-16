<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RegId = $_GET["RegId"];
$id  = $_GET["id"];
$NoResep  = $_GET["NoResep"];
$NamaPasien = $_GET["NamaPasien"];
$IdDepo = $_GET["IdDepo"];
$Rc= $_GET["Rc"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
include "../latar.php";
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
-->
</style>
</head>
<body>
<div align="left">
<form action="cikuyy.php">
  <div align="center">
    <table border="1" cellpadding="0" cellspacing="0" bgcolor="#ECE9D8">
    <tr bgcolor="#003366">
    <td height="39" colspan="3"><div align="center" class="style1">
    TENTUKAN JML RESEP
    </div></td>
    </tr>
    <tr>
    <td height="21" colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td width="158"><span class="style4">JML RACIK</span></td><td width="6"><div align="center" class="style2 style5"><strong>:</strong></div></td><td width="263"><div align="left" class="style4"><input type="text" name="JmlRacik" maxlength="10" size="10">
	<input type="hidden" name="IdDepo" value="<? echo $IdDepo; ?>">
	<input type="hidden" name="Rc" value="<? echo $Rc; ?>">
	<input type="hidden" name="NamaPasien" value="<? echo $NamaPasien; ?>">
	<input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
	<input type="hidden"  name="RegId" value="<? echo $RegId; ?>">
	</div></td>
    </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
    <tr bgcolor="#003366">
    <td colspan="3"><div align="center">
    <input type="Submit" name="dfdfg" value="Submit" >
">
    </div></td>
    </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>