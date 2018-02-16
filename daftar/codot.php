<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];

$tgl=date("d"); $bln=date("m"); $thn=date("Y");$jam=date("H:i:s");
 $kek = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id' AND JamKeluar=0");
$zz = mysql_fetch_array($kek);
 ?>
<html>
<head>
<style type="text/css">
<!--
.style18 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style19 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 14px;
}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style26 {font-size: 10px}
.style27 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF66CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
</head>
<body>

<div align="left">
  <table onClick="location.href='fito_sayangku.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td width="358" colspan="3"><div align="center" class="style19">
    <strong>KARTU MASUK RAWAT INAP <br />
    RS YADIKA</strong><br>
    </div></td>
    </tr>
    <tr>
    <td colspan="3"><hr></td>
    </tr>
    <tr>
    <td colspan="3">
    <table border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
     <tr bordercolor="#000000">
    <td width="131"><div align="left" class="style26"><span class="style23">MSTKEY</span></div></td>
    <td width="11"><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td width="192"><div align="left" class="style27"><?
echo $zz[MstKey];
?></div></td>
    </tr><tr bordercolor="#000000">
    <td width="131"><div align="left" class="style26"><span class="style23">NO RM</span></div></td>
    <td width="11"><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td width="192"><div align="left" class="style27"><?
echo $zz[NoPasien];
?></div></td>
    </tr>
    <tr bordercolor="#000000">
    <td height="27"><div align="left" class="style26"><span class="style23">NAMA PASIEN</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td><div align="left" class="style27"><? 
echo $zz[NamaPasien]; 
?></div></td>
    </tr>
    <tr bordercolor="#000000">
    <td><div align="left" class="style26"><span class="style23">TGL MASUK/JAM</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <TD><div align="left" class="style27"><? echo "$zz[TglMasuk]-$zz[BlnMasuk]-$zz[ThnMasuk]/$zz[JamMasuk]"; ?></div></TD>
    </tr>
    <tr bordercolor="#000000">
    <td><div align="left" class="style26"><span class="style23">KAMAR/KELAS/BED</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td><div align="left" class="style27"><?
echo "$zz[Ruangan]/$zz[Kelas]/$zz[Bed]";
?></div></td>
    </tr>
    <tr bordercolor="#000000">
    <td><div align="left" class="style26"><span class="style23">DOKTER</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <TD><div align="left" class="style27"><? 
echo "$zz[KetDokter]"; 
?></div></TD>
    </tr>
    <tr bordercolor="#000000">
    <td><div align="left" class="style26"><span class="style23">RUJUKAN DARI</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td><div align="left" class="style27"><? echo $zz[NamaRujukan]; ?></div></td>
    </tr>
    <tr bordercolor="#000000">
    <td><div align="left" class="style26"><span class="style23">ASSURANSI</span></div></td>
    <td><div align="center" class="style26"><strong><span class="style23">:</span></strong></div></td>
    <td><div align="left" class="style27"><? echo $zz[NamaPer]; ?></div></td>
    </tr>
    <tr>
    <td colspan="3"><hr></td>
    </tr>
     </table>
    </td>
    </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td colspan="3"><div align="right">
    <table width="170" border="0" cellpadding="1" cellspacing="1">
    <tr>
    <td width="166"><div align="right" class="style27">JAKARTA, <?   echo "$tgl/$bln/$thn"; ?></div></td>
    </tr><tr>
    <td height="52" class="style18"><div align="right" class="style26">&nbsp;</div></td>
    </tr>
    <tr>
    <td class="style18"><div align="right" class="style26">( <? echo strtoupper($a[Nama]); ?>) </div></td>
    </tr>
    <tr>
    <td class="style18"><div align="right" class="style26"><? echo $jam; ?>
      </div></td>
    </tr>
    </table>
    </div></td>
    </tr>
  </table>
</div>
</body>
</html>
 