<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$tgl1){
$tgl1=1;
}else{
$tgl1=$tgl1;
}
if(!$tgl2){
$tgl2=date("d");
}else{
$tgl2=$tgl2;
}
if(!$Bln){
$Bln=date("m");
}else{
$Bln=$Bln;
}
if(!$thn1){
$thn1=date("Y");
}else{
$thn1=$thn1; 
}
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF99';
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
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="730" colspan="3"><div align="left" class="style1"> PEMBELIAN BARANG FARMASI<br />
        PERIODE : <? echo "$tgl1 sd $tgl2 ";
$bln=$Bln;$thn1=$Thn;
include "../bulan.php";
 ?> </div></td>
    </tr>
    <tr valign="top" class="style23">
      <td colspan="3"><div align="left">&nbsp;</div></td>
    </tr>
    <tr valign="top">
      <td colspan="3"><div align="left">
          <table border="0" class="style23" cellpadding="2" cellspacing="2">
            <tr>
              <td width="24" bgcolor="#CCCC99"><strong>NO</strong></td>
              <td width="229" bgcolor="#CCCC99"><strong>NAMA SUPPLIER</strong></td>
              <td width="79" bgcolor="#CCCC99"><div align="right"><strong>PPN</strong></div></td>
              <td  width="79" bgcolor="#CCCC99"><strong>NILAI</strong></td>
              <td  width="79" bgcolor="#CCCC99"><div align="right"><strong>TOTAL</strong></div></td>
            </tr>
            <?
  $nomer=1;
  $kfjgkfjkgf = mysql_query("SELECT * FROM polog77x WHERE    Bln='$Bln' AND Thn='$Thn' ORDER BY IdSupplier");
  while($bb = mysql_fetch_array($kfjgkfjkgf)){
  $pcf = $nomer%2;
  if($pcf==1){
  $warna=' bgcolor="#CCFFCC"';
  }else{
  $warna='';
  }
  ////
  if($Supplier !=$bb[IdSupplier] && $Supplier!=''){
   
   
 
  ////////////////================================================
  ?>
            <tr  valign="top" <? echo $warna; ?>>
              <td><div align="center"><? echo $nomer; ?></div></td>
              <td><div align="left"><? echo strtoupper($bb[NamaSupplier]); ?></div></td>
              <td><div  align="right">
                <?
	  $kfjgkDDdfdfdddddDfjkgf = mysql_query("SELECT * FROM polog77x where IdSupplier='$bb[IdSupplier]' AND Bln='$Bln' AND Thn='$Thn'");
	  while($bb2= mysql_fetch_array($kfjgkDDdfdfdddddDfjkgf)){
	  ////////////////////////////////////////////////////////////////////////////////////
	  $kjdkjksjkd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$bb2[id]'");// LIMIT $awal,$dara");
	while($pp =  mysql_fetch_array($kjdkjksjkd)){
	  if($pp[PotRp]>0){
  
	$hass = ($pp[Harga]-($pp[Harga]-$pp[PotRp]))/$pp[Harga]*100;
$Harga=($hass/$pp[Qty]/$pp[Pengali]);   //echo "%"; 
	 }elseif($pp[PotPrc]>0){
$Harga=$pp[PotPrc];
	}else{
 	} 
	//////
 		$Diskon2 =$Diskon2+ $pp[Total];
		 
	
	///////
	} 
	////////////////////////////////////////////////////////////////////////////////////////
	 }
 $Disko = $Diskon2*10/100;
 $tot_1 = $tot_1 + $Disko;
echo ceil($Disko);
 
	?>
              </div></td>
              <td><div  align="right">
                <?
 echo ceil($Diskon2);
  $tot_2 = $tot_2 + $Diskon2;
  ?>
              </div></td>
              <td><div align="right">
                <?
 $tot  = $Disko  + $Diskon2; 
 $tot_3 = $tot_3 + $tot;
 echo ceil($tot);
 $Disko=0;
$Diskon2=0;
 ?>
              </div></td>
            </tr>
            <?
  $nomer++;
  }$Supplier=$bb[IdSupplier];  }
   ?>
            <tr>
             <td colspan="2" bgcolor="#ECE9D8"> 
      <div align="center"><strong>TOTAL</strong></div></td>
     <td bgcolor="#FFCCCC"><div align="right"><strong>
       <?
   echo ceil($tot_1);
   ?>
     </strong></div></td>
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo ceil($tot_2);
   ?>
  </strong></div></td>  
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo ceil($tot_3);
   ?>
  </strong></div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>