<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
//header('Refresh: 2');
	 $kdidkdifd_dfdf = mysql_query("select * from racikembal where id=1");
	 $hbgb= mysql_fetch_array($kdidkdifd_dfdf);?>
<html>
<head><style type="text/css">
<!--
.style23 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style24 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: italic;
}
-->
</style> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2" class="style23">
  <tr>
		<td width="30" bgcolor="#6CB969"><div align="center"><strong>NO</strong></div></td>
		<td width="328" bgcolor="#6CB969"><strong>NAMA OBAT</strong></td>
		<td width="51" bgcolor="#6CB969"><div align="center"><strong>QTY</strong></div></td>
		<td width="94" bgcolor="#6CB969"><div align="right"><strong>HARGA</strong></div></td>
		<td width="65" bgcolor="#6CB969"><div align="right"><strong>TOTAL</strong></div></td>
		</tr>
		<?
	 
 		$nomer=1;
 		$sdsjksjkds  = mysql_query("SELECT * FROM jualobat_tmp WHERE JamTran='$NoResep' AND apa_r=1  AND stat=$urr order by id  asc");
		while($xx = mysql_fetch_array($sdsjksjkds)){
		$padaa = strlen($xx[NamaObat])-2;
$teks = substr($xx [NamaObat],$padaa,2);
if($teks==".."){
$warna='bgcolor="#C6FDBD"';
 }elseif($xx[apa_r]==1){
		$warna='class="style24"';
		}else{
		$warna='';
		}
		$pad = $nomer%2;
		if($pad==1){
		$color='bgcolor="#FFFF99"';
		}else{
		$color='';
		}
		?>
 		<tr  <? echo $color;  echo $warna; ?> onClick="wComparew3www = window.open('hsa_z3.php?NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>&IdDetil=<? echo $xx[id]; ?>', 
  'wComparew3www', 'width=630,height=290,left=470,Top=212,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
		  <td><div align="center"><? echo $nomer; ?></div></td>
		  <td><div align="left"><? echo ucfirst(strtolower($xx[NamaObat])); ?></div></td>
		  <td><div align="center"><?
		  echo number_format($xx[Qty],2);
		  ?></div></td>
		  <td><div align="right"><?  
		  		  echo number_format($xx[HargaBeli]);
 ?></div></td>
  <td><div align="right"><?  
		  		  echo number_format($xx[JmlHargaBeli]);
				  $tot = $tot + $xx[JmlHargaBeli];
 ?></div></td>
		  </tr><?
		   ?>
				<? $nomer++; }?>
<tr>
 <tr>
 		  <td colspan="4" bgcolor="#6CB969"><div align="center">TOTAL</div></td>
		  <td bgcolor="#6CB969"><div align="right"><? echo number_format($tot); ?></div></td>
  </tr>
		</table>
</body>
</html>