<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";
$h = $_GET["h"];
$NoResep = $_GET["NoResep"];
$id = $_GET["id"];
if($id!=''){
$umbu = mysql_query("SELECT * FROM rj_resep WHERE id=$id");
$ii = mysql_fetch_array($umbu);
 
$kjksds_ffd = mysql_query("SELECT id FROM kwitansirj where RegId='$ii[RegId]'");
$as45 = mysql_fetch_array($kjksds_ffd);

if(!$ii[id]){
//header("Location:./dodol.php");
}
}
 if($a[Level]==4){
$JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);

?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style11 {font-size: 10}
.style12 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-size: 10px}
.style14 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.style15 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
-->
</style><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
</head>
<body   link="#000000" vlink="#000000" alink="#000000">
<table border="0">
<tr   onClick="location.href='sulistiono.php?ade=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3">
<td colspan="3"><div align="center" class="style12 style13">
BUKTI TRANSAKSI OBAT RESEP LUAR <br />
<?
echo strtoupper($fkd[Nama]); 
?>
<br>
<? echo ucfirst(strtolower($fkd[Jalan])); ?><br>
<?
echo "Telp : $fkd[Telp],Fax : $fkd[Fax]";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">Resep No </span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8"><? echo $ii[NoResep]; ?></div></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">Tgl</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8"><? echo "$ii[Tg]";
$bln=$ii[Bl];
$thn1 = $ii[Th];
include "../bulan.php";  ?></div></td>
</tr>
 <tr class="style3">
<td colspan="3">&nbsp;</td>
</tr>
<tr valign="top">
<td colspan="3">
 <div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr>
 <td valign="top">
 <div  align="left">
 <table border="1" cellpadding="0" cellspacing="0" bordercolor="#ECE9D8" bgcolor="#FFFFFF">
<tr    onClick="location.href='makan_pisang_mentah_pedes.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td colspan="4"><div align="center" class="style15">
DETAIL DATA OBAT</div></td>
</tr>
<tr class="style3">
<td width="17"><div align="center" class="style3"><span class="style15">NO</span></div></td>
<td width="214"><div align="center" class="style3">
  <div align="left"><span class="style15">NAMA OBAT</span></div>
</div>  <div align="center" class="style3"></div></td>
<td width="20"><div align="center" class="style3"><span class="style15">QTY </span></div></td>
<TD width="63"><div align="center" class="style3"><span class="style15">JUMLAH</span></div></TD>
</tr>
<?
$juy = 1;  
$ddtWS = mysql_query("SELECT * FROM jualobat WHERE JamTran='$ii[NoResep]' AND Qty>0 AND apa_r=0  ORDER BY id asc");
while($ssWS = mysql_fetch_array($ddtWS)){
//
//echo "$ssWS[RegId]<br>"; 
$kidkidkdkd = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$ssWS[RegId]'");
$yap = mysql_fetch_array($kidkidkdkd);
 //
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
 echo $juy;   
 ?></div></td>
<td><div align="left" class="style8"><? if($ssWS[apa_r]==1){ 
echo "<i>"; echo strtoupper($ssWS[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssWS[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssWS[apa_r]==1){ echo "<i>"; echo number_format($ssWS[Qty],2); echo "</i>"; 
}else{ echo number_format($ssWS[Qty],2); } ?></div></td>
<td  <?
if($yap[id]){}else{
?> onClick="wCompare_09j = window.open('x3_0a.php?NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>&Detil=<? echo $ssWS[id]; ?>', 
  'wCompare_09j', 'width=380,height=240,left=300,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_09j.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none"><div align="right" <? } ?>class="style8"> 
<?
if($as45[id]>0){
 ?><font color="#999999"><i><?
 echo number_format($ssWS[JmlHargaBeli]);   
$sayang2 = $sayang2 + $ssWS[JmlHargaBeli];
 ?></i></font><?
}else{ 
?>
 	  <? if($ssWS[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ssWS[JmlHargaBeli]); } 
$sayang2 = $sayang2 + $ssWS[JmlHargaBeli];//+$gu[Racikan];
  ?></a>
  <? } ?>
  </div></td>
</tr>
<? $juy++;} ?><?
  $nom=1;
$ddt = mysql_query("SELECT * FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=1 ORDER BY apa_r DESC");
while($ss = mysql_fetch_array($ddt)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nom==1){
echo $juy; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ss[apa_r]==1){ 
echo "<i>"; echo strtoupper($ss[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ss[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ss[apa_r]==1){ echo "<i>"; echo number_format($ss[Qty],2); echo "</i>"; 
}else{ echo number_format($ss[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ss[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ss[JmlHargaBeli]); } 
$sayang = $sayang + $ss[JmlHargaBeli];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nom++; } 
if($sayang>0){
$sayang_1 = $sayang+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 1</div></td><td><div align="right"><? echo number_format($sayang_1); ?></div></td>
</tr>
<? } ?><? 
$juyX = 2; $nomX=1;
$ddtx = mysql_query("SELECT * FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=2 ORDER BY apa_r DESC");
while($ssx = mysql_fetch_array($ddtx)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomX==1){
echo $juyX; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssx[apa_r]==1){ 
echo "<i>"; echo strtoupper($ssx[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssx[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssx[apa_r]==1){ echo "<i>"; echo number_format($ssx[Qty],2); echo "</i>"; 
}else{ echo number_format($ssx[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssx[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ssx[JmlHargaBeli]); } 
$sayangx = $sayangx + $ssx[JmlHargaBeli];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomX++; } 
if($sayangx>0){
$sayang_2 = $sayangx+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 2</div></td><td><div align="right"><? echo number_format($sayang_2); ?></div></td>
</tr>
<? } 


$juyZ = 3; $nomZ=1;
$ddtz = mysql_query("SELECT * FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=3 ORDER BY apa_r DESC");
while($ssz = mysql_fetch_array($ddtz)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ==1){
echo $juyZ; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz[apa_r]==1){ 
echo "<i>"; echo strtoupper($ssz[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz[apa_r]==1){ echo "<i>"; echo number_format($ssz[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ssz[JmlHargaBeli]); } 
$sayangz = $sayangz + $ssz[JmlHargaBeli];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomZ++; } 
 if($sayangz>0){
$sayang_3 = $sayangz+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 3</div></td><td><div align="right"><? echo number_format($sayang_3); ?></div></td>
</tr>
<? } 

$juyZ2 = 4; $nomZ2=1;
$ddtz2 = mysql_query("SELECT * FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=4 ORDER BY apa_r DESC");
while($ssz2 = mysql_fetch_array($ddtz2)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ2==1){
echo $juyZ2; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz2[apa_r]==1){ 
echo "<i>"; echo strtoupper($ssz2[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz2[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz2[apa_r]==1){ echo "<i>"; echo number_format($ssz2[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz2[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz2[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ssz2[JmlHargaBeli]); } 
$sayangz2 = $sayangz2 + $ssz2[JmlHargaBeli];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomZ2++; }
 if($sayangz2>0){
$sayang_4 = $sayangz2+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 4</div></td><td><div align="right"><? echo number_format($sayang_4); ?></div></td>
</tr>
<? } 


$juyZ3 = 5; $nomZ3=1;
$ddtz3 = mysql_query("SELECT * FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=5 ORDER BY apa_r DESC");
while($ssz3 = mysql_fetch_array($ddtz3)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ3==1){
echo $juyZ3; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz3[apa_r]==1){ 
echo "<i>"; echo strtoupper($ssz3[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz3[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz3[apa_r]==1){ echo "<i>"; echo number_format($ssz3[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz3[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz3[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ssz3[JmlHargaBeli]); } 
$sayangz3 = $sayangz3 + $ssz3[JmlHargaBeli];//+$gu[Racikan];
?></div></td>
</tr>
 
<?  $nomZ3++; }
 if($sayangz3>0){
$sayang_5 = $sayangz3+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 5</div></td><td><div align="right"><? echo number_format($sayang_5); ?></div></td>
</tr>
<? } 

$ujdujduddf =mysql_query("SELECT COUNT(id) AS jj FROM jualobat WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1");
$yhs = mysql_fetch_array($ujdujduddf);
if($yhs[jj]>0){
 if($sayang>0){
 $sayang= $sayang+$gu[Racikan];
 }
  if($sayangx>0){
 $sayangx= $sayangx+$gu[Racikan];
 }
   if($sayangz>0){
 $sayangz= $sayangz+$gu[Racikan];
 }
    if($sayangz2>0){
 $sayangz2= $sayangz2+$gu[Racikan];
 }
     if($sayangz3>0){
 $sayangz3= $sayangz3+$gu[Racikan];
 }
$sub_rac =$sayang+$sayangx+$sayangz+$sayangz2+$sayangz3;?> 
 <!-- <tr class="style5">
<td colspan="3" class="style3"><div align="center"><strong>SUBTOT</strong></div></td>
<td class="style5"><div align="right" class="style5"><strong><? 

 //echo number_format($sub_rac);
  ?></strong></div></td>
</tr> -->
<? } 
 $Bay = $Ppn+$sub_rac+$sayang2;?>
<!--  
<tr>
<td colspan="3" class="style3"><div align="center"><strong>SUBTOT</strong></div></td><td class="style5"><div align="right"><strong>
<? //echo number_format($sayang2); ?>
</strong></div></td>
</tr>
--> <tr>
<td colspan="3" class="style3"><div align="center"><strong>SUB TOTAL</strong></div></td><td class="style5"><div align="right"><strong>
  <?
echo number_format($Bay); ?>
</strong></div></td>
</tr>
<?
$KJDFD_DFDFD = mysql_query("SELECT COUNT(id) AS jj FROM returobatjalan WHERE NoResep='$NoResep'");
$yapu =mysql_fetch_array($KJDFD_DFDFD); 
if($yapu[jj]>0){
?>
<tr class="style8">
<td colspan="4"><div align="left"><em><strong>
List Retur Obat
</strong></em></div></td>
</tr>
<tr valign="top">
<tD colspan="4"><div align="left">
<table border="0" cellpadding="1" cellspacing="2" bordercolor="#ECE9D8" class="style8">
<?
$nas=1;
$KJDFD_DFDFDS = mysql_query("SELECT * FROM returobatjalan WHERE NoResep='$NoResep'");
while($dd =mysql_fetch_array($KJDFD_DFDFDS)){ 
?>
<tr>
<td width="17"><div align="center"><? 
echo $nas; ?></div></td>
<td width="221"><div align="left"><? echo ucfirst(strtolower($dd[NamaObat])); ?></div></td>
<td width="24"><div align="center"><? echo number_format($dd[Qty]); ?></div></td>
<td width="76"><div align="right"><? echo number_format($dd[Total]);
$tyh = $tyh + $dd[Total];
 ?></div></td>
</tr>

<?
$nas++; } ?><tr>
  <td colspan="3"><div align="center">Total Retur</div></td>
  <td><div align="right"><? echo number_format($tyh); ?></div></td>
</tr>
</table>
</div></tD>
</tr><?
}
?>
</table>
 </div> </td>
 </tr>
 </table>
 </div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
  <td colspan="3">
    <div align="right">
      <table border="0">
        <tr>
          <td class="style3"><span class="style10">Bekasi ,
            <? 
$tg = date("d"); $bl =date("m"); $th = date("Y");
echo "$tg/$bl/$th";
?>
            </span></td>
          </tr>
        <tr>
          <td height="41" class="style11"><div align="right"></div></td>
          </tr>
        <tr>
          <td><div align="right" class="style10">
            <div align="right">( <? echo strtoupper($a[Nama]); ?> )<br>
                  <? echo date("H:i:s"); ?> </div>
          </div>      </tr>
      </table>
    </div></td></tr>
  <TR>
          <TD colspan="3"><hr></TD>
          </TR> 
        <tr>
          <td colspan="3">
            <div align="center" class="style3">Kesembuhan Anda Merupakan Harapan Kami    </div></td>
      </tr>
</table>
<p class="style3">&nbsp;</p>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>