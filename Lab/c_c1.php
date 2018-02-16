<?
if($IdPaket>0 && $ada==22){
header("Location:./1278n.php?iin=nkl&&gundul=pacul&ff=2&a=0&IdDetil=$IdDetil&id=$id&IdPaket=$IdPaket");
}elseif($IdPaket>0 && $ada!=22){
header("Location:./78n.php?&gundul=pacul&ff=2&a=0&IdDetil=$IdDetil&id=$id&IdPaket=$IdPaket");
}else{
header("Location:./suitinap.php?NoBukti=$NoBukti&fito=$id&gundul=pacul&ff=2");
}
?>