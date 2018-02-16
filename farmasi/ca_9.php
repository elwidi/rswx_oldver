<?
session_start();
include "../konek.php";
include "../ceke.php";
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  	 $kdidkdifd_dfdf = mysql_query("select * from racikembal where id=1");
	 $hbgb= mysql_fetch_array($kdidkdifd_dfdf);?>

 <html>
<head>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style7 {font-style: italic; color: #000000;}
.style8 {color: #000000; font-size: 12px; font-style: italic;}
.style9 {
	color: #000000;
	font-weight: bold;
}
.style10 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
.style11 {font-size: 10px;color: #FF0000}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
	color: #990000;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>

<div align="left">
  <table width="658" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <tr  bgcolor="#FFCCCC">
      <td height="20" colspan="8" bgcolor="#F0F0F0"><div align="center" class="style8">
        DETAIL DATA TRANSAKSI JUAL OB/RL
      </div></td>
    </tr>
    <tr  bgcolor="#FFCCCC">
      <td width="17" bgcolor="#EBFEEB"><div align="center" class="style7"><span class="style1">NO</span></div></td>
    <td width="48" bgcolor="#EBFEEB"><div align="center" class="style7">
      <div align="left"><span class="style1">REG ID<span class="style11">.</span></span></div>
    </div></td>
    <td width="51" bgcolor="#EBFEEB"><div align="center" class="style7">
      <div align="left"><span class="style1">RCK</span></div>
    </div></td>
    <td width="126" bgcolor="#EBFEEB" class="style7"><div align="left" class="style10">KODEOBAT</div></td>
     <td width="223" bgcolor="#EBFEEB"><div align="center" class="style7">
       <div align="left"><span class="style1">NAMA OBAT</span></div>
     </div></td>
    <TD width="45" bgcolor="#EBFEEB"><div align="center" class="style7"><span class="style1">QTY</span></div></TD>
    <td width="59" bgcolor="#EBFEEB"><div align="center" class="style7">
      <div align="right"><span class="style1">HARGA</span></div>
    </div></td>
    <td width="71" bgcolor="#EBFEEB"><div align="center" class="style7">
      <div align="right"><span class="style1">JUMLAH</span></div>
    </div></td>
    </tr>
    <?
$noo=1;
$daat =mysql_query("SELECT * FROM  jual_ob_rl_tmp  WHERE RegId='$NoResep' AND TypeJual=1 AND stat=$stata  ORDER BY id desc");
while($sw = mysql_fetch_array($daat)){
$de = explode(":",$sw[KodeObat]);
$ped  = $noo%2;
if($ped==1){
$warna='bgcolor="#FFCCFF"';
}else{
$warna='';
}
?> <tr   onClick="wComparew3ww2081_d1236b = window.open('x12_d.php?stata=<? echo $stata;
 ?>&NoResep=<? echo $NoResep; ?>&IdDetil=<? echo $sw[id];?>', 
  'wComparew3ww2081_d1236b', 'width=430,height=170,left=30,Top=212,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3ww2081_d1236b.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  <? echo $warna; ?> class="style3"  valign="top" > 
      <td><div align="center" class="style3"><? echo $noo; ?></div></td>
    <td><div align="left" class="style3"><? echo $sw[RegId]; ?></div></td> 
    <td><div align="left" ><? 
if($sw[TypeJual]==1){
?><span class="style11"><? echo "<i>RCK</i>"; ?></span><? 
}else{ ?>
      <span class="style1"><? echo "0"; ?></span><? 
} ?></div></td>
    <td><div align="left" class="style1"><? echo $sw[KodeObat]; ?></div></td>
    <td><div align="left" class="style3"><? echo $sw[NamaObat]; ?></div></td>
    <td><div align="center" class="style3"><? echo $sw[Qty]; ?></div></td>
    <td><div align="right" class="style3"><? 
echo number_format($sw[Harga]); 
?></div></td>
    <td><div align="right" class="style3"><? 
echo number_format($sw[JumlahHarga]);
$nini  = $nini + $sw[JumlahHarga];
?></div></td>
    </tr>
    <? $noo++; } ?>
	 
    <tr  bgcolor="#FFCCCC">
      <td colspan="7" bgcolor="#EBFEEB"><div align="center" class="style1 style9"><span class="style12">.</span>TOTAL</div></td>
    <TD bgcolor="#EBFEEB"><div align="right" class="style10"><? echo number_format($nini,2); ?></div></TD>
    </tr>
  </table>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>