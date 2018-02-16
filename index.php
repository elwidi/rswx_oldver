<?
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 if(!isset($_SESSION))
{
session_start();
}  
session_destroy ();
include "konek.php";
include "alamat.php";
 ?> 
<html>
<head></head>
<body>
<div align="left">
<form   action="a1.php"  method="post">
 <table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td colspan="2"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="127" height="103" ><img src="gb/gb.png" width="111" height="118"></td>
<td width="807"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="530"><div align="left"><?
echo strtoupper($fkd[Nama]);
?></div></td>
</tr>
<tr>
<td><div align="left"><?
echo strtoupper($fkd[Jalan]);
?></div></td>
</tr>
<tr>
<td><div align="left"><?
echo "Telp : $fkd[Telp], Fax $fkd[Fax]";
?></div></td>
</tr>
</table>
</div></td>
</tr>

</table>
</div></td>
</tr>
 <tr valign="top">
  <td colspan="2" ><hr /></td>
  </tr>
<tr valign="top">
  <td height="107" ><div align="left">
   <table border="1">
   <tr valign="top">
   <td><div align="left">
   <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td colspan="3"><div align="left">
  Silahkan Login Disini
  </div></td>
  </tr>
  <tr>
  <td width="83">User</td>
  <td width="3">:</td>
  <td width="137"><div align="left"><input name="UserID" type="text"    placeholder="UserID" required="" autofocus="autofocus"/></div></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><div align="left"><input name="PasW" type="password" class="input password"    placeholder="Password" required="" /></div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">  <input type="submit" name="submit" value="Login" class="button" />
    
    <!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON-->
    <!--END REGISTER BUTTON-->
   <input  type="button" 
	  onclick="wCompareed = window.open('e44e.php', 
  'wCompareed', 'width=480,height=300,left=270,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompareed.focus();" name="submit2" value="GantiPas" class="register" /></div></td>
    </tr>
  </table>
   </div></td>
   </tr>
   </table>
  </div></td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td height="80" colspan="2" >&nbsp;</td>
  </tr>
<tr valign="top">
  <td colspan="2" ><marquee behavior="alternate">Ini Teks Footer</marquee></td>
</tr>
</table>
</form>
</div>
</body>
</html>
