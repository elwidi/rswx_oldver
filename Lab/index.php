<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$hari = $_GET["hari"];
$id = $_GET["id"];
$bon = $_GET["bon"];
if($a[Level]==12){
$NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$kadal = $_GET["kadal"];
$bas = $_GET["bas"];
$Alamat = $_GET["Alamat"];
$NamaBapak = $_GET["NamaBapak"];
$Telp = $_GET["Telp"];
$id = $_GET["id"];
$Tgl=$_GET["Tgl"];
$Bln  = $_GET["Bln"];
$Thn= $_GET["Thn"];
$ikikak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($ikikak);
  $pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-12' WHERE id='$a[id]'");
}
if($a[User2]=='admin'){
$udd_00 = mysql_query("UPDATE konco SET Level=12 WHERE id='$a[id]' AND User='admin'");
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
str += '<u>'+data.NamaPasien+'</u><br />NO URUT.'+data.NoUrut+'<br />TGL: '+data.Tgl+' / '+data.Bln+' / '+data.Thn+'<br>REC : '+data.IdPasien;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="index.php?hari=mitra&id=" + Result;
			}
		);
	});
  </script>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
 <style type='text/css'>
/*
Tema: LEGO
Oleh: http://hompimpaalaihumgambreng.blogspot.com
*/
ul.menu               {list-style:none;margin:10px 0;padding:0;height:33px;background-color:#FFFFFF;font:11px Verdana,Arial;}
ul.menu *             {margin:0;padding:0;}
ul.menu a             {display:block;text-decoration:none;color:#7eb7fb;}
ul.menu li            {position:relative;float:left;}
ul.menu ul            {position:absolute;z-index:100;top:32px;left:0;background-color:#7eb7fb;display:none;opacity:0;list-style:none;-webkit-box-shadow:0 3px 5px #aaa;-moz-box-shadow:0 3px 5px #aaa;box-shadow:0 3px 5px #aaa;}
ul.menu ul li         {position:relative;border:0;width:150px;margin:0;}
ul.menu ul li a       {display:block;padding:7px 15px 7px;background-color:#084a9b;color:#7eb7fb;}
ul.menu ul li a:hover {background-color:#ffe30a;color:#fff;}
ul.menu ul ul         {left:150px;top:-1px;}
ul.menu .menulink     {padding:10px 15px 10px;font-weight:bold;text-transform:uppercase;background:#FFFFFF;color:#000000;}
ul.menu .menulink:hover,
ul.menu .menuhover    {background:#449400;color:#caecac;}
ul.menu .sub          {background:#084a9b url(http://2.bp.blogspot.com/-x-_lO7zXjg4/Tk453ebAeHI/AAAAAAAAAvE/XXjrwOz0MbM/s1600/arrowgambreng.gif) 138px 10px no-repeat;color:#7eb7fb;}
ul.menu .sub:hover    {color:#fff;}
 </style>
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
 <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style3 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
  style1554 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}       .style18 {color: #FFFFFF}
    .style24 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;}
    .style25 {color: #FFFFFF; font-weight: bold; }
    </style> 
</head>
<body>
<div  align="left"> 
   
  <table width="1355" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
 
<tr>
<td colspan="3" bgcolor="#FFFFFF"><div align="left"><strong>
  HALAMAN UTAMA UNIT LABORATORIUM <br>
  USER LOG : <? echo "$a[User]/$a[Level]"; ?>
</strong></div></td>
</tr><tr bgcolor="#59BA54" class="style24">
      <td  colspan="2" bgcolor="#33FF00">
<div align="left">
  <ul class='menu' id='menugambreng'>
            <li><a href='' class='menulink'>PASIEN</a> 
              <ul>
                <li><a  href="../Daftar/ed_d.php?ade=3">RAWAT JALAN</a></li>
                <li><a  href="../Daftar/fito_sayangku.php">RAWAT INAP</a></li>
              </ul>
            </li>
			
			 
            <li><a href='#' class='menulink' style="text-decoration:none">MASTER 
              DATA</a> 
              <ul>
                 <li><a  href="makan_gemblong.php">TARIF</a></li>
				 <li><a  href="jujur_adalah_jalan_indah.php">RUJUKAN</a></li>
                <li><a  href=""    onClick="wCompare_JDDJJD = window.open('aku_sudah_dengar_fitnah_itu.php', 
  'wCompare_JDDJJD', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_JDDJJD.focus();" >GANTI NAMA DOKTER PJ LAB</a></li>
              </ul>
            </li>
         
				
            <li><a href="#" class="menulink">Logistik Online</a> 
              <ul>
                <li><a href="../lg/index.php?ukur=hari" class="menulink">Farmasi 
                  Gd</a></li>
                <li><a href="../lg/index.php?ukur=hari2" class="menulink">Apotik</a></li>
                <li><a href="../lg/index.php?ukur=hari3" class="menulink">Logistik 
                  Umum</a></li>
              </ul>
            </li> 
					    
            <li> <a href="../keluar.php" class="menulink">KELUAR</a> </li>
				 
</ul><script type='text/javascript'>
var menu=new menu.dd('menu');
menu.init('menugambreng','menuhover');
</script>
  </div></td>
</tr>
 
<tr>
 <td valign="top">
 <div align="left">
 <form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style3">
<td width="159"><? if($bon=='jovi'){ ?>
				   <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="index.php" style="text-decoration:none"><u><b><i>NAMA PASIEN</i></b></u></a> 
				 <? }else{ ?>
				 
				 <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="index.php?bon=jovi" style="text-decoration:none">NAMA PASIEN</a><? } ?></td>
<td width="3">:</td>
<td width="1136"><div align="left">
  <?
if($bon=='jovi'){
?><input name="text" type="text" class="style8" id="suggest" />
  <? }else{ ?>
  <input name="NamaPasien" type="text" class="style123" size="20" maxlength="20">  
  <?  } ?>
  <input type="hidden" name="hari" value="sabar"></div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Proses" name="fgfg" class="style3" style="background:#99FF66">
<input  type="button" value="Cek Periode" name="fgfg2" class="style3" style="background:#99FF66"    onClick="wCompare_0834m = window.open('../Radiologi/kCik_09.php?kaps=2', 
  'wCompare_0834m', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0834m.focus();" >
</div></td>
</tr>
  </table> 
</form>
 </div>
 </td>
 </tr>
<tr bgcolor="#59BA54" class="style24">
  <td  colspan="2" bgcolor="#FFFFFF" valign="top">
  <div align="left">
  <table width="1347"  border="0" cellpadding="2" cellspacing="2" class="style3">
<tr>
<td width="17" height="34" bgcolor="#999999" class="style18 style3"><strong> NO</strong></td>
<td width="93" bgcolor="#999999" class="style3"><div align="center" class="style25"> NO URUT</div></td>
<td width="44" bgcolor="#999999" class="style18 style3"><strong> NO RM</strong></td>
<td width="179" bgcolor="#999999" class="style18 style3"><strong> NAMA PASIEN</strong></td>
<td width="246" bgcolor="#999999" class="style18 style3"><strong> DETAIL PERIKSA </strong></td>
<td width="51" bgcolor="#999999" class="style3"><div align="right" class="style25"> TOTAL</div></td>
<td width="83" bgcolor="#999999" class="style18 style3"><strong> JENIS PERIKSA</strong></td>
<td width="188" bgcolor="#999999" class="style18 style3"><strong> POLI/RUANGAN</strong></td>
  
<td width="120" bgcolor="#999999" class="style18 style3"><strong> DOKTER</strong></td>
 <td width="58" bgcolor="#999999" class="style18 style3"><strong> TGL PROSES</strong></td> 
 <td width="54" bgcolor="#999999" class="style18 style3"><strong> JAM PROSES</strong></td> 
 <td width="107" bgcolor="#999999" class="style18 style3"><strong> OPR</strong></td> 
</tr>
<?
 $tera = date("d")-0;
$tera2 = date("m")-0;
$tera3 = date("Y");
//
$bln1=$bln1-0;
$teraX = date("d");
$tera2X = date("m");
$tera3X = date("Y");
$kumX =  "$teraX.$tera2X.$tera3X";
$nomer=1;
if($hari=='doa_baik'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE Tgl>=$tgl1 and Tgl<=$tgl2 AND Bln=$bln1 AND Thn=$thn1");
}elseif($hari=='mitra'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE id=$id");
}elseif($hari=='sabar'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY id DESC limit 0,200");
}elseif($hari=='dimas'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE IdPasien LIKE 'LR.%' ORDER BY id DESC limit 0,200");
}elseif($hari=='ela'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE IdPasien LIKE 'RJ.%' ORDER BY id DESC limit 0,200");
}elseif($hari=='fito'){
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE IdPasien LIKE 'RI.%' ORDER BY id DESC limit 0,200");
}else{
$dmkdmldf  = mysql_query("SELECT * FROM urutanlab WHERE  TglJam LIKE '$kumX-%' ORDER BY id DESC limit 0,200");  
} 
while($xx = mysql_fetch_array($dmkdmldf)){

//////////////////////////////
  $pok = explode(".",$xx[IdPasien]);
  	$kpo = explode(".",$xx[RegId]);
if($pok[0]=='RJ'){
  $sdfdl = mysql_query("SELECT TglMasuk,BlnMasuk,ThnMasuk,NamaDokter,Bagian,TglMasuk,RegId,id FROM rwtjalan WHERE id='$pok[1]'");
  $nm = mysql_fetch_array($sdfdl);
  $NamaDokter=$nm[NamaDokter];
  $TglMasuk="$nm[TglMasuk]/$nm[BlnMasuk]/$nm[ThnMasuk]";
  $Bagian =strtoupper($nm[Bagian]);
  /////=============================================
   $ksjkdjds = mysql_query("SELECT COUNT(id) AS jj FROM txnjalan2 WHERE RegId='$nm[RegId]'");
  $bkm = mysql_fetch_array($ksjkdjds);
  ///
  $kdjkkdf2 = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$nm[RegId]'");
$bn2 = mysql_fetch_array($kdjkkdf2);
////
 $kdjkkdf = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$nm[RegId]' AND Hasil!=''");
$bn = mysql_fetch_array($kdjkkdf);
  ////===============================================
/////////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$jkop2 = mysql_query("SELECT COUNT(id) AS mm FROM cetak_hasil_sublab WHERE Hasil!='' and  RegId='$nm[id]'");
$sp2 =  mysql_fetch_array($jkop2);
//
$jkop2e = mysql_query("SELECT COUNT(id) AS mm FROM cetak_hasil_sublab WHERE Hasil='' and  RegId='$nm[id]'");
$sp2e =  mysql_fetch_array($jkop2e);

//
$jkop  = mysql_query("SELECT COUNT(id) AS mm FROM cetak_hasil_sublab WHERE  RegId='$nm[id]'");
$sp  =  mysql_fetch_array($jkop);
////===============================================================================
 $warna= 'bgcolor="#FFFF00"';
$warna2= 'bgcolor="#7EFD78"';
$warna3= 'bgcolor="#FFCC99"';
$warna4= 'bgcolor="#FFFFFF"';
 
if($sp[mm]>0 && $sp2e[mm]>0){
$vare = $warna;  
  }elseif($bn[kk]==$bn2[kk] && $bkm[jj]>0 && $pok[0]=='RJ'){ 
$vare = $warna3;  
   }elseif($bn[kk]!=$bn2[kk] && $bkm[jj]>0 && $pok[0]=='RJ'){
$vare = $warna;  
 }elseif($bkm[jj]>0 && $sp[mm]!=$sp2[mm] && $pok[0]=='RJ'){
$vare = $warna2;   
   }else{ 
$vare=$warna4;  
    }
     }elseif($pok[0]=='RI'){
 $dkjkdf = mysql_query("SELECT MstKey,Tgl,Bln,Thn,NamaDokter,NoBukti,Kelas FROM txninap2 WHERE NoBukti='$kpo[1]'");
$jm = mysql_fetch_array($dkjkdf);
  $TglMasuk="$jm[Tgl]-$jm[Bln]-$jm[Thn]";
  $Bagian ="$jm[Kelas]";
  $pod = explode(".",$xx[RegId]);
  $MstK =$jm[MstKey];
//echo " || $pod[0]";
$ksisksk09090 = mysql_query("SELECT KetDokter,NamaPasien,KetRuangan,MstKey,id FROM keluarmasukpasien WHERE id='$pod[0]'");
$mop = mysql_fetch_array($ksisksk09090);
  $NamaDokter=$mop[KetDokter];
//
$ld09090 = mysql_query("SELECT COUNT(id) AS hh FROM cetak_hasil_labinap  WHERE RegId='$mop[MstKey]' AND Hasil!='' AND NoBukti='$kpo[1]'");
$dju = mysql_fetch_array($ld09090);
 //
 $ld090902 = mysql_query("SELECT COUNT(id) AS hh FROM cetak_hasil_labinap  WHERE RegId='$mop[MstKey]'  AND NoBukti='$kpo[1]'");
$dju2 = mysql_fetch_array($ld090902);
///
$jdudjdj = mysql_query("SELECT COUNT(id) AS hh
FROM `cetak_hasil_sub_labinap`
WHERE `RegId` = '$mop[MstKey]' AND NoBukti='$kpo[1]' AND Hasil!=''");
$bcv = mysql_fetch_array($jdudjdj);
 
  //
  $jdudjdj2 = mysql_query("SELECT count(id) as hh FROM cetak_hasil_labinap WHERE RegId='$mop[MstKey]' AND NoBukti ='$kpo[1]' AND Hasil=''");
$bcv2 = mysql_fetch_array($jdudjdj2);
  $warna= 'bgcolor="#FFFF00"';
$warna2= 'bgcolor="#FFFF00"';
$warna3= 'bgcolor="#FFCC99"';
$warna4= 'bgcolor="#FFFFFF"';
 if($bcv[hh]>0 && $bcv2[hh]==0){
$vare=$warna3; 
}elseif($bcv[hh]>0 && $bcv2[hh]>0){
$vare=$warna2; 
 
}elseif($dju2[hh]==0){
$vare=$warna4;  
}elseif($dju[hh]!=$dju2[hh] && $dju2[hh]>0){
$vare=$warna;  
}elseif($dju[hh]==$dju2[hh]){
$vare=$warna3;  
}else{
$vare=$warna4;    }
 
   }elseif($pok[0]=='LR'){
  $Bus = mysql_query("SELECT * FROM labumum WHERE id='$pok[1]'");
$x = mysql_fetch_array($Bus);
$Bagian ="LAB LUAR"; 
$NamaDokter=$x[NamaDokter];
  $TglMasuk="$x[Tgl]-$x[Bln]-$x[Thn]";
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $kj_09 = mysql_query("SELECT SUM(Total) AS jh FROM txnjalan2 WHERE RegId='$x[RegId]'");
 $n = mysql_fetch_array($kj_09);

 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $kdjkkdf2 = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$x[RegId]'");
$bn2 = mysql_fetch_array($kdjkkdf2);
///
$kdjkkdf = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$x[RegId]' AND Hasil!=''");
$bn = mysql_fetch_array($kdjkkdf);
////===================================+++++++++++++++++++++++++++++++++++++++++++++++++++++
	$jkop34 = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE RegId='$x[RegId]'");
  $sp34 =  mysql_fetch_array($jkop34);
/////////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$jkop2cv = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE Hasil='' and  RegId='$x[RegId]'");
$sp2cv =  mysql_fetch_array($jkop2cv);
 ////===============================================================================
 $warna= 'bgcolor="#FFFF00"';
$warna2= 'bgcolor="#FFFF00"';
$warna3= 'bgcolor="#FFCC99"';
$warna4= 'bgcolor="#FFFFFF"';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($sp34[mm]>0 && $sp2cv[mm]>0){
 $vare= $warna; 
}elseif($sp34[mm]>0 && $sp2cv[mm]==0){
 $vare= $warna3;
 }elseif($bn[kk]==0 && $bn2[kk]==0 && $n[jh]>0){
$vare= $warna3;
 }elseif($bn[kk]==$bn2[kk] && $sp[mm]==$sp2[mm] && $bn[kk]>0  && $n[jh]>0){
$vare=$warna3; 
 }elseif($bn[kk]!=$bn2[kk] && $sp[mm]==$sp2[mm] && $bn[kk]>0  && $n[jh]>0){
$vare=$warna2;
}elseif($bn[kk]!=$bn2[kk] && $n[jh]>0){
$vare=$warna2;
  }elseif($n[jh]>0 && $sp[mm]!=$sp2[mm]){
$vare=$warna2;
  }else{
  $vare=$warna4;
  }
   }
  $xp = explode(".",$xx[IdPasien]);

/////////////////////////////// 
 $pec = $nomer%2;
if($pec==1){
$warna ='bgcolor="#CCFFCC"';
}else{
$warna ='';
}
if($xp[0]=='RI'){ //h.php?id=9&NoBukti=6
$ios=explode("-",$jm[NoBukti]);
?><tr  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
onClick="location.href='h.php?id=<? echo $mop[id]; ?>&NoBukti=<? echo $ios[1]; ?>';"><? 
}elseif($xp[0]=='LR'){
?><tr <? echo $warna; ?> valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='nasi_kucing.php?hari=<? echo $kpo[0]; ?>';"><?
}else{?>
 <tr  <? echo $warna; ?> valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='4e.php?id=<? echo $nm[id]; ?>';">
 <? } ?>
  <td><div align="center" ><? echo $nomer; ?></div></td> 
 <td><div align="center" ><?
  $pcf = explode("-",$xx[TglJam]);
  $poke = explode(".",$pcf[0]);
 echo "$poke[0]$poke[1]$poke[2]"; echo "(";?> 
<font color="#009900"><? echo "<b>$xx[NoUrut]</b>"; ?></font><? echo ")";    ?></div></td>
 <td><div align="left" ><? echo $xx[NoPasien]; ?></div></td>
 <td <? echo $vare; ?> ><div align="left" ><? echo ucfirst(strtolower($xx[NamaPasien]));  
 $seka='';
    ?></div></td>
	<td><div align="left" ><?
	if($xp[0]=='RI'){
 ///////////////
 $kdik9909 = mysql_query("SELECT MstKey FROM keluarmasukpasien WHERE id='$pok[1]'");
 $mpos = mysql_fetch_array($kdik9909);
 	$jiks_sss2 = mysql_query("SELECT NamaBiaya,JumlahHarga,id  FROM txninap2 WHERE NoBukti='$kpo[1]'");
	while($mm2 = mysql_fetch_array($jiks_sss2)){
  
echo "$mm2[NamaBiaya] <b>,</b> ";
 	$Totof  =  $Totof  + $mm2[JumlahHarga];
	}

  /////////////////// 
	
	}elseif($xp[0]=='RJ'){
///////////////
	$jiks_sss = mysql_query("SELECT NamaBiaya,Total,id  FROM txnjalan2 WHERE RegId='$nm[RegId]'");
	while($mm = mysql_fetch_array($jiks_sss)){
	  	//
    $kjkfdfd_Dfdfd = mysql_query("SELECT id,Stat FROM rujuk_lab WHERE IdDetil='$mm[id]'");
  $pa= mysql_fetch_array($kjkfdfd_Dfdfd);
	//
  if($pa[id]){
  ?><font color="#FF3300"><i><u>
<?  echo "$mm[NamaBiaya] <b>,</b> ";
?>  </u></i></font><?
  }else{
echo "$mm[NamaBiaya] <b>,</b> ";
  	} $Totof = $Totof + $mm[Total];
	}
///////////////////
	}elseif($xp[0]=='LR'){

///////////////

	$jiks_sss4 = mysql_query("SELECT NamaBiaya,Total,id  FROM txnjalan2 WHERE RegId='$kpo[1]'");
	while($mm4 = mysql_fetch_array($jiks_sss4)){
//$lfldkdkldkf4 = mysql_query("SELECT id,Stat FROM LabRujukan WHERE IdTx='LR.$mm4[id]'");
	//$mp4 = mysql_fetch_array($lfldkdkldkf4);
	//
	if($mp4[id] && $mp4[Stat]==2){?>
	  <font color="#009999"><i><? echo $mm4[NamaBiaya]; ?></i></font>, <? 
	  }elseif($mp4[id] && $mp4[Stat]==0){?>
	  <font color="#990000"><i><? echo $mm4[NamaBiaya]; ?></i></font>, <? 
	  }else{  
echo "$mm4[NamaBiaya] <b>,</b> ";
}
	$Totof = $Totof + $mm4[Total];
	}
	 
//////////////////////
	}
	?></div></td>
	 <td><div align="right" ><? 
 echo number_format($Totof); 
 $Totof=0;
 ?></div></td>
  <td><div align="left" ><? 
 if($xp[0]=='PKT'){
 ?>
 <i>PAKET ASKES RI</i>
 <? 
}elseif($xp[0]=='RJ'){
?><font color="#000099"><b><? echo "Rawat Jalan"; ?></b></font><? 
}elseif($xp[0]=='LR'){
?><font color="#006633"><B><I> 
 LAB LUAR</I></B></font><? 
}elseif($xp[0]=='RI'){
?><font color="#666666">Rawat Inap</font><? 
}else{ }
 
 ?></div></td> 
 <td><div align="left" ><? 
 if($xp[0]=='PKT'){
	$ksisksk09090 = mysql_query("SELECT TglMasuk,BlnMasuk,ThnMasuk,KetDokter,transferKe,NamaPasien,KetRuangan,MstKey FROM keluarmasukpasien WHERE id='$xp[1]'");
	$mop = mysql_fetch_array($ksisksk09090);
	$NamaDokter="$mop[KetDokter]";
	$TglMasuk="<u><i>$mop[TglMasuk]-$mop[BlnMasuk]-$mop[ThnMasuk]</i></u>";
	 $splo = explode("-",$mop[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo "$j[NamaKelas]  / "; 
?>
<font  color="#006633">
<?  echo " ( <i>$j[NamaRuangan] <b>BED $j[NoBed]</b> </i>)";?></font><? 

  }elseif($xp[0]=='RJ'){
?> <? 
if($Bagian=='POLI LABORATORIUM'){
?><font  color="#006633"><? echo "<i>LABORATORIUM</i>"; ?></font><? 
}else{
?><font color="#000099"><b><? echo ucfirst(strtolower($Bagian));
} ?></b></font><? 
}elseif($xp[0]=='LR'){
?><font color="#006633"><B><I><? echo ucfirst(strtolower($Bagian)); ?></I></B></font><? 
}elseif($xp[0]=='RI'){
?><? echo $Bagian;
 echo "  ( <b>"; ?><font color="#FF3333"><? echo "$mop[KetRuangan]</b>"; ?></font><? echo " )  ";  
 // echo "<b>ff $dju[hh]==$dju2[hh]</b>";
//echo $kpo[1];
 ?><? 
}else{ }
 ?></div></td>
  <?
  //$kdjldklfed09090 = mysql_query("SELECT COUNT(id) AS hh FROM ItemCtk WHERE IdUrutLab='$xx[id]'");
// $nops = mysql_fetch_array($kdjldklfed09090);?> 
 <td><div align="left" ><? echo $NamaDokter; ?></div></td>
 <td><div align="right" ><?
  echo "$pcf[0]";
 ?></div></td>
 <td><div align="center" ><? echo $pcf[1]; ?></div></td>
 <td><div align="left" ><?   
 echo strtoupper($xx[Opr]); ?>  </div></td>
 </tr>
 
 <? $nomer++;  } ?>
</table>
  </div></td>
</tr> 
  </table>
</div>
</body>
</html>
<? 
}
?>