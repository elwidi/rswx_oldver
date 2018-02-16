<?
session_start();
 include "../konek.php";
include "../ceke.php";
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
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: #000000;
}
.style5 {color: #FFFFFF; font-weight: bold; }
.style6 {
	color: #000066;
	font-weight: bold;
	font-style: italic;font-size: 11px;
}
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
   <table width="1255" border="0" cellpadding="2" cellspacing="2" >
     <tr class="style2"> 
       <td width="1247" colspan="3"><div align="center"><strong> 
         LIST DATA OBAT<br>
        
       </strong></div></td>
   </tr>
     <tr>
       <td colspan="3">
         <div  align="left">
           <form target="_self">
             <table border="0" cellpadding="2" cellspacing="2" class="style1">
     <tr>
  <td>GOLONGAN</td><td>:</td><td><div align="left">
  <select name="IdGol" class="style1">
  <option value="-">--Golongan--</option>
  <?
  $jkpop= mysql_query("SELECT id,NamaGolongan FROM golobat ");
  while($dv = mysql_fetch_array($jkpop)){
  ?>
  <option value="<? echo $dv[id]; ?>" onClick="location.href='data_obat.php?Gol=<? echo $dv[NamaGolongan]; ?>&iin=2&dimas=<? echo $dv[id]; ?>&ela=eli';"><? 
  $kdikdidkdi = mysql_query("SELECT NamaGolongan FROM golobat WHERE id='$dv[id]'");
  $mn = mysql_fetch_array($kdikdidkdi);
  echo strtoupper($mn[NamaGolongan]);
  ?></option>
  <? } ?>
     <option value="778" onClick="location.href='data_obat.php?Gol=NAR&iin=2&dimas=778&ela=eli';">NARKOTIKA</option>
  <option value="779" onClick="location.href='data_obat.php?Gol=PSI&iin=2&dimas=779&ela=eli';">PSIKOTROPIKA</option>

  </select>
  || <input type="button" class="style1" name="dfd" value="+++"  onClick="wCompare = window.open('ioi_09_0.php', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <?
			 if($a[Level]==12 || $a[Level]==9){?> disabled="disabled"<? }
			 ?>  ></div></td>
  </tr>       <tr >
                  <td width="94"><? if($bon=='jovi'){ ?>
				   <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="data_obat.php?NamaObat=<? echo $NamaObat; ?>" style="text-decoration:none"><u><b><i>NAMA OBAT</i></b></u></a> 
				 <? }else{ ?>
				 
				 <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="data_obat.php?NamaObat=<? echo $NamaObat; ?>&bon=jovi" style="text-decoration:none">NAMA OBAT</a><? } ?></td>
     <td width="5">:</td>
     <td width="1061"><div align="left">
       <?
 
if($bon=='jovi'){
?><input type="text" class="style3" id="suggest" />
<?
}else{ ?><input type="text" name="NamaObat" maxlength="20" size="20">
<? } ?>
       <input type="hidden" name="iin" value="1">
       </div></td>
     </tr>
	  
               <tr>
                 <td colspan="3"><div align="left">
                   <input name="fgf" type="submit" class="style1" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Cari">
             <input name="fggf" type="button" class="style1" onClick="location.href='obat.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Tambah" <?
			 if($a[Level]==12 || $a[Level]==9  || $a[Level]==7){?> disabled="disabled"<? }
			 ?>>
                   
                   <!-- <input name="fkjkf" type="button" class="style1" onClick="location.href='fjjff_r.php';" value="Paket" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">-->
				<?
				if($ela=='eli'){
				?>
				 <? 
				}else{
				?>   
				  
				<? } ?>
				   <input name="ffg" type="button" class="style1" onClick="location.href='../3w.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Kembali">
                 || 
   <?
   if($a[Level]==7){}else{
   ?><input type="button" name="ffg" value="Tampilkan Lebih Besar" onClick="location.href='../imp/obat.php';" class="style1"> 
   <? } ?> || TOTAL DATA OBAT : <?
   $KIK = mysql_query("SELECT COUNT(id) AS hh FROM dataobat");
   $K= mysql_fetch_array($KIK);
   echo number_format($K[hh]);
   ?> </div></td> 
     </tr>
               <tr>
                 <td colspan="3" valign="top"><div align="left">
				 <table width="1040" border="1">
				      <tr bgcolor="#000000" class="style1">
               <td width="19"><span class="style5">NO</span></td>
     <td width="91"><span class="style5">KODE</span></td>
     <td width="262"><span class="style5">NAMA OBAT</span></td>
	      <td width="111"><span class="style5">GOLONGAN</span></td>
      <td width="92"><div align="right" class="style5">JUAL</div></td>
     <?
	   if($a[Level]==7){ ?>
	    <td bgcolor="#ECE9D8">INTEGRASI 1</td>
    <td bgcolor="#FFFFFF">NAMA AKUNT 1</td>
	  <td bgcolor="#ECE9D8">INTEGRASI 2</td>
    <td bgcolor="#FFFFFF">NAMA AKUNT 2</td>
 	<? }else{
	   ?> <td width="92"><span class="style5">SATUAN</span></td>
	  <td width="54"><div align="center" class="style5">STOK</div></td> 
       <? } ?></tr>
				 </table>
				 </div></td>
               </tr>
             </table>
     </form>
     </div>     </td>
   </tr>
     <tr>
       <td colspan="3" valign="top">
         <div align="left">
           <?
		   if($a[Level]==7){
		   $file = 'list_dt2.php';
		   }else{
		   $file = 'list_dt.php';
		   } ?><iframe src="<? echo $file; ?>?Gol=<? echo $Gol; ?>&NamaObat=<? echo $NamaObat; ?>&iin=<? echo $iin; 
		   ?>&dimas=<? echo $dimas; ?>&ela=<? echo $ela; ?>" width="1200" height="400" frameborder="0"></iframe>
     </div>     </td>
   </tr>
   </table>
 </div>
 </body>
 </html>
 