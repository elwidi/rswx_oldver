<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 ?>
<html>
<head>
<style type="text/css">
<!--
.style134 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 19px;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#CCCCCC">


<div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style134">
    <TR>
      <TD colspan="3" bgcolor="#993300"><div align="left" class="style1">
         PROSES PERMINTAAN KE APOTIK
      </div></TD>
    </TR>
  <tr>
      <td width="139">NO TXN</td>
      <TD width="6">:</TD>
      <td width="390"><div align="left"><?
echo "$a[User]-".date("dmy.His");
?></div></td>
    </tr>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
    <tr>
      <td colspan="3"><div align="left">
          <input type="button" name="gghg" value="Lanjut>>" onClick="location.href='x982.php';"  />
          <input type="button" name="ffg" value="&lt;&lt; Batal" onClick="location.href='index.php';" />
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="left">
<?
include "t90a2.php";
?>	  </div></td>
    </tr>
  </table>
</div>
</body>
</html>