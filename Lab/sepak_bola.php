<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	if($NamaPasien==''){
	echo "HARAP ISIKAN NAMA PASIEN,....................<br>";
	}elseif($HpTelp==''){
	echo "HARAP ISIKAN NOMER HP,.......................<br>";
	}elseif($Alamat==''){
	echo "HARAP ISIKAN ALAMAT,........................<br>";
	}else{
	  $ggt = mysql_query("SELECT NamaDokter,KodeDokter  FROM datadokter WHERE KodeDokter='$gigit1'");
		   $xz = mysql_fetch_array($ggt);
		     $ggt2 = mysql_query("SELECT NamaDokter,KodeDokter FROM datadokter WHERE KodeDokter='$gigit2'");
		   $xz2 = mysql_fetch_array($ggt2);
		     $ggt3 = mysql_query("SELECT * FROM datadokter WHERE KodeDokter='$i3d3'");
		   $xz3 = mysql_fetch_array($ggt3);
		   $tahan = date("Y");
		   $Usia = $tahan-$ThnLahir;
		   $Bull=date("m");
		   if($BlnLahir<$Bull){
		   $LbhBln=$Bull-$BlnLahir;
		   }
//count date
//$gabt = "$TglLahir/$BlnLahir/$ThnLahir";
//$pecah = explode("/",$gabt);
$bln=$bi = date("m")-0;
$tgl=$hi= date("d");
$thn=$ti= date("Y");
///-------------------------------------------------------------
$birth = gregoriantojd($BlnLahir,$TglLahir,$ThnLahir);
$cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
$tahunipun = ($cal['year']-1);
$sasinipun = ($cal['month']-1);
$dintenipun = ($cal['day']-1);
//---------------------------------------------------------------
//$jikp = $pecah[1]-0;
if($BlnLahir>$bi){
$umur =  $ti - $ThnLahir-1;
$BlnUmur=12+$bi-$BlnLahir;
}elseif($BlnLahir==$bi){
$umur =  $ti - $ThnLahir;
$BlnUmur= 0;
}else{
$umur =  $ti - $ThnLahir;
$BlnUmur= $bi-$BlnLahir;
}
//end count date
	    $isikan = mysql_query("INSERT INTO `labumum` (`id`, `RegId`, `TglLahir`, 
 		`BlnLahir`, `ThnLahir`,`JenisKelamin`,`Tgl`, `Bln`, `Thn`, `Usia`,`LbhBulan`,
		 `NamaPasien`, `KodeDokter`, `NamaDokter`, `KdTgJawab`, `NamaTgJawab`, `KdRujukan`, `NamaPerujuk`,`HpTelp`, `Alamat`, `Opr`)
		  VALUES (Null, '$mbah', '$TglLahir', '$BlnLahir', '$ThnLahir','$JenisKelamin',
 		  '$tgl', '$bln', '$thn', '$tahunipun','$sasinipun-$dintenipun', '$NamaPasien','$xz3[KodeDokter]','$xz3[NamaDokter]',
		  '$xz2[KodeDokter]','$xz2[NamaDokter]','$xz3[KodeDokter]','$xz3[NamaDokter]','$HpTelp', '$Alamat','$a[Nama]')");
		if($isikan){
		$Bus = mysql_query("SELECT id FROM labumum WHERE RegId='$mbah'");
		$x = mysql_fetch_array($Bus);
		header("Location:./nasi_kucing.php?hari=$x[id]");
	}else{
	echo "SIMPAN DATA GAGAL,....<br>";
	}
}
}else{
header("Location:./keluar.php");
}
?>
<input type="button" name="sddfdg" value="Kembali" onClick="location.href='permen_karet.php';">