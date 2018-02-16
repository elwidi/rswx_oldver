<?
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 2');
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66CC00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('searc2x.php', 
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
str += '<u>'+data.NoPo+'</u><br />'+data.NamaSupplier+'<br />TGL: '+data.Tgl+' / '+data.Bln+' / '+data.Thn;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="XW_9.php?id=" + Result;
			}
		);
	});
  </script>
  <?
  include "cso.php";
  include "cso2.php";
  ?>
  <style type="text/css">
<!--
.style3 {	color: #000000;
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
<td width="681" colspan="3"><div align="left" class="style1">
	<?
	if($dik_dimas[delapanbelas]==1){
$file='../gambar/log_far.gif';
   	}elseif($a[Level]==1){
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
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<form target="_self">
<table border="0" cellspacing="2" class="style2">
<tr>
<td valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="98">No Po </td>
<td width="8">:</td>
<td width="885"><div align="left">
<input name="text" type="text" class="style2" id="suggest" />
<input type="hidden" name="hari" value="ok">
</div></td>
</tr><!-- 
<tr>
<td>No Faktur</td><td>:</td><td><div align="left">
<input name="text" type="text" class="style2" id="suggest2" />
</div></td>
</tr>
<tr>
 
<td>No So</td><td>:</td><td><div align="left">
<input name="text" type="text" class="style2" id="suggest3" />
</div></td>
</tr>--></table>
</div></td>
</tr> 
<tr>
<td><div align="left">
  <input name="fgf" type="submit" class="style2" value="Submit">
  <? if($dik_dimas[delapanbelas]==1){ }else{ ?>
  <input name="ffg" type="button" class="style2" onClick="location.href='xsw_99.php';" value="Po Baru">
  <? } ?><input name="ffg2" type="button" class="style2" onClick="location.href='XW_9.php';" value="Po Farmasi" > 
  
  <input name="ffg2"  type="button" class="style2" onClick="location.href='semoga_ela_cepet_sembuh.php';" value="Po Far.Gudang"  >
   <input name="fgfgfgf" type="button" class="style2" style="background:#FFFF00" onClick="location.href='minum_kopi_makan_gorengan.php';" value="List Faktur">

<input  type="button" value="Cek Periode" name="fgfg2" class="style3" style="background:#99FF66"    onClick="wCompare_0834m = window.open('../Radiologi/kCik_09.php?kaps=2&dimasx=doa', 
  'wCompare_0834m', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0834m.focus();" >
  <input name="ffg" type="button" class="style2" onClick="location.href='index.php';" value="Kembali">
</div></td>
</tr>
 </table>
</form>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="773" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="27" bgcolor="#99CCCC"><div align="center"><strong>NO</strong></div></td>
<td width="200" bgcolor="#99CCCC"><strong>NO PERMINTAAN </strong></td>
<td width="220" bgcolor="#99CCCC"><strong>TGL PERMINTAAN </strong></td>
 <td width="83" bgcolor="#99CCCC"><div align="center"><strong>ITEM</strong></div></td>
<td width="153" bgcolor="#99CCCC"><div align="left"><strong>KAIT</strong></div></td>
<td width="153" bgcolor="#99CCCC"><div align="left"><strong>UPD</strong></div></td>
</tr>
<?
$nomer=1;
if($fito=='doa'){
$kkm = mysql_query("SELECT * FROM polog77 WHERE Tgl>=$tgl1 AND Tgl<=$tgl2 AND Bln=$bln1 AND Thn=$thn1");
}elseif($id>0){
$kkm = mysql_query("SELECT * FROM polog77 WHERE id=$id");  
}elseif($hari=='doa'){
$kkm = mysql_query("SELECT * FROM polog77 WHERE Cek=2 AND  NoPo LIKE '$NoPo%' ORDER BY id desc LIMIT 0,200");
 }elseif($hari=='gondrong'){
$kkm = mysql_query("SELECT * FROM polog77 WHERE Stak=2 AND  NoPo LIKE '$NoPo%' ORDER BY id desc LIMIT 0,200");
}else{
 $kkm = mysql_query("SELECT * FROM polog77 WHERE Stak=0 AND  NoPo LIKE '$NoPo%' ORDER BY id desc LIMIT 0,200");
 // $kkm = mysql_query("SELECT * FROM polog77 WHERE Stak=0 AND  NoPo LIKE '$NoPo%' ORDER BY id desc");
}
 while($mm = mysql_fetch_array($kkm)){
 $hb= $nomer%2;
 if($hb==1){
 $warna='bgcolor="#FFCC99"';
 }else{
 $warna='';
 }
if($dik_dimas[sembilanbelas]==177){
?><tr <? echo $warna;  ?> onClick="wComparec45454dd_99d = window.open('120s_223.php?id=<? echo $mm[id]; ?>', 
  'wComparec45454dd_99d', 'width=580,height=220,left=270,Top=106,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparec45454dd_99d.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><?
}else{?>
<tr  <?  echo $warna; ?>  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='x23.php?id=<? echo $mm[id]; ?>';"  >
<? } ?>
<td><div align="center"><? echo $nomer; 
 //echo "$dik_dimas[sembilanbelas]"; ?></div></td>
<td <? if($mm[Jenis]==1){ ?> bgcolor="#CCFF99"<? } ?>><div align="left"><?
//

//

 echo $mm[NoPo]; ?></div></td>
<td><div align="left"><? if($mm[Cek]==2){
?><font color="#0000CC"><b><i><? echo "$mm[Tgl]-$mm[Bln]-$mm[Thn]";
?></i></b></font><?
}else{
echo "$mm[Tgl]-$mm[Bln]-$mm[Thn]";
} ?></div></td>
 <td><div align="center"><? 
   $fffkkkfg = mysql_query("SELECT COUNT(id) AS mm FROM podetil77 WHERE IdPo77='$mm[id]'");
		$tt = mysql_fetch_array($fffkkkfg); 
		echo $tt[mm]; ?></div></td>
<td><div align="left"><?
$kdfdfd_Dfdfdx =  mysql_query("SELECT count(id) as jj  FROM podetil77x WHERE IdPo77='$mm[id]'");
$bp2 = mysql_fetch_array($kdfdfd_Dfdfdx);
if($bp2[jj]>0){
echo $bp2[jj];
}else{
echo "-";
} 
?></div></td>
<td width="52"><div align="center"><?
$pco = explode("/",$mm[NoPo]);
$pae= "$pco[0]-$mm[Bln]-$mm[Thn]";
$ddf = mysql_query("UPDATE polog77 SET KeyID='$pae' WHERE id='$mm[id]'");
if($ddf){
echo $mm[KeyID];
}else{
echo "-";
}
?></div></tr>
<?
$nomer++; } ?><tr>
  <td colspan="6" bgcolor="#99CCCC">&nbsp;</td>
  </tr> 
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>