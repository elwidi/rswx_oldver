<?
session_start();
 include "../konek.php";
include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11  || $a[Level]==3  || $a[Level]==12){
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
 if(!$ii[id]){
 header("Location:./obat.php");
 }
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CCCC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;color: #000000}
.style3 {font-weight: bold}
.style4 {
	color: #000000;
	font-weight: bold;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;color: #000000}
.style8 {font-weight: bold}
.style10 {color: #FFFFFF}

-->
</style>
</head>
<body alink="#ffffff" link="#ffffff" vlink="#ffffff"> 
<div align="center">
 
<form action="simpan_obate.php"> 
   <div align="left">
      <table width="600" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" class="style1">
        <?
   if($ii[IdGol]==777){
		   ?>
        <tr bgcolor="#990000" class="style10"> 
          <? } ?>
          <td height="40" colspan="3"><div align="center"> KOREKSI DATA OBAT <br>
              <?
 ?>
            </div></td>
        </tr>
        <?
	  if($eli=='ela'){
	  ?>
        <tr> 
          <? } ?>
          <td colspan="3"><span class="style3"> Isi Komponen Paket : <? 
		  $kdfjdfd_dfdfdf = mysql_query("SELECT COUNT(id) as kk FROM isipaketdetil WHERE IdPaket='$ii[id]'");
		  $hv = mysql_fetch_array($kdfjdfd_dfdfdf);
		  echo $hv[kk]; 
		  ?> Item  </span></td>
        </tr>
        <tr> 
          <td width="149">KODE OBAT</td>
          <td width="8"><span class="style4">:</span></td>
          <td width="305"><div align="left">
              <input   name="KodeOdbat"  disabled="disabled"  class="style6" value="<? echo $ii[KodeObat]; ?>" size="20" maxlength="50">
              <input  type="hidden"  name="KodeObat"     class="style6" value="<? echo $ii[KodeObat]; ?>" size="20" maxlength="50">
              <input   type="hidden" name="id" value="<? echo $id; ?>">
            </div></td>
        </tr>
        <tr> 
          <td>KODE UL</td>
          <td>:</td>
          <td><div align="left"> </div></td>
        </tr>
        <tr> 
          <td>NAMA OBAT</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="NamaObat" type="text" class="style6" value="<? echo $ii[NamaObat]; ?>" size="30" maxlength="100">
            </div></td>
        </tr>
        <tr> 
          <td>SATUAN</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="Satuan" type="text" class="style6" value="<? echo $ii[Satuan]; ?>" size="20" maxlength="20">
            </div></td>
        </tr>
        <tr> 
          <td>MERK</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <select name="Merk" class="style6" >
                <option value="<? echo $ii[KodeMerk]; ?>">
                <? 
echo strtoupper($ii[NamaMerk]); echo " ( $ii[KodeMerk] )";
 ?>
                </option>
                <?
$jdjudjh = mysql_query("SELECT KodeMerk FROM merk ORDER BY NamaMerk");
while($xx = mysql_fetch_array($jdjudjh)){
?>
                <option value="<? echo $xx[KodeMerk]; ?>">
                <?
$jkdjd_989 = mysql_query("SELECT NamaMerk FROM merk WHERE KodeMerk='$xx[KodeMerk]'");
$v = mysql_fetch_array($jkdjd_989);
echo strtoupper($v[NamaMerk]);
 ?>
                </option>
                <? } ?>
              </select>
            </div></td>
        </tr>
        <tr> 
          <td>HNA</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="Hna" type="text" class="style6" value="<? echo $ii[Hna]; ?>" size="12" maxlength="12">
            </div></td>
        </tr>
        <tr> 
          <td>GOLONGAN</td>
          <td>:</td>
          <td><div align="left"> 
              <select name="IdGol" class="style6">
                <?
if($IdGol==777){
?>
                <option value="777">PAKET</option>
                <? 
}else{
?>
                <option value="<? echo $ii[IdGol]; ?>"><? echo strtoupper($ii[NamaGolongan]); //echo " ($ii[IdGol])"; ?></option>
                <? } ?>
                <?
  $jkpop= mysql_query("SELECT id FROM golobat ");
  while($dv = mysql_fetch_array($jkpop)){
  ?>
                <option value="<? echo $dv[id]; ?>">
                <? 
  $kdikdidkdi = mysql_query("SELECT NamaGolongan FROM golobat WHERE id='$dv[id]'");
  $mn = mysql_fetch_array($kdikdidkdi);
  echo strtoupper($mn[NamaGolongan]);
  ?>
                </option>
                <? } ?>
                <option value="777">PAKET</option>
                <option value="778">NARKOTIKA</option>
                <option value="779">PSIKOTROPIKA</option>
              </select>
              ( <? echo $ii[IdGol]; ?> )</div></td>
        </tr>
        <tr> 
          <td colspan="3" bgcolor="#FFFF66"><div align="center"> 
              <input  type="radio" name="vak" value="1">
              Harga Otomatis 
              <input  type="radio" name="vak" value="0" checked="checked">
              Harga Manual </div></td>
        </tr>
        <?
	 if($a[Level]!=4){
	 $KeyID="$a[KodeBagian]-$id";
  	 ?>
        <?
	  if($ada==5){
	  ?>
        <tr bgcolor="#CCCCCC"> 
          <? } ?>
          <td>MIN</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input    name="Min" type="text" class="style6" value="<? echo $ii[Min]; ?>" size="5" maxlength="5">
              <input type="hidden" name="id" value="<? echo $ii[id]; ?>">
            </div></td>
        </tr>
        <?
  if($ada==5){
	  ?>
        <tr bgcolor="#CCCCCC"> 
          <? } ?>
          <td>MAX</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="Max" type="text" class="style6" value="<? echo $ii[Max]; ?>" size="5"  maxlength="5">
            </div></td>
        </tr>
        <? 
	 }else{
	 ?>
        <tr> 
          <td>MIN</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="Min" type="text" class="style6" value="<? echo $ii[Min]; ?>" size="5" maxlength="5">
            </div></td>
        </tr>
        <tr> 
          <td>MAX</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> 
              <input  name="Max" type="text" class="style6" value="<? echo $ii[Max]; ?>" size="5"  maxlength="5">
            </div></td>
        </tr>
        <? } ?>
        <tr> 
          <td>EXP</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"><span class="style15 style2 style8  style3"> 
              <?
		$prt = explode("-",$ii[Exp]);
//		echo "TEST : $prt[0]-$prt[1]-$prt[2]";
$tanggal = $prt[0]-0;
$bulane =$prt[1]-0;
 		?>
              <select name="Tgl" class="style1" id="Tgl">
                <?
		if($tanggal>0 && $bulane>0 && $prt[2]>0){ 
		?>
                <option value="<? echo $tanggal; ?>"><? echo $tanggal; ?></option>
                <? } ?>
                <option value="<? echo  date("d")-0; ?>"><? echo date("d")-0; ?></option>
                <?
		 
$ttg= 1;
while($ttg<32){
?>
                <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
                <? $ttg++; } ?>
              </select>
              / 
              <select name="Bln" class="style1" id="Bln">
                <?
		if($tanggal>0 && $bulane>0 && $prt[2]>0){ 
		?>
                <option value="<? echo $bulane; ?>"><? echo $bulane; ?></option>
                <? }else{?>
                <option value="<? echo date("m")-0; ?>"><? echo date("m")-0; ?></option>
                <? } ?>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
              / 
              <select name="Thn" class="style1" id="Thn">
                <?
  if($tanggal>0 && $bulane>0 && $prt[2]>0){?>
                <option value="<? echo $prt[2]; ?>"><? echo $prt[2]; ?></option>
                <? }?>
                <?
  $tar = 2012;
  while($tar<2016){
  ?>
                <option value="<? echo $tar; ?>"><? echo $tar; ?></option>
                <? $tar++; } ?>
              </select>
              </span></div></td>
        </tr>
        <tr> 
          <td>STOK AWAL</td>
          <td><span class="style4">:</span></td>
          <td><div align="left"> <span class="style15 style2 style8  style3"> 
              <input name="StokAwal" type="text" class="style1" value="<? echo $ii[StokAwal]; ?>" size="12" maxlength="15" >
              </span> </div></td>
        </tr>
        <tr> 
          <?
  $kddjdfd = mysql_query("SELECT COUNT(id) AS jj FROM settingsatuan WHERE IdBarang='$id'");
  $k = mysql_fetch_array($kddjdfd);
$IK_KK2 = mysql_query("SELECT count(id) as jj FROM obatsupplier WHERE IdObat='$id'");
	 $ks_02 = mysql_fetch_array($IK_KK2);   ?>
          <td colspan="3" bgcolor="#000000"><div align="center"> 
              <input   name="fgfg2" type="button" class="style6"  
	onClick="wCompare = window.open('bhg.php?id=<? echo $id; ?>', 
  'wCompare', 'width=680,height=640,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	  value="Setting satuan Barang : (<? echo $k[jj];?>)">
              <input type="button" name="ffgf4"  value="History" class="style6" style="background:#99FFCC" onClick="wComparec3 = window.open('juj_D.php?id=<? echo $id; ?>', 
  'wComparec3', 'width=680,height=240,left=200,Top=210,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparec3.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
              <input   name="fgfg2" type="button" class="style6"  
onClick="wCompare = window.open('bh5g.php?id=<? echo $id; ?>', 
  'wCompare', 'width=680,height=640,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	  value="Setting supplier : <? 
	   echo "($ks_02[jj])"; ?>" >
            </div></td>
        </tr>
        <?
		   if($ii[IdGol]==777){
		   ?>
        <tr bgcolor="#990000"> 
          <? } ?>
          <td colspan="3"><div align="center"> <span class="style10"> 
              <input  name="ffg" type="submit" class="style6" value="Simpan"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
		  <? if($a[Level]==12){?> disabled="disabled"<? } ?>>
              <input type="button" name="fggf"  onClick="wCompare = window.open('d3e_0.php?id=<? echo $id; ?>', 
  'wCompare', 'width=680,height=420,left=470,Top=10,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Isikan Komponen Paket" class="style6">
              <input type="button" name="fgfgf" value="Adjustment Stok" class="style6"   onClick="wCompare4e = window.open('../rame/9i0_m.php?id=<? echo $id; ?>', 
  'wCompare4e', 'width=480,height=320,left=470,Top=10,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4e.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
              <input type="button" name="ffg" value="Hapus" onDblClick="location.href='a02.php?id=<? echo $id; ?>';"  style="background:#FFFF00"class="style6">
              <input  name="fgfg"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" class="style6"  onClick="window.close()" value="Selesai">
              </span> 
              <!--  <input  name="ffg" type="button" class="style6" onClick="location.href='mas_sup.php?id=<? //echo $id; ?>';" value="Sett supplier"> -->
            </div></td>
        </tr>
      </table>
  </div>
</form>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
} ?>
