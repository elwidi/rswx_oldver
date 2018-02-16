<?
session_start();
include "../../konek.php";
include "../../ceke.php";
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="qP.php">
  <div align="center">
    <table border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF" class="style1">
      <tr>
	  <td colspan="3" class="style1"><div align="center">
	  TAMBAH DATA PENJAMIN<BR>
	  <?
	  include "log_nama.php";
	  ?>
	  </div></td>
	  </tr>
      <tr>
        <td width="120" class="style1">NAMA PER </td>
      <td width="3" class="style1"><div align="center"><strong>:</strong></div></td>
      <td width="309" class="style1"><input name="NamaPer" type="text" id="NamaPer" value="<? echo $pp[NamaPer]; ?>" size="30" maxlength="80"></td>
    </tr>
      <tr>
        <td class="style1">ALAMAT</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><textarea name="Alamat" cols="30" rows="2" id="Alamat"><? echo $pp[Alamat]; ?></textarea></td>
    </tr>
      <tr>
        <td class="style1">TELP</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Telp" type="text" id="Telp" value="<? echo $pp[Telp]; ?>" size="30" maxlength="60"></td>
    </tr>
      <tr>
        <td class="style1">kontak PERSON </td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Contact" type="text" id="Contact" value="<? echo $pp[Contact]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">HP</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Hp" type="text" id="Hp" value="<? echo $pp[Hp]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">FAX</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><input name="Fax" type="text" id="Fax" value="<? echo $pp[Fax]; ?>" size="30" maxlength="50"></td>
    </tr>
      <tr>
        <td class="style1">OPR</td>
      <td class="style1"><div align="center"><strong>:</strong></div></td>
      <td class="style1"><div align="left"><?
  echo strtoupper($pp[Opr]); 
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
            <input type="submit" value="Simpan" name="dfdf">
            <input type="button" name="fgfg" value="Kembali" onClick="location.href='../index.php';">
		  </div>      </td>
      </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
 