<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
////
$kjffgf_glgfklgf = mysql_query("SELECT * FROM uppering_obat WHERE id='1'");
$aa22= mysql_fetch_array($kjffgf_glgfklgf);
  $Tiga = $HargaJual+($HargaJual*$aa22[Tiga]/100); 
   $Dua = $Tiga+($Tiga*$aa22[Tiga]/100); 
    $Satu = $Dua+($Dua*$aa22[Satu]/100); 
    $Vip = $Satu+($Satu*$aa22[Vip]/100); 
   $Svip = $Vip+($Vip*$aa22[Svip]/100); 

////
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11 || $a[Level]==14  || $a[Level]==3){
if($NamaObat==''){
echo "HARAP ISIKAN NAMA OBAT,....<br>";
 
}else{
           ///
		   
		    $kdikdidkdi = mysql_query("SELECT NamaGolongan FROM golobat WHERE id='$IdGol'");
  $mn = mysql_fetch_array($kdikdidkdi);
//  echo strtoupper($mn[NamaGolongan]);
		   ///
		   $Dme = mysql_query("SELECT * FROM merk WHERE KodeMerk='$Merk'");
		   $kjk = mysql_fetch_array($Dme);
		   $TglExp= "$tgl1-$bln1-$thn1";
		   $TglJam = date("d.m.y.H:i:s");
 
 	 $simp= mysql_query("INSERT INTO `dataobat` (`id`, `KodeObat`, `NamaObat`, `Satuan1`, `Isi`, `Satuan2`, `Komposisi`, 
	 `KodeMerk`, `NamaMerk`, `Hna`, `HargaJualA`, `L`, `HargaJual`, `Tiga`, `Dua`, `Satu`, `Vip`, `Svip`, `Min`, `Max`, `Exp`, `Opr`, `TglJam`, `IsiKemasan`, `StokAwal`, `IdGol`, `NamaGolongan`, `AB`, `Vas`) VALUES (NULL, '$KodeObat', '$NamaObat', '$Satuan1', '$Isi', '$Satuan2', '$Komposisi', 
	 '$Merk', '$kjk[NamaMerk]', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$Min', '$Max', '', '$a[Nama]', '$TglJam', '0', '$StokAwal', '$IdGol', '$mn[NamaGolongan]', '', '$Vas')");
	  

 		 
						 if($simp){
						 header("Location:./obat.php");
						 }else{
						 echo "SIMPAN DATA GAGAL,.....<br>";
						 }
}
}else{
header("Location:./keluar.php");
}
?>