<?php
/*
Bir ifadenin değerinin ve türünün ne olduğuna bakmak için var_dump() işlevini kullanabilirsiniz. Hata ayıklama amacıyla bir değişkenin türünü öğrenmek için gettype() işlevini kullanın.

String "Alican Kayhan" 'Test' '3' "2"
Integer 100 255
Float(Double) 2.5
Boolean(true, false)
Array(Dizi) ['a','b'], array(1,2)
Object(Nesne)
NULL
*/


//gettype -> verinin türünü yazar

$degisken = "Alican";

echo gettype($degisken);