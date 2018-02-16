<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
  $kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

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
str += '<u>'+data.NamaSupplier+'</u><br />PO.'+data.NoPo+'<br />TGL: '+data.Tgl+' / '+data.Bln+' / '+data.Thn;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="mas_hari_lagi_sakit.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>&IdPo=" + Result;
			}
		);
	});
  </script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CC6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head><body>
<div align="left">
<table border="1">
<tr>
<td colspan="3" valign="top">
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td>NO PO</td><td>:</td><td><div align="left"><? echo $kk[NoPo]; ?></div></td>
</tr>
<tr>
<td width="101">NAMA BARANG</td>
<td width="8">:</td>
<td width="252"><div align="left">
<input type="text" name="NamaBarang" maxlength="20" size="20" class="style1" /><?
if($asa==4){
?>
<input type="button" name="fgfgf" value="Reset" onClick="location.href='c233.php?iin=<? echo $iin; ?>&id=<? echo $id; ?>';" class="style1">
<? 
}
?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="asa" value="3">
<input type="hidden" name="iin" value="<? echo $iin; ?>"> 
</div></td>
</tr>
</table>
</form>
</div>
</td>
</tr>
   <tr>
   <td width="539" colspan="3"><div align="left">
   <table width="548" border="0" cellpadding="1" cellspacing="1" class="style1">
   <tr>
   <td width="38" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
   <td width="286" bgcolor="#D4D0C8"><strong>NAMA BARANG</strong></td>
   <td width="69" bgcolor="#D4D0C8"><div align="center"><strong>QTY</strong></div></td>
   <td width="142" bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
   
   </tr>
   <?
    $no =1;
	if($asa==4){
	$kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' AND id='$IdDetil' ORDER BY id");	
	}elseif($asa==3){
	$kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' AND NamaBarang LIKE '$NamaBarang%' ORDER BY id");	
    }else{
    $kkkfg = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' ORDER BY id");	
    }
	while($gg = mysql_fetch_array($kkkfg)){
   if($IdDetil==$gg[id]){
   ?>
   <tr bgcolor="#CCFFCC">
<td><div align="center"><? echo $no; ?></div></td>
   <td><div align="left"><? echo strtoupper($gg[NamaBarang]); ?></div></td>
   <td><div align="center"><a href="c_bbb.php?IdDetil=<? echo $gg[id]; 
   ?>&id=<? echo $id; ?>&asa=<? echo $asa; 
   ?>&NamaBarang=<? echo $NamaBarang; ?>&iin=<? echo $iin; ?>"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">Del</a>   ||
   <a href="" style="text-decoration:none" onClick="wComparecd_1_33_dd = window.open('ganjen_aja_lho.php?asa=<? echo $asa; ?>&NamaBarang=<? echo $NamaBarang; 
   ?>&iin=bca&IdDetil=<? echo $gg[id]; ?>&id=<? echo $id; ?>', 
  'wComparecd_1_33_dd', 'width=580,height=410,left=70,Top=56,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecd_1_33_dd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Edit</a>
	     </div></td> 
   <td><div align="left">
   <input name="text" type="text" class="style1" id="suggest" />
   </div></td>
      </tr>
   <? 
   }else{?>
   <tr   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='c233.php?IdDetil=<? echo $gg[id]; 
   ?>&id=<? echo $id; ?>&asa=4&NamaBarang=<? echo $NamaBarang; ?>&iin=<? echo $iin; ?>';">
   <td><div align="center"><? echo $no; ?></div></td>
   <td><div align="left"><? echo strtoupper($gg[NamaBarang]); ?></div></td>
   <td><div align="center"><? echo number_format($gg[Qty]); ?></div></td>
    <td><div align="left"><? echo strtoupper($gg[NamaSatuan]); ?></div></td>
   </tr>
   <? } ?>
  
   <? $no++; } ?> <tr>
     <td colspan="4" bgcolor="#D4D0C8">&nbsp;</td>
     </tr>
   </table>
   </div>
   </tr>
   </table></div>
</body>
</html>
<?
}
?>