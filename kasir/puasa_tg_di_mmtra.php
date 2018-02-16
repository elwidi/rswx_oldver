<?
session_start();
include "../salaman.php";
 include "../konek.php";
 $Tgl=$_GET["tgl1"];
 $Bln =$_GET["bln1"];
 $Thn= $_GET["thn1"];
 ?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CCCC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>

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
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="833" colspan="3"><div align="left">
 <table width="361" border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td colspan="3"><div align="left">
LAPORAN PERKIRAAN MELAHIRKAN </div></td>
</tr>
<tr>
<td width="103">PERIODE</td><td width="7">:</td><td width="229"><div align="left">
 <?
$bln=$Bln; echo "$tgl1 sd $tgl2 ";
include "../bulan.php";
?>
</div></td>
</tr>
<tr>
  <td colspan="3"><a  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="index.php" style="text-decoration:none">Kembali</a></td>
  </tr>
</table>
</div></td>
</tr>
<tr>
 <td colspan="3"  valign="top"><div align="left">
  <table width="719" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="18" bgcolor="#FFFF66"><strong>NO</strong></td><td width="90" bgcolor="#FFFF66"><strong>TGL PERIKIRAAN</strong></td><td width="36" bgcolor="#FFFF66"><strong>NO RM </strong></td><td width="69" bgcolor="#FFFF66"><strong>NAMA PASIEN</strong></td><td width="231" bgcolor="#FFFF66"><strong>ALAMAT</strong></td>
  <td>HISTORY</td>
  <td width="70" bgcolor="#FFFF66"><strong>OPR</strong></td><td width="159" bgcolor="#FFFF66"><strong>Tgl/Jam</strong></td>
  </tr>
  <?
  $noma=1;
     $banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$bln1/$tgl1/$thn1");
  $sekar = ceil(($comp-$kini)/86400);
  $mulai=0;
 $disik=1;
  while($mulai<=$sekar){
    $compare = date("d/m/Y",$kini +$mulai*86400);
 $peca=explode("/",$compare);
 $Tgl=$peca[0]-0;
 $Bln=$peca[1]-0;
  $Thn=$peca[2]-0;
  $kidkddfd_dfdfd = mysql_query("SELECT rwtjalan.NamaPasien,rwtjalan.NoPasien,kira_lahir.id,
  kira_lahir.Opr,kira_lahir.TglJam FROM kira_lahir,anc,rwtjalan WHERE kira_lahir.IdRj=rwtjalan.id AND 
  kira_lahir.Tgl=$Tgl AND kira_lahir.Bln=$Bln AND kira_lahir.Thn=$Thn and kira_lahir.IdRec=anc.id AND anc.IdPasien=rwtjalan.id");
 while($ff =  mysql_fetch_array($kidkddfd_dfdfd)){ ?>
  <?
  $na = $noma%2;
  if($na==1){
  $warna=' bgcolor="#DEFEE0"';
  }else{
  $warna=''; 
  }
  ?><tr <? echo $warna; ?> valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   onClick="wCompares91c02_01 = window.open('aq_dari_sala3.php?id=<? echo $ff[id]; ?>', 
  'wCompares91c02_01', 'width=580,height=440,left=320,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares91c02_01.focus();" >
  <td><div  align="center"><? echo $noma; ?></div></td>
  <td><div align="left"><? echo "$compare"; ?></div></td>
  <td><div align="left"><? echo $ff[NoPasien]; ?></div></td> 
  <td><div align="left"><? echo ucfirst(strtolower($ff[NamaPasien])); ?></div></td> 
  <td><div align="left">
 <?
 $kdjkfdfd_Dfdfd  =  mysql_query("SELECT Alamat FROM datapasien WHERE NoPasien='$ff[NoPasien]'");
 $d = mysql_fetch_array($kdjkfdfd_Dfdfd);
 echo ucfirst(strtolower($d[Alamat])); 
 ?></div></td>
 <td><div align="center"><? 
 $jdhfd_Dfdff = mysql_query("SELECT COUNT(id) AS kk FROM rwtjalan WHERE NoPasien='$ff[NoPasien]'");
 $hb = mysql_fetch_array($jdhfd_Dfdff);
 echo $hb[kk];
 ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($ff[Opr])); ?></div></td>
 <td><div align="left"><? echo $ff[TglJam]; ?></div></td>
  </tr>
 
  <? $noma++;  } ?>
  <? $mulai++; } ?>
   <tr>
    <td colspan="8" bgcolor="#FFFF66">&nbsp;</td>
    </tr></table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
 