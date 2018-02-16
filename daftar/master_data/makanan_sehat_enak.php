<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head> 
	<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCFFCC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12; }
.style8 {font-family: "Times New Roman", Times, serif; font-size: 12; }
.style9 {
	color: #CCCCCC;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="center">
<form action="sekanara.php">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="#58BB4F"class="style1">
<td width="1141" colspan="3" ><img src="../../gambar/pendaftaran.gif"></td>
</tr>
  <tr valign="top">
  <td ><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
       
      <tr>
        <td valign="top"><div align="center">
          <table border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="153" class="style1"><span class="style11">ICD_CODE</span></td>
    <td width="10"><span class="style6"><strong>:</strong></span></td>
    <td width="326"><div align="left" class="style1 style8"><input name="ICD_CODE" type="text" class="style11" size="20" maxlength="50">
      </div></td>
    </tr>
            <tr>
              <td class="style1"><span class="style11">TERMINAL_CODE</span></td>
    <td><span class="style6"><strong>:</strong></span></td>
    <td><div align="left" class="style6 style1">
      <input name="TERMINAL_CODE" type="text" class="style11" size="20" maxlength="50">
      </div></td>
    </tr>
            <tr>
              <td class="style1"><span class="style11">DESCRIPTION</span></td>
    <td><span class="style6"><strong>:</strong></span></td>
    <td><input name="DESCRIPTION" type="text" class="style11" size="50" maxlength="255"></td>
    </tr>
            <tr>
              <td class="style1"><span class="style11">TERJEMAHAN</span></td>
    <td><span class="style6"><strong>:</strong></span></td>
    <td><div align="left" class="style6"><input name="TERJEMAHAN" type="text" class="style11" size="50" maxlength="255">
    </div></td>
    </tr>
            <tr>
              <td class="style1"><span class="style11">KATEGORI</span></td>
    <td><span class="style6"><strong>:</strong></span></td>
    <td><div align="left" class="style6"><input name="KATEGORI" type="text" class="style11" size="50" maxlength="100">
    </div></td>
    </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
    </tr>
            <tr>
              <td colspan="3" bgcolor="#58BB4F"><div align="center">
                <input name="fgfg"  type="submit" class="style11"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Submit"> 
                <input name="djfhjdf"  type="button" class="style11" onClick="location.href='mas_iqbal_baik.php';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Cek Data">
                <input name="fgkfjgf"  type="button" class="style11" onClick="location.href='../index.php';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Kembali">
                
                </div></td> 
    </tr>
            </table>
    </div></td>
    </tr>
    </table>
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

}
?>