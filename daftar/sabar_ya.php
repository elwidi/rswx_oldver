<?php 
 session_start();
 include "../konek.php";
 include "../ceke.php";
 $biX = date("m")-0;
 $hiX= date("d")-0;
 $tiX= date("Y")-0;
 //
  $umurnya = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
 $k=mysql_fetch_array($umurnya);
  //
  $kljkdfd_Dfdfd2 = mysql_query("SELECT * FROM karyawan WHERE IdPasien='$id'");
$yx2 =  mysql_fetch_array($kljkdfd_Dfdfd2);
///
$kjdfkdjkd_0909090s= mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$k[NoPasien]' AND TglMasuk='$hiX' AND BlnMasuk='$biX' AND ThnMasuk='$tiX'");
$yg = mysql_fetch_array($kjdfkdjkd_0909090s);

if($yg[id]=='f560'){
 echo "MAAF PASIEN SUDAH DIDAFTARKAN  <br>
 TGL : $yg[TglMasuk]-$yg[BlnMasuk]-$yg[ThnMasuk] OLEH "; ?><font color="#990000"><b><i> <? echo "$yg[Operator]"; ?></i></b></font><? 
 echo "<br>$yg[JamMasuk] KE POLI : $yg[Bagian]<br> DOKTER : $yg[NamaDokter]<br>";
 ?>
 <A href="index.php" >BATAL</A>
 <? }elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){

//NamaDokter=%&id=19247&IdDept=22
if($k[KodePer] && !$IdPenjamin){
$IdPenjamin = $k[KodePer];
}else{
$IdPenjamin = $_GET["IdPenjamin"];
}
$NamaPenjamin = $_GET["NamaPenjamin"];

$IdRujukan = $_GET["IdRujukan"];

$NamaDokter = $_GET["NamaDokter"];

$IdDept = $_GET["IdDept"];

$IdDokter = $_GET["IdDokter"];

$budi = $_GET["budi"];

$NamaRujukan = $_GET["NamaRujukan"];

$NoPasien = $_GET["NoPasien"];

$NamaPasien = $_GET["NamaPasien"];

$kadal = $_GET["kadal"];

$bas = $_GET["bas"];

$Alamat = $_GET["Alamat"];

$NamaBapak = $_GET["NamaBapak"];

$Telp = $_GET["Telp"];

$id = $_GET["id"];

$NamaPoli = $_GET["NamaPoli"];

$ikikak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");

$pp = mysql_fetch_array($ikikak);

 

$badak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");

$pp = mysql_fetch_array($badak);

if(!$pp[id]){

header("Location:./daftar.php");

}

 ?>

<html>
 <head>
<?
include "../Kasir/s_201.php";
include "../Kasir/s_2801.php";
include "../Kasir/s_28SS01.php";
include "../Kasir/a_231.php";

?>
<script language="JavaScript">

	<!--

// tambahan jasa onMouseover

	function movein(which,html){

	which.style.background='#FF6666';

	which.style.cursor='hand'

	}

	function moveout(which){

	which.style.background=''

	}

	//-->

	</script>
 <style type="text/css">

<!--

.style1 {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 18px;

	color: #000000;

}

.style2 {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 11px;

	color: #000000;

}

.style324 {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 11px;

	color: #000000;

}

.style34343434399 {

	font-family: Geneva, Arial, Helvetica, sans-serif;

	font-size: 12px;

	color: #006600;

	font-style: italic;

}

.style3 {color: #000000}

.style5 {color: #000033}

-->

</style>
</head>

<body alink="#000000" vlink="#000000" link="#000000">
 <div align="left"> 
	<?
	if($IdDokter>0 && $IdRujukan>0 && $IdPenjamin>0 && $IdDept>0){
	?><form action="simpan_daftar2.php"><? 
	}else{
	?>	<form target="_self">
          <? } ?>
  <table border="0" cellpadding="2" cellspacing="2" class="style2"  bgcolor="#FFFFFF">
<?
if($yx2[id]){
?><tr bgcolor="#FFCCFF">
<td height="59" colspan="3"><div align="left" class="style5">PASIEN INI ADALAH KARYAWAN DENGAN NIK : <? echo $yx2[Nik];?><br>
<? echo "($k[NoPasien])"; 
echo ucfirst(strtolower($k[NamaPasien]));
?><br><?
$kdjfkdfd_DFdd  = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$yx2[KodeBagian]'");
$in = mysql_fetch_array($kdjfkdfd_DFdd);
echo ucfirst(strtolower($in[NamaBagian]));
?></div></td>
</tr><? 
}else{
?>
    <tr class="style1">

      <td colspan="3">

        <div align="left">DAFTARKAN PASIEN<br />

          <?

echo strtoupper($pp[NamaPasien]); echo " ($pp[NoPasien]) "; 

?>

          </div></td></tr>

    <tr> 
<?  } ?>
      <td colspan="3"><span class="style1"><?

	  echo "TGL LAHIR : "; echo $pp[tgllhr];

	  ?></span></td>

    </tr>
  
    <tr >   

      <td  colspan="2" valign="top">
    <table width="534" border="0" cellpadding="2" cellspacing="2" class="style2">
		  <?
		   if($pp[KodePer]>0){ ?><tr>
		   <td>Penjamin</td>
		   <td>:</td><td><div align="left">
		   <?
		   if($pp[KodePer]>0){
		   $ksoskso= mysql_query("SELECT NamaPer FROM dataperusahaan WHERE id='$pp[KodePer]'");
		   $oku = mysql_fetch_array($ksoskso);
		   echo ucfirst(strtolower($oku[NamaPer]));
		   }
		   ?>
		   </div></table></td>
		   </tr>
		     
 
        <? }?>    <tr>
               <td width="153">Pilih Poli </td>

               <td width="3">:</td>

              <td width="274"><div align="left">

               <?

		  if($IdDept>0){

		  $deper = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$IdDept'");

		  $ii = mysql_fetch_array($deper);

		  echo ucfirst(strtolower($ii[NamaBagian]));

		  }else{

		  ?>  

				| 
				<input name="ddff" type="button" class="style324" onClick="location.href='sabar_ya.php?NamaPoli=%&id=<? echo $id; ?>';" value="View">

				<? } ?>

                

				<input type="hidden" name="id" value="<? echo $id; ?>">

				<input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">

				<input type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">

				<input type="hidden" name="IdDept" value="<? echo $IdDept; ?>"> 

				</div></td>

    </tr>

            <tr>

              <td>Dokter</td>
              <td>:</td>
              <td><?

			  if($IdDept>0 && !$IdDokter){

		 

			  ?>  

                | 

                  <input name="ddff2" type="button" class="style324" onClick="location.href='sabar_ya.php?NamaDokter=%&id=<? echo $id;  

				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">

				  <? }else{

				  ?><? 

				 	  $dokter = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$IdDokter'");

			  $oo = mysql_fetch_array($dokter);

			  echo ucfirst(strtolower($oo[NamaDokter])); } ?></td>
    </tr>

	<?

//	$kfjgkfgf  = mysql_query("SELECT * FROM dokterganti WHERE id='$budi'");

	//$ede = mysql_fetch_array($kfjgkfgf);

	if($ede[id]){

	?>

	<tr>

	<td bgcolor="#99FF00">DOKTER SUBS</td>

	<td bgcolor="#99FF00">:</td>

	<td bgcolor="#99FF00"><div align="left"><? echo ucfirst(strtolower($ede[NamaDokter])); ?></div></td>
	</tr>

	<? 

	}

		?>

            <tr>

              <td>Rujukan</td>
              <td>:</td><td><div align="left"><?

			   if($IdDept>0 && $IdDokter>0 && !$IdRujukan ){

			  ?> 

			  | 

                  <input name="ddff2" type="button" class="style324" onClick="location.href='sabar_ya.php?budi=<? echo $budi; ?>&NamaRujukan=%&IdDokter=<? echo $IdDokter; ?>&id=<? echo $id;  

				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">

                  <? 

}else{

			  $kerja_sama = mysql_query("SELECT NamaRujukan FROM rujukan WHERE id='$IdRujukan'");

			  $ks = mysql_fetch_array($kerja_sama);

			  echo ucfirst(strtolower($ks[NamaRujukan]));

			  }

			  ?></div></td>
    </tr>

            <tr> 

              <td>Penjamin</td>
              <td>:</td><td><div align="left"><?

			   if($IdDept>0 && $IdDokter>0 && $IdRujukan>0 && !$IdPenjamin){

			  ?>   | 

        |

                  <input name="ddff2" type="button" class="style324" onClick="location.href='sabar_ya.php?budi=<? echo $budi; ?>&NamaPenjamin=%&IdRujukan=<? 

  echo $IdRujukan; ?>&IdDokter=<? echo $IdDokter; ?>&id=<? echo $id;  

				  ?>&IdDept=<? echo $IdDept; ?>';" value="View">

				  

				  <?

				   			  }else{

						$opsa = mysql_query("SELECT NamaPer FROM dataperusahaan WHERE id='$IdPenjamin'");	  

						$pps = mysql_fetch_array($opsa);

						if($IdPenjamin>0){

						echo ucfirst(strtolower($pps[NamaPer]));

						}

			  }

			  ?><?

				   

				  ?>

			  </div></td>
    </tr>
	<tr>
	<td>Penanggung Jawab</td><td>:</td><td><div align="left">
	<input name="NamaPj2" type="text" class="style2" value="<? echo $k[NamaPj2]; ?>" size="20" maxlength="100">
	</div></td>
	</tr>
	<tr>
	<td>Alamat Pj</td><td>:</td><td><div align="left">
	<input name="AlamatPj" type="text" class="style2" value="<? echo $k[AlamatPj]; ?>" size="20"  maxlength="100">
	</div></td>
	</tr>
	<tr>
	<td>No Kartu</td><td>:</td><td><div align="left">
	<input name="NoKartu" type="text" class="style2" value="<? echo $k[NoKartu]; ?>" size="23" maxlength="100">
	</div></td>
	</tr>
	<tr>
	<td>Cara Bayar</td><td>:</td><td><div align="left">
	  <select name="CaraBayar" class="style2">
	<option value="-">-Cara Bayar-</option>
	<option value="Pribadi" >Pribadi</option>
	<option value="Asuransi" >Asuransi</option>
	</select>
	</div></td>
	</tr>

            <tR>

              <td colspan="3">&nbsp;</td>
    </tR>

            <tr>

              <td colspan="3"><div align="left">

                <input name="fgfg" type="submit" class="style324" value="Cari"> 

                <input type="button" name="dffg" value="Reset" onClick="location.href='sabar_ya.php?id=<? echo $id; ?>';" class="style324">

				<input name="jdjdfd" type="button" class="style324" onClick="location.href='index.php';" value="Kembali">

              </div></td>
    </tr>

	<?

	    if($hari>0){

	  ?><tr>

	  <td colspan="3"  bgcolor="#FFCCCC" valign="top">

	  <div align="left">

	  <table border="1" class="style34343434399">

	  <tr>

	  <td width="18" bgcolor="#99FF00"><span class="style5">NO</span></td>

	  <td width="146" bgcolor="#99FF00"><span class="style5">DOKTER</span></td>

	  <td width="139" bgcolor="#99FF00"><span class="style5">SPC</span></td>

	  <td width="89" bgcolor="#99FF00"><span class="style5">OPR</span></td>

	  <td width="100" bgcolor="#99FF00"><span class="style5">TGL JAM</span></td>
	  </tr>

	  <?

	  $ns=1;

	  $kdjfkdjkdjfkdfd = mysql_query("SELECT * FROM dokterganti WHERE IdDokterAsli='$hari' AND UangDuduk=0");

	  while($za =  mysql_fetch_array($kdjfkdjkdjfkdfd)){

	  ?>

	  <tr  onClick="location.href='sabar_ya.php?budi=<? echo $za[id]; ?>&IdDokter=<? echo $hari; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >

	  <td><div align="center"><? echo $ns; ?></div></td>

	  <td><div align="left"><? echo $za[NamaDokter]; ?></div></td>

	  <td><div align="left"><? echo strtoupper($za[NamaSpc]); ?></div></td>

	  <td><div align="left"><? echo strtoupper($za[Opr]); ?></div></td>

	  <td><div align="left"><? echo $za[TglJam]; ?></div></td>
	  </tr>

	

	  <? $ns++; } ?>  <tr>

	    <td colspan="5" bgcolor="#99FF00">&nbsp;</td>

	    </tr>
	  </table>
	  </div>	  </td>

	  </tr> <? 

	  }

	  ?> 

	<?

	if($IdDokter>0 && $IdPenjamin>0 && $IdRujukan>0 && $id>0 && $IdDept>0){

	?>

	<tr>

	<td colspan="3" bgcolor="#990000"><div align="left">
 	 <input type="hidden" name="budi" value="<? echo $budi; ?>">
	 <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
	 <input type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">
	 <input type="hidden" name="IdPenjamin" value="<? echo $IdPenjamin; ?>">
	 <input type="hidden" name="id" value="<? echo $id; ?>">
	 <input type="hidden" name="IdDept" value="<? echo $IdDept; ?>">
	 <input type="hidden" name="JenisRawat" value="JALAN">
	  <?
	  /*<input name="djdjdfdf" type="button" class="style324" onClick="location.href='simpan_daftar2.php?CaraBayar=<? echo $CaraBayar; ?>&NoKartu=<? echo $NoKartu; ?>&budi=<? echo $budi; ?>&id=<? echo $id; 

	?>&IdDept=<? echo $IdDept; 

	?>&IdDokter=<? echo $IdDokter; ?>&IdRujukan=<? echo $IdRujukan; 

	?>&IdPenjamin=<? echo $IdPenjamin; ?>&JenisRawat=JALAN';" value="Lakukan Proses">
	*/ ?>
	<input type="submit" value="Simpan" name="dfdfd"></div>	</td>
	</tr>
  	<? 
 }
 	?>
          </table>
 		   
          </td><td width="642" valign="top">

	<div align="left">

	<?

	if($NamaPenjamin!=''){

	?>

	<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td colspan="2" valign="top" bgcolor="#FFFF66" class="style34343434399">
<div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="252"><div align="left">
<input type="text" class="style34343434399" id="suggest4" />
</div></td>
</tr>
</table>
</div>
</td> 
</tr> 
	<tr>
	<td width="26" bgcolor="#FFCCCC">NO</td>

	<td width="474" bgcolor="#FFCCCC">PENJAMIN</td>

		</tr> 

<?

	$kas=1;

	$ksas = mysql_query("SELECT NamaPer,id  FROM dataperusahaan WHERE NamaPer Like '$NamaPenjamin%'");

	while($ttp = mysql_fetch_array($ksas)){
	$pcds= $kas%2;
if($pcds==1){
$warna='';
}else{
$warna='bgcolor="#CCFF99"';
}

	?>

	<tr <? echo $warna; ?> onClick="location.href='sabar_ya.php?budi=<? echo $budi; ?>&IdDokter=<? echo $IdDokter; ?>&IdRujukan=<? echo $IdRujukan; ?>&IdPenjamin=<? echo $ttp[id]; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">

	<td><div align="center"><? 

	echo $kas; ?></div></td>

	<td><div align="left"><?

	echo ucfirst(strtolower($ttp[NamaPer]));

	?></div></td>

	</tr>

 	<?

	$kas++;

	}

	?><tr>

	  <td colspan="2" bgcolor="#FFCCCC">&nbsp;</td>

	  </tr>

	</table>

	<? 

	}elseif($NamaRujukan!=''){

	?>

<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2" valign="top" bgcolor="#CCFFFF">
<div align="left">
<input type="text" class="style34343434399" id="suggest3" />
</div></td>
</tr>
<tr bgcolor="#000000" class="style2">
<td width="24" bgcolor="#99FF00">NO</td>

<td width="413" bgcolor="#99FF00">NAMA RUJUKAN </td>
</tr>

<?

$no=1;

$kdas2 = mysql_query("SELECT NamaRujukan,id FROM rujukan  WHERE NamaRujukan LIKE '$NamaRujukan%'");

while($rt = mysql_fetch_array($kdas2)){
$pcds = $no%2;
if($pcds==1){
$warna='';
}else{
$warna='bgcolor="#CCFF99"';
}
?>

<tr 
  <? echo $warna; ?>  
 onClick="location.href='sabar_ya.php?NamaPenjamin=%&budi=<? echo $budi; ?>&IdDokter=<? echo $IdDokter; 

 ?>&id=<? echo $id; 

 ?>&IdDept=<? echo $IdDept; ?>&IdRujukan=<? echo $rt[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style2">

<td><div  align="center"><? echo $no; ?></div></td>

<td><div align="left"><? echo ucfirst(strtolower($rt[NamaRujukan])); ?></div></td>
</tr>

<?

$no++; }

?><TR>

	  <TD colspan="2" bgcolor="#99FF00">&nbsp;</TD>

	  </TR>
</table>	
<? 

	}elseif(!$NamaPoli && $NamaDokter!=''){

?>

<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="6" valign="top" bgcolor="#FFCCCC"><div align="left">
<input type="text" class="style34343434399" id="suggest2" />
</div></td>
</tr>
<tr bgcolor="#000000" class="style2">

<td width="17" bgcolor="#99FF00">NO</td>

<td width="223" bgcolor="#99FF00">NAMA DOKTER </td>

<td width="114" bgcolor="#99FF00"><div align="left">BAGIAN</div></td>

<td colspan="3" bgcolor="#99FF00">SUBST</td>

 </tr>

<?

$no=1;

if($NamaDokter!=''){

$kdas = mysql_query("SELECT * FROM dokter WHERE  IdBagian='$IdDept' AND NamaDokter LIKE '$NamaDokter%'");

  }else{

$kdas = mysql_query("SELECT * FROM dokter WHERE  IdBagian='$IdDept'"); 

}

while($ee = mysql_fetch_array($kdas)){

 $pcds = $no%2;
if($pcds==1){
$warna='';
}else{
$warna='bgcolor="#CCFF99"';
}
if($b[kk]>0){

?><tr <? echo $warna; ?>  class="style34343434399"> 

<? 

}else{

?>

<tr  <? echo $warna; ?>   class="style2">

 <? } ?>

<td><div  align="center"><? echo $no; ?></div></td>

<td><div align="left"><? echo ($ee[NamaDokter]); ?></div></td>

<td><div align="left"><? 

$ikiks = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$ee[IdBagian]'");

$hh = mysql_fetch_array($ikiks);

echo ucfirst(strtolower($hh[NamaBagian]));

?></div></td>
<?
$kdjfkdjkdkf_Dfdlfld = mysql_query("SELECT * FROM utility WHERE id=1");
$aas = mysql_fetch_array($kdjfkdjkdkf_Dfdlfld);  
if($ee[IdPen]>0 || $aas[Sd]==0){
?>
<td width="47"><div align="center"><?

 echo "$b[kk]";

?></div></td>

<td width="51"><div align="left">
<?
if($ee[Stap]==1){
?><font color="#990000"><i>NonAktif</i></font><? 
}else{
?>
<input name="ffg" type="button" class="style324" onClick="location.href='sabar_ya.php?NamaRujukan=%&IdDokter=<? echo $ee[id]; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" value="Ambil">
<? } ?>
</div></td><? }else{?><td colspan="2"><div align="left">Belum Di Intg Ke Akunt</div><?   } ?>

<td width="80"><div align="left">

<?

if($b[kk]>0){

?><input name="ffg" type="button" class="style324" onClick="location.href='sabar_ya.php?hari=<? echo $ee[id]; ?>&NamaDokter=<? echo $NamaDokter; ?>&id=<? echo $id; ?>&IdDept=<? echo $IdDept; ?>';" value="Subs">

<? } ?>

</div></td>

</tr>

<?

$no++; }

?><TR>

	  <TD colspan="6" bgcolor="#99FF00">&nbsp;</TD>

	  </TR>

</table>

<? 

	}elseif($NamaPoli!=''){

	?>

	<table width="313" border="0" cellpadding="2" cellspacing="2" class="style2">

	<tr>

	<td width="24" bgcolor="#99FF00"><strong>NO</strong></td>

	<td width="299" bgcolor="#99FF00"><strong>NAMA POLI</strong></td>

	<td bgcolor="#99FF00">JML DR</td>



	</tr>

	<?

	$no=1;

	if($NamaPoli!=''){

	$kda = mysql_query("SELECT NamaBagian,id FROM bagian WHERE NamaBagian LIKE 'POLI%' AND NamaBagian LIKE '$NamaPoli%'");	

	}else{

 	$kda = mysql_query("SELECT NamaBagian,id FROM bagian WHERE NamaBagian LIKE 'POLI%'");

	}

	while($ee = mysql_fetch_array($kda)){

		$kiki_kjdkf = mysql_query("SELECT COUNT(id) AS kk FROM dokter WHERE IdBagian='$ee[id]'");

	$ue = mysql_fetch_array($kiki_kjdkf);
$pcds = $no%2;
if($pcds==1){
$warna='';
}else{
$warna='bgcolor="#CCFF99"';
}
	?>

	<tr <? echo $warna; ?>  onClick="location.href='sabar_ya.php?NamaDokter=%&id=<? echo $id; ?>&IdDept=<? echo $ee[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >

	<td><div align="center"><? echo $no;  ?></div></td>

	<td><div align="left"><? $ret = strtoupper($ee[NamaBagian]);

	if($ret=='POLI BERSALIN'){

	?><font color="#993300">KAMAR BERSALIN</font><?

	}else{

	echo ucfirst(strtolower($ret));

	}

	 ?></div></td>

	<td><div align="center"><?

 

	echo $ue[kk];

	?></div></td>

	</tr>

 	<? $no++; } ?>

	<tr  >

	  <td colspan="3" bgcolor="#99FF00">&nbsp;</td>

	  </tr>

	   

	  </table>

	<? 

	}else{

	

	}

	?>

	</div>

	</td>

    </tr>

  </table>
</form>
</div>
 </body>
 </html>

<? 

}else{

header("Location:./keluar.php");

}

?>