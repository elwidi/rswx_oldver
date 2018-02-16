<?php 
session_start();
include "../konek.php";
include "../ceke.php";
   $bala=2;
$kdjkdsjkfdfd_DFdfd  = mysql_query("select * from datapasien where id='$IdPasien'");
$yape = mysql_fetch_array($kdjkdsjkfdfd_DFdfd);
 $pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-9' WHERE id='$a[id]'");
}
$l_00l = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$b= mysql_fetch_array($l_00l);
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
		$('#suggest').autocomplete('capas.php', 
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
							value: data[i].NamaPasien // nama field yang dicari
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
str += '<u>'+data.NamaPasien+'</u><br />NO RM.'+data.NoPasien+'<br />Alamat: '+data.Alamat;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="x23.php?man=<? echo $mas; ?>&IdPasien=" + Result;
			}
		);
	});
  </script>
  <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
    <title></title>
<style type='text/css'>
/*
Tema: LEGO
Oleh: http://hompimpaalaihumgambreng.blogspot.com
*/
ul.menu               {list-style:none;margin:10px 0;padding:0;height:33px;background-color:#ffffff;font:11px Verdana,Arial;}
ul.menu *             {margin:0;padding:0;}
ul.menu a             {display:block;text-decoration:none;color:#7eb7fb;}
ul.menu li            {position:relative;float:left;}
ul.menu ul            {position:absolute;z-index:100;top:32px;left:0;background-color:#7eb7fb;display:none;opacity:0;list-style:none;-webkit-box-shadow:0 3px 5px #aaa;-moz-box-shadow:0 3px 5px #aaa;box-shadow:0 3px 5px #aaa;}
ul.menu ul li         {position:relative;border:0;width:150px;margin:0;}
ul.menu ul li a       {display:block;padding:7px 15px 7px;background-color:#084a9b;color:#7eb7fb;}
ul.menu ul li a:hover {background-color:#ffe30a;color:#fff;}
ul.menu ul ul         {left:150px;top:-1px;}
ul.menu .menulink     {padding:10px 15px 10px;font-weight:bold;text-transform:uppercase;background:#ffffff;color:#006633;}
ul.menu .menulink:hover,
ul.menu .menuhover    {background:#449400;color:#caecac;}
ul.menu .sub          {background:#084a9b url(http://2.bp.blogspot.com/-x-_lO7zXjg4/Tk453ebAeHI/AAAAAAAAAvE/XXjrwOz0MbM/s1600/arrowgambreng.gif) 138px 10px no-repeat;color:#7eb7fb;}
ul.menu .sub:hover    {color:#fff;}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size:12px}
</style><script language="JavaScript">
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
<script type='text/javascript'>
//<![CDATA[
var menu=function(){var t=15,z=500,s=6,a;
function dd(n){this.n=n; this.h=[]; this.c=[]}
dd.prototype.init=function(p,c){a=c; var w=document.getElementById(p), s=w.getElementsByTagName('ul'), l=s.length, i=0;
for(i;i<l;i++){var h=s[i].parentNode; this.h[i]=h; this.c[i]=s[i];
h.onmouseover=new Function(this.n+'.st('+i+',true)');
h.onmouseout=new Function(this.n+'.st('+i+')');}}
dd.prototype.st=function(x,f){var c=this.c[x], h=this.h[x], p=h.getElementsByTagName('a')[0];
clearInterval(c.t); c.style.overflow='hidden';
if(f){p.className+=' '+a;
if(!c.mh){c.style.display='block'; c.style.height=''; c.mh=c.offsetHeight; c.style.height=0}
if(c.mh==c.offsetHeight){c.style.overflow='visible'}
else{c.style.zIndex=z; z++; c.t=setInterval(function(){sl(c,1)},t)}}else{p.className=p.className.replace(a,''); c.t=setInterval(function(){sl(c,-1)},t)}}
function sl(c,f){var h=c.offsetHeight;
if((h<=0&&f!=1)||(h>=c.mh&&f==1)){if(f==1){c.style.filter=''; c.style.opacity=1; c.style.overflow='visible'}
clearInterval(c.t); return}
var d=(f==1)?Math.ceil((c.mh-h)/s):Math.ceil(h/s), o=h/c.mh;
c.style.opacity=o; c.style.filter='alpha(opacity='+(o*100)+')';
c.style.height=h+(d*f)+'px'}
return{dd:dd}}();
//]]>
</script>
    <style type="text/css" title="currentStyle">
                @import "css/grid_sytles.css";
                @import "css/themes/smoothness/jquery-ui-1.8.4.custom.css";
.style6 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
    </style>

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js2/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js2/jquery-ui-1.7.custom.min.js"></script>

    <script  type="text/javascript" src="js2/jquery-search.js"></script>
<script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("kwe.php?id=<?   echo $id; ?>", "wCompare", "width=680,height=440,left=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

function toCompare2() { 
    wCompare = window.open("ub9.php", "wCompare", "width=580,height=640,left=700,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
</script>
</head><body background="../gambar/bag.jpg"  <? if($b[id]){ ?>onLoad="toCompare()"<? } ?> >
<div align="center">
<form action="f_l.php">
<table border="0" cellpadding="0" cellspacing="0">
<tR  bgcolor="#6AC067">
<TD width="421" colspan="3" bgcolor="#6AC067"><div align="left">
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
		    }elseif($a[Level]==10){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
</div></TD>
</tR>
<tr>
<td colspan="3"><div align="left">USER LOG : <?
echo strtoupper($a[Nama]); 
?><br>
<?
include "sif.php";
?></tr>
<tr valign="top">
  <td colspan="2">
  <div align="left">
   <table  border="0" cellpadding="2" cellspacing="2">
     <tr>
      <td valign="top"  colspan="3"><div align="left">
           <table width="485" border="0" cellpadding="2" cellspacing="2" class="style2">
		   <tr>
		   <td colspan="3" bgcolor="#D4D0C8"><div align="left">
		   <?
		   if($man=='1'){
		   $ket="";
		   }elseif($man==2){
		   $ket="PEMBAYARAN PEMBUATAN AKTE LAHIR ";
		   }else{
		     $ket="PEMBAYARAN PEMBELIAN materai";
		   }
		   ?>
		   <input type="radio" name="man" value="1" onClick="location.href='x23.php?IdPasien=<? echo $IdPasien; ?>';"<? if(!$man){?> checked="checked"<? } ?>>materai
		   <input type="radio" name="man" value="2" onClick="location.href='x23.php?IdPasien=<? echo $IdPasien; ?>&man=2';" <? if($man==2){ ?> checked="checked"<? }?> >Akte
		   <input type="radio" name="man" value="3" onClick="location.href='x23.php?IdPasien=<? echo $IdPasien; ?>&man=1';">Lainnya
		   </div></td>
		   </tr>
		  <?
		   if($yape[id]){
		   ?>
		   <tr>
		            <td>NO RM</td>
                    <td>:</td>
		   <td><div align="left"><? echo $yape[NoPasien]; ?> || <? if($yape[id]){ ?>
		   <input type="button" name="fgfgf" value="Reset" onClick="location.href='x23.php';"> <? } ?></div></td>
		   </tr>
		   <? } ?> <tr>
                    <td><p>PASIEN</td>
      <td><strong>:</strong></td>
      <td><div align="left">	
                      <!--   <input name="Tujuan" type="text" class="style2" id="Tujuan" size="30" maxlength="100">-->
					  <?
					  if($yape[id]){
					  echo ucfirst(strtolower($yape[NamaPasien]));
					  
					  }else{
					  ?><input name="text" type="text" class="style8" id="suggest" />
					  <? } ?>
      </div></td>
    </tr>
		   <tr>
		   <td>TANGGAL</td>
		   <td>:</td>
		   <td><div align="left">
		   <span class="style15 style2 style8  style3">
                        <select name="Tgl" class="style1" id="Tgl" <? if($yape[id]){ }else{ ?> disabled<? } ?>>
                          <option value="<? echo date("d"); ?>"><? echo date("d");  ?></option>
		  <?
		 
$ttg= 1;
while($ttg<32){
?>
          <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
          <? $ttg++; } ?>
    </select>
  /
  
                        <select name="Bln" class="style1" id="Bln"  <? if($yape[id]){ }else{ ?> disabled<? } ?>>
                          <option value="<? echo date("m"); ?>"><? 
		 $bln=date("m")-0;
		 $thn1='';
		 include "../bulan.php";
		 ?></option>
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
                        <select name="Thn" class="style1" id="Thn"  <? if($yape[id]){ }else{ ?> disabled<? } ?>>
                          <?
$awale = 2014;
while($awale<=2015){
?>
                          <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
<? $awale++; } ?>
  </select></span>
		   </div></td>
		   </tr>
            <tr>
              <td width="174">SUDAH DITERIMA DARI </td>
    <td width="3"><strong>:</strong></td>
    <td width="287"><div align="left">
	<input name="Pembayar" type="text" class="style2" size="30" maxlength="100" value="<? echo $yape[NamaPasien];  ?>">
      </div></td>
    </tr>
	<tr>
	<td>SARANA BAYAR</td>
	<td>:</td>
	<td><div align="left"><select name="Type" class="style3"  <? if($yape[id]){ }else{ ?> disabled<? } ?>>
  <option value="-">--PILIH TYPE BAYAR--</option>
  <? 
 	if($bala==2){
	$kisopa = mysql_query("SELECT id FROM bank WHERE Stak=0  
	AND id!=11 AND id!=6 AND id!=13 AND id!=18 AND id!=25 AND id!=23 AND id!=26  AND id!=32  AND id!=31
	AND id!=11  AND id!=30 ORDER BY NamaBank");
	}else{
	$kisopa = mysql_query("SELECT id FROM bank WHERE  Stak=0 ORDER BY NamaBank");
	}
	while($h = mysql_fetch_array($kisopa)){
	if($bala==3){
	?>
	 <option value="<? echo $h[id]; ?>" >
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   
	?>
  </option><? 
	}elseif($bala==2){
	?>
	 <option value="<? echo $h[id]; ?>">
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   // echo "($h[id])";   
	?>
  </option>
	<? 
	}elseif($bala==1){
	?>
	 <option value="<? echo $h[id]; ?>"   >
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   
	?>
  </option>
	<? 
	}else{?>
  <option value="<? echo $h[id]; ?>"  > 
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);  echo "($h[id])";
	?>
  </option>
  <? } //end of bala
  ?>
  <? } ?>
</select>
<input type="hidden" name="IdPasien" value="<? echo $yape[id]; ?>">

 	</div></td>
	</tr>
            <tr>
                    <td>TUNAI</td>
      <td><strong>:</strong></td>
      <td><div align="left">
	  	<input onKeyUp="formatAngka(this, '.')"    <? if($yape[id]){ }else{ ?> disabled<? } ?>  name="Tunai" type="text" class="style2" size="20" maxlength="20">
      </div></td>
    </tr>
	<tr>
                    <td>K.KREDIT</td>
      <td><strong>:</strong></td>
      <td><div align="left">	<input onKeyUp="formatAngka(this, '.')"   <? if($yape[id]){ }else{ ?> disabled<? } ?>  name="Kk" type="text" class="style2" size="20" maxlength="20">
      </div></td>
    </tr>
	<tr>
                    <td>DEBEIT</td>
      <td><strong>:</strong></td>
      <td><div align="left">	<input  onKeyUp="formatAngka(this, '.')"   <? if($yape[id]){ }else{ ?> disabled<? } ?> name="Db" type="text" class="style2" size="20" maxlength="20">
      </div></td>
    </tr>
             
            <tr valign="top">
              <td>UNTUK PEMBAYARAN </td>
      <td><strong>:</strong></td>
      <td><div align="left"><?
	  if($yape[id]){
	  $ket = $ket." An: ".ucfirst(strtolower($yape[NamaPasien])). " RM : $yape[NoPasien]";
	  }else{
	  $ket=$ket; 
	  }?>
	  <textarea  <? if($yape[id]){ }else{ ?> disabled<? } ?>  name="Keterangan" cols="36" rows="3" class="style2"><? echo $ket; ?></textarea>
	  </div></td>
    </tr>
             <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?
			if($id>0){
			?>
			<tr>
			<td colspan="3" bgcolor="#FFCC00"><div align="center">
			<input name="fgfgf" type="button" class="style6" onClick="location.href='x23.php';" value="Reset Tampilan"  style="background:#990000">
			<span class="style6">			.</span></div></td>
			</tr>
			<?
			}else{
			?><tr>
              <td colspan="3" bgcolor="#5BB752"><div align="left">
			  <input  <? if($yape[id]){ }else{ ?> disabled<? } ?>  name="fgfg" type="submit" class="style2" value="Simpan dan Cetak">
			 
			   <input name="fgfg" type="button" class="style2" onClick="location.href='index.php';" value="Selesai">
			  </div></td>
              </tr>
			  <? } ?>
            </table>
  </div>
  </td><td width="706" valign="top"><div align="left">
  <table width="701" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr valign="top">
  <td colspan="8"><div align="left">
  <table border="0" cellpadding="0" cellspacing="0" class="style2">
  <tr>
  <td width="69">NO KWT</td>
  <td width="8">:</td>
  <td width="236"><div  align="left">
  <input type="text" name="NoKwt2" maxlength="20" size="12" class="style2">
  </div></td>
  </tr>
  </table>
  </div></td>
  </tr>
	<tr>
	<td width="19" height="24" bgcolor="#67C265"><strong>NO</strong></td>
	<td width="192" bgcolor="#67C265"><strong>PEMBAYAR</strong></td>
	                <td width="77" bgcolor="#67C265"><p><strong>KETERANGAN</strong></p>
                      </td>
	<td width="56" bgcolor="#67C265"><strong>NO KWT</strong></td>
	<td width="68" bgcolor="#67C265"><div align="right"><strong>TGL</strong></div></td>
  	<td width="88" bgcolor="#67C265"><strong>OPR</strong></td>
	</tr>
	<?
	$nomer=1;
	$mas=strlen($NoKwt2);
	
	if($mas>0){
	$kksk = mysql_query("SELECT * FROM kwtman WHERE id='$NoKwt2'");
	}else{
	$kksk = mysql_query("SELECT * FROM kwitansirj WHERE Pembayar LIKE '$Pembayar%'
	AND KodeBagian='Man' ORDER BY id desc LIMIT 0,30");
	}
	while($xx = mysql_fetch_array($kksk)){
	$met = $nomer%2;
	if($met==1){
	$warna='';
	}else{
	$warna='bgcolor="#99CCCC"';	
	}
	?>
	<tr valign="top"   <? echo $warna; ?>   onClick="wCompare = window.open('kwe.php?id=<?   echo $xx[id]; ?>', 'wCompare', 'width=680,height=440,left=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo $xx[Pembayar]; ?></div></td>
	<TD><div align="left"><? echo  $xx[Keterangan]; ?></div></TD>
		<TD><div align="left">Man:<? echo  $xx[id]; ?></div></TD>
	<td><div align="right"><? echo "$xx[TglBayar]/$xx[BlnBayar]/$xx[ThnBayar]"; ?></div></td>
 	<td><div align="left"><? echo ucfirst(strtolower($xx[Kasir])); ?></div></td>
	</tr>
	
	<? $nomer++; }?><tr>
	  <td colspan="8" bgcolor="#67C265">&nbsp;</td>
	  </tr>
	</table>
  </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>