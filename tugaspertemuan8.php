<?php 

// Soal nomer 1
function segitiga(){
	$alas = 19;
	$tinggi = 25;
	$sisi = 13 ; 
	$luas = 0.5*$alas*$tinggi;
	$keliling = $alas + $sisi + $sisi;
	echo "<h3>Soal Nomer 1</h3><br>";
	echo" Alas Segitiga ( ".$alas." ) <br>";
	echo" Tinggi Segitiga ( ".$tinggi." ) <br>";
	echo" Sisi Segitiga ( ".$sisi." ) <br>";
	echo" <b>Keliling Segitiga ( ".$alas." + " .$sisi." + ".$sisi." = ".$keliling." ) </b><br>";
	echo" <b>Luas Segitiga ( 0.5 * ".$alas." * " .$tinggi." = ".$luas." ) </b><br><hr>";
}

segitiga();

//soal nomer 2
function hitung_luas($alas,$tinggi){
	$luas = 0.5*$alas*$tinggi;
	return $luas;
}

function hitung_keliling($alas,$sisi){
	$keliling = $alas + $sisi + $sisi;
	return $keliling;
}

function segitiga1($alas,$sisi,$tinggi){
echo "<h3>Soal Nomer 2</h3><br>";
echo "Sisi Segitiga ( ".$sisi." )<br>" ;
echo "Alas Segitiga ( ".$alas." )<br>" ;
echo "Tinggi Segitiga ( ".$tinggi." )<br>" ;
echo" <b>Keliling Segitiga ( ".$alas." + " .$sisi." + ".$sisi." = ".hitung_keliling($alas,$sisi)." ) </b><br>";
echo" <b>Luas Segitiga ( 0.5 * ".$alas." * " .$tinggi." = ".hitung_luas($alas,$tinggi)." ) </b><br><hr>";
}
 
//inputan angka yang disediakan sistem
$sisi = 31;
$alas = 18;
$tinggi = 24;
segitiga1($sisi,$alas,$tinggi);
hitung_luas($alas,$tinggi);
hitung_keliling($alas,$sisi);



 ?>
