<?
session_start();
include "../konek.php";
include "../ceke.php";
 $panjang = strlen($RegId);
 if($panjang<4){
 header("Location:./index.php");
  }elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  $mono = mysql_query("SELECT NamaDepo,Persen FROM depo where id='$IdDepo'");
$hy = mysql_fetch_array($mono);
$kdjfkdjf = mysql_query("SELECT * FROM rl_resep WHERE NoResep='$RegId'");
$ya  = mysql_fetch_array($kdjfkdjf);
   ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {
	color: #FFFF66;
	font-size: 18;
}
.style10 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
.style11 {font-size: 18px}
.style12 {color: #000033}
.style13 {color: #000099}
.style14 {color: #0000CC}
.style15 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("BpHari.php?NoResep=<? echo $NoResep; ?>&Persen=<? echo $Persen; ?>&Rc=<? echo $Rc; ?>&cedu=<? echo $cedu; ?>&NamaPasien=<? echo $NamaPasien; ?>&IdDepo=<? echo $IdDepo; ?>&NamaObat=<? echo $NamaObat; ?>&RegId=<? echo $RegId; ?>", "wCompare", "width=480,height=440,left=340,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; </script>
</head>
<body <? if($ads==1){ ?>onLoad="toCompare()"<? } ?>>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="654"><div align="left">
<?
if($IdObat!=''){ ?>
<form  action="IbuIin.php"> 
<? }else{
?>
<form target="_self">
<!-- <form  action="BpHari.php"> -->
  <div align="left">
  <? } ?>
  <table width="506" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <?
if($Typ=="RL"){
?>
    <tr bordercolor="#993300" bgcolor="#FFCCCC">
      <td colspan="3" bgcolor="#66FF00"><div align="center" class="style1 style9 style11 style13">
        <div align="left">PROSES JUAL OBAT BEBAS/RESEP LUAR<br>
          FARMASI RS RL </div>
      </div></td>
    </tr>
    <? }else{
?>
    <tr bordercolor="#993300" bgcolor="#000000">
      <td colspan="3" bgcolor="#66FF00"><div align="center" class="style1 style9 style11 style14">
        <div align="left">PROSES JUAL OBAT<br>
          FARMASI RS RL </div>
      </div></td>
    </tr>
    <? 
}?>
    <tr bordercolor="#ECE9D8">
      <td colspan="3"><div align="center"><? echo strtoupper($hy[NamaDepo]);  echo " ( "; echo ceil($hy[Persen]); ?>% )
        <br>
        <span class="style8">
          <?
if($Rc==1){ echo "<i>RACIK</i>"; }else{
?><a href="Bptalkah.php?RegId=<? echo $RegId; ?>&NoResep=<? echo $NoResep; 
?>&NamaPasien=<? echo $NamaPasien; ?>&IdDepo=<? echo $IdDepo; ?>&Rc=1">RACIK</a><? } ?> || 
          
          <?
if($Rc==0){ echo "<i>NON RACIK</i>"; }else{
?><a href="Bptalkah.php?RegId=<? echo $RegId; ?>&NoResep=<? echo $NoResep; 
?>&NamaPasien=<? echo $NamaPasien; ?>&IdDepo=<? echo $IdDepo; ?>&Rc=0">NON RACIK</a><? } ?> || 
          <a href="Bptalkah.php?RegId=<? echo $RegId; ?>&NoResep=<? echo $NoResep; 
?>&NamaPasien=<? echo $NamaPasien; ?>&IdDepo=<? echo $IdDepo; ?>">RESET</a> </span></div></td>
    </tr>
    <tr bordercolor="#ECE9D8">
      <td width="187"><div align="left"><span class="style8">NOMER TRANSAKSI</span></div></td><td width="5"><div align="center" class="style8">
        <div align="left"><strong>:</strong></div>
    </div></td><td width="442"><div align="left" class="style8 style12"><strong><? echo $RegId; ?>.</strong></div></td>
    </tr>
    <tr bordercolor="#ECE9D8" class="style8">
      <td><div align="left"><span class="style8">ID  RESEP</span></div></td><td><div align="center" class="style8">
        <div align="left"><strong>:</strong></div>
    </div></td><td><div align="left">
      
      <? echo $NoResep; ?>
      <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
      <input name="Persen" type="hidden" id="Persen" value="<? echo $persen; ?>">
      <input type="hidden" name="Rc" value="<? echo $Rc; ?>">
      <input type="hidden" name="cedu"  value="<? echo $cedu; ?>">
      </div></td>
    </tr>
    <tr bordercolor="#ECE9D8">
      <td><div align="left"><span class="style8">NAMA PASIEN</span></div></td><td><div align="center" class="style8">
        <div align="left"><strong>:</strong></div>
    </div></td>
    <td><div align="left"><span class="style8">
    
	  <input type="hidden" name="NamaPasien" value="<? echo $NamaPasien; ?>"><? 
	if($Pancing=='ikan'){
	$UOSI = mysql_query("UPDATE rl_resep SET NamaPasien='$NamaPasien' WHERE NoResep='$RegId'");
	} ?>
      <input type="hidden" name="RegId" value="<? echo $RegId; ?>">
      <? 
	  $panja = strlen($NamaPasien);
 	if($panja==0){
		echo $ya[NamaPasien];  
}else{
	echo "$NamaPasien"; 
	}	?>
      <input type="hidden" name="IdDepo" value="<? echo $IdDepo;  ?>"></span></div></td>
    </tr>
    <?
if($IdObat!=''){
////
$KeyID="$a[KodeBagian]-$IdObat";

 ///
?>
<tr>
<td colspan="3"><div align="center"><?
$IdObate=$IdObat;
 //echo "nn $hasil_akiremas"; 
?></div></td>
</tr>
    <tr bordercolor="#ECE9D8" class="style8">
      <td colspan="3"><div align="center" class="style10">NAMA OBAT :  
        <? 
	  if($cedu==1){
$uy = mysql_query("SELECT * FROM obat_consi WHERE id=$IdObat");	  
	  }else{
$uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
}
$g1 = mysql_fetch_array($uy);
echo $g1[NamaObat]; //echo "$IdObat";
?>
        <input type="hidden" name="IdObat" value="<? echo $IdObat; ?>"> 
        <?
 ?></div></td>
    </tr>
    <tr bordercolor="#ECE9D8" class="style8">
      <td><div align="left">HARGA</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td><div align="left"><?
$ika_sa = ceil($Harga); //$g1[HargaJual]+($g1[HargaJual]*$hy[Persen]/100);
 if($IdDepo==27){
?> <input name="Harga" type="text" class="style8" value="<? echo $ika_sa; ?>" size="11" maxlength="11">  
      <?
?>
      <? 
 }else{
 ?>
      <input name="Harga" type="text" class="style8" value="<? echo $ika_sa; ?>" size="11" maxlength="11"> 
      <? } ?>
      <font color="#FF0000"><? 
  echo " ( $hy[Persen] % ) ";
  ?>
        <input type="hidden" name="gana" value="<? echo $hy[Persen]; ?>">
        </font>
      <?  echo " || "; echo number_format($g1[HargaJual]);
 ?> 
      || <input type="hidden" name="IdDepo" value="<? echo $IdDepo;  ?>"></div></td>
    </tr>
    <tr bordercolor="#ECE9D8" class="style8">
      <td><div align="left">QTY</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td><div align="left">
      <input name="Qty" type="text" class="style8" size="11" maxlength="11">
      <input type="hidden" name="cegat" value="<? echo $cegat; ?>">
      <input type="hidden" name="Rc" value="<? echo $Rc; ?>">
      <input type="hidden" name="RegId" value="<? echo $RegId; ?>">
      
      || <? echo "Stok : $cegat"; ?>
      || <input type="radio" value="1" name="Mingo" checked="checked">
      +E ||
      <input type="radio" value="0" name="Mingo" >
      Non E </div></td>
    </tr>
	<?
	if($Rc==1){
	?><tr>
	<td class="style1">Racik Ke</td>
	<td class="style1">:</td>
	<td class="style1"><div align="left">
	<input name="RaciKe" type="text" class="style8" id="RaciKe" size="2" maxlength="2" value="1">
	</div></td>
	</tr><? 
	}
	?>
    <? }else{ ?>
    <TR bordercolor="#ECE9D8" class="style8">
      <td><div align="left">NAMA OBAT</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <TD><div align="left">
      <input name="NamaObat" type="text" class="style8" size="20" maxlength="20">
	  <input type="hidden" name="ads" value="1">
      <input type="hidden" name="RegId" value="<? echo $RegId; ?>">
      </div></TD>
    </TR>
    <? } ?>
 
    <tr bordercolor="#ECE9D8" bgcolor="#000000" class="style8">
      <td colspan="3" bgcolor="#DCFD97">
        <div align="left">
          <input name="proes" type="submit" class="style8" value="Proses"> 
           
           
          
          <input name="kembali" type="button" class="style8" onClick="location.href='../3w.php';" value="Kembali">
        </div></td>
    </tr>
    <tr bordercolor="#ECE9D8" bgcolor="#FFCCCC" class="style8">
      <td colspan="3">
        <div align="left">
          <input name="fgfg" type="button" class="style8" onClick="wComparew3www_d1236b_7884h = window.open('xd.php?NoResep=<? echo $RegId; ?>', 
  'wComparew3www_d1236b_7884h', 'width=530,height=150,left=170,Top=212,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b_7884h.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  value="Proses Ke Penjualan">
        </div></td>
    </tr>
   </table>
  </div>
</form>
</div></td><td width="219"><div align="left">
<table border="0" cellpadding="0" cellspacing="0">
 <tr bordercolor="#ECE9D8" class="style8">
      <td colspan="3" >        <iframe frameborder="0" src="tampil_obrl.php?NoResep=<? echo $NoResep; ?>&RegId=<? echo $RegId; ?>" width="730" height="400"></iframe></td></tr>
</table>
</div></td>
</tr>
</table>

</div>
</body>
</html> 
 <?
   }else{
 header("Location:./keluar.php");
 }?>