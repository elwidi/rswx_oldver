<?
session_start();
include "../konek.php";
 include "../ceke.php";
include "../alamat.php";

$jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if( $a[Level]==3 ){
include "../terbilang.php";
?>
<html>
<head><script language="JavaScript">
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
	</script><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}.style14 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="1">
  <tr valign="top"> 
    <td width="158"><div align="left"> 
        <table width="379" border="0" cellpadding="0" cellspacing="0" class="style14">
          <tr   > 
            <td width="275" colspan="3" ><div align="left"> 
                <table width="400" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="84"> <div align="center"><span class="style1"><img   src="../gb/gb.png" alt="logo" width="45" height="45"></span></div></td>
                    <td width="300" colspan="3"><span class="style14"> 
                      <?
	echo strtoupper($fkd[Nama]); 
	?>
                      <br>
                      <? echo strtoupper($fkd[Jalan]); ?><br />
                      Telp. <? echo $fkd[Telp]; ?>.<br>
                      FAX : <? echo $fkd[Fax]; ?> </span> </td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr valign="top"> 
    <td colspan="3"><div align="left"> 
        <table width="691" border="1" cellpadding="1" cellspacing="0"  >
          <tr valign="top" > 
            <td width="365"><div align="left"> 
                <table width="365" border="0" cellpadding="1" cellspacing="1">
                  <tr valign="top"        >
                    <?
$jen = substr(strtoupper($ii[NamaPer]),0,3);
 ?>
                    <td width="355"   colspan="3"><div align="center" class="style1"> 
                        <? 
  ?>
                        KWITANSI
                        <?
 // echo $ii[NamaPer];
 ?>
                      </div></td>
                  </tr>
                  <tr valign="top"> 
                    <td colspan="3" valign="top"> <div align="left"> 
                        <table border="0" cellpadding="1" cellspacing="1" class="style14">
                          <tr> 
                            <td>Group</td>
                            <td>:</td>
                            <td><div align="left">
                                <? 
echo ucfirst(strtolower($hh[NamaPer]));
?>
                              </div></td>
                          </tr>
                          <tr valign="top"> 
                            <td width="108">NO</td>
                            <td width="3">:</td>
                            <td width="238"><div align="left"><? echo "KWT:$id"; ?></div></td>
                          </tr>
                          <tr valign="top"> 
                            <td>Sudah terima dari </td>
                            <td>:</td>
                            <td><div align="left"><? echo $hh[Pembayar]; ?></div></td>
                          </tr>
                          <tr valign="top"> 
                            <td>Uang Sejumlah </td>
                            <td>:</td>
                            <td><div align="left">
                                <?
 if($ii[KodePer]==83){
   $nil = $hh[Asli];
 }else{
    $nil = $hh[Db]+$hh[Kk]+$hh[Jam]+$hh[Tunai];
 }  $kal= terbilang($nil);
   echo $kal;
//   echo number_format($nil);
   ?>
                              </div></td>
                          </tr>
                          <tr valign="top"> 
                            <td>Untuk Pembayaran </td>
                            <td>:</td>
                            <td>Biaya Pelayanan ( <? echo $ii[NoPasien]; ?>) 
                              <? 
   echo ucfirst(strtolower($ii[NamaPasien])); 
   ?>
                              <br> 
                              <?
   echo ucfirst(strtolower($ii[Bagian])); echo "  ";  echo ucfirst(strtolower($ii[NamaDokter]));
   ?>
                            </td>
                          </tr>
                        </table>
                      </div></td>
                  </tr>
                  <tr class="style14"> 
                    <td colspan="3" valign="top"><div align="right">Bekasi, 
                        <?
   echo date("d"); $bln=date("m"); $thn1 =date("Y");
   include "../bulan.php";
   ?>
                      </div></td>
                  </tr>
                  <tr valign="top"> 
                    <td colspan="3" valign="top"><div align="left"> 
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr valign="top"> 
                            <td><div align="left"> 
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tr class="style14"> 
                                    <td width="80"> Jumlah (Rp) :</td>
                                    <td width="110" valign="top"><div align="left"> 
                                        <table border="1" cellpadding="1" cellspacing="1" class="style14">
                                          <tr valign="top"> 
                                            <td width="101"><div align="left">
                                                <?
	 echo number_format($hh[Jam]); 
	 ?>
                                              </div></td>
                                          </tr>
                                        </table>
                                      </div></td>
                                  </tr>
                                </table>
                              </div></td>
                          </tr>
                          <tr valign="top"> 
                            <td><hr></td>
                          </tr>
                          <tr valign="top"> 
                            <td><div align="left"> 
                                <table width="204" border="0" cellpadding="1" cellspacing="1" class="style14">
                                  <? 
 	 if($hh[Db]>0){
	 ?>
                                  <tr valign="top"> 
                                    <td>Debet</td>
                                    <td>:</td>
                                    <td><div align="right"><? echo number_format($hh[Db]); ?></div></td>
                                  </tr>
                                  <? }  
	  if($hh[Jam]>0){
	 ?>
                                  <tr   valign="top"> 
                                    <td>Jaminan</td>
                                    <td>:</td>
                                    <td><div align="right"><? echo number_format($hh[Jam]); ?></div></td>
                                  </tr>
                                  <? } ?>
                                </table>
                              </div></td>
                          </tr>
                        </table>
                      </div></td>
                  </tr>
                  <tr valign="top" class="style14"> 
                    <td colspan="3" valign="top"><div align="right">( <? echo $a[Nama]; ?> 
                        )</div></td>
                  </tr>
                </table>
              </div></td>
            <td width="310" valign="top"><div align="left"> 
                <table border="0" cellpadding="1" cellspacing="1" class="style14">
                  <tr valign="top"> 
                    <td width="17" bgcolor="#FFFFFF"><strong>No</strong></td>
                    <td width="205" bgcolor="#FFFFFF"><strong>Pelanyanan</strong></td>
                    <td width="66" bgcolor="#FFFFFF"><strong>Jumlah (Rp)</strong></td>
                  </tr>
                  <?
  $nomer=1;
 $kdjfkdjfd = mysql_query("SELECT SUM(JmlHargaBeli) AS hh FROM jualobat WHERE RegId='$ii[RegId]'");
$uj = mysql_fetch_array($kdjfkdjfd);
   $nomer = $nomer;
  $dflklfd = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$ii[RegId]'");
  while($p = mysql_fetch_array($dflklfd)){
  ?>
                  <tr valign="top"> 
                    <td><div align="center"><? echo $nomer; ?></div></td>
                    <td><div align="left"><? echo ucfirst(strtolower($p[NamaBiaya])); 
  ?></div></td>
                    <td><div align="right"> 
                        <?
   $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='L.$p[id]'");
$hg = mysql_fetch_array($kjdfkdfd_DFdf);
echo number_format($hg[Jam]);
$tot_1 = $tot_1 + $hg[Jam];

  ?>
                      </div></td>
                  </tr>
                  <?
  $nomer++; } 
   $dflklfd2 = mysql_query("SELECT * FROM txnjalan WHERE RegId='$ii[RegId]'");
  while($p2 = mysql_fetch_array($dflklfd2)){
  ?>
                  <tr valign="top"> 
                    <td><div align="center"><? echo $nomer; ?></div></td>
                    <td><div align="left"><? echo ucfirst(strtolower($p2[NamaBiaya])); ?></div></td>
                    <td><div align="right"><?
					 
    $kjdfkdfd_DFdf2c = mysql_query("SELECT * from pecah_kwt where IdDetil like '%.$p2[id]'");
$hg2c = mysql_fetch_array($kjdfkdfd_DFdf2c);
echo number_format($hg2c[Jam]);
$tot_2c = $tot_2c + $hg2c[Jam];
  ?> </div></td>
                  </tr>
                  <?
  $nomer++; }  
  $dflklfd2x = mysql_query("SELECT * FROM txnugd WHERE IdPasien='$ii[id]'");
  while($p2x = mysql_fetch_array($dflklfd2x)){
  ?>
                  <tr valign="top"> 
                    <td><div align="center"><? echo $nomer; ?></div></td>
                    <td><div align="left"><? echo ucfirst(strtolower($p2x[NamaBiaya])); ?> 
                      </div></td>
                    <td><div align="right"> 
                        <?
    $kjdfkdfd_DFdf2 = mysql_query("SELECT * from pecah_kwt where IdDetil='$p2x[id]'");
$hg2 = mysql_fetch_array($kjdfkdfd_DFdf2);
echo number_format($hg2[Jam]);
$tot_2 = $tot_2 + $hg2[Jam];
  ?>
                      </div></td>
                  </tr>
                  <?
  $nomer++; }   
  if($uj[hh]>0){ ?>
                  <tr valign="top"> 
                    <td><div align="center"><? echo $nomer; ?></div></td>
                    <td>Obat</td>
                    <td><div align="right"> 
                        <?
    $kjdfkdfd_DFdf3 = mysql_query("SELECT * from pecah_kwt where IdDetil='F.$ii[id]'");
$hg3 = mysql_fetch_array($kjdfkdfd_DFdf3);
echo number_format($hg3[Jam]);
  ?>
                      </div></td>
                  </tr>
                  <?
  }
  ?>
                  <tr> 
                    <td colspan="2"><div align="center"><strong>TOTAL</strong></div></td>
                    <td><div align="right"><strong>
                        <? $nile = $hg3[Jam]+$tot_1+$tot_2+$tot_2c;
					echo number_format($nile);
					 ?>
                        </strong></div></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
      </div></td>
  </tr>
</table>
<?
$TglJam=date("d.m.Y-H:i:s");
$kdfkdjfd_DFdfd  = mysql_query("INSERT INTO  `tanda_cetak_kwt` (`id`, `TglJam`, `Kwt`) VALUES (NULL, '$TglJam','$id')");
 $djdjjd = mysql_query("SELECT COUNT(id) AS hh FROM tanda_cetak_kwt WHERE Kwt='$id'");
$hhh = mysql_fetch_array($djdjjd);
$depana =1;
while($depana<=$hhh[hh]){
echo "*";
$depana++; }
?>
</body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>