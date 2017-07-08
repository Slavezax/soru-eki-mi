<?php

function soruEkiGetir($metin){
$sonHarf = mb_substr($metin,-2, 1,'UTF-8');

if ($sonHarf=='a' || $sonHarf=='ı'){
	$eklenecek =' mı?';
} else if ($sonHarf=='e' || $sonHarf=='i'){
	$eklenecek =' mi?';
} else if ($sonHarf=='u' || $sonHarf=='o'){
	$eklenecek =' mu?';
} else if ($sonHarf=='ü' || $sonHarf=='ö'){
	$eklenecek =' mü?';
} else {
	$eklenecek =' mi?';
}

$sonHal = $metin . $eklenecek;
return $sonHal;
}

echo "Berkan " . soruEkiGetir("deli");

//çıktı: Berkan deli mi?

