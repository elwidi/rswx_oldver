<?
session_start();
 include "../konek.php";
include "../ceke.php";
///header('Refresh: 3');
  if($NamaObat==''){
$NamaObat='%';
}
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
		$('#suggest').autocomplete('search.php', 
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
							value: data[i].NamaObat // nama field yang dicari
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
str += '<u>'+data.NamaObat+'</u><br />HARGA BELI Rp.'+data.HargaBeli+'<br />Merk: '+data.NamaMerk;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.NamaObat+'';;
location.href="s3.php?NamaObat=" + Result;
			}
		);
	});
  </script>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.style6 {
	color: #000066;
	font-weight: bold;
	font-style: italic;font-size: 11px;
}
.style8 {color: #00000; font-weight: bold; font-size: 12px; }
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
   <table width="1071" border="0" cellpadding="1" cellspacing="2" class="style1">
             <tr bgcolor="#000000" class="style1">
               <td width="19" bgcolor="#FFFFFF"><span class="style8">NO</span></td>
     <td width="93" bgcolor="#FFFFFF"><span class="style8">KODE</span></td>
     <td width="275" bgcolor="#FFFFFF"><span class="style8">NAMA OBAT</span></td>
	      <td width="131" bgcolor="#FFFFFF"><span class="style8">GOLONGAN</span></td>
      <td width="83" bgcolor="#FFFFFF"><div align="right" class="style8">HNA</div></td>
    <?
	   if($a[Level]==7){ ?>
	   <td bgcolor="#ECE9D8">INTEGRASI 1</td>
    <td bgcolor="#FFFFFF">NAMA AKUNT 1</td>
	  <td bgcolor="#ECE9D8">INTEGRASI 2</td>
    <td bgcolor="#FFFFFF">NAMA AKUNT 2</td>
 	<? }else{
	   ?>  <td width="114" bgcolor="#FFFFFF"><span class="style8">SATUAN I</span></td>
	   <td width="114" bgcolor="#FFFFFF"><span class="style8">SATUAN II</span></td> 
	  <td width="94" bgcolor="#FFFFFF"><div align="center" class="style8">STOK</div></td> 
      <td width="44" bgcolor="#FFFFFF"><span class="style8">OPR</span></td>
      <? } ?></tr><?
   $NO=1;
    if($iin==2){
      $kereka = mysql_query("SELECT * FROM dataobat  WHERE NamaGolongan like '$Gol%' AND NamaObat!=''  ORDER BY Vas DESC "); 
    }elseif($iin==1){
    $kereka = mysql_query("SELECT * FROM dataobat  WHERE NamaObat LIKE '$NamaObat%'  AND NamaObat!=''  ORDER BY Vas,NamaObat DESC");
   }else{
    $kereka = mysql_query("SELECT * FROM dataobat ORDER BY NamaObat  LIMIT 0,25 ");
   }
   while($c = mysql_fetch_array($kereka)){
//   $upa = mysql_query("UPDATE dataobat SET HargaJual='$c[HargaBeli]' WHERE id='$c[id]'");
   	 $pok = $NO%2;
	  if($a[Level]==7 && $pok==0){
	 $warna='bgcolor="#E0FEEF"';
	 }elseif($pok==1){
	 $warna='bgcolor="#FFFF99"';
	 }else{
	 	 $warna='';
	 }  
	   $vare ='class="style1"';
	   	   $vare2 ='class="style6"';
		    if($a[Level]==7){
			?><tr valign="top" <? echo $warna; ?> onClick="wCompare_8 = window.open('../Akuntansi/as_0.php?id=<? echo $c[id]; ?>', 
  'wCompare_8', 'width=600,height=300,left=470,Top=80,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_8.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? 
			}else{?>
     <tr valign="top"   <? echo $warna; ?> onClick="wCompare = window.open('intini.php?id=<? echo $c[id]; ?>', 
  'wCompare', 'width=600,height=500,left=470,Top=80,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
			   <? } ?>
               <td><div align="center"><? echo $NO; ?></div></td>
     <td><div align="left"><? echo $c[KodeObat]; ?></div></td>
     <td><div align="left"><? 
	 echo strtoupper($c[NamaObat]); ?></div></td>
	  <td><div align="left"><?
	  if($c[IdGol]==778 || $c[IdGol]==779){
	 ?><font color="#990000"><? echo strtoupper($c[NamaGolongan]); ?></font><?  
	  }else{
	 echo strtoupper($c[NamaGolongan]);
	}  ?></div></td> 
        <td><div align="right"><? echo number_format($c[Hna]); ?></div></td>
	 <?
	if($a[Level]==7){ 
	$kidkd_39483 = mysql_query("SELECT * FROM obat_akunt WHERE IdObat='$c[id]'");
	$hp= mysql_fetch_array($kidkd_39483);
	?>
	<td><div align="left"><? echo $hp[KodeAkunt]; ?></div></td>
	<td><div align="left"><? echo ucfirst(strtolower($hp[NamaAkunt])); ?></div></td>
	<?
	$kidkd_394832 = mysql_query("SELECT * FROM obat_akunt2 WHERE IdObat='$c[id]'");
	$hp2= mysql_fetch_array($kidkd_394832);
	?>
	<td><div align="left"><? echo $hp2[KodeAkunt]; ?></div></td>
	<td><div align="left"><? echo ucfirst(strtolower($hp2[NamaAkunt])); ?></div></td>
 	<? }else{
	?>   <td><div align="left"><? echo strtoupper($c[Satuan]); ?></div></td>
	   <td><div align="left"><?
	   $ksisk_012= mysql_query("SELECT NamaSatuan,Pengali FROM settingsatuan WHERE IdBarang='$c[id]' ORDER BY Pengali DESC");
	   $pn = mysql_fetch_array($ksisk_012);
	   echo ($pn[NamaSatuan]); 
	   ?><font color="#999999"> ( <i><? echo number_format($pn[Pengali]); ?></i>) </font></div></td>
	  <td><div align="center"><?
	  $sa=2;
	  include "huting.php";
	  ?></div></td>  
	    
	<?
	   $KeyID="$a[KodeBagian]-$c[id]";
 
	?>   <td <? 	   if($nh[id]){ ?> bgcolor="#FF99CC"<? } ?>><div align="left"><? 
 	 echo strtoupper($c[Opr]);  
	   ?></div></td>
 	   <? } ?>
   </tr>
             
             <? $NO++; } ?> <tr>
               <td colspan="12" bgcolor="#000000"><span class="style6">.</span></td>
       </tr>
   </table>
 </div>
 </body>
 </html>
 