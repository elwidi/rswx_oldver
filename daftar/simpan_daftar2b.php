<?
session_start();
include "../konek.php";
include "../ceke.php";
 			$jam = date("H:i:s");
			 

 $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
$MstKey = "$tgl$bln$thn:$awe[NoPasien]";
 $id = $_GET [ "id" ];
  $IdDept=$_GET["IdDept"];
 $IdPenjamin=$_GET["IdPenjamin"];
 $IdRujukan=$_GET["IdRujukan"];
 $KodeDokter = $_GET["IdDokter"];
 $JenisRawat = $_GET["JenisRawat"];
$NoRuangan = $_GET["NoRuangan"];
$NoPasien = $_GET["NoPasien"];
$NamaRujukan = $_GET["NamaRujukan"];
$JenisKelamin = $_GET["JenisKelamin"];
$NamaDokter= $_GET["NamaDokter"];
 $KodeDok = $_GET["KodeDok"];	
$KeyID= $_GET["IdPenjamin"];
$NoPasien  =$_GET["NoPasien"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$jdhjfdhfjd_djfkdjf  = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$KodeDokter'");
$y_d = mysql_fetch_array($jdhjfdhfjd_djfkdjf);
 $umurnya = mysql_query("SELECT 	JenisKelamin,tgllhr FROM datapasien WHERE id='$id'");
 $k=mysql_fetch_array($umurnya);
 $pecah = explode("-",$k[tgllhr]);
 $bi = date("m");
 $hi= date("d");
 $ti= date("Y");
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
 

     $updaa = mysql_query("UPDATE  ruangan SET stat=1 WHERE NoRuangan='$NoRuangan'");
     if(!$updaa && $JenisRawat=='INAP'){ //++++++
        header("Location:./gagal.php");
     }else{
	 $tanggal = date("d");
       $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
       $lihat = "$tgl$bln$thn-$KodeDokter";
       $desa = "$tgl$bln$thn-$KodeDokter";
       $regist = mysql_query("SELECT RegId,id,KodeDokter FROM rwtjalan_pesan WHERE KodeDokter='$KodeDokter' AND  RegId LIKE '$desa%' AND
       TglMasuk='$tanggal' AND RegId not like 'IN%' ORDER BY  id DESC");
       $bx = mysql_fetch_array($regist);
       $pchh = explode("-",$bx[RegId]);
	   echo "dapat $desa<br><br>SELECT RegId,id,KodeDokter FROM rwtjalan_pesan WHERE KodeDokter='$KodeDokter' AND  RegId LIKE '$desa%'<br>";
 			if($bx[RegId]){ ///||||||||||||||||||||\
			$urut  = $pchh[2]+1;
			}else{
			$urut=1;
			}///||||||||||||||||||||\
			 
			$jdhjdfh= mysql_query("SELECT * FROM rujukan WHERE id='$IdRujukan'");
			$io_oi = mysql_fetch_array($jdhjdfh);
       $RegId="$tgl$bln$thn-$KodeDokter-$urut";
	  echo "$RegId<BR>";
       $NamaPasien = mysql_query("SELECT NamaPasien,NoPasien FROM datapasien WHERE id='$id'");
       $c = mysql_fetch_array($NamaPasien);
       $Ruan = mysql_query("SELECT * FROM ruangan WHERE NoRuangan='$NoRuangan'");
       $j = mysql_fetch_array($Ruan);
       $namaP= mysql_query("SELECT * FROM dataperusahaan WHERE id='$KeyID'");
       $g = mysql_fetch_array($namaP);
       $Bagian = mysql_query("SELECT NamaBagian,id FROM bagian WHERE id='$IdDept'");
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
			$TglMasuk = "$tgl-$bln-$thn";
			$MstKey = "$tgl$bln$thn:$NoPasien";
 			$RwJ=mysql_query("SELECT RegId FROM rwtjalan_pesan WHERE id='$IdJal'");
			$h = mysql_fetch_array($RwJ);
		 
			if($SESE){
					$bisi = mysql_query("SELECT id FROM keluarmasukpasien WHERE MstKey='$MstKey'");
					$za= mysql_fetch_array($bisi);
					header("Location:./codot.php?id=$za[id]");
			}else{ echo "SIMPAN DATA GAGAL, .....<br><br>";}
		?>
		<input type="button" name="jdhfjdf" value="Kembali" onclick="location.href='fito_sayangku.php?makan=jajan&NoPasien=<? echo $NoPasien; ?>';" />
		<? 			//END OF SIPAN KE RAWAT INAP
			}elseif($JenisRawat=='JALAN'){
 		//isikan database=============================================================================
		$jre_sa = mysql_query("SELECT COUNT(id) AS uu FROM rwtjalan_pesan WHERE NoPasien='$c[NoPasien]'");
		$gsa  = mysql_fetch_array($jre_sa);
 	  if($budi>0){
			$KodeDokter=$KodeDokter."-$budi";
			}else{
						$KodeDokter=$KodeDokter;
			}
	    $simpanJalan= mysql_query("INSERT INTO `rwtjalan_pesan`
	 (`id`,`RegId`,`NoPasien`,`NamaPasien`,`TglMasuk`,`BlnMasuk`,`ThnMasuk`,
	 `JamMasuk`,`JamKeluar`,`Umur`,`BlnUmur`,`KodeBagian`,`Bagian`,
	  `KodeDokter`,`NamaDokter`,`KodePer`,`NamaPer`,`RujukanDari`,`Operator`,`JenisKelamin`)
	 VALUES (NULL,'$RegId','$c[NoPasien]','$c[NamaPasien]','$tgl','$bln','$thn',
	 '$jam','0','$Usio','$BlnIm:$Har','$d9[id]','$d9[NamaBagian]','$KodeDokter',
	 '$y_d[NamaDokter]','$g[id]','$g[NamaPer]','$io_oi[NamaRujukan]','$a[Nama]','$k[JenisKelamin]')");
	 
 if($simpanJalan){
 $jsjsh090 = mysql_query("SELECT id FROM rwtjalan_pesan WHERE RegId='$RegId'");
 $hh = mysql_fetch_array($jsjsh090);
  header("Location:./struk_pas2.php?id=$hh[id]");
 }else{ 
 $sresa = mysql_query("SELECT NoPasien,NamaPasien,RegId FROM rwtjalan_pesan WHERE RegId='$RegId'");
 $tr = mysql_fetch_array($sresa);
// echo "$KodeDokter<br><br>";
 echo "gagal daftar <br> ";
 	 }  
}else{ }
// header("Location:/keluar.php");
}
}
?>