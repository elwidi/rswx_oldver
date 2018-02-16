<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$Bln = $Bln-0;
$Thn = $Thn-0;
if(!$Id){
$Id=29;
}else{
$Id=$Id;
}
if($Bln>0 && $Thn>=2000){
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#0066CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('../../admin_1/searc2.php', 
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
							value: data[i].NamaBagian // nama field yang dicari
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
str += '<u>'+data.NamaBagian;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="teh_botol_pedes.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&Id=" + Result;
			}
		);
	});
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
.style6 {color: #000000; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="1001" colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><span class="style1">LAPORAN MORBIDITAS RS YADIKA</span></td>
</tr>
<tr class="style2">
<td width="142">PERIODE</td>
<td width="3">:</td>
<td width="242"><div align="left"><?
$bln=$Bln; $thn1 = $Thn;
include "../../bulan.php";
?></div></td>
</tr>
<tr>
<td>BAGIAN</td><td>:</td><td><div align="left">
<?
$kdjkfjdkfjdkkd = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$Id'");
$yaw = mysql_fetch_array($kdjkfjdkfjdkkd);
echo strtoupper($yaw[NamaBagian]); 
?>
</div></td>
</tr>
<tr class="style2">
  <td>PILIH UNIT</td>
  <td>:</td>
  <td><div align="left">
  <input type="text" class="style2" id="suggest" />
  </div></td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="button" name="fgfgf" value="Kembali" onClick="location.href='../index.php';">
  <?
if($Bln>0 && $Thn>2010){
?>
<input type="button" name="fgfgf" value="Export Ke Excel" onClick="location.href='d09m4.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';">
<? } ?>
<input type="button" name="fgfgf" value="Cek By Periode"   onClick="wCompare = window.open('../x01_s.php?mas=popong', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
  </div></td>
  </tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6">No </span></td>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6">Jenis Penyakit </span></td>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6">ICDx</span> </td>
  <td colspan="8" bgcolor="#E8FD95"><div align="center" class="style6">Kelompok Umur </div></td>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6"> Laki2</span></td>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6"> Wanita</span></td>
  <td rowspan="2" bgcolor="#E8FD95"><span class="style6"> Jml</span></td>
  </tr>
    <tr>
  <td bgcolor="#E8FD95"><span class="style6">0-28</span></td>
  <td bgcolor="#E8FD95"><span class="style6">29-1thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">1-4thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">5-14thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">15-24thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">25-44thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">45-64thn</span></td>
  <td bgcolor="#E8FD95"><span class="style6">&gt;65thn</span></td>
  </tr>
  <?
  $no=1;
    $kdjfkdjfd_Dfdfd  = mysql_query("SELECT * FROM akti_icd_1 WHERE IdBagian='$Id' AND Bln='$Bln' AND Thn='$Thn' ORDER BY Diagnosa");
   while($nn = mysql_fetch_array($kdjfkdjfd_Dfdfd)){
  $pre = $no%2;
  if($pre==1){
  $warna='bgcolor="#FDEFB9"';
  }else{
  $warna='';
  }?>
  <tr <? echo $warna; ?>  >
    <td><div align="center"><? echo $no; ?></div></td>
    <td><div align="left"><? echo $nn[Diagnosa]; ?></div></td>
    <td><div align="left"><? echo $nn[KodeIcd]; ?></div></td>
   <?
   $satu = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn=0 AND
	 UmurBln=0 AND UmurHari<=28");
	 $ok_1 = mysql_fetch_array($satu);
   ?> <td  <?
   if($ok_1[jj]>0){ ?>onClick="wCompare_08jjd = window.open('rj_s.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><? 
	  
	 if( $ok_1[jj]>0){
	 echo $ok_1[jj];
	}else{
	echo ".";
	} ?></div></td><?
 	 $satu_2 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn<=1 AND
	  UmurHari>28");
	 $ok_2 = mysql_fetch_array($satu_2);
	?>
   <td  <? if( $ok_2[jj]>0){ ?>onClick="wCompare_08jjd = window.open('rj_s.php?angka=2&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <?  } ?>><div align="center"><?  
	 if( $ok_2[jj]>0){
	 echo $ok_2[jj];
	}else{
	echo ".";
	} ?></div></td><?
	 $satu_3 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>1 AND
	  UmurThn<=4");
	 $ok_3 = mysql_fetch_array($satu_3);
	?>
  <td <?  if($ok_3[jj]>0){ ?>onClick="wCompare_08jjd = window.open('rj_s.php?angka=3&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><? 
	 
	 if($ok_3[jj]>0){
	 echo $ok_3[jj];
	}else{
	echo ".";
	} ?></div></td> <?
	 $satu_4 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>4 AND
	  UmurThn<=14");
	 $ok_4 = mysql_fetch_array($satu_4);
	?> 
	 <td <?
	  if( $ok_4[jj]>0){ ?> onClick="wCompare_08jjd = window.open('rj_s.php?angka=4&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><? 
	
	 if( $ok_4[jj]>0){
	 echo $ok_4[jj];
	}else{
	echo ".";
	} ?></div></td> <?
	 $satu_5 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>14 AND
	  UmurThn<=24");
	 $ok_5 = mysql_fetch_array($satu_5);
	?>
 <td <?  if( $ok_5[jj]>0){ ?> onClick="wCompare_08jjd = window.open('rj_s.php?angka=5&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?>><div align="center"><? 
	
	 if( $ok_5[jj]>0){
	 echo $ok_5[jj];
	}else{
	echo ".";
	} ?></div></td> <?
	 $satu_6 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>=25 AND
	  UmurThn<=44");
	 $ok_6 = mysql_fetch_array($satu_6);
	?>
 <td <? if( $ok_6[jj]>0){ ?> onClick="wCompare_08jjd = window.open('rj_s.php?angka=6&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><? 
	
	 if( $ok_6[jj]>0){
	 echo $ok_6[jj];
	}else{
	echo ".";
	} ?></div></td> <?
	 $satu_7 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>=45 AND
	  UmurThn<=64");
	 $ok_7 = mysql_fetch_array($satu_7);  ?>
	 <td <?  if( $ok_7[jj]>0){ ?>onClick="wCompare_08jjd = window.open('rj_s.php?angka=7&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare_08jjd', 'width=880,height=340,left=60,Top=82,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_08jjd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><? 
	
	 if( $ok_7[jj]>0){
	 echo $ok_7[jj];
	}else{
	echo ".";
	} ?></div></td>  
   <td><div align="center"><? 
	 $satu_8 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND
	  UmurThn>=65");
	 $ok_8 = mysql_fetch_array($satu_8);
	 if( $ok_8[jj]>0){
	 echo $ok_8[jj];
	}else{
	echo ".";
	} ?></div></td>  
   <td><div align="center"><? 
	 $satu_9 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND
	  JenisKelamin='L'");
	 $ok_9 = mysql_fetch_array($satu_9);
	 if( $ok_9[jj]>0){
	 echo $ok_9[jj];
	}else{
	echo ".";
	} ?></div></td>  
	   <td><div align="center"><? 
	 $dua_9 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND
	  JenisKelamin='P'");
	 $ya_9 = mysql_fetch_array($dua_9);
	 if( $ya_9[jj]>0){
	 echo $ya_9[jj];
	}else{
	echo ".";
	} ?></div></td> 
 <td><div align="center"><? 
	 $dua_1 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]'  ");
	 $ya_1 = mysql_fetch_array($dua_1);
	 if( $ya_1[jj]>0){
	 echo $ya_1[jj];
	}else{
	echo ".";
	} ?></div></td> 
  </tr>
  <?
  $no++; } ?>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}else{
echo "PERIODE TIDAK BENAR,...";
}
?>