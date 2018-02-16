<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header("Location:./leboke.php?KodeBag=$KodeBag&KodeRujuk=$KodeRujuk&ela=$ela&var=$var&IdJal=$IdJal&KodeDokter=$KodeDokter&id=$id&KeyID=$KeyIDX");
?>