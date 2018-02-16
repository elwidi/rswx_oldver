<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
$NamaBiaya  = $_GET["NamaBiaya"];
    ?>
	<html>
	<head><script language="JavaScript">
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
	font-size: 16px;
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
 	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td width="382" colspan="3"><div align="left" class="style1">
	LIST DATA PAKET
	</div></td>
	</tr>
	<tr valign="top"> 
	  <td colspan="3"><div align="left">
	  <table border="1" class="style2">
	  <TR>
	  <td width="24" bgcolor="#FFCC99"><strong>NO</strong></td><td width="235" bgcolor="#FFCC99"><strong>NAMA PAKET</strong></td><td width="39" bgcolor="#FFCC99"><strong>ITEM</strong></td><td width="54" bgcolor="#FFCC99"><strong>CEK</strong></td>
	  </TR>
	  <?
	  $nomer=1;
	 $ikofk = mysql_query("SELECT * FROM paketlab ORDER BY id");
	 while($as= mysql_fetch_array($ikofk)){
	  ?>
	  <TR  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='kakus3.php?id=<? echo $id; ?>&IdPaket=<? echo $as[id]; ?>';">
	    <td><div align="center"><? echo $nomer; ?></div></td>
	    <td><div align="left"><? echo $as[NamaPaket]; ?></div></td>
	    <td><div align="center"><?
		$kkslsd = mysql_query("SELECT COUNT(id) AS kk FROM tabelbiayax WHERE Kelompok3='$as[id]'");
		$vc = mysql_fetch_array($kkslsd);
		echo $vc[kk];
		?></div></td>
	    <td>&nbsp;</td>
	    </TR>
		<?  $nomer++; } ?>
	  <TR>
	    <td colspan="4" bgcolor="#FFCC99">&nbsp;</td>
	    </TR>
	  </table>
	  </div></td>
	  </tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
	  </tr>
	</table>
	</body>
	</html>