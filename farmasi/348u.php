<?
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 2');
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112  || $a[Level]==17  || $a[Level]==11  || $a[Level]==4  || $a[Level]==3){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF00';
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
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="1081" colspan="3"><div align="center" class="style2">
        LIST DATA PENJUALAN <br />
        PERIODE : <? echo "$tgl1 SD $tgl2 "; $bln=$bln1; 
$thn =$thn1;
include "../bulan.php";
//
echo "<bR>"; 
if($KodePoli=='-'){
echo "ALL";
}else{
$ldkldkfld = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$KodePoli'");
$ok =  mysql_fetch_array($ldkldkfld);
echo strtoupper($ok[NamaBagian]);
}
//
echo "<br>"; 

?>
      </div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;
      <div align="left" class="style2">
	  <a href="../jujur_sabar.php"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">KEMBALI</a> ||
	   <?
	   if($ada==10){
	   ?><a  href="348u.php?KodePoli=<? echo $KodePoli; 
	   ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">TAMPIL GLOBAL</a><? 
	   }else{
	   ?><a  href="348u.php?ada=10&KodePoli=<? echo $KodePoli; 
	   ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">TAMPIL DETAIL</a>
	   <? } ?>
</div></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"> 
        <div align="left">
          <table border="0" cellpadding="1" cellspacing="2" class="style1" <? if($ada==10){?>width="1086"<? } ?>>
            <tr>
              <td width="19" rowspan="2" bgcolor="#FFCCCC"><strong> NO</strong></td>
			                <td width="19" rowspan="2" bgcolor="#FFCCCC"><strong> NO RESEP</strong></td>
			  <td width="37" rowspan="2" bgcolor="#FFCCCC"><div align="right"> </div>			    <div align="right"><strong>TGL</strong></div></td>
    <td width="298" rowspan="2" bgcolor="#FFCCCC"><strong> NAMA OBAT</strong></td>
    <td width="98" rowspan="2" bgcolor="#FFCCCC"><strong> GOLONGAN</strong></td>
    <td colspan="2" bgcolor="#FFCCCC"><div align="center"><strong> QTY</strong></div></td>
	<td width="59" rowspan="2" bgcolor="#FFCCCC"><div align="left"><strong>TOTAL</strong></div></td>
<?
	if($ada==10){
	?>
<td width="59" rowspan="2" bgcolor="#FFCCCC"><div align="left"><strong>NO RM</strong></div></td>
<td width="102" rowspan="2" bgcolor="#FFCCCC"><div align="left"><strong>NAMA PASIEN</strong></div></td>
    <td width="190" rowspan="2" bgcolor="#FFCCCC"><strong> DOKTER</strong></td>
    <td width="128" rowspan="2" bgcolor="#FFCCCC"><strong> POLI</strong></td> 
	<td width="114" rowspan="2" bgcolor="#FFCCCC"><strong> OPR</strong></td> 
	<td width="61" rowspan="2" bgcolor="#FFCCCC"><strong> JAM</strong></td> 
	<?  } ?>
    </tr>
	   <tr>
              <td width="51" bgcolor="#FFCCCC"><div align="center"><strong>KELUAR</strong></div></td>
    <td width="43" bgcolor="#FFCCCC"><div align="center"><strong>GANTI</strong></div></td>
    </tr>
            <?
$nomer = 1; $nom=1;$noma=1;
if($KodePoli=='-'){
$dkjf = mysql_query("SELECT * FROM jualobat WHERE Tgl>=$tgl1 AND Tgl<=$tgl2 AND Bln=$bln1 AND Thn=$thn1 AND apa_r!=1 ORDER BY JamTran");
}else{
$dkjf = mysql_query("SELECT * FROM jualobat WHERE IdDepo='$KodePoli' AND Tgl>=$tgl1 AND Tgl<=$tgl2 AND Bln=$bln1 AND Thn=$thn1   AND apa_r!=1 ORDER BY JamTran");
}
while($cc = mysql_fetch_array($dkjf)){
if($JamTran!=$cc[JamTran] && $JamTran!=''){
$nomer=1;?>
<tr>
<td colspan="7" bgcolor="#FFCCCC"><div align="center"><strong>SUB TOT</strong></div></td>
<td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($tot); 
$tot=0; $noma++;
?></strong></div></td>
</tr>
<? 
}

$nmn  = mysql_query("SELECT NamaGolongan,NamaMerk,KodeMerk FROM dataobat WHERE id='$cc[KodeObat]'");
$nb = mysql_fetch_array($nmn);
$NamaGolongan = $nb[NamaGolongan];
 $ksjd = mysql_query("SELECT Bagian,KodeDokter,NamaDokter,KodeBagian,KodePer,NamaPer FROM rwtjalan WHERE RegId='$cc[RegId]'");
 $nh = mysql_fetch_array($ksjd);
///
$kdjk_00 = mysql_query("SELECT Kode FROM dataperusahaan WHERE id='$nh[KodePer]'");
$bg = mysql_fetch_array($kdjk_00);
$pcg = explode(".",$bg[Kode]);
$TglJam=date("d.m.Y-H:i:s");
 
  
///
$baha = 'bgcolor="#CCCCFF"';?>
            <?
			if($a[Level]!=11 || $a[Level]!=4){
			?><tr <? if($opf[id]){ echo $baha; }  ?>><? 
			}else{
			?><tR  <? 
			if($opf[id]){ echo $baha; } 
			?>onClick="wCompare = window.open('4eee_0.php?IdDet=<? echo $cc[id]; ?>&KodePoli=<? echo $KodePoli; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>', 
  'wCompare', 'width=400,height=300,left=470,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<? } ?>
              <td><div align="center"><?  if($nomer==1){
			   $Resep= $cc[JamTran];
			   $Num=$noma;
			   $TglIni="$cc[Tgl]-$cc[Bln]-$cc[Thn]";
			   $NamaPasien=strtoupper($cc[NamaPasien]);
			   $NoPasien=$cc[NoPasien];
			   $Poli=strtoupper($nh[Bagian]);
			   $Dokter=$cc[NamaDokter];
			   }else{
			   $TglIni=$Resep="."; 
			   $NamaPasien='';
			   $NoPasien='';
			   			   $Dokter='';
			   			   $Num='';
			   			   $Poli='';
			   }echo $Num;?></div></td>
			  <td><div align="left"><?
 			   $poc = explode("-",$Resep);
			   echo "$poc[0]-$poc[3]";
			     ?></div></td>
	<td><div align="right"><? echo  $TglIni; ?></div></td>
    <td><div align="left"><? echo strtoupper($cc[NamaObat]); ?></div></td>
    <td><div align="left"><? 
 echo strtoupper($NamaGolongan); ?></div></td>
     <td><div align="center"><? echo number_format($cc[Qty]); ?></div></td>
<td><div align="center"><? 
echo number_format($opf[Qty]); 
?></div></td> 
<td><div align="right"><?
echo number_format($cc[JmlHargaBeli]);
$tot = $tot + $cc[JmlHargaBeli];
$tot2 = $tot2 + $cc[JmlHargaBeli];
?></div></td>
<?
	if($ada==10){
	?><td><div align="left"><? echo $NoPasien;?></div></td>
<td><div align="left"><? echo $NamaPasien;?></div></td>
     <td><div align="left"><? echo $Dokter; ?></div></td>
     <td><div align="left"><?
 echo $Poli;  
  ?></div></td>
  <td><div align="left"><? echo strtoupper($cc[Operator]);?></div></td>
  <td><div align="left"><? echo $cc[NoResep];?></div></td>
  <? } ?>
    </tR>
            <?
			$JamTran = $cc[JamTran];
$nomer++; $nom++; } ?><tr>
<td colspan="7" bgcolor="#FFCCCC"><div align="center"><strong>SUB TOT</strong></div></td>
<td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($tot); 
$tot=0;
?></strong></div></td>
</tr>
<tR>
              <td colspan="7" bgcolor="#D4D0C8"><span class="style1">GRAND TOTAL</span></td>
			  <td><div align="right"><? echo number_format($tot2); ?></div></td>
      </tR>
          </table>
    </div>    </td>
    </tr>
  </table>
</div>
</body>
</html>
<?
}
?>
