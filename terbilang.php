<?
 function terbilang($angka) {
$nil_angka = array(0 => "0 ",1 => "satu",2 => "dua",3 => "tiga", 4 => "empat",5 => "lima",6 => "enam",7 => "tujuh",8 => "delapan",9 => "sembilan");
$satuan = array(0 => "", 1 => "puluh",2 => "ratus",3 => "ribu",6 => "juta",9 => "miliar",12 => "triliun",15 => "kuadriliun");
$negatip = $angka < 0; $angka = "$angka";
$int = ""; if (preg_match("/^[+-]?(\d+)/", $angka, $m)) $int = $m[1];
$banyak = 0; $kal_terbilang = "";
// script untuk kalimat
while (preg_match('/(\d{1,3})$/', $int, $m)) {
// siapkan  satuan, puluhan, dan ratusan
$s = $m[1] % 10; 
$p = ($m[1] % 100 - $s)/10;
$r = ($m[1] - $p*10 - $s)/100;
// ubah kekalimat ratusan
if ($r==0) $ratus = "";
elseif ($r==1) $ratus = "se$satuan[2]";  
else $ratus = $nil_angka[$r]." $satuan[2]";
//ubah ke kalimat puluhan
if ($p==0) {
if ($s==0);
elseif ($s==1) $ratus = ($ratus ? "$ratus ".$nil_angka[$s] :($banyak==0 ? $nil_angka[1] : "satu"));
else $ratus = ($ratus ? "$ratus ":"") . $nil_angka[$s];
} elseif ($p==1) {
if ($s==0) $ratus = ($ratus ? "$ratus ":"") . "se$satuan[1]";
elseif ($s==1) $ratus = ($ratus ? "$ratus ":"") . "sebelas";
else $ratus = ($ratus ? "$ratus ":"") . $nil_angka[$s] . " belas";
} else /*($angka=="")*/ {
$ratus = ($ratus ? "$ratus ":"").$nil_angka[$p]." puluh".
($s > 0 ? " ".$nil_angka[$s] : "");
}
// gabungkan dengan hasil sebelumnya
$kal_terbilang = ($ratus ? $ratus.($ratus=="se" ? "":" ").$satuan[$banyak]:"").
($kal_terbilang ? " $kal_terbilang":""); 
// pangkas ribuan/jutaan/dsb yang sudah dikonversi
$int = preg_replace('/\d{1,3}$/', '', $int);
$banyak+=3;
}
if (!$kal_terbilang) $kal_terbilang = $nil_angka[0];
//// angka di kanan desimal
$pecahan = ""; if (preg_match("/\.(\d+)/", $angka, $m)) $pecahan = $m[1];
$blk_KOMA = "";

/*for ($i=0; $i<strlen($pecahan); $i++) { */
//jika kolom nilai=0
$c=$nil_angka[substr($pecahan,0,1)];
$x=$nil_angka[substr($pecahan,1,1)];
// script untuk kata di blk koma
if($blk_KOMA=="0 "){
$blk_KOMA .= ($blk_KOMA ? " ":"").$nil_angka[substr($pecahan,$i,1)];
}elseif($c=="satu" &&  $x!="satu" && $x=="0 "){ 
$blk_KOMA ="Sepuluh ";
}elseif($c=="satu" && $x=="satu"){
$blk_KOMA .= " Sebelas";
} elseif($c=="satu" && $x !="satu" && $x !="0 ")
{
$blk_KOMA .=$x." Belas";
}elseif($c=="0 ")
{
$blk_KOMA .="0 ".$x;
}elseif($c=="dua" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ".$x;
}elseif($c=="dua" && $x=="0 ")
{
$blk_KOMA ="Dua Puluh";
}elseif($c=="tiga" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ".$x;
}elseif($c=="empat" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ".$x;
}elseif($c=="empat" && $x=="0 ")
{
$blk_KOMA =" Empat Puluh";
}elseif($c=="lima" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ". $x; 
}elseif($c=="lima" && $x=="0 ")
{
$blk_KOMA .=" Lima Puluh ";
}elseif($c=="enam" && $x!="0 ")
{
$blk_KOMA .=$c." Puluh ".$x;
}elseif($c=="enam" && $x=="0 ")
{
$blk_KOMA = "Enam Puluh ";
}elseif($c=="tujuh" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ".$x;
}elseif($c=="tujuh" && $x=="0 ")
{
$blk_KOMA =" Tujuh Puluh ";
}elseif($c=="delapan" && $x !="0 ")
{
$blk_KOMA .=$c." Puluh ". $x;
}elseif($c=="delapan" && $x=="0 ")
{
$blk_KOMA =" Delapan Puluh ";
}elseif($c=="sembilan" && $x !="0 ")
{
$blk_KOMA .=$c ." Puluh ".$x;
}elseif($c=="sembilan" && $x=="0 ")
{
$blk_KOMA =" Sembilan Puluh ";
}
return ($negatip ? "minus ":"").$kal_terbilang.($blk_KOMA ? "     ":"")." rupiah";
}
//Buat Tombol Kembali
?>
 