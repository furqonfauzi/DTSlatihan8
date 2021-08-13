<?php 
function perkenalan(){
	echo "Selamat Datang, ";
	echo "Pada Acara Digital Talent <br>";
	echo "2021</br><hr>";
}
perkenalan();


function perkenalan1($nama,$salam){
	echo "<h3>Salam ke-1</h3>";
	echo $salam.", ";
	echo "Perkenalkan Nama Saya ".$nama."<br>";
	echo "Senang Berkenalan Dengan Anda <br>";
}

perkenalan1("Muhammad Furqon Fajar Fauzi", "Hi");
	echo "<hr>";
	$saya = "Medi";
	$ucapansalam = "Selmat Pagi";

perkenalan1($saya,$ucapansalam);


function perkenalan2($nama,$salam="Selamat Datang"){
	echo "<hr>";
	echo "<h3>Salam ke-2</h3>";
	echo $salam.", ";
	echo "Perkenalkan Nama Saya ".$nama."<br>";
	echo "Senang Berkenalan Dengan Anda <br>";

}
perkenalan2("Muhammad Furqon Fajar Fauzi", "Hi");

	$saya = "Medi";
	$ucapansalam = "Selmat Pagi";

perkenalan2($saya);

function hitungumur($tgl_lahir,$tgl_sekarang){
	echo "<hr>";
	echo "<h3>Hitung Umur</h3>";
	$umur =  $tgl_sekarang - $tgl_lahir;
	return $umur;
}

	echo "Umur Saya Adalah ".hitungumur(1999,2021)." Tahun";

function hitungumur1($tgl_lahir,$tgl_sekarang){
	$umur =  $tgl_sekarang - $tgl_lahir;
	return $umur;
}

function perkenalan_umur($nama,$salam="Selamat Datang"){
	echo "<hr>";
	echo "<h3>Perkenalan dan Umur </h3>";
	echo $salam.", ";
	echo "Perkenalkan Nama Saya ".$nama."<br>";
	echo "Saya Berusia ".hitungumur1(1999,2021)." Tahun <br>";
	echo "Senang Berkenalan Dengan Anda <br>";
}
perkenalan_umur("Komang");


function faktorial($angka){
	if($angka < 2){
		return 1;
	}else{
		return ($angka * faktorial($angka-1));
	}
}
	echo "<hr>";
	echo "<h3>Faktorial</h3>";
	echo "faktorial 5 adalah ".faktorial(5)." <br>";

function do_print(){
	echo "<hr>";
	echo "<h3>Prosedur Dalam PHP</h3>";
	echo time();
}
	do_print();
	echo "<br>";

function jumlah($a,$b){
	return ($a + $b);
}
echo jumlah(2,3);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Pertemuan 8</title>
 </head>
 <body>
 	<hr>
 	<h3>Tampilan Gambar	</h3>
 <img src="image/avatar2.png"><img src="image/avatar3.png">
 </body>
 </html>