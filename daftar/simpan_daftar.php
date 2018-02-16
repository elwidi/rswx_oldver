<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
$MstKey = "$tgl$bln$thn:$awe[NoPasien]";
$kesa_dhjdf = mysql_query("SELECT id,NoPasien FROM keluarmasukpasien WHERE MstKey='$MstKey'");
$iu_po = mysql_fetch_array($kesa_dhjdf);
 $id = $_GET [ "id" ];
 $KodeDokter=$IdDokter = $_GET [ "IdDokter" ];
 $KodeDept=$_GET["KodeDept"];
 $IdPenjamin=$_GET["IdPenjamin"];
 $IdRujukan=$_GET["IdRujukan"];
 $KodeDokter = $_GET["KodeDokter"];
 $JenisRawat = $_GET["JenisRawat"];
$NoRuangan = $_GET["NoRuangan"];
$NoPasien = $_GET["NoPasien"];
$NamaRujukan = $_GET["NamaRujukan"];
$JenisKelamin = $_GET["JenisKelamin"];
$NamaDokter= $_GET["NamaDokter"];
 $KodeDok = $_GET["KodeDok"];	
$KeyID= $_GET["KeyID"];
$Mat = $_GET["Mat"];
$brawat= $_GET["brawat"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$jdhjfdhfjd_djfkdjf  = mysql_query("SELECT NamaDokter FROM datadokter WHERE KodeDokter='$KodeDokter'");
$y_d = mysql_fetch_array($jdhjfdhfjd_djfkdjf);
 $umurnya = mysql_query("SELECT 	* FROM datapasien WHERE NoPasien='$NoPasien'");
 $k=mysql_fetch_array($umurnya);
 $pecah = explode("-",$k[tgllhr]);
 $bi = date("m");
 $hi= date("d");
 $ti= date("Y");
 /////// terjemahkan bagian
 $Bagian = mysql_query("SELECT * FROM bagian WHERE id='$KodeDept'");
$d9 = mysql_fetch_array($Bagian);

 
 ///
 //-----------------UMUR OK
 $birth = gregoriantojd($pecah[1],$pecah[0],$pecah[2]);
 $cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
 $Usio = ($cal['year']-1);
 $BlnIm = ($cal['month']-1);
 $Har = ($cal['day']-1);
//echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
 $ujuka = "$Usio:$BlnIm:$Har";
//END OF UMUR OK
 $jikp = $pecah[1]-0;
   if($jikp<$bi){ //====
   $umur = $ti - $pecah[2];
   $BlnUmur=$bi-$jikp;
   }else{
   $umur =  $ti - $pecah[2]-1;
   $BlnUmur= 12+$bi-$pecah[1];
   }//====
 

     $updaa = mysql_query("UPDATE  ruangan SET stat=1 WHERE id='$NoRuangan'");
     if(!$updaa && $JenisRawat=='INAP'){ //++++++
        header("Location:./gagal.php");
     }else{
       $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
       $lihat = "$tgl$bln$thn-$KodeDokter";
       $desa = "$tgl$bln$thn-$KodeDokter";
       $regist = mysql_query("SELECT RegId,id,KodeDokter FROM rwtjalan WHERE KodeDokter='$KodeDokter' AND  RegId LIKE '$desa%' AND
       TglMasuk='$tanggal'   ORDER BY  id DESC");
       $bx = mysql_fetch_array($regist);
       $pchh = explode("-",$bx[RegId]);
 			if($bx[RegId]){ ///||||||||||||||||||||\
			$urut  = $pchh[2]+1;
			}else{
			$urut=1;
			}///||||||||||||||||||||\
			$jdhjdfh= mysql_query("SELECT * FROM datadokter_rujuk WHERE KodeDokter='$IdRujukan'");
			$io_oi = mysql_fetch_array($jdhjdfh);
       $RegId="$tgl$bln$thn-$KodeDokter-$urut";
	 //  echo "ini nomer : $RegId<br>";
       $NamaPasien = mysql_query("SELECT NamaPasien FROM datapasien WHERE NoPasien='$NoPasien'");
       $c = mysql_fetch_array($NamaPasien);
       $Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$NoRuangan'");
       $j = mysql_fetch_array($Ruan);
       $namaP= mysql_query("SELECT * FROM dataperusahaan WHERE id='$KeyID'");
       $g = mysql_fetch_array($namaP);
       $Bagian = mysql_query("SELECT * FROM bagian WHERE id='$KodeDept'");
       $d9 = mysql_fetch_array($Bagian);
 		if($JenisRawat==''){
			echo "JENIS RAWAT BELUM ANDA TENTUKAN,.....<br>";
			?>
			<input type="button" name="kembakli" value="Kembali" onClick="location.href='fito_sayangku.php?NoPasien=<? echo $iu_po[NoPasien]; ?>&makan=jajan';">
			<?
		}elseif($JenisRawat=='INAP' && $NoRuangan==''){
			echo "ANDA BELUM MENETUKAN RUANGAN UNTUK RAWAT INAPNYA,..........<br>";
			?>
			<input type="button" name="dff" value="Kembali" onClick="location.href='fito.php?hari=masku&id=<? echo $id; ?>';">
			<? 
		}elseif($JenisRawat=='INAP' && $NoRuangan!=''){
			//SIMPAN KE RAWAT INAP
			 $fuli = mysql_query("SELECT KodeKelas,Tarif,id FROM kelas WHERE NamaKelas='$j[NamaKelas]'");
			$pi = mysql_fetch_array($fuli);
			 //cek multi tarif
			$MstKey2 = "$KeyID-$pi[id]";
			$multii = mysql_query("SELECT Tarif,MstKey FROM multi_tarif_pers WHERE MstKey='$MstKey2'");
			$ppo = mysql_fetch_array($multii);
			//end of cek multi tarif
 					 if(!$ppo[Tarif]){ //-=-=-=-=-=
						$RpPerKamar = $pi[Tarif];
					 }else{
						$RpPerKamar = $ppo[Tarif];
					}  //-=-=-=-=-=
			//$TglMasuk = "$tgl-$bln-$thn";
			$TglMasuk=date("d");
			$BlnMasuk=date("m");
			$ThnMasuk=date("Y");
			$MstKey = "$tgl$bln$thn:$NoPasien";
			$jam = date("H:i:s");
			$RwJ=mysql_query("SELECT RegId FROM rwtjalan WHERE id='$IdJal'");
			$h = mysql_fetch_array($RwJ);
			$ggan = "$j[id]-$j[KodeKelas]";
		   $SESE = mysql_query("INSERT INTO `keluarmasukpasien` (`id`, `MstKey`,`IdKelas`, `TglMasuk`,`BlnMasuk`,`ThnMasuk`, 
		 `JamMasuk`, `NoPasien`, `NamaPasien`, `Umur`, `Ruangan`, `KetRuangan`, `Bed`, `Kelas`,
		  `RpPerKamar`, `transferDari`, `transferKe`, `TglKeluar`, `JamKeluar`, `KodeBagian`, `NamaBagian`, 
	  		`KodePer`, `NamaPer`, `Dokter`, `KetDokter`, `Jenis`, `RujukanDari`, `NamaRujukan`, `RegRj`, `Opr`, `JenisKelamin`
			, `materai`
			, `CaraBayar`
			, `NamaPj2`
			, `AlamatPj`)
   			VALUES (NULL,'$MstKey','$pi[id]','$TglMasuk','$BlnMasuk','$ThnMasuk','$jam', '$NoPasien',
		    '$c[NamaPasien]', '$ujuka', '$j[NoBed]','$j[NamaRuangan]','$j[NoRuangan]', '$j[NamaKelas]', '$RpPerKamar', 
			'$ggan', '$ggan', '0', '0',
	 '$d9[id]', '$d9[NamaBagian]', '$g[id]','$g[NamaPer]',
	 '$KodeDokter', '$NamaDokter','$JenisKelamin', '$KodeDok','$NamaRujukan','$h[RegId]','$a[Nama]','$k[JenisKelamin]','$Mat',
	 '$CaraBayar','$NamaPj2','$AlamatPj')"); 
 		 if($brawat=='YA') {
		 } 		  
			if($SESE){
					$bisi = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$MstKey'");
					$za= mysql_fetch_array($bisi);
					header("Location:./codot.php?id=$za[id]");
			}else{ echo "SIMPAN DATA GAGAL, .....<br><br>";}
		?>
		<input type="button" name="jdhfjdf" value="Kembali" onclick="location.href='fito_sayangku.php?makan=jajan&NoPasien=<? echo $NoPasien; ?>';" />
		<? 			//END OF SIPAN KE RAWAT INAP
			}elseif($JenisRawat=='JALAN'){
	  
 if($simpanJalan){
header("Location:./struk_pas.php?id=$RegId");
 }else{ 
 $sresa = mysql_query("SELECT NoPasien,NamaPasien,RegId FROM rwtjalan WHERE RegId='$RegId'");
 $tr = mysql_fetch_array($sresa);
header("Location:./struk_pas.php?id=$RegId");

 	 }  
}else{  }
// header("Location:/keluar.php");  
}
}
?>