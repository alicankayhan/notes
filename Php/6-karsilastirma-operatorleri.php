<?php


$a = 3; $b = 4;

echo $a == $b; // Sonuç: false
echo $a === $b; // Sonuç: false
echo $a != $b; // Sonuç: true
echo $a !== $b; // Sonuç: true
echo $a < $b; // Sonuç: true
echo $a > $b; // Sonuç: false
echo $a <= $b; // Sonuç: true
echo $a >= $b; // Sonuç: false
echo $a <=> $b; // Sonuç: -1  hem büyük hem küçük hem eşit durumları gösterir


$a = true;
var_dump($a); //veri türünü gösterir
?>


/*
Artırma ve Azaltma Operatörleri
Artırma ve azaltma operatörleri temel anlamda sayı değerlerini artırma ve azaltmak amacı ile kullanılır.

Operatörler
Artırma Operatörü (++)
Azaltma Operatörü (--


Önceden Artırım
Artırma operatörü değişkenin başında kullanıldığında önce değişkenin değeri artırılır.

$a = 5;
echo ++$a; // Ekrana 6 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.

Sonradan Artırım
Artırma operatörü değişkenin sonunda kullanıldığında değişkenin değeri sonradan artar.
$a = 5;
echo $a++; // Ekrana 5 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.



*/


/*
BİRLEŞTİRME VE ATAM OPERATÖRLERİ

// * ATAMA OPERATÖRÜ
// . BİRLEŞTİRME OPERATÖRÜ


$a = 'Selam';
$b = 'Nasılsın';
echo $a.$b; //birleştirdik


+= arttırarak atama yapar
-= eksilterek atama yapar
/= bölerek atama yapar
*= çarparak atama yapar
%= modunu alarak atama yapar
.= birleştirerek atama yapar

$a = 3;
echo $a +=2; //$a=5 oldu

$adsoyad = 'Alican';
$adsoyad .= 'Kayhan';
echo $adsoyad;


 //ornek 2

$modul = '<div>';
$modul .= '<p>Lorem ipsum </p>';
$modul .= '</div>';



*/
