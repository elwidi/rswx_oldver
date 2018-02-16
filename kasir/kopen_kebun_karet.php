<?php
session_start();
include "../konek.php";
include "../ceke.php";
 if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
header("Location:./w6.php?id=$id&NoStruk=$NoStruk");
}
$id = $_GET["id"];
 $NoStruk = $_GET["NoStruk"];
include "../hari.php";
 
$regist = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($regist);
$cek_struk = mysql_query("SELECT NamaDokter,NoPasien,NamaBagian FROM datastruk WHERE NoPasien='$x[NoPasien]' AND id='$NoStruk'");
$y = mysql_fetch_array($cek_struk);
if($x[NoPasien]!=$y[NoPasien]){
header("Location:./kripik_goreng.php?id=$id");
}
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style5 {font-size: 10px}
.style6 {font-family: Arial, Helvetica, sans-serif}
.style8 {font-size: 12px}
.style9 {font-size: 7px}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="0" cellspacing="0">
    <tr
onClick="location.href='kripik_goreng.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td width="519"  ><div align="center" class="style1"> 
        <div align="left">STRUK PASIEN RAWAT INAP<BR>
         NO BUKTI : 
            <? 
	$Bukti = "MM-$NoStruk"; echo "$Bukti";?>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><span class="style9">.</span></td>
    </tr>
    <tr>
      <td height="184">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2">
            <tr bordercolor="#000000" class="style4">
            <td width="156"><div align="left" class="style4">TGL MASUK</div></td>
            <td width="20"><div align="center" class="style4"><strong>:</strong></div></td>
            <td width="250"><div align="left" class="style4"><? echo "$x[TglMasuk]/$x[BlnMasuk]/$x[ThnMasuk],Jam : $x[JamMasuk]"; 
		  ?></div></td>
            </tr> 
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">REGISTER</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo $x[MstKey]; ?></div></td>
            </tr>
            <TR bordercolor="#000000" class="style4">
            <TD><div align="left" class="style4">NO RM</div></TD>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo $x[NoPasien]; ?></div></td>
            </TR>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">NAMA PASIEN</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo $x[NamaPasien]; ?></div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><span class="style4">TGL LHR  </span></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style5"><span class="style6"><span class="style8"><?
			$uku = mysql_query("SELECT tgllhr FROM datapasien WHERE NoPasien='$x[NoPasien]'");
			$u = mysql_fetch_array($uku);
						$pch = explode("-",$u[tgllhr]);
			echo "$pch[0]-$pch[1]-$pch[2]";
			?></span></span>   <?
			$thn =date("Y");
			$bln2=$pch[1]-0;
			$bln=date("m")-0;
			if($bln<$bln2 && $thn>$pch[2]){
			$tahune = $thn-$pch[2]-1;
			$wulan=12-$bln;
			}elseif($bln<$bln2 && $thn==$pch[2]){
			$tahune =0;
			$wulan=12-$bln;
			}else{
			
			}
			?></div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">DOKTER</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo $y[NamaDokter]; ?></div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">RUANGAN/KELAS/BED</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4">
              <? 
		  $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT NamaKelas,NoBed FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaKelas]); echo " / $j[NoBed]"; 

 ?>
            </div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">BAGIAN</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4">
              <? 
		  echo strtoupper($y[NamaBagian]);
		   ?>
            </div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4">RUJUKAN</div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo $x[RujukanDari]; ?></div></td>
            </tr>
            <tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4"> ASURANSI PENJAMIN </div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><? echo strtoupper($x[NamaPer]); ?></div></td>
            </tr>
			<tr bordercolor="#000000" class="style4">
            <td><div align="left" class="style4"> TGL CETAK </div></td>
            <td><div align="center" class="style4"><strong>:</strong></div></td>
            <td><div align="left" class="style4"><?  echo date("d/m/Y"); echo " JAM : "; echo date("H:i:s");  ?></div></td>
            </tr>
            <tr>
            <td colspan="3" valign="top"><div align="left" class="style4">
            <table width="433" border="0" cellpadding="2" cellspacing="2">
		    <tr>
		    <td colspan="3"><hr></td>
		    </tr>
 		    <tr class="style8">
            <td height="25" colspan="2">TINDAKAN </td>
            <td width="282">...................................................</td>
            </tr>
		    <tr class="style8">
            <td height="27" colspan="2"> </td>
            <td>...................................................</td>
            </tr>
            <tr class="style8">
            <td height="26" colspan="2">OBAT</td>
            <td>...................................................</td>
            </tr>
            <tr class="style8">
            <td height="26" colspan="2">&nbsp;</td><td>...................................................</td>
            </tr>
            <tr class="style8">
            <td colspan="3"><span class="style9">.</span></td>
            </tr>
            <tr class="style8">
            <td width="134"><table width="116" border="0" cellpadding="2" cellspacing="2">
            <tr>
            <td width="108" class="style8">ADMISSION</td>
            </tr>
            <tr>
            <td height="39" class="style8">&nbsp; </td>
            </tr>
            <tr>
            <td class="style8">( <? echo strtoupper($a[Nama]); ?>)<br>
            <? echo date("d.m.y-H:i:s"); ?> </td>
            </tr>
             
</table></td><td colspan="2"><div align="left">
  <table width="213" border="0" cellpadding="2" cellspacing="2">
                <tr>
                <td width="205" class="style8"> 
                  <div align="left">TTD DOKTER </div></td>
                </tr>
                <tr>
                <td height="51" class="style8"> <div align="left"></div></td>
                </tr>
                <tr>
                <td class="style8"><div align="left">( <? echo $y[NamaDokter]; ?> ) </div></td>
                </tr>
              </table>
</div></td>
            </tr>
            </table>
            </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
 