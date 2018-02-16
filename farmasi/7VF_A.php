<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $kdjfkdjfkdfd = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
  $ee = mysql_fetch_array($kdjfkdjfkdfd);
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('searc2.php', 
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
							value: data[i].NoPo // nama field yang dicari
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
str += '<u>'+data.NoPo+'</u><br />NO URUT.'+data.NamaSupplier+'<br />TGL: '+data.Tgl+' / '+data.Bln+' / '+data.Thn+'<br>REC : '+data.Opr;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="7VF_A.php?id=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#A8FA72';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompafdddfdfre = window.open("xe3.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>", "wCompafdddfdfre", "width=399,height=290,left=60,Top=240,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompafdddfdfre.focus(); 
}; 
   
//--></script> 
  <style type="text/css">
<!--
.style30 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
  </style>
</head>
<body <? if($IdDetil>0){ ?> onLoad="toCompare()" <? } ?>>
<div align="left">
<table width="1027" border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3" valign="top" bgcolor="#92D38C">
	<?
  	if($a[Level]==1){
	       $file='../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../gambar/cust ser.gif';
		   }elseif($a[Level]==11){
		   $file='../gambar/farmasi.gif';
		   }elseif($a[Level]==112){
		   $file='../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../gambar/keuangan.gif';
		   }elseif($a[Level]==12){
		   $file='../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../gambar/poli.gif';
		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==9){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
</td></tr>
<td width="358"></tr>
<tr>
  <td colspan="2" valign="top"><div align="left">
  <table width="359" border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td>NO ORDER </td>
  <td>:</td><td><div align="left">
    <input name="text" type="text" class="style30" id="suggest" />
  </div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="button" name="fgf" value="Reset" onClick="location.href='7VF_A.php';">
	<input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';">
	</div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div></td>
  <td width="650" valign="top">
  <div align="left">
  <?
  if($id>0){
  ?><table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr valign="top">
  <td colspan="3">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td width="76">Tgl</td>
  <td width="8">:</td>
  <td width="196"><div align="left"><?
  echo "$ee[Tgl] - ";
  $bln = $ee[Bln]; $thn1=$ee[Thn];
  include "../bulan.php"; 
  ?></div></td>
  </tr>
  <tr>
  <td>No Order</td><td>:</td><td><div align="left"><? echo $ee[NoPo]; ?></div></td>
  </tr>
  </table> 
  </div></td>
  </tr>
  <tr>
  <td width="34" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
  <td width="366" bgcolor="#D4D0C8"><strong>NAMA OBAT</strong></td>
  <td width="46" bgcolor="#D4D0C8"><div align="center"><strong>QTY</strong></div></td>
  <td width="366" bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
  <td width="46" bgcolor="#D4D0C8"><div align="center"><strong>ISI</strong></div></td>
  <td width="46" bgcolor="#D4D0C8"><div align="center"><strong>RETUR</strong></div></td>
  </tr>
  <?
  $nomer=1;
  $mjm_dfd = mysql_query("SELECT *  FROM podetil77x WHERE IdPox='$id'");
  while($s = mysql_fetch_array($mjm_dfd)){
   $ldkldlfdl_Dfdfdm = mysql_query("SELECT id,Qty FROM returbeli WHERE IdDetil='$s[id]'");
  $bv = mysql_fetch_array($ldkldlfdl_Dfdfdm);
  $pd  = $nomer%2;
  if($pd==1){
  $warna=' bgcolor="#F7FEE0"';
  }else{
  $warna=' bgcolor="#FFFF80"';
  }
  
 if($bv[id]){
 ?><tr bgcolor="#FF6699"><? 
 }else{
  ?>
  <tr <? echo $warna; ?>   onClick="location.href='7VF_A.php?id=<? echo $id; ?>&IdDetil=<? echo $s[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <? } ?>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($s[NamaBarang])); ?></div></td>
  <td><div align="center"><? echo number_format($s[Qty]); ?></div></td>
    <td><div align="left"><? echo ucfirst(strtolower($s[NamaSatuan])); ?></div></td>
<td><div align="center"><? $tar =$s[Pengali];
  echo number_format($tar);  ?></div></td>  
  <td><div align="center"><? echo $bv[Qty]; ?></div></td>  
  </tr>
   <?
  $nomer++; }
  ?>
  </table>
  <? } ?>
  </div>  </td>
  </tr>
<tr>
  <td colspan="3" valign="top"><span class="style1">.</span></td>
  </tr>
</table>
</div>
</body>
</html>
<?
}
?>