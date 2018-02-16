<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$umbu = mysql_query("SELECT * FROM rj_resep WHERE id=$id");
$ii = mysql_fetch_array($umbu);
 	
$NoResep=$ii[NoResep];
$kjksds_ffd = mysql_query("SELECT id FROM kwitansirj where RegId='$ii[RegId]'");
$as45 = mysql_fetch_array($kjksds_ffd);
$Panjang = strlen($NoResep);
 
 if(!$ii[id]){
header("Location:../3w.php");
 }else{
     ?>
<html>
<head> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wComparea2ww = window.open("susu2z.php?Rc=<? echo $Rc; ?>&id=<? echo $id; ?>&NamaObat=<? echo $NamaObat; ?>", "wCompare", "width=580,height=440,left=340,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wComparea2ww.focus(); 
}; 

 //--></script> 
 <script language="JavaScript">
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
<style type="text/css">
<!--
.style4 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
.style7 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style13 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 12px;
}
.style14 {font-size: 12px}
.style15 {color: #990000}
.style16 {color: #FF0000}
.style17 {
	color: #009933;
	font-weight: bold;
	font-style: italic;
}
.style18 {font-size: 14px}
.style19 {font-weight: bold}
.style20 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style23 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style24 {color: #000000}
.style26 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 11px; color: #ECE9D8; }
.style28 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; }
.style29 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<body alink="#ffffff" vlink="#ffffff" link="#ffffff"  <? if($ads==1){ ?>onLoad="toCompare()"<? } ?>>

<div align="left">
  <table width="697" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#6CB969"><div  align="left"> 	
	 
          Penjualan Obat Luar
		  </div></td>
    </tr>
 <tr>
      <td colspan="5" bgcolor="#000066"> 
        <div align="left"><font color="#FFFF00" size="3" face="Arial, Helvetica, sans-serif"><strong>Penjualan 
          Obat Resep Luar</strong></font></div></td>
 </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" class="style26"><div align="center" class="style17 style18">
        <div align="left"><span class="style24">.
        User Log : <? echo ucfirst(strtolower($a[Nama])); ?> : <? 

$mono = mysql_query("SELECT NamaDepo,Persen FROM depo where id='$aku'");
$hy = mysql_fetch_array($mono);
echo strtoupper($hy[NamaDepo]); if($hy[Persen]){ echo " ($hy[Persen] %)"; }else{ 
 echo number_format($uyp[Persen]); echo "%";
 }
?>
          || <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="adik_dhimas.php?id=<? echo $id; ?>&aku=" style="text-decoration:none ">RESET</a> </span>
           
||
   <select name="Is" class="style4">
<option value="">--Resep Selesai--</option>
<?
$dlkldf = mysql_query("SELECT * FROM rj_resep WHERE NoResep Like 'RL-%'");
while($xx = mysql_fetch_array($dlkldf)){
$namajn = mysql_query("SELECT id FROM jualobat where  JamTran='$xx[NoResep]' ");
$v = mysql_fetch_array($namajn); 
if($v[id]){?>
<option value="<? echo $xx[id]; ?>" onClick="location.href='xvy.php?id=<? echo $xx[id]; ?>&NoResep=<? echo $xx[NoResep]; ?>';"><? echo $xx[NoResep]; ?></option>
<?
}
 }
?>
</select>
 ( <?  echo "$a[KodeBagian]"; ?>)</div>
      </div></td>
    </tr>
 <?
if($as45[id]>0){
?>
<tr>
<td colspan="5" bgcolor="#990000"><div align="left" class="style29">
TRANSAKSI INI SUDAH SELESAI DENGAN KWT NO : <? echo "KWT:$as45[id]"; ?> || 
<a href="../Daftar/ed_d.php" style="text-decoration:none">KEMBALI</a>
</div></td>
</tr>
<?
}else{ ?>  <tr>
      <td colspan="5" bgcolor="#3333CC" class="style26"><div align="center" class="style24 style4">
          <div align="left"> <a href="adik_dhimas.php?id=<? echo $id; ?>&Rc=1"> RACIKAN</a> || 
		  <a href="adik_dhimas.php?id=<? echo $id; ?>&Rc=0"> NON RACIKAN</a> || 
		  <a href="sulistiono.php">KEMBALI</a></div>
      </div></td>
    </tr>
   
    <tr>
      <td colspan="4" bgcolor="#FFFFFF" class="style26"><div align="left">
        <? if($id>0){
?>
      </div>
        <div align="center" class="style23"> 
          <div align="left"><!-- <a href="pacar_aku_ayu_iin.php?aku=<? //echo $aku; ?>&id=<? //echo $id; ?>" style="text-decoration:none ">
 -->
          </div>
        </div>
        <div align="left">
          <? }else{ } ?>
      </div></td><td width="933" rowspan="2" valign="top"> 
	    <div align="left"> 
		<!-- <? /* <iframe src="dala.php?id=<? echo $id; ?>&NoResep=<? echo $NoResep; ?>" width="700" height="200" frameborder="0"></iframe>
		*/ ?> -->
		<?
		include "dalax.php";
		?>
	    </div></td>
    </tr>
    
    <tr>
      <td colspan="4">
        <?
if($IdObat!=''){
?>
        <form action="garam_asin.php"> 
        <? }else{ ?>
		<form target="_self">
      <!--   <form action="susu2.php">  -->
          <? } ?>
          <table width="562" border="0" cellpadding="2" cellspacing="2">
            <tr class="style13">
              <td width="193" height="27"><div align="left"><span class="style4">No 
                  Reg</span></div></td>
              <td width="3"><div align="center"><strong><span class="style4">:</span></strong></div></td>
              <td width="346"><div align="left"><span class="style4"> 
                  <input type="hidden" name="RegId" maxlength="30" size="30" value="<? echo $ii[RegId]; ?>">
                  <strong><? echo $ii[RegId]; ?></strong> 
                  <input type="hidden" name="id" value="<? echo $id; ?>">
                  <? echo "#$id"; ?> 
                  <input type="hidden" name="aku" value="<? echo $aku; ?>">
                  <input type="hidden" name="TypeJual" value="<? echo $aku; ?>">
                  </span></div></td>
            </tr>
			<tr class="style4">
			<td>NoResep</td><td>:</td>
			<td><div align="left"><?
			echo $ii[NoResep];
			?></div></td>
			</tr>
            <tr class="style4"> 
              <td><div align="left" class="style7 style14">TglMasuk/Jam</div></td>
              <td><div align="left" class="style4 style19"> 
                  <div align="center">:</div>
                </div></td>
              <td><div align="left" class="style4"><? echo "$ii[Tg]"; $bln=$ii[Bl]; $thn1=$ii[Th];
			  include "../bulan.php"; echo " / $ii[Jam]"; ?></div></td>
            </tr>
            <tr class="style4"> 
              <td><div align="left" class="style4">No Txn</div></td>
              <td><div align="left" class="style20"> 
                  <div align="center">:</div>
                </div></td>
              <td> <div align="left" class="style4"> <? echo $ii[id];  ?> 
                  . </div></td>
            </tr>
            <?
	  if($hab[id]){
	  ?>
            <?
	  }
	  ?>
            <?
if($IdObat!=''){
?>
            <?
////
$KeyID="$a[KodeBagian]-$IdObat";

 ///
?>
            <tr> 
              <td colspan="3"><div align="center">
                  <? 
 $uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
 $g1 = mysql_fetch_array($uy);
 //
 $kdjfdkfjkdfjkdfjdkdfjkdfk = mysql_query("SELECT * FROM golobat WHERE id='$g1[IdGol]'");
 $iv = mysql_fetch_array($kdjfdkfjkdfjkdfjdkdfjkdfk);
 //
echo $g1[NamaObat];  echo "($iv[Upper]% - $g1[NamaGolongan])";//echo "$IdObat";
?>
                  <input type="hidden" name="Upper" value="<? echo $iv[Upper]; ?>">
                  <?
?>
                  <input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
                  <? 
?>
                  || 
                  <?
//$akan_sp = mysql_query("SELECT * FROM persen_type_jual WHERE Type='$g1[Type]'");
//$yek_p = mysql_fetch_array($akan_sp);
 ?>
                </div></td>
            </tr>
            
            <tr  class="style4"> 
              <td>Harga</td>
              <td>:</td>
              <td><div align="left">
                <?
 	//$Tiga2 = $g1[Tiga]-($g1[Tiga]*$persen_1/100);
	echo number_format($g1[Tiga]);
 ?>
                  <input type="hidden" name="regane2" value="<? echo $g1[Tiga]; ?>">
                </div></td>
            </tr>
            <tr class="style4"> 
              <td>Stok</td>
              <td>:</td>
              <td><div align="left">
                  <?
$c=$g1;
include "huting.php";
?>
                  <input type="hidden" name="Stok" value="<? echo $Stok; ?>">
                </div></td>
            </tr>
            <? }?>
          <?
if($IdObat!=''){

}else{ ?>
            <tr bgcolor="#333333" class="style4"> 
              <td bgcolor="#D4D0C8"><div align="left" class="style24"><span class="style4">Nama 
                  Obat </span></div></td>
              <td bgcolor="#D4D0C8"><div align="center" class="style16 style24"><strong><span class="style4">:</span></strong></div></td>
              <td bgcolor="#D4D0C8"><div align="left" class="style24"> 
                  <? if($NoResep){ ?>
                  <input name="NamaObat" type="text" class="style4" size="20" maxlength="20">
                  <input type="hidden" name="ads" value="1">
                  <input type="hidden" name="IdGudang" value="<? echo $IdGudang; ?>">
                  <? }else{ } ?>
                  <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
                  <input type="hidden"  name="Rc" value="<? echo $Rc; ?>">
                  <input type="hidden" name="TypeObat" value="<? echo $hy[id]; ?>">
                  || 
                  <?
 $selele = mysql_query("SELECT persen,id FROM `racik` WHERE  NoResep='$NoResep' AND IdPas='$id'");
 $we= mysql_fetch_array($selele);
 if($we[persen]){
?>
                  <a href="gigit_ular_gatal.php?NoResep=<? echo $NoResep; ?>&IdAsli=<? echo $we[id]; ?>&aku=<? echo $aku;
 ?>&id=<? echo $id;  ?>&Rc=<? echo $Rc; ?>" style="text-decoration:none ">
                  <?  echo "$we[persen] Racikan"; ?>
                  </a>
                  <? 
 }else{
  if($NoResep){ ?>
                  <? } ?>
                  <? if($Rc!=''){ echo "$NoResep"; } else{ }} ?>
                </div></td>
            </tr>
            <? } ?>
            <?
if($IdObat!=''){
?>
            <tr class="style4"> 
              <td><div align="left"><span class="style4">Qty<span class="style15"></span></span></div></td>
              <td><div align="center" class="style16"><strong><span class="style4">:</span></strong></div></td>
              <td><div align="left"> 
                  <? if($NoResep){ 
 ?>
                  <input name="Qty" type="text" class="style4" size="11" maxlength="11">
                  <input type="hidden" name="IdGudang" value="<? echo $IdGudang; ?>">
                  <?   }else{ } ?>
                  <input type="hidden" name="budi_h" value="<? echo $arum; ?>">
                  <input type="hidden"  name="Rc" value="<? echo $Rc; ?>">
                  <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
                  <input type="radio" value="1" name="Mingo" <? if($Rc==0){ ?>checked<? } ?>>
                  +E || 
                  <input type="radio" value="0" name="Mingo"  <? if($Rc==1){ ?>checked<? } ?>>
                  -E </div></td>
            </tr>
            <?
	  if($Rc==1){
	  ?>
            <tr bgcolor="#FFCCCC"  class="style4"> 
              <td>Racikan Ke</td>
              <td>:</td>
              <td> <div align="left">
                  <input  class="style4" type="text" name="RacKe" maxlength="3" size="3" value="1">
                </div></td>
            </tr>
            <?
	  }
	  ?>
            <?
if($sy[IdObat]){
  ?>
            <tr class="style4"> 
              <td><div align="left">HARGA TAMBAHAN</div></td>
              <td><div align="center" class="style16"><strong>:</strong></div></td>
              <td><div align="left">Rp. 
                  <? //$bbu = $sy[harga1]+$sy[harga2]+$sy[harga3]+$sy[harga4]; 
 
 ?>
                  <input type="hidden" name="bbu" value="0">
                </div></td>
            </tr>
            <? }else{ ?>
            <? } ?>
            <? }else{ } ?>
            <!-- <tr bgcolor="#FFFF66" class="style4">
<td><div align="left">RACIKAN / NON RACIKAN</div></td><td><div align="center" class="style16"><strong>:</strong></div></td><TD><div align="left">||
      <input type="radio" value="1" name="Mingo2">
  Ya ||
  <input type="radio" value="0" name="Mingo2" checked>
  No</div></TD>
</tr> 
<tr bgcolor="#FFFF66" class="style4">
<td><div align="left">TAMPILKAN BAHAN RACIKAN</div></td><td><div align="center" class="style16"><strong>:</strong></div></td><TD><div align="left">||
      <input type="radio" value="1" name="Mingo3">
  Ya ||
  <input type="radio" value="0" name="Mingo3" checked>
  No</div></TD>
</tr>-->
            <?
$posk = strlen($NoResep);
if($posk<=3){
?>
            <tr  bgcolor="#990000"> 
              <td colspan="3"><div align="center" class="style28"> SILAHKAN KLIK 
                  / PILIH RACIKAN / NON RACIKAN </div></td>
            </tr>
            <? 
}else{
?>
            <tr bgcolor="#000099"> 
              <td colspan="3" bgcolor="#72C66C"> <div align="left"> 
                  <?
				 if($IdObat>0){
				 ?>
                  <input name="simpan" type="submit" class="style23" value="Simpan">
                  <? }else{ ?>
                  <input name="simpan" type="submit" class="style23" value="Cari">
                  <? } ?>
                  <span class="style24"> 
                  <!--<input name="ddff" type="button" class="style23" onClick="location.href='jas_jus.php?aku=<? /*echo $aku;
 ?>&id=<? echo $id;  ?>&Rc=<? echo $Rc; ?>&NoResep=<? echo $NoResep; ?>';" value="Tentukan Jml Racik"> <? */ ?> -->
                  </span> 
                  <input name="kmeb" type="button" class="style23" onClick="location.href='sulistiono.php';" value="Kembali">
                  <? 
if($IdObat!=''){
?>
                  <? } ?>
                </div></td>
            </tr>
            <? } ?>
            <tr bgcolor="#000099"> 
              <td colspan="3" bgcolor="#D4D0C8"> <div align="left"> 
                  <?
  if($NoResep!=''){
  ?>
                  <input name="Jad" type="button" class="style23" onClick="wCompare = window.open('xsddsss.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>', 
  'wCompare', 'width=580,height=130,left=370,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Proses Ke Penjualan ?">
                  <input type="button" name="fgfg" value="Reset" onClick="location.href='adik_dhimas.php?id=<? echo $id; ?>';" class="style23" style="background:#FFCC33">
                  <? }else{ } ?>
                </div></td>
            </tr>
          </table>
    </form>    </td>
    </tr>  <? } ?>
    <tr>
      <td height="23" colspan="3" bgcolor="#FFFFFF"><div align="center"></div></td>
    </tr>
  </table>
</div>
</body>
</html>
  <?
 } //$nax[jj]; ?>