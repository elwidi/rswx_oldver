<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jhsdjshjds  = mysql_query("SELECT * FROM alasanbatal WHERE id='$id'");
$xx = mysql_fetch_array($jhsdjshjds);
//
$jshdjshjds = mysql_query("SELECT * FROM dataperusahaan WHERE id='$id'"); 
$pp = mysql_fetch_array($jshdjshjds);
  if($a[Level]==2){?>
 <html>
<head>  <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF33';
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
	font-size: 11px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 	font-style: italic;
	color: #000000;
}
.style3 {color: #000000}
-->
</style>
</head>
<body>
<div align="left">
 
<table width="1219" border="0" cellpadding="2" cellspacing="2">
 <tr bgcolor="#58BB4F"class="style1">
<td colspan="3" ><img src="../../gambar/pendaftaran.gif"></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style2">
 
  .</div></td>
</tr>
<TR>
<td colspan="3"   valign="top">
<div align="left">
<table width="1223" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="447"><div align="left"><?
 if($id>0){
?><form action="qPs.php"><?
}else{
?><form action="qP.php">
<? } ?>
  <div align="center">
    <table border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF" class="style1">
      <tr>
	  <td colspan="3" class="style1"><div align="center">
	  TAMBAH DATA PENJAMIN<BR>
	  
	  </div></td>
	  </tr>
      <tr>
        <td width="132" class="style1 style3">NAMA PER </td>
      <td width="3" class="style1"><div align="center"><strong>:</strong></div></td>
      <td width="292" class="style1"><input name="NamaPer" type="text" class="style1" id="NamaPer" value="<? echo $pp[NamaPer]; ?>" size="30" maxlength="80"></td>
    </tr>
      <tr>
        <td class="style1">ALAMAT</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><textarea name="Alamat" cols="30" rows="2" class="style1" id="Alamat"><? echo $pp[Alamat]; ?></textarea></td>
    </tr>
      <tr>
        <td class="style1">TELP</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Telp" type="text" class="style1" id="Telp" value="<? echo $pp[Telp]; ?>" size="30" maxlength="60"></td>
    </tr>
      <tr>
        <td class="style1">kontak PERSON </td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Contact" type="text" class="style1" id="Contact" value="<? echo $pp[Contact]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">HP</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Hp" type="text" class="style1" id="Hp" value="<? echo $pp[Hp]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">FAX</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Fax" type="text" class="style1" id="Fax" value="<? echo $pp[Fax]; ?>" size="30" maxlength="50"></td>
    </tr>
	 <tr>
        <td class="style1">EMAIL</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="email" type="text" class="style1" id="email" value="<? echo $pp[email]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">OPR</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><div align="left"><?
  echo strtoupper($pp[Opr]);  echo " ( $pp[TglJam])";
  ?>
        <input type="hidden" name="id" value="<? echo $id; ?>">
        </div></td>
    </tr>
      <tr>
        <td class="style1">OPR EDIT </td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
    </tr>
      <tr>
        <td colspan="3" class="style1">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="style1">
          <div align="left">
            <input name="dfdf" type="submit" class="style1" value="Simpan" <? if($percaya_dan_taqwa[tiga]==0 && $a[Level]==22){
?> disabled="disabled"<? } ?>>
            <input name="fgfg" type="button" class="style1" onClick="location.href='../../3w.php';" value="Kembali">
		  </div>      </td>
      </tr>
    </table>
  </div>
</form></div></td>
<td width="762"><div align="left"><? include "o.php"; ?></div></td>
</tr>
</table>
</div>
</td>
</TR>
</table>
 </div>
</body>
</html> 
<? 
}
?>