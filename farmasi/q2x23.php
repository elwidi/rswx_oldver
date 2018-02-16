<?
session_start();
include "../konek.php";
include "../salaman.php";
//header('Refresh: 3');
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./mana_d.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
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
<form action="2f_Ffdf.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
  <td width="948" colspan="3" valign="top"><div align="left">
  <table border="1">
   <tr>
   <td width="912" colspan="3"><div align="left">
   <table width="762" border="0" cellpadding="1" cellspacing="1" class="style1">
   <tr>
   <td width="17" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
   <td width="217" bgcolor="#D4D0C8"><strong>NAMA OBAT </strong></td>
   <td width="56" bgcolor="#D4D0C8"><div align="center"><strong>QTY</strong></div></td>
      <td width="94" bgcolor="#D4D0C8"><div align="left"><strong>SATUAN</strong></div></td>
   <td width="75" bgcolor="#D4D0C8"><div align="center"><strong>HARGA</strong></div></td>
   <td width="94" bgcolor="#D4D0C8"><div align="right"><strong>TOTAL</strong></div></td>
   <td width="97" bgcolor="#D4D0C8"><div align="left"><strong>FAKTUR</strong></div></td>
   <td  colspan="2"width="117" bgcolor="#D4D0C8"><div align="left"><strong>KETERANGAN</strong></div></td>
    </tr>
   <?
  
   $no =1;
   $kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' ORDER BY id DESC ");
   while($gg = mysql_fetch_array($kkkfg)){
 
 $para = $no%2;
 if($para==1){
 $warna='bgcolor="#C0FCA7"';
 }else{
  $warna='';

 }
  if($gg[Stat]==2){
  ?><tr bgcolor="#FFCCCC" valign="top"><? 
   }else{ ?>
  <tr valign="top"  <? echo $warna; ?>>
   <? } ?>
   <td><div align="center"><? echo $no; ?></div></td>
   <td><div align="left"><? echo ucfirst(strtolower($gg[NamaBarang])); ?></div></td>
   <td><div align="center"><? echo number_format($gg[Qty]); ?></div></td>
      <td><div align="left"><? echo strtoupper($gg[NamaSatuan]); ?></div></td>
   <td><div align="center"><? echo number_format($gg[Harga]); ?></div></td>
   <td><div align="right"><? echo number_format($gg[Total]);
   $tot = $tot + $gg[Total];
    ?></div></td>
	  <td><? 
   $lsds_Dsds = mysql_query("SELECT NoFaktur,NoInv FROM fakturpo WHERE id='$gg[IdFaktur]'");
   $ik = mysql_fetch_array($lsds_Dsds);
   echo $ik[NoFaktur];
   ?></td>
   <td><?
 /*  if($gg[Merk]==''){
   
 }else{ $kjdkjdkfd_DFd = mysql_query("SELECT NamaMerk,id FROM dataobat WHERE id='$gg[IdBarang]'");
 $bv = mysql_fetch_array($kjdkjdkfd_DFd);

  $kddkdikdd = mysql_query("UPDATE podetil77 SET Merk='$bv[NamaMerk]' WHERE IdBarang='$gg[id]'");
  }
*/
   $kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT * FROM ket_det_po WHERE IdDetil='$gg[id]'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);
echo ucfirst(strtolower($yape[Keterangan]));
   ?></td>
    
   </tr>
  
   <? $no++; } ?> <tr>
     <td colspan="5" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
	 <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tot);?></strong></div></td>
	 
     </tr>
   </table>
   </div>
   </tr>
   </table>
  </div></td>
</tr>
 </table>
 </form>
</div>
</body>
</html>
<? 
} ?>