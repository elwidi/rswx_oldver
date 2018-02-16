<?
session_start();
include "../konek.php";
include "../ceke.php";
 //////////////////////
$KDJFKDJFKD2 = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk2 = mysql_fetch_array($KDJFKDJFKD2); 
if(!$kk2[id]){
echo "RECORD DATA TIDAK LENGKAP";
}else{
$jhdjhjd_Sdsds = mysql_query("SELECT id,NamaSuplier FROM supplier where id='$IdSupplier'");
$yahp = mysql_fetch_array($jhdjhjd_Sdsds);
$KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$ss = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD); 
include "no_po.php"; 
 

///////////////////
if($dik_dimas[delapanbelas]==1){?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#33FF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('searc2xzzz.php', 
			{
				/*	parameter "parse" pada script ini sebenarnya adalah deklarasi ulang
					dari event parse di library jquery-autocomplete.
					fungsinya adalah untukmenghandle data yang diterima, karena data yang
					diterima adalah Ajax maka penanganannya adalah sebagai berikut: */
				parse: function(data){ 
					var parsed = [];
					for (var i=0; i < data.length; i++) {
						parsed[i] = {
							data: data[i],
							value: data[i].NamaSupplier // nama field yang dicari
							 // nama field yang dicari
						};
					}
					return parsed;
				},
				/*	pada parameter formatItem, kita dapat mengcustom tampilan yang akan muncul ketika 
					ada result dari hasil pencarian autocomplete, kalau formatItem ini tidak di deklarasikan
					maka hanya akan muncul berupa daftar nama yang terkesan kaku */
				formatItem: function(data,i,max){
					var str = '';
					/* 	tampilkan foto, apabila foto kosong, maka tampilkan default unknown image
						berapapun lebar foto ini, tingginya disesuaikan menjadi 50px agar tidak menghabiskan tempat */
					 
					
					/*  variable "data" merupakan variable dengan tipe json atau array assosiatif javascript 1 dimensi 
						oleh karena itu dalam mengambil setiap pada "data" hanya dengan "data.nama_property" */
str += '<u>'+data.NamaSuplier+'</u><br />PO.'+data.Alamat+'<br />REC : '+data.id;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="a10_m.php?id=<? echo $id; ?>&IdSupplier=" + Result;
			}
		);
	});
  </script><?
  include "ccc212.php";
  ?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left"><?
if($yahp[id]){
?>
<form action="hha_a.php">
<? } ?><table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="886" colspan="3"><div align="left" class="style1"> HALAMAN FOLLOW UP DATA PO
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="121">NO FARMASI/ASAL </td>
<td width="8">:</td>
<td width="336"><div align="left">
<? echo $kk2[NoPo]; ?>
</div></td> 
</tr>
<?
$kdkdkdkdkdk = mysql_query("SELECT COUNT(id) as kk FROM polog77x WHERE IdPo='$id'");
$up = mysql_fetch_array($kdkdkdkdkdk);
if($up[kk]>0){
?>
<tr>
<td>PANGGIL PO ASAL</td><td>:</td><td><div align="left">
<select name="IdP" class="style1">
<option value="-">--Ada <?  echo $up[kk]; ?> PO TERKAIT--</option>
<?
$kdkdkdkdkddddk = mysql_query("SELECT id,IdPo FROM polog77x WHERE IdPo='$id'");
while($yy = mysql_fetch_array($kdkdkdkdkddddk)){
?>
<option value="<? echo $yy[id]; ?>" onClick="location.href='a10_m2.php?id=<? echo $yy[IdPo]; ?>&IdPo=<? echo $yy[id]; ?>';"><?
$ta_dsdd = mysql_query("SELECT NamaSupplier,NoPo FROM polog77x where id='$yy[id]'");
$uu = mysql_fetch_array($ta_dsdd);
echo $uu[NoPo]; echo " &nbsp;&nbsp;";
echo "$uu[NamaSupplier]<br>"; ?></option>
<? } ?>
</select>
</div></td>
</tr>
<? } ?>
<?
if($ss[id]){
?>
<tr>
<td>REC</td><td>:</td><td><div align="left"><?
echo "#$ss[id]";
?></div></td>
</tr><tr>
<td>NOMER PO</td><td>:</td><td><div align="left">
<?
echo $ss[NoPo];
?></div></td>
</tr>
<tr>
<td>NAMA SUPPLIER</td><td>:</td><td><div align="left"><?
echo $ss[NamaSupplier]; 
?></div></td>
</tr><?
   }elseif($IdSupplier>0){ ?> 
 <tr>
 <td>PO BARU</td><td>:</td><td><div align="left"><?
 echo $NoPoX;
 ?></div></td>
 </tr>
 <? } ?>
<?
if($ss[id]){ }else{
?><tr>
<td>PILIH SUPPLIER</td><td>:</td><td><div align="left">
<?
if($yahp[id]){
echo ucfirst(strtolower($yahp[NamaSuplier]));
}else{
?><input name="text" type="text" class="style1" id="suggest" />
<?  } ?> 
</div></td>
</tr>
<tr>
<td>PANGGIL PO</td><td>:</td><td><div align="left">
 <input name="text" type="text" class="style1" id="suggest2" />
 </div></td>
</tr>
<? } ?>
<tr>
  <td colspan="3"><div align="left"><input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdSupplier" value="<? echo $IdSupplier; ?>">
<input type="hidden" name="IdPo" value="<? echo $ss[id]; ?>">
 <input type="submit" value="Submit" <? if($IdSupplier>0){ }else{ ?> disabled="disabled"<?  } ?> ><?
 if($yahp[id] ||  $IdPo>0){
?>
<input  type="button" name="dfdfd" value="Reset" onClick="location.href='a10_m.php?id=<? echo $id; ?>';">
<? } ?>
 <input  type="button" name="dfddfdfd" value="Tutup" onClick="window.close()"> 
  </div></td>
  </tr>
</table>
 </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="21" rowspan="2" bgcolor="#666666"><span class="style2">NO </span></td><td width="254" rowspan="2" bgcolor="#666666"><span class="style2">NAMA BARANG  </span></td>
<td width="42" rowspan="2" bgcolor="#666666"><span class="style2"> QTY</span></td>
<td colspan="3" bgcolor="#666666"><span class="style2">SATUAN </span></td>
<td width="92" rowspan="2" bgcolor="#666666"><span class="style2"> OPR</span></td>
<td width="96" rowspan="2"  colspan="5" bgcolor="#666666"><span class="style2"> TGL-JAM</span></td>
</tr>
<tr>
<td width="136" bgcolor="#666666"><span class="style2">NAMA </span></td>
<td width="57" bgcolor="#666666"><div align="center" class="style2">ISI</div></td>
<td width="79" bgcolor="#666666"><span class="style2">TOT ISI </span></td>
</tr>
<?
$nomer=1;
$ldfdklfd_Dfd = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id'");
while($nn = mysql_fetch_array($ldfdklfd_Dfd)){
$pc = $nomer%2;
if($pc==1){
$warna='bgcolor="#FFCC99"';
}else{
$warna='';
}
 //
$jh_dddd = mysql_query("SELECT NoPo,NamaSupplier FROM polog77x WHERE id='$bp[IdPox]'");
$ii = mysql_fetch_array($jh_dddd);
$kdfdfd_Dfdfd =  mysql_query("SELECT id,IdPox FROM podetil77x WHERE IdAsal='$nn[id]'");
$bp = mysql_fetch_array($kdfdfd_Dfdfd); 
if(!$bp[id]){
?><tr <? echo $warna; ?> valign="top">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $nn[NamaBarang]; ?></div></td>
  <td><div align="center"><? echo number_format($nn[Qty],2); ?></div></td>
  <td><div align="left"><? echo $nn[NamaSatuan]; ?></div></td>
   <td><div align="center"><? echo number_format($nn[Pengali],2); ?></div></td>
   <td><div align="center"><? echo number_format($nn[TotQty],2); ?></div></td>
   <td><div align="left"><? echo ucfirst(strtolower($nn[Opr])); ?></div></td>
   <td><div align="left"><? echo $nn[TglJam]; ?></div></td>
   <td><div align="left">
   <?
   if($ss[id] && $ss[IdSupplier]){
   ?><input type="checkbox" name="Ambil" <?  if($bp[id]){ ?>  disabled="disabled" checked="checked"<? } ?> value="1"
    onClick="location.href='d_Ddd12.php?fito=dila&id=<? echo $id; ?>&IdPo=<? echo $IdPo; ?>&Detil=<? echo $nn[id]; ?>';">
<? } ?>   </div></td>
 
</tr>
<?
$nomer++; 
}
 } 
?>
<tr>
  <td colspan="8" bgcolor="#666666"><div align="center"><strong>&nbsp;</strong></div></td>
  </tr>
<?

?>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>
<? } ?>