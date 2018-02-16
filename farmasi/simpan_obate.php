<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11 || $a[Level]==3){
 $Dme = mysql_query("SELECT * FROM merk WHERE KodeMerk='$Merk'");
		   $kjk = mysql_fetch_array($Dme);
		     if($vak==0){
			 $HargaJual=$HargaJual;
			 }else{
			 $HargaJual=$HargaBeli+(37.5/100*$HargaBeli);
			 }
			   $kdikdidkdi = mysql_query("SELECT NamaGolongan FROM golobat WHERE id='$IdGol'");
  $mn = mysql_fetch_array($kdikdidkdi);
  //
    $Gol = strtoupper(substr($mn[NamaGolongan],0,3));

  //
  
			 $TglJam=date("d-m-Y.H:i:s");
			 $Exp="$Tgl-$Bln-$Thn";
                      if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
					  	  $skskjs = mysql_query("SELECT KodeObat,id FROM dataobat WHERE   NamaGolongan LIKE '$Gol%' ORDER BY Vas DESC");
 $bb = mysql_fetch_array($skskjs);
 echo "dffd $bb[KodeObat] <br>"; 
 $pch = explode("-",$bb[KodeObat]);
$cb=$pch[1]+1;
$Dol="$Gol-$cb";
 					  if($IdGol==777){
					  $NamaGolongan="PAKET";
					  }elseif($IdGol==778){
					  $NamaGolongan="NARKOTIKA";
					  }elseif($IdGol==779){
					  $NamaGolongan="PSIKOTROPIKA";
					  }else{
					  $NamaGolongan=$mn[NamaGolongan];
					  }
					      $simp = mysql_query("UPDATE `dataobat` SET `KodeObat`='$Dol', `NamaObat`='$NamaObat', 
						   `KodeMerk`='$Merk', `NamaMerk`='$kjk[NamaMerk]',
						   `Hna`='$Hna',
						   `Max`='$Max',  `Min`='$Min', `Exp`='$Exp', `Opr`='$a[Nama]', 
						  `TglJam`='$TglJam',`StokAwal`='$StokAwal'
						  ,`IdGol`='$IdGol'
						  ,`NamaGolongan`='$NamaGolongan'
						   WHERE (`id`='$id')");
						   
						   }
////
$KeyID="$a[KodeBagian]-$id";
$TglJam=date("d.m.Y-H:i:s");
$djhfjdhjd = mysql_query("INSERT INTO  `MaxMinUnit`
 (`id`, `KeyID`, `Min`, `Max`, `IdUnit`, `NamaUnit`, `IdObat`, `NamaObat`, `TglJam`, `Opr`)
 VALUES (NULL, '$KeyID', '$Min', '$Max', '$a[KodeBagian]', '$a[NamaBagian]', '$id', '$NamaObat', '$TglJam', '$a[Nama]')");
if(!$djhfjdhjd){
$opd = mysql_query("UPDATE MaxMinUnit SET Min='$Min',Max='$Max',TglJam='$TglJam',Opr='$a[Nama]' WHERE KeyID='$KeyID'");
}
////					
		//	 header("Location:../keluar2.php");
 //
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="s_ududyd.php?id=<? echo $id; ?>&dimas_cowok=3x";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()">
 
 </body>
 </html>
 <?
}else{
header("Location:./keluar.php");
}
?>