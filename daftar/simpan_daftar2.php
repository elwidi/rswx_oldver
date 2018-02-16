<?
session_start();
session_start();
include "../konek.php";
include "../ceke.php";
//
 $umurnya = mysql_query("SELECT 	id,NoPasien,JenisKelamin,tgllhr FROM datapasien WHERE id='$id'");
 $k=mysql_fetch_array($umurnya);
$dfddd_Dfd = mysql_query("UPDATE  `datapasien` SET `AlamatPj` = '$AlamatPj',
`NamaPj2` = '$NamaPj2' WHERE `datapasien`.`id` ='$id'");
 $biX = date("m")-0;
 $hiX= date("d")-0;
 $tiX= date("Y")-0;
$kjdfkdjkd_0909090s= mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$k[NoPasien]' AND TglMasuk='$hiX' AND BlnMasuk='$biX' AND ThnMasuk='$tiX'");
$yg = mysql_fetch_array($kjdfkdjkd_0909090s);
 //
//budi=&id=7092&IdDept=23&IdDokter=13&IdRujukan=14&IdPenjamin=8&JenisRawat=JALAN
$IdPenjamin = $_GET["IdPenjamin"];
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
$NamaPoli = $_GET["NamaPoli"];			$jam = date("H:i:s");
$JenisRawat = $_GET["JenisRawat"];			 
$KodeDokter = $_GET["IdDokter"];
 $tgl=date("d")-0; $bln=date("m")-0;$thn=date("Y")-0;
$MstKey = "$tgl$bln$thn:$awe[NoPasien]";
 if($yg[id]=='dd'){
 echo "MAAF PASIEN SUDAH DIDAFTARKAN  <br>
 TGL : $yg[TglMasuk]-$yg[BlnMasuk]-$yg[ThnMasuk] OLEH "; ?><font color="#990000"><b><i> <? echo "$yg[Operator]"; ?></i></b></font><? 
 echo "<br>$yg[JamMasuk] KE POLI : $yg[Bagian]<br> DOKTER : $yg[NamaDokter]<br>";
 ?>
 <A href="index.php" >BATAL</A>
 <? 
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){
$jdhjfdhfjd_djfkdjf  = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$KodeDokter'");
$y_d = mysql_fetch_array($jdhjfdhfjd_djfkdjf);
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
       $tgl=date("d"); $bln=date("m");$thn=date("Y");
       $lihat = "$tgl$bln$thn-$KodeDokter";
       $desa = "$tgl$bln$thn-$KodeDokter";
       $regist = mysql_query("SELECT RegId,id,KodeDokter FROM rwtjalan WHERE KodeDokter='$KodeDokter' AND  RegId LIKE '$desa%' AND
       TglMasuk='$tanggal' AND RegId not like 'IN%' ORDER BY  id DESC");
       $bx = mysql_fetch_array($regist);
       $pchh = explode("-",$bx[RegId]);
	   echo "dapat $desa<br><br>SELECT RegId,id,KodeDokter FROM rwtjalan WHERE KodeDokter='$KodeDokter' AND  RegId LIKE '$desa%'<br>";
 			if($bx[RegId]){ ///||||||||||||||||||||\
			$urut  = $pchh[2]+1;
			}else{
			$urut=1;
			}///||||||||||||||||||||\
			 
			$jdhjdfh= mysql_query("SELECT * FROM rujukan WHERE id='$IdRujukan'");
			$io_oi = mysql_fetch_array($jdhjdfh);
       $RegId="$tgl$bln$thn-$KodeDokter-$urut";
	  echo "$RegId<BR>";
       $NamaPasien = mysql_query("SELECT NamaPasien,NoPasien,TglJam FROM datapasien WHERE id='$id'");
       $c = mysql_fetch_array($NamaPasien);
	   
       $Ruan = mysql_query("SELECT * FROM ruangan WHERE NoRuangan='$NoRuangan'");
       $j = mysql_fetch_array($Ruan);
       $namaP= mysql_query("SELECT * FROM dataperusahaan WHERE id='$IdPenjamin'");
       $g = mysql_fetch_array($namaP);
       $Bagian = mysql_query("SELECT NamaBagian,id FROM bagian WHERE id='$IdDept'");
       $d9 = mysql_fetch_array($Bagian);
 		if($JenisRawat==''){
			echo "JENIS RAWAT BELUM ANDA TENTUKAN,..... <br>";
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
 			$RwJ=mysql_query("SELECT RegId FROM rwtjalan WHERE id='$IdJal'");
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
		$jre_sa = mysql_query("SELECT COUNT(id) AS uu FROM rwtjalan WHERE NoPasien='$k[NoPasien]'");
		$gsa  = mysql_fetch_array($jre_sa);
		// == baru atao lama
 $gilu = date("Y-m-d.");
// if($gsa[uu]>0){
 if($pecah[0]==$hi && $pecah[1]==$bi  && $pecah[2]==$ti){
 $LB="L";
 }elseif($c[TglJam]='$gilu'){
 $LB="B";
 }
		 
	    $simpanJalan= mysql_query("INSERT INTO `rwtjalan`
	 (`id`,`RegId`,`NoPasien`,`NamaPasien`,`TglMasuk`,`BlnMasuk`,`ThnMasuk`,
	 `JamMasuk`,`JamKeluar`,`Umur`,`BlnUmur`,`KodeBagian`,`Bagian`,
	  `KodeDokter`,`NamaDokter`,`KodePer`,`NamaPer`,`RujukanDari`,`Operator`,`JenisKelamin`,`LB`,`TypeJam`,`Kartu`,`IdPasien`
	  ,`CB`,`NamaPj2`,`AlamatPj`)
	 VALUES (NULL,'$RegId','$c[NoPasien]','$c[NamaPasien]','$tgl','$bln','$thn',
	 '$jam','0','$Usio','$BlnIm:$Har','$d9[id]','$d9[NamaBagian]','$KodeDokter',
	 '$y_d[NamaDokter]','$g[id]','$g[NamaPer]','$io_oi[NamaRujukan]','$a[Nama]','$k[JenisKelamin]','$LB','$Lempar','$NoKartu','$k[id]','$CaraBayar'
	 ,'$NamaPj2','$AlamatPj')");
	 echo "<br><br>INSERT INTO `rwtjalan`
	 (`id`,`RegId`,`NoPasien`,`NamaPasien`,`TglMasuk`,`BlnMasuk`,`ThnMasuk`,
	 `JamMasuk`,`JamKeluar`,`Umur`,`BlnUmur`,`KodeBagian`,`Bagian`,
	  `KodeDokter`,`NamaDokter`,`KodePer`,`NamaPer`,`RujukanDari`,`Operator`,`JenisKelamin`,`LB`,`TypeJam`,`Kartu`,`IdPasien`
	  ,`CB`,`NamaPj2`,`AlamatPj`)
	 VALUES (NULL,'$RegId','$c[NoPasien]','$c[NamaPasien]','$tgl','$bln','$thn',
	 '$jam','0','$Usio','$BlnIm:$Har','$d9[id]','$d9[NamaBagian]','$KodeDokter',
	 '$y_d[NamaDokter]','$g[id]','$g[NamaPer]','$io_oi[NamaRujukan]','$a[Nama]','$k[JenisKelamin]','$LB','$Lempar','$NoKartu','$k[id]','$CaraBayar'
	 ,'$NamaPj2','$AlamatPj')<br>";
	//
	$udj = mysql_query("UPDATE rwtjalan SET TypeJam='$Lempar' WHERE id='$Lempar'");
	//
	 
 if($simpanJalan){
 $jsjsh090 = mysql_query("SELECT id FROM rwtjalan WHERE RegId='$RegId'");
 $hh = mysql_fetch_array($jsjsh090);
  header("Location:./struk_pas.php?id=$hh[id]");
 }else{ 
 $sresa = mysql_query("SELECT NoPasien,NamaPasien,RegId FROM rwtjalan WHERE RegId='$RegId'");
 $tr = mysql_fetch_array($sresa);
  	 }  
}else{ }
// header("Location:/keluar.php");
}
}
?>