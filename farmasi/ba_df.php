<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
header('Refresh: 2');

?>
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
	which.style.background='#FF6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<table border="1" class="style23"> 
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td colspan="5"><div align="center">RESET DATA </div></td>
</tr> 
		<tr>
		<td width="30" bgcolor="#6CB969"><div align="center"><strong>NO</strong></div></td>
		<td width="328" bgcolor="#6CB969"><strong>NAMA OBAT</strong></td>
		<td width="51" bgcolor="#6CB969"><div align="center"><strong>QTY</strong></div></td>
		<td width="94" bgcolor="#6CB969"><div align="right"><strong>HARGA</strong></div></td>
		<td width="65" bgcolor="#6CB969"><div align="right"><strong>TOTAL</strong></div></td>
		</tr>
		<?
 		$nomer=1;
 		$sdsjksjkds  = mysql_query("SELECT * FROM jualobat_tmp WHERE JamTran='$NoResep' order by KodeObat desc");
		while($xx = mysql_fetch_array($sdsjksjkds)){
 		if($xx[R_racik]==1){
		$warna='class="style24"';
		}else{
  		$warna='';
		}
 		
		?>
 		<tr <? echo $warna; ?>  >
		  <td><div align="center"><? echo $nomer; ?></div></td>
		  <td><div align="left"><? echo strtoupper($xx[NamaObat]); ?></div></td>
		  <td><div align="center">1</div></td>
		  <td><div align="right"><?  
		  		  echo number_format($xx[HargaBeli]);
 ?></div></td>
  <td><div align="right"><?  
		  		  echo number_format($xx[JmlHargaBeli]);
				  $tot = $tot + $xx[JmlHargaBeli];
 ?></div></td>
		  </tr> 
				<? $nomer++; }?>
<tr>
		  <td colspan="4" bgcolor="#6CB969"><div align="center">TOTAL</div></td>
		  <td bgcolor="#6CB969"><div align="right"><? echo number_format($tot); ?></div></td>
  </tr>
		</table>
</body>
</html>