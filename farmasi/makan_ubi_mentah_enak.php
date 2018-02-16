<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./de7.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
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
.style2{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
 .style3{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	color: #993300;
}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
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
 <form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tR>
<td width="1076" colspan="3"><div align="left" class="style1">
INSTALASI FARMASI RSIA YADIKA<br />
FORM PERMINTAAN STOK<span class="style5"> .</span></div></td>
</tR>
<tr valign="top">
<td  colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="119" height="23">Tanggal</td>
 <TD width="8">:</TD>
 <td width="877"><div align="left"><? echo "$kk[Tgl] ";
 $bln=$kk[Bln]; $thn1=$kk[Thn];
 include "../bulan.php";
  ?></div></td> 
 </tr>
  <tr>
 <td>No Order Farmasi</td><td>:</td><td><div align="left"><? echo $kk[NoPo]; ?></div></td>
 </tr>
  <?
$kdkdkdkddfgfgfgfgfkdk = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$yg = mysql_fetch_array($kdkdkdkddfgfgfgfgfkdk);
if($yg[id]){
?>
<tr>
<td>No Po</td><td>:</td><td><div align="left"><?
echo $yg[NoPo];
?></div></td> 
</tr>
<?
}
?>
 <tr>
 <td>Ke Bagian</td><TD>:</TD><td><div align="left">Farmasi Gudang </div></td>
 </tr><?
if($anak==3){

}else{
?>
 <?
$kdkdkdkdkdk = mysql_query("SELECT COUNT(id) as kk FROM polog77x WHERE IdPo='$id'");
$up = mysql_fetch_array($kdkdkdkdkdk);
if($up[kk]>0){
?>
<tr class="style2">
<td>Po Dari Frm Gdg </td>
<td>:</td><td><div align="left">
<select name="IdP" class="style2">
<option value="-">--Ada <?  echo $up[kk]; ?> Po Terkait--</option>
 <?
$kdkdkdkdkddddk = mysql_query("SELECT id,IdPo FROM polog77x WHERE IdPo='$id'");
while($yy = mysql_fetch_array($kdkdkdkdkddddk)){
?>
<option value="<? echo $yy[id]; ?>"  onClick="location.href='makan_ubi_mentah_enak.php?id=<? echo $id; ?>&IdPo=<? echo $yy[id]; ?>';"><?
$ta_dsdd = mysql_query("SELECT NamaSupplier,NoPo FROM polog77x where id='$yy[id]'");
$uu = mysql_fetch_array($ta_dsdd);
echo $uu[NoPo]; echo " &nbsp;&nbsp;";
echo "$uu[NamaSupplier]<br>"; ?></option>
<? } ?>
</select>
</div></td>
</tr>
<tr>
<td>Cari Obat</td><td>:</td><td><div align="left">
<input type="text" name="NamaObat" maxlength="100"  size="20" class="style3">
<input type="hidden" name="dimas" value="adik">
<input type="hidden" value="<? echo $id; ?>" name="id">
</div></td>
</tr>
 
<tr class="style2">
  <td colspan="3"><div align="left">
  <input name="kk" type="submit" class="style3" value="Submit" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
   <?
  if($dimas=='adik'){
  ?>
  <input name="fgfgf" type="button" class="style5" onClick="location.href='makan_ubi_mentah_enak.php?id=<? echo $id; ?>';" value="Reset">
  <?
  }
  ?>
  <input name="fgfgf" type="button" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3" onClick="location.href='x23.php?id=<? echo $id; ?>';" value="Kembali">
  <input name="fgfgf" type="button" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3" onClick="location.href='XW_9.php';" value="List Order Farmasi"> 
    <input name="fgfgf" type="button" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3" onClick="location.href='semoga_ela_cepet_sembuh.php';" value="List Order Gudang">
	<input name="fgfgf" type="button" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3" onClick="location.href='mari_bertobat.php?id=<? echo $id; ?>';" value="Tampilkan Yang Tersseting">
	<?
if($IdPo>0){
?>
<input name="fgfgf" type="button" class="style3" style="background-color:#66CC00" 
  onClick="wComparecddd = window.open('cX3.php?kembang=<? echo $kembang; ?>&id=<? echo $IdPo; ?>', 
  'wComparecddd', 'width=980,height=500,left=370,Top=56,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecddd.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Terima Barang">
<?
}	
	?>
	<input onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="fgfgf" type="button" class="style3" onClick="location.href='index.php';" value="Depan">
  </div></td> 
  </tr>
<tr class="style2">
  <td colspan="3" bgcolor="#FFFF66"><a href="makan_ubi_mentah_enak.php?id=<? echo $id; ?>&anak=3" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><em><strong> Hilangkan Tampilan Tombol &amp; Tampilkan Nilai Harga Klik Disini </strong></em></a></td>
</tr>
<? } ?>
<?
} //end of if($anak==3
?>
 </table>
</div></td>
</tr>
<tr valign="top">
  <td  colspan="3"><div align="left">
    <table border="1" cellpadding="0" cellspacing="0"  >
      <tr class="style3">
        <td width="20" bgcolor="#ECE9D8"><strong>No</strong></td>
        <td width="189" bgcolor="#ECE9D8"><strong>NamaBarang</strong></td>
        <td width="53" bgcolor="#ECE9D8"><strong>Jumlah<br>
          Diminta</strong></td>
        <td width="53" bgcolor="#ECE9D8"><strong>Jumlah<br>
          Di Beri</strong></td>
        <td width="46" bgcolor="#ECE9D8"><strong>Satuan</strong></td>
        <?
  if($anak==3){
  ?>
        <td>Harga</td>
        <td>Total</td>
        <?
  }
  ?>
        <td width="161" bgcolor="#ECE9D8"><strong>Keterangan</strong></td>
   <!-- <td width="172" bgcolor="#ECE9D8"><strong>Merk/Pabrik</strong></td>   -->
        <td width="172" bgcolor="#ECE9D8"><strong>Pbf</strong></td>
        <td width="172" bgcolor="#ECE9D8"><strong>No Po</strong></td>
      </tr>
      <?
    $nomer=1;
    if($dimas=='adik'){
     $kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' AND NamaBarang like '$NamaObat%'  ORDER BY NamaBarang");
  }elseif($IdPo>0){
      $kkkfg = mysql_query("SELECT * FROM podetil77x WHERE IdPox='$IdPo' ORDER BY NamaBarang");
  }else{
  //  $kkkfg = mysql_query("SELECT * FROM podetil77x WHERE IdPo77='$id'   ORDER BY Merk desc");  
    $kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' ORDER BY NamaBarang Asc");  
   }
 while($aa = mysql_fetch_array($kkkfg)){ 
 $no = $nomer%2;
 if($no==1)
{
$warna=' bgcolor="#CCFFFF"';
}else{
$warna='';
}
if($IdPo>0){
  $kdfdfd_Dfdfd =  mysql_query("SELECT id,IdPox,Qty FROM podetil77x WHERE id='$aa[id]' ");  
}else{
  $kdfdfd_Dfdfd =  mysql_query("SELECT id,IdPox,Qty FROM podetil77x WHERE IdAsal='$aa[id]'");  
}
$bp = mysql_fetch_array($kdfdfd_Dfdfd); 
//
$jh_dddd = mysql_query("SELECT NoPo,NamaSupplier FROM polog77x WHERE id='$bp[IdPox]'");
$ii = mysql_fetch_array($jh_dddd);
if($aa[Stat]==2){
$clas='class="style5"';
}else{
$clas='class="style3"';
 }
 ?>
      <tr  <?  echo $clas; echo $warna; 
 if($bp[id]){ }else{?>
 onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd34343d = window.open('berusaha_lebih_taqwa.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&IdDetil=<? echo $aa[id]; ?>&id=<? echo $id; ?>', 
  'wComparecdd34343d', 'width=580,height=400,left=70,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34343d.focus();" <? } ?> valign="top">
        <td><div align="center"><? echo $nomer; ?></div></td>
        <td><div align="left">
          <? if($aa[Stat]==2){
 ?>
          <font color="#990000"><i>
            <?   echo ucfirst(strtolower($aa[NamaBarang]));
 ?>
            </i></font>
          <? 
 }else{
 echo ucfirst(strtolower($aa[NamaBarang]));
 }  ?>
        </div></td>
        <td><div align="center"><? echo number_format($aa[Qty]); ?></div></td>
        <td><div align="center">
          <? if($bp[Qty]>0){
 echo number_format($bp[Qty]);
 }else{
 echo "-";
 }  ?>
        </div></td>
        <td><div align="left"><? echo ucfirst(strtolower($aa[NamaSatuan])); ?></div></td>
        <?
 if($anak==3){?>
        <td><div align="right">
          <?
 echo number_format($aa[Harga]);
 ?>
        </div></td>
        <td><div align="right">
          <?
 echo number_format($aa[Total]);
 $tot = $tot + $aa[Total];
 ?>
        </div></td>
        <? }
 ?>
        <td><div align="left">
          <?
  	$kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT * FROM ket_det_po WHERE IdDetil='$aa[id]'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);
 echo ucfirst(strtolower($yape[Keterangan]));
 ?>
        </div></td>
       <? /* ?>  <td><div align="left">
        
//$kjdkjdkfd_DFd = mysql_query("SELECT NamaMerk,id FROM dataobat WHERE id='$aa[IdBarang]'");
//$bv = mysql_fetch_array($kjdkjdkfd_DFd);
//
//$kddkdikd = mysql_query("UPDATE podetil77x SET Merk='$bv[NamaMerk]' WHERE IdBarang='$bv[id]'");
//$kddkdikdd = mysql_query("UPDATE podetil77 SET Merk='$bv[NamaMerk]' WHERE IdBarang='$bv[id]'");
//
 echo ucfirst(strtolower($aa[Merk]));   
?>
        </div></td>   <? */ ?>
        <td><div align="left">
            <?
echo ucfirst(strtolower($ii[NamaSupplier]));
?>
        </div></td>
        <td><div align="left">
          <?
echo $ii[NoPo]; 
?>
        </div></td>
      </tr>
      <?
 $nomer++; } ?>
      <?
 if($anak==3){
 ?>
      <tr>
        <td colspan="6" class="style1"><div align="center">Total</div></td>
        <td class="style1"><div align="right">
          <?
 echo number_format($tot);
 ?>
        </div></td>
      </tr>
      <?
 }
 ?>
      <tr valign="top">
        <td colspan="9"><div align="center">
            <table width="581" border="0" cellpadding="0" cellspacing="0">
              <tr valign="top">
                <td width="242"><div align="left">
                    <table border="0" cellpadding="2" cellspacing="2" class="style2">
                      <tr>
                        <td width="168">Di Buat Oleh</td>
                      </tr>
                      <tr>
                        <td height="49">&nbsp;</td>
                      </tr>
                      <tr>
                        <td> (Putri intan sari, Apt) </td>
                      </tr>
                    </table>
                </div></td>
                <td width="254"><div align="right">
                    <table border="0" cellpadding="2" cellspacing="2" class="style2">
                      <tr>
                        <td width="198"><div align="center">Pengendali Stok </div></td>
                      </tr>
                      <tr>
                        <td height="50"><div align="center"></div></td>
                      </tr>
                      <tr>
                        <td><div align="center">(Nova Rozayana, S Si Apt </div></td>
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
</table>
</form>
 </div>
 </body>
 </html>
 <?
 }
 ?>