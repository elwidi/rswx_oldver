<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$id = $_GET["id"];
$NoResep = $_GET["NoResep"];
$IdAsli = $_GET["IdAsli"];
$Rc=$_GET["Rc"];
$aku = $_GET["aku"];
if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
// header("Location:./dodol.php");
}
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
$asli = mysql_query("SELECT * FROM `racik` WHERE IdPas='$id' AND NoResep='$NoResep'");
$xx = mysql_fetch_array($asli);
if($xx[id]){
header("Location:./gigit_ular_gatal.php?NoResep=$NoResep&IdAsli=$xx[id]&aku=$aku&&Rc=$Rc&id=$id");
}
  ?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000099;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>

 <form action="sembrono.php">
   <div align="center">
     <table border="0" cellpadding="0" cellspacing="0" bordercolor="#00FFCC">
     <tr bgcolor="#CCCCCC">
     <td height="33" colspan="3" bgcolor="#80FF00"><div align="center" class="style1">
     SET JML RACIK
     </div></td>
     </tr>
     <tr>
     <td colspan="3" bgcolor="#FFD5FF">&nbsp;</td>
     </tr>
	 <tr class="style4">
	 <td>NAMA RACIKAN</td><td>:</td><td><div align="left">
	 <input type="text" name="Nama" maxlength="120" size="30" value="<? echo $xx[Nama]; ?>"  class="style4"/>
	 </div></td>
	 </tr>
     <tr>
     <td width="149" bgcolor="#FFD5FF"><span class="style4">JML RACIK</span></td>
     <td width="23" bgcolor="#FFD5FF"><div align="center"><span class="style6">:</span></div></td>
     <td width="188" bgcolor="#FFD5FF"><div align="left" class="style4"><input type="text" name="JmlRacik" maxlength="3" size="3" value="<? echo $xx[JmlRacik]; ?>"> 
        Resep</div></td>
		<input type="hidden" name="id" value="<? echo $id; ?>">
		<input type="hidden" name="aku" value="<? echo $aku; ?>">
		<input type="hidden"  name="NoResep" value="<? echo $NoResep; ?>">
		<input type="hidden" name="Rc" value="<? echo $Rc; ?>">
     </tr>
     <tr>
     <td colspan="3" bgcolor="#FFD5FF">&nbsp;</td>
     </tr>
     <tr bgcolor="#CCCCCC">
     <td colspan="3" bgcolor="#80FF00"><div align="center">
       <input name="dfjd" type="submit" class="style4" value="Simpan">
      <input name="dfdf" type="button" class="style4" onClick="location.href='wahit.php?id=<? echo $id; ?>&aku=<? echo $aku; ?>&Rc=<? echo $Rc; ?>&NoResep=<? echo $NoResep; ?>';" value="Kembali">
     </div></td>
     </tr>
     </table>
   </div>
 </form>
 <? 
 }else{
 header("Location:./keluar.php");
 }
 ?>
 