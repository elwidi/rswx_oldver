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
$jenhk = mysql_query("SELECT * FROM `racik` WHERE NoResep='$NoResep' AND IdPas='$id'");
$dwp = mysql_fetch_array($jenhk);
if(!$dwp[id]){
header("Location:./dodol.php");
}
if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
 header("Location:./dodol.php");
}
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
include "latar.php";
 ?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000099;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style7 {color: #000000}
-->
</style>

 <form action="hancur_hati_siapa.php">
   <div align="center">
     <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
     <tr  bgcolor="#FFCCCC">
     <td height="33" colspan="3"><div align="center" class="style1 style7">
     SET JML RACIK
     </div></td>
     </tr>
     <tr>
     <td colspan="3">&nbsp;</td>
     </tr>
	 <tr>
	 <td class="style4">NAMA </td>
	 <td class="style4"><div align="center"><strong>:</strong></div></td>
	 <td class="style4"><div align="left">
	 <input name="Nama" type="text" class="style4" value="<? echo $dwp[Nama]; ?>" size="30" maxlength="120" />
	 </div></td>
	 </tr>
     <tr>
     <td width="149"><span class="style4">JML RACIK</span></td>
     <td width="9"><div align="center"><strong><span class="style4">:</span></strong></div></td>
     <td width="202"><div align="left" class="style4"><input name="JmlRacik" type="text" class="style4" value="<? echo $dwp[persen]; ?>" size="3" maxlength="3"> 
	 
        Resep</div></td>
		<input type="hidden" name="id" value="<? echo $id; ?>">
		<input type="hidden" name="aku" value="<? echo $aku; ?>">
		<input type="hidden" name="Rc" value="<? echo $Rc; ?>">
		<input type="hidden" name="IdAsli" value="<? echo $IdAsli; ?>">
		<input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
     </tr>
     <tr>
     <td colspan="3">&nbsp;</td>
     </tr>
     <tr  bgcolor="#FFCCCC">
     <td colspan="3"><div align="center">
     <input name="dfjd" type="submit" class="style4" value="Simpan">
      <input name="dfdf" type="button" class="style4" onClick="location.href='wahit.php?id=<? echo $id; ?>&aku=<? echo $aku; ?>&Rc=<? echo $Rc; ?>';" value="Kembali">
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
