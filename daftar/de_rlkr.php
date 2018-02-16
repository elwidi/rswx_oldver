<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//NamaDokter=i&esi=
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
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2 || $a[Level]==77){
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="dd_dd90_0.php?IdRujukan=<? echo $IdRujukan; ?>&id=<? echo $id; ?>&IdPenjamin=<? echo $IdPenjamin; ?>&IdDept=<? echo $IdDept; ?>&IdDokter=<? echo $IdDokter; ?>";
self.close();
//-->
} 
</SCRIPT><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body <? if($IdDokter>0){ ?> onLoad="win44()"<? } ?>>

<div align="left">
  <table width="562" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="427" colspan="3"><div align="center" class="style1">
        LIST DATA DOKTER
      </div></td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <form target="_self">
            <table border="0" cellpadding="2" cellspacing="2" class="style2" brder="1">
              <tr>
                <td width="107">NAMA DOKTER</td>
    <td width="7">:</td>
    <td width="430"><div align="left">
      <input name="NamaDokter" type="text" class="style2" size="20" maxlength="20" />
	  <input type="hidden" name="esi" value="1">
	  <input type="hidden" name="NamaRujukan" value="<? echo $NamaRujukan; ?>">
	  <input type="hidden" name="IdPenjamin" value="<? echo $IdPenjamin; ?>">
	  <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
	  <input type="hidden" name="id" value="<? echo $id; ?>">
	  <input type="hidden" name="IdDept" value="<? echo $IdDept; ?>">
	  <input type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">
	   || 
      <input name="fgfg" type="submit" class="style2" value="Proses" />
      <input name="fggf" type="button" class="style2" onClick="window.close()" value="Selesai" />
      </div></td>
    </tr>
              <tr>
                <td colspan="3" valign="top">
                  <div align="left">
                    <table border="1" class="style2">
                      <tr>
                        <td width="24" bgcolor="#D4D0C8"><strong>NO</strong></td>
    <td width="107" bgcolor="#D4D0C8"><strong>NAMA PASIEN</strong></td> 
    <td width="86" bgcolor="#D4D0C8"><strong>SPECIALIST</strong></td>
    <td width="329" bgcolor="#D4D0C8"><strong>BAGIAN</strong></td>
    </tr>
                      <?
$nomer = 1;
if($esi==1){
$kdidkdi = mysql_query("SELECT * FROM dokter WHERE NamaDokter LIKE '$NamaDokter%' ORDER BY KodeSpc");
}else{
$kdidkdi = mysql_query("SELECT * FROM dokter  ORDER BY KodeSpc");
}
while($m = mysql_fetch_array($kdidkdi)){
?>
                      <tr  onClick="location.href='de_rlkr.php?IdRujukan=<? echo $IdRujukan; ?>&IdDokter=<? echo $m[id]; ?>&IdPenjamin=<? echo $IdPenjamin; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
                        <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? echo $m[NamaDokter]; ?></div></td>
    <td><div align="left"><? 
	$jdmdjdm = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$m[KodeSpc]'"); 
	$ib = mysql_fetch_array($jdmdjdm);
	echo $ib[NamaSpc];
	?></div></td>
    <td><div align="left"><?  
	$ikiks = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$m[IdBagian]'");
$hh = mysql_fetch_array($ikiks);
echo $hh[NamaBagian]; ?></div></td>
    </tr>
                      <? $nomer++; } ?><tr>
                        <td colspan="4" bgcolor="#D4D0C8">&nbsp;</td>
      </tr>
                    </table>
    </div>    </td>
    </tr>
            </table>
    </form>
    </div>    </td>
    </tr>
  </table>
</div>
</body>
</html>
<? 
}else{

}
?>
