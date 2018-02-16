<?
session_start();
include "../konek.php";
include "../salaman.php";
//
 $resekan2 = mysql_query("SELECT * FROM dataobat WHERE id='$IdObat'");
 $ii2 = mysql_fetch_array($resekan2);
 //
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
    $KeyID="$id-$IdObat";
  $Total = $ii2[HargaJual]*$Qty;
  $Tgl=date("d")-0;
  $Bln=date("m")-0;
  $Thn=date("Y");
  $Jam=date("H:i:s");
  if($bas==3){
   $ddfd =  mysql_query("DELETE FROM isipaketdetil WHERE id='$fre'");
  }else{
	$simp = mysql_query("INSERT INTO  `isipaketdetil`
	 (`id`, `KeyID`, `IdPaket`, `IdObat`, `NamaObat`, `Qty`, `Harga`, `Total`, `Tgl`, `Bln`, `Thn`, `Jam`, `Opr`) 
	VALUES (NULL, '$KeyID', '$id', '$IdObat', '$ii2[NamaObat]', '$Qty', '$ii2[HargaJual]', '$Total', '$Tgl', '$Bln', '$Thn', '$Jam', '$a[Nama]')");
	
	} header("Location:./d3e_0.php?iin=$iin&id=$id");
  ?>
