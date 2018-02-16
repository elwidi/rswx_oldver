<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
  //
  if($hh[JamKeluar]=='y'){
header("Location:./h2h.php?id=$id");
}elseif($hh[JamKeluar]=='x'){
header("Location:./hh.php?id=$id");
}
if(!$hh[id]){
 header("Location:./index.php");
}
 $Wjdkj = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$hh[RegId]'");
$Whh = mysql_fetch_array($Wjdkj);
if($Whh[id] && $a[Level]==16){
header("Location:../radiologi/kik_de.php?id=$id");
}elseif($Whh[id] && $a[Level]!=16){
header("Location:./rp.php?id=$Whh[id]");
}  
if($a[Level]==112){
header("Location:../fisio/4e.php?id=$id");
 }elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==16 || $a[Level]==77){
?>
<html> 
<head><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('search2.php', 
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
							value: data[i].NamaBiaya // nama field yang dicari
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
str += '<u>'+data.NamaBiaya+'</u><br />Harga.'+data.Kelas3+'</u><br />Poli.'+data.NamaPoli+'</u><br />Jenis.'+data.Jenis;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="c2dd_01.php?id=<? echo $id; ?>&IdDetil=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script language="JavaScript">
 	function formatAngka(objek, separator) {
 	  a = objek.value;
 	  b = a.replace(/[^\d]/g,"");
 	  c = "";
   panjang = b.length;
 	  j = 0;
   for (i = panjang; i > 0; i--) {
     j = j + 1;
     if (((j % 3) == 1) && (j != 1)) {
       c = b.substr(i-1,1) + separator + c;
     } else {
 	      c = b.substr(i-1,1) + c;
     }
 	  }
 	  objek.value = c;
 }
 </script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style122 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 15px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 17px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style7 {color: #000000}
.style8 {
	color: #990000;
	font-weight: bold;
}

-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("10_i.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>&fito=<? echo $fito; ?>", "wCompare", "width=580,height=440,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; </script>
</head>
<body alink="#333333" vlink="#333333" link="#333333" <? if($iin=='slk'){ ?> onLoad="toCompare()"<? }?>>
<div align="left">

 <form target="_self">
 <table border="0" cellpadding="2" cellspacing="2" >
<?
 if($bb[id]){
?>
<tr class="style5" bgcolor="#990000">
<td colspan="3"><div align="center">
DETAI DATA TRANSAKSI<br>
ONE DAY CARE
</div></td>
</tr>
<? 
}else{
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?>
<tr bgcolor="#003399" class="style122">
<? 
}else{
  if($a[KodeBagian]>=68 && $a[KodeBagian]<=71){
?><tr bgcolor="#99CCFF"><?
}elseif($a[KodeBagian]==29){
   ?><tr bgcolor="#6633FF" class="style122"><? 
   }else{?><tr bgcolor="#333333" class="style2"> <? } ?>
<? } ?>
<td colspan="3" ><div  align="left">
<img src="../gambar/kasir.jpg">
 </div></td>
</tr>
<?  } ?>
<tr>
  <td colspan="2" valign="top">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style1" width="600">
  <tr>
  <td width="100">TGL /JAM MASUK</td>
  <td width="4">:</td>
  <td width="217"><div align="left"><? echo "$hh[TglMasuk]/$hh[BlnMasuk]/$hh[ThnMasuk] - $hh[JamMasuk]"; ?>
  </div></td>
  </tr>
  <tr>
  <td>NO RM</td><td>:</td><td><div align="left">
  <? echo $hh[NoPasien]; ?>
  </div></td>
  </tr>
  <tr>
  <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?></div></td>
  </tr>
  <tr>
  <td bgcolor="#CCFFFF"><span class="style8">PENJAMIN</span></td>
  <td bgcolor="#CCFFFF"><span class="style8">:</span></td>
  <td bgcolor="#CCFFFF"><div align="left" class="style8"><? echo strtoupper($hh[NamaPer]); ?></div></td>
  </tr>
  <tr>
  <td>NAMA BAGIAN</td><tD>:</tD><td><div align="left"><? echo strtoupper($hh[Bagian]); ?></div></td>
  </tr>
  <tr>
  <td>DOKTER</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaDokter]); ?></div></td>
  </tr>
  <tr>
  <td>PENDAFTAR</td><td>:</td><td><div align="left"><? echo strtoupper($hh[Operator]); ?></div></td>
  </tr>
<?
  $kikidkdik = mysql_query("SELECT SUM(Harga) AS jj FROM txnugd WHERE IdPasien='$hh[id]'");
  $cc = mysql_fetch_array($kikidkdik);
if($cc[jj]>0){ ?>  <tr>
  <td bgcolor="#ACFA9E">TXN RWT JALAN </td>
  <td bgcolor="#ACFA9E">:</td>
  <td bgcolor="#ACFA9E"><div align="left"><? 
  echo number_format($cc[jj]);
  ?> || 
  <a href="#"
   onClick="wCompare = window.open('VGT.php?x=99&id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=880,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">CEK DETAIL</a>
   || </div></td>
  </tr>
  <? } ?>
  <tr>
  <td bgcolor="#FFFF99">TOTAL FARMASI</td>
  <td bgcolor="#FFFF99">:</td>
  <td bgcolor="#D4D0C8"><div align="left"><? 
		$ddt = mysql_query("SELECT * FROM jualobat WHERE RegId='$hh[RegId]'   AND NoPasien='$hh[NoPasien]'");
while($ss = mysql_fetch_array($ddt)){
 if($bb[id]){
$sayang = $sayang + $ss[JmlHargaBeli]+500; 
 }else{
$sayang = $sayang + $ss[JmlHargaBeli];
}
  }
  $jkjioi = mysql_query("SELECT COUNT(id) AS jh FROM jualobat WHERE RegId='$hh[RegId]'  AND apa_r=1");
$okw = mysql_fetch_array($jkjioi);
if($okw[jh]>0){ 
 

 $sayang = $sayang +($gu[Nilai_Racik]*$we[hh]);
 
}  
$sayang = $sayang -($sayang *$kp_i[Diskon]/100);
 if($kmo[jj]>0){
$hari_ini=date("d")-0;
$bulan_ini=date("m")-0;
$tahun_ini=date("Y");
if($hh[TglMasuk]==$hari_ini && $hh[BlnMasuk]==$bulan_ini && $hh[ThnMasuk]==$tahun_ini){
$returna = ($kmo[jj]-($kmo[jj]*80/100)); 
$balse = " (80)%"; 
}else{
$returna = ($kmo[jj]-($kmo[jj]*75/100)); 
$balse = " (75%)"; 
}
$sayang = $sayang-$returna;
} 
$JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
if($okw[jh]>0){
$sayang = $sayang + $gu[Racikan]; 
}else{
$sayang = $sayang; 
}
echo number_format($sayang);    echo " ( $balse )"; 
$TglJame=date("d.m.y-H:i:s");
$kalopoi_Dfg="TRANSAKSI OBAT $hh[NoPasien] / $hh[NamaPasien]";
  
?> ||<?
if($mas=='zaki'){
?><a href="u.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >CLEAR DETIL</a><? 
}else{
?> <a href="#" style="text-decoration:none"  onClick="wCompare = window.open('34_iii.php?id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=580,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >CEK DETIL</a>
<? } ?>  <?
$jdjdjdjdjdjdjdj = mysql_query("SELECT SUM(JmlHargaBeli) AS jj FROM jualobat_tmp WHERE RegId='$hh[RegId]'");
$noo = mysql_fetch_array($jdjdjdjdjdjdjdj );
if($noo[jj]>0){
$bale = $noo[jj];
?>|| 
Rp.<? echo number_format($noo[jj]);  ?>
 
<? } ?> ||  <a href="" onClick="wCompare_eeee = window.open('x10_as.php?Tot=<? echo $sayang; ?>&param=FARMASI&id=<? echo $id; ?>', 
  'wCompare_eeee', 'width=580,height=240,left=500,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_eeee.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">VERIFIKASI</a></div></td>
  </tr><?
    $kdjfkdjfkdf  = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$hh[RegId]'");
  $js = mysql_fetch_array($kdjfkdjfkdf);
if($js[kk]>0){
?>
  <tr>
  <td bgcolor="#FFFF99">TOTAL LAB</td>
  <td bgcolor="#FFFF99">:</td>
  <td bgcolor="#D4D0C8"><div align="left"><? 
   echo number_format($js[kk]);
  ?> || 
<?
if($mas=='budi'){
?><a href="u.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >NORMAL DETIL</a><? 
}else{
?>  <a href="#" style="text-decoration:none"    onClick="wCompare = window.open('VGT.php?wsa=3&id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=580,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >CEK DETIL</a>
<? } ?>
  </div></td>
  </tr>
  <?
  } ?>
  <?
     $ksiskisks_334343  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
  $h_12 = mysql_fetch_array($ksiskisks_334343);
  if($h_12[jj]>0){
  ?>
  <tr>
  <td bgcolor="#FFFF99">RADIOLOGI</td>  
  <td bgcolor="#FFFF99">:</td><?
   $ldkfldkfl = mysql_query("SELECT * FROM noradman WHERE NoTxn='$hh[RegId]'");
 $mj = mysql_fetch_array($ldkfldkfl);
// echo $mj[NoMan];
$warnae ='bgcolor="#D4D0C8"';
$warnae3 ='bgcolor="#FF9999"';
  ?>
  <td <? if($mj[NoMan]>0){ echo $warnae3; }else{ echo $warnae; } ?>><div align="left"><? 
 
  echo number_format($h_12[jj]); 
?><? 
  ?> || 
  <a href="#"  onClick="wCompare = window.open('er_45.php?id=<? echo $id; ?>', 
  'wCompare', 'width=880,height=340,left=300,Top=144,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">CEK DETIL</a> || <a href="#"  onClick="wCompare = window.open('E_YUY.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">CETAK STRUK</a> 
	   </div></td> 
  </tr>
  <? } ?>
    <tr>
  <td bgcolor="#FFFF99">FISIOTHERAPY</td>  
  <td bgcolor="#FFFF99">:</td><?
   ?>
  <td ><div align="left"><? 
   $ksiskisks_334343x  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Fis'");
  $h_12x = mysql_fetch_array($ksiskisks_334343x);
  echo number_format($h_12x[jj]); 
?><? 
  ?> || 
  <a href="#"  onClick="wCompare = window.open('er_45.php?aku=rela&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">CEK DETIL</a>  
	 
	 </div></td> 
  </tr>
  <tr>
  <td>JENIS VAKSIN</td><td>:</td><td><div align="left">
 <?
 $kdjfkdjf_Fgf  = mysql_query("SELECT id FROM vaksin_pasien where IdPasen='$id'");
$np = mysql_fetch_array($kdjfkdjf_Fgf);
if($np[id]){
$war ='style="background:#FFCC33"';
}else{
$war='';
}
 ?><input  <? echo $war; ?>  type="button" name="DFFD" value="Tentukan Jenis Vaksin" class="style3" onClick="wCompares2_01 = window.open('x10.php?id=<? echo $id; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"   > 
	 
  </div></td>
  </tr>
  <?
   if($bb[id]>0){
  ?>
   <? 
  }else{
   ?>
	<tr> 
	<td colspan="3"><div class="3">
	  <div align="left">
	 <?
if($iin_hari[Sembilan]=='on'){
	 ?> <A  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="../Farmasi/wahit.php?id=<? echo $id; ?>" style="text-decoration:none">INPUT TRANSAKSI OBAT / ALKES</A>
	 <? } ?>
	    </div>
	  </div></td>
	</tr>
	<? } //end of //$bb[id] ?>
  <?
//  $kiki_009_0o = mysql_query("SELECT IdPasien FROM KetKwt WHERE IdPasien='$id'");
 // $apo= mysql_fetch_array($kiki_009_0o);
  //echo "ff v $apo[IdPasien]"; 
  if($apo[IdPasien]){
  ?>
  <tr bgcolor="#999966">
  <? 
  }else{
  ?>
  <tr bgcolor="#FFFF00">
  <? } ?>
    <td colspan="3"  ></td> 
    </tr>
  <tr>
    <td colspan="3" bgcolor "#FFFFFF" valign="top"> 
	<div align="left">
	<?
	 
	?>
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
 	<tr>
	<td colspan="3" bgcolor="#D4D0C8">TOTAL TXN : <? 
	$KDI99090KJK1 = mysql_query("SELECT SUM(JumlahHarga) AS kk FROM txnjalan WHERE RegId='$hh[RegId]'");
	$bc1 = mysql_fetch_array($KDI99090KJK1);
	//
	$KDI99090KJK = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$hh[RegId]'");
	$bc = mysql_fetch_array($KDI99090KJK);
	
	//////////////////////////////////////////////////////////////////////////////
	if($bb[id]){

	$dfjk_00000 = mysql_query("SELECT Nilai FROM materaiInap2 WHERE IdPasien='$id'");
	$kjuj = mysql_fetch_array($dfjk_00000);
	$rep = $bc[kk]+$bc1[kk]+$sayang+$dta[kk]+$cc[jj]+$kjuj[Nilai];
	}else{
	  $rep = $bc[kk]+$bc1[kk]+$sayang+$dta[kk]+$cc[jj];
	}
	if($mas==4){
$rep = $rep+$noo[jj];
	}else{
$rep = $rep;

	}
	//echo number_format($kjuj[Nilai]); 
	///////////////////////////////////////////////////////////////////////////
	
	
 	 
	//echo "jj $rep<br>";
	$pir = ceil($rep);
	?>
	  <input type="hidden" name="toto" value="<? echo $rep; ?>">
	  <? 
	$totaldd =strlen($pir)-3;
 $total2 = (substr($pir,$totaldd,3))-0;
// echo "$total2<br>";
 if($total2>500){
 $susu=1000-$total2;
  }elseif($total2<500){
 $susu =500-$total2;
 }	// echo "has $susu<br>";
	 if($pilih==1){
	 $totale =$rep+$susu;
	 }else{
	 $totale =$rep;
	 }  
	 //
	 if($nugi==12 || $nugi==19){
	  $Db=ceil($totale);
	  $jajan=ceil($totale);
	 }elseif($nugi==15 || $nugi==14 || $nugi==21 || $nugi==20 || $nugi==17){
	  $Db=ceil($totale);
	  $Kk=ceil($totale);
	}elseif($nugi==11 || $nugi==13 || $nugi==18){
	  $Db=ceil($totale);
	  $Jam = ceil($totale);
	 }elseif($nugi==8 || $nugi==9 ||  $nugi==10 || $nugi==16){
	  $Db=ceil($totale);
	   $jajan = ceil($totale);
	  }elseif($nugi==6){
	 $Jam= ceil($totale);
	 }elseif($nugi==1 || $nugi==2 ||  $nugi==3 || $nugi==9  || $nugi==10  || $nugi==16  || $nugi==28){
	 $Db=ceil($totale);
	 }elseif($nugi==4 ){
	 $jajan = ceil($totale);
	 }elseif($nugi==5 || $nugi==7  || $nugi==27 ){
	 $Kk = ceil($totale);
	 }elseif($nugi==25 || $nugi==23 ){
	  $Kk = ceil($totale);
	  $Jam = ceil($totale);
	  }elseif($nugi==24 || $nugi==22){
	  $Kk = ceil($totale);
	   $jajan = ceil($totale);
	   }elseif($nugi==26){
	   $jajan=ceil($totale);
	   	  $Jam = ceil($totale);
	 }else{
	 $jajan=0;
	 }
	 //
	 if($tb==2){
	 $cas = ($totale*2.5/100);
	 }elseif($tb==3){
	 $cas = ($totale*3/100);
	 }
	echo number_format($totale);
	?> </td>
	</tr>
	<?
	if($nugi>0){
	?>
 	  <?
	  $dlfldfdl = mysql_query("SELECT SUM(JumlahHarga) AS hh FROM txnjalan WHERE RegId='$hh[RegId]'");
	  $ye = mysql_fetch_array($dlfldfdl);
	  $dlfldfdl2 = mysql_query("SELECT SUM(JumlahHarga) AS hh FROM txnjalan2 WHERE RegId='$hh[RegId]'");
	  $ye2 = mysql_fetch_array($dlfldfdl2);
	  ?>
	  
	  <? } //end off nugi ?>
	  <?
	  if($tb==3 || $tb==2){
	  ?>
	  <tr>
	  <td width="119" bgcolor="#FFCCCC">CHARGE TAMBAHAN</td>
	  <td width="3" bgcolor="#FFCCCC">:</td>
	  <td width="39" bgcolor="#FFCCCC"><div align="left"><? echo number_format($cas); ?>
	  <input type="hidden" name="cas" value="<? echo $cas; ?>"></div></td>
	  </tr>
	 
	  
	<tr>
	  <td colspan="3">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="3" bgcolor="#7AE57A">
	  <div align="left">
	  <input name="fgf" type="submit" class="style3" value="Simpan">
	  <input name="fgfg" type="button" class="style3" onClick="location.href='u.php?id=<? echo $id; ?>';" value="Reset">
	  <input name="dffg" type="button" class="style3" onClick="location.href='../daftar/r.php';" value="Kembali">
	  </div>	  </td>
	  </tr>
	</table>
	<? 
	}else{
	?>
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<?
	 
	if($dad[id]){
if($fito>0){
?>
<tr >
<? 
}else{?>
<tr>
<? } ?>
<td bgcolor="#DBFFFF">NAMA BIAYA</td>
<td bgcolor="#DBFFFF">:</td>
<td bgcolor="#DBFFFF"><div align="left"><? echo strtoupper($dad[NamaBiaya]); ?> 

<?
if($fito>0){

}else{
?><input type="hidden" name="iin" value="slk">
<? } ?>
	<input type="hidden" name="id" value="<? echo $id;?>">
	<input type="hidden" name="fito" value="<? echo $fito; ?>">
		<input type="hidden" name="IdBiaya" value="<? echo $fito; ?>">
	<input type="hidden" name="ban" value="serep">
	</div></td>
</tr>
<?
if($fito>0){
?>
<tr>
<? 
}else{?>
<tr>
<? } ?>
<td>HARGA</td><td>:</td><td><div align="left"><? 

 $ksjkdsds090j = mysql_query("SELECT IdObat FROM PaketObat WHERE IdBiaya='$dad[id]'");
while($cp = mysql_fetch_array($ksjkdsds090j)){
//echo "$cp[IdObat]<br>";
 $jujh909 = mysql_query("SELECT  HargaBeli FROM dataobat WHERE id='$cp[IdObat]'");
$vo = mysql_fetch_array($jujh909);
$uisernerk = $uisernerk + $vo[HargaBeli];
} 
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16 || $a[KodeBagian]==29){
$dadal = $dad[Total];
}else{
$dadal = $dad[Total];
}
?>
<input name="Hargaa" type="text" class="style1" value="<? echo $dadal;?>" size="12" maxlength="14">
<?  //echo number_format($dadal,2); ?></div></td>
</tr>
<?
if($fito>0){
?>
<tr>
<? 
}else{?>
<tr>
<? } ?>
<td>QTY</td><td>:</td><td><div align="left"><input name="Qty" type="text" class="style3" value="1" size="3" maxlength="3">
</div></td>
</tr>
  
<? 	
	}else{
	?><tr>
	                    <td width="123">NAMA TIDAKAN</td>
	<td width="3">:</td>
	<td width="216"><div align="left"><?
 	if($fito>0){}else{
	?>
	<input type="text" class="style3" id="suggest" autofocus="autofocus"  />
	<input type="hidden" name="iin" value="slk"> 
	<? } ?>
	<input type="hidden" name="id" value="<? echo $id;?>">
	<input type="hidden" name="fito" value="<? echo $fito; ?>">
	</div></td>
	</tr>
	<? } ?>
<?
if($ss33[mm]>0){?>

<? }else{ ?>	<tr>
	  <td colspan="3" bgcolor="#333333"><div align="left">
	 
	  <?
	  if($fito>0){
	  ?><input name="fgf" type="submit" class="style3" value="Simpan"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? }else{ ?>
	   <input name="fgf" type="submit" class="style3" value="Cari"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? } ?>
	     	  <?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){ ?>
	  <!-- <input type="button" name="fgfggf" value="Input Hasil Pemeriksaan" class="style3"  onClick="wCompare = window.open('../radiologi/er_945.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   > -->
	  <? } ?>
	  <input name="df" type="button" class="style3" onClick="location.href='../Daftar/ed_d.php?id=<? echo $id; ?>';" value="Kembali"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >
	  

	  <?
	  if($a[KodeBagian]==6){ ?>
	  <input type="button" name="fgfgf" class="style3" value="Isi Icd" onClick="location.href='../Daftar/7w.php?id=<? echo $id; ?>';">
	  <? } if($FiLaDim[Duabelas]=='on'){
	   if($a[Level]==77 || $a[KodeBagian]==6){}else{
	  ?><input name="dffd3" type="button" class="style3"  onClick="wCompare = window.open('uij_k.php?totale=<? echo $totale; ?>&id=<? echo $id; ?>&dimas=3', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Tampil Cetak Kwitansi">
	<? } ?>
	<? } ?>
	  </div></td> 
 	  
 	</table>
	<? }  // end of dimas ==3 ?>
	</div>	</td>
  </tr>
  <? } 
  // ed of if($ss33[mm]>0){?>
  </table>
  </div>  </td> <td width="382" valign="top">
  <div align="left">
  <?
  if($ban=='serepa'){
  ?>
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="369" colspan="3"><div align="center">
    <span class="style4">YAKIN DATA INI AKAN DI SIMPAN</span><span class="style7"><br>
    <?
	if($a[KodeBagian]==29){
$ju0909_idj = mysql_query("SELECT * FROM TarifUgd WHERE id='$fito'");	
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 $ju0909_idj = mysql_query("SELECT * FROM TarifRad WHERE id='$fito'");
}else{
$ju0909_idj = mysql_query("SELECT * FROM TarifUgd WHERE id='$fito'");	
  }
  $opi = mysql_fetch_array($ju0909_idj);
  echo strtoupper($opi[NamaBiaya]);  
  ?>
    </span><br>
  <?
$Bayare=  $opi[Total]*$Qty; //$opi[Tarif]*$Qty;
echo "Rp.";  echo number_format($Bayare);
  ?><br>
      <? if($Diskon>0){ 
  echo " DISKON ";  
  if($dis==3){
   if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
   $Bayar = $opi[JasaDokter]-($opi[JasaDokter]*$Diskon/100);
   }else{
    $Bayar = $opi[JasaKonsultasi]-($opi[JasaKonsultasi]*$Diskon/100);
	}
  }else{
  $Bayar = $Bayare-($Bayare*$Diskon/100);
  }
   
   echo "$Diskon% BAYAR : Rp."; echo number_format($Bayar); } ?><br>
  <input name="dffd" type="button" class="style3" onClick="location.href='kakus4.php?dis=<? echo $dis; ?>&Qty=<? echo $Qty; ?>&id=<? echo $id; ?>&IdBiaya=<? echo $fito; ?>&Diskon=<? echo $Diskon; ?>';" value="YA"> 
  || 
  <input name="dff" type="button" class="style3" onClick="location.href='u.php?iin=slk&id=<? echo $id; ?>&fito=<? echo $fito; ?>';" value="BATAL">
  </div></td>
  </tr>
  </table>
  <? 
  }
  ?>
  <?
  $kkk9099_sdjfkdf009 = mysql_query("SELECT COUNT(id) AS jj FROM txnjalan WHERE RegId='$hh[RegId]'");
  $repo = mysql_fetch_array($kkk9099_sdjfkdf009);
  if($repo[jj]>0){
  ?>
  <? } ?>
  <br>
  <?
  if($mas=='zaki'){
  ?>
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td colspan="3"><div align="left">
  LIST DETAIL DATA OBAT
  </div></td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
  <table border="1" class="style1">
  <tr>
  <td bgcolor="#D4D0C8">NO</td>
  <td bgcolor="#D4D0C8">RESEP</td>
  <td bgcolor="#D4D0C8">NAMA OBAT</td>
  <td bgcolor="#D4D0C8">QTY</td>
  <td bgcolor="#D4D0C8">JUMLAH</td>
  <td bgcolor="#D4D0C8">OPR</td>
  <td bgcolor="#D4D0C8">JAM</td>
  </tr>
  <?
  $nes=1;
  $kiki_343 = mysql_query("SELECT * FROM jualobat WHERE RegId='$hh[RegId]'");
  while($cc = mysql_fetch_array($kiki_343)){
  ?>
  <tr>
  <td bgcolor="#F3FEFF"><div align="center"><? echo $nes; ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo $cc[JamTran]; ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo strtoupper($cc[NamaObat]); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="center"><? echo number_format($cc[Qty],2); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="right"><? echo number_format($cc[JmlHargaBeli]);
  $YES = $YES + $cc[JmlHargaBeli];
   ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo strtoupper($cc[Operator]); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo $cc[Jam]; ?></div></td>
  </tr>
   <? $nes++; }  ?><tr>
    <td colspan="4" bgcolor="#D4D0C8"><div align="center">TOTAL</div></td>
    <td bgcolor="#D4D0C8"><div align="right"><? echo number_format($YES); ?></div></td>
    <td colspan="2">&nbsp;</td>
    </tr>
  </table> 
  </div>
  </td>
  </tr>
  
  </table><br>
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
 <td colspan="3"><div align="center">LIST DATA RETUR</div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="1" class="style1">
 <tr>
 <td bgcolor="#FFFFFF">NO</td>
 <td bgcolor="#FFFFFF">NO RESEP</td>
 <td bgcolor="#FFFFFF">NAMA OBAT</td>
 <td bgcolor="#FFFFFF">QTY</td>
 <td bgcolor="#FFFFFF">NILAI</td>
 </tr>
 <?
 $msj=1;
 $kik_0k = mysql_query("SELECT * FROM jualobat_batal WHERE RegId='$hh[RegId]'");
 while($vv= mysql_fetch_array($kik_0k)){
 ?>
 <tr>
 <td bgcolor="#E6FDFF"><div align="center"><? echo $msj; ?></div></td>
 <td bgcolor="#E6FDFF"><div align="left"><? echo $vv[JamTran]; ?></div></td>
 <tD bgcolor="#E6FDFF"><div align="left"><? echo strtoupper($vv[NamaObat]); ?></div></tD>
 <td bgcolor="#E6FDFF"><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
 <td bgcolor="#E6FDFF"><div align="right"><? echo number_format($vv[JmlHargaBeli]);
 $TOTO = $TOTO + $vv[JmlHargaBeli];
  ?></div></td>
 </tr>
 <? $msj++; } ?> <tr>
   <td colspan="4" bgcolor="#FFFFFF"><div align="center">TOTAL</div></td>
   <td bgcolor="#FFFFFF"><div align="right"><? echo number_format($TOTO); ?></div></td>
 </tr>

 </table>
 </div>
 </td> 
 </tr>
 </table>
  <? 
  }
  ?>
  </div>
  </td>
</tr>
 <tr>
  <td colspan="3" valign="top">&nbsp;</td>
</tr><? 
 if($a[KodeBagian]>=68 && $a[KodeBagian]<=71){
?><tr bgcolor="#99CCFF"><?
}elseif($a[KodeBagian]==29){
   ?><tr bgcolor="#6633FF" class="style122"><? 
   }else{?><tr bgcolor="#333333" class="style2"> <? } ?>  <td colspan="3" valign="top">&nbsp;</td>
</tr>
</table>
</form>
</div></body>
</html>
<?
}else{
header("Location:../keluar.php");
}
?>