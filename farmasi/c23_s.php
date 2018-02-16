<?
session_start();
include "../konek.php";
include "../ceke.php";
$kjkfdjfd_Dfdfd998989 = mysql_query("SELECT * FROM alamat WHERE id=1");
	$ga = mysql_fetch_array($kjkfdjfd_Dfdfd998989); 
	 ?>
	 <html>
	 <head>
	 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
     </style>
	 </head>
	 <body>
	 <div align="left">
	 <form action="ssdsD_sd.php">
	 <table border="0" cellpadding="2" cellspacing="2">
	 <tr>
	 <td colspan="3"><div align="left" class="style1">
	 SETIING DATA PERUSAHAAN
	 </div></td>
	 </tr>
	 <TR valign="top">
	  <TD colspan="3"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style2">
	 <tr>
	 <td width="64">Nama</td>
	 <td width="3">:</td>
	 <td width="249"><div align="left">
	 <input name="Nama" type="text" class="style2" value="<? echo $ga[Nama]; ?>" size="54" maxlength="120" />
	 </div></td>
	 </tr>
	  <tr>
	 <td>Alamat</td><td>:</td><td><div align="left">
	 <input name="Jalan" type="text" class="style2" value="<? echo $ga[Jalan]; ?>" size="60" maxlength="120" />
	 </div></td>
	 </tr>
	  <tr>
	 <td>Telp </td><td>:</td><td><div align="left">
	 <input type="text" name="Tel" value="<? echo $ga[Telp]; ?>">
	 </div></td>
	 </tr>
	  <tr>
	 <td>Fax </td><td>:</td><td><div align="left">
	 <input name="FaP" type="text" class="style2" value="<? echo $ga[Fax]; ?>" size="30" maxlength="120" />
	 </div></td>
	 </tr>
	  <tr>
	 <td>Npwp </td><td>:</td><td><div align="left">
	 <input name="Npwp" type="text" class="style2" value="<? echo $ga[Npwp]; ?>" size="30" maxlength="120" />
	 </div></td>
	 </tr>
  <tr>
	 <td>e-mail </td><td>:</td><td><div align="left">
	 <input name="email" type="text" class="style2" value="<? echo $ga[email]; ?>" size="30" maxlength="120" />
	 <input type="hidden" name="id" value="<? echo $id; ?>">
	 </div></td>
	 </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="submit" value="Simpan" name="fgfgf">
	<input type="button" name="fgfgf" value="Setting Apoteker" onClick="location.href='susu_kambing_liar.php?id=<? echo $id; ?>';">	
	  <input type="button" name="fgfg" value="Selesai" onClick="window.close()">
</div></td>
    </tr>
	  </table>
	  </div></TD>
	 </TR>
 
</table>
</form>
	 </div>
	 </body>
	 </html>