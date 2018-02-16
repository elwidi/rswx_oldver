<?
session_start();
include "../salaman.php";
include "../konek.php";
 $Tgl=$_GET["tgl1"]-0;
 $Bln =$_GET["bln1"]-0;
 $Thn= $_GET["thn1"];
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#ABFCDA';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="763" colspan="3"><div align="left">
<span class="style1">SETORAN KASIR</span><br />
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="94">Tgl / Sift</td>
<td width="8">:</td>
<td width="208"><div align="left">
<?
echo "$tgl1 ";
$bln = $bln1;
$thn1=$thn1; 
include "../bulan.php"; 
  
  echo " ( <i>"; if($Shift==1){
  echo "Satu";
  }elseif($Shift==2){
  echo "Dua";
  }elseif($Shift==3){
  echo "Tiga";
  }else{
  echo "Semua";
  }
  ?> ) </i>
</div></td>
</tr>
<tr>
  <td>Nama Kasir </td>
  <td>:</td>
  <td><div align="left"><?
  echo ucfirst(strtolower($a[Nama])); 
  ?></div></td>
</tr>
<tr>
  <td colspan="3"><a  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="index.php" style="text-decoration:none">Kembali Ke Halaman Depan</a></td>
  </tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="965" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="17" bgcolor="#ECE9D8"><strong>No</strong></td>
  <td width="28" bgcolor="#ECE9D8"><strong>No Kwt</strong></td>
  <td width="30" bgcolor="#ECE9D8"><div align="center"><strong>No RM</strong></div></td>
  <td width="94" bgcolor="#ECE9D8"><strong>Nama Pasien</strong></td>
  <td width="93" bgcolor="#ECE9D8"><strong>Jns Bayar</strong></td>
  <td width="107" bgcolor="#ECE9D8"><strong>Poli/Bagian</strong></td>
  <td width="49" bgcolor="#ECE9D8"><div align="right"><strong>Kredit</strong></div></td>
   <td width="49" bgcolor="#ECE9D8"><div align="right"><strong>Debet</strong></div></td>
  <td width="49" bgcolor="#ECE9D8"><div align="right"><strong>Tunai</strong></div></td>
   <td width="59" bgcolor="#ECE9D8"><div align="right"><strong>Jaminan</strong></div></td> <td width="47" bgcolor="#ECE9D8"><div align="right"><strong>Charge</strong></div></td>
  <td width="43" bgcolor="#ECE9D8"><div align="right"><strong>Bulat</strong></div></td>
              <td width="220" bgcolor="#FFFFCC">Keterangan</td>
  </tr>
  <?
  $nomer=1;
  if($Shift>=1 && $Shift<=3){
  $kdjfkdjfd = mysql_query("SELECT * FROM kwitansirj WHERE NamaHari LIKE '$a[id]-$Shift-%' AND TglBayar='$Tgl' AND BlnBayar='$Bln' AND ThnBayar='$Thn' order by KodeBagian,TypeBayar,id desc");  }else{
  $kdjfkdjfd = mysql_query("SELECT * FROM kwitansirj WHERE  TglBayar='$Tgl' AND BlnBayar='$Bln' AND ThnBayar='$Thn' order by KodeBagian,TypeBayar,id  desc");
  }
  while($zz = mysql_fetch_array($kdjfkdjfd)){
  $pca = $nomer%2;
  if($pca==1){
  $warna='bgcolor="#FFFFCC"';
  }else{
  $warna='';
  }
  if($Jb!=$zz[KodeBagian] && $Jb!=''){
  ?>
  <tr>
  <td colspan="6" bgcolor="#ECE9D8"><div align="center"><strong>Sub Tot ( <font color="#993300"><i><?
  echo $baga; $baga='';
  ?></i></font>) </strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_1);
  $tot_1=0;  ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_2);
  $tot_2=0;  ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_3);
  $tot_3=0;  ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_4); 
  $tot_4=0; ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_5);
  $tot_5=0;  ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_6);
  $tot_6=0;  ?></strong></div></td>
  </tr><?
  }
  ?>
  
  <tr valign="top" <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="center"><? echo $zz[id]; ?></div></td>
  <td><div align="center"><? echo $zz[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($zz[NamaPasien])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($zz[NamaType])); //echo "( $zz[TypeBayar] )"; ?></div></td>
  <td><div align="left"><? $baga= ucfirst(strtolower($zz[NamaBagian]));
  echo $baga;  ?></div></td>
  <td><div align="right"><?
  echo number_format($zz[Kk]-$zz[crg]);
  $tot_1 = $tot_1 +  ($zz[Kk]-$zz[crg]);
  $tot_11 = $tot_11 +  ($zz[Kk]-$zz[crg]);
     ?></div></td>
	  <td><div align="right"><?
if($zz[Db]>0){
  echo number_format($zz[Db]); 
}else{
echo "-";
}  
$tot_2 = $tot_2 + ($zz[Db]);  
$tot_22 = $tot_22 + ($zz[Db]);     ?></div></td>
<td><div align="right"><? echo number_format($zz[Tunai]); 
$tot_3 = $tot_3 + $zz[Tunai]; 
$tot_33 = $tot_33 + $zz[Tunai]; 

?></div></td>
<td><div align="right"><? echo number_format($zz[Jam]); 
$tot_4 = $tot_4 + $zz[Jam];
$tot_44 = $tot_44 + $zz[Jam];
?></div></td>
<td><div align="right"><? echo number_format($zz[crg]); 
$tot_5 = $tot_5 + $zz[crg];
$tot_55 = $tot_55 + $zz[crg];
 ?></div></td>
 <td><div align="right">
   <?
		 $bulat = $zz[Bulat]-$zz[Asli];
		if($bulat>0){
		 echo number_format($bulat);  	  
		 $tot_6 = $tot_6 + $bulat;
		 $tot_66 = $tot_66 + $bulat;
		} $bulat=0; 
	 
		  ?>
 </div></td>
 <td><div align="left"><? echo ucfirst(strtolower($zz[Keterangan])); ?></div></td>
  </tr>
  <?
  $Jb=$zz[KodeBagian];
  $nomer++; } ?>   <tr>
  <td colspan="6" bgcolor="#ECE9D8"><div align="center"><strong>Sub Tot ( <font color="#993300"><i><?
  echo $baga; $baga='';
  ?></i></font>)</strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_1); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_2); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_3); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_4); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_5); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_6); ?></strong></div></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#ECE9D8"><div align="center"><strong>Grand Total </strong></div></td>
    <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_11); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_22); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_33); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_44); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_55); ?></strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong><? echo number_format($tot_66); ?></strong></div></td>
  </tr>
</table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>