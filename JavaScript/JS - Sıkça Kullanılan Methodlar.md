# JS - Sıkça Kullanılan Methodlar

## **String Methods**

| Özellik | Açıklama |
| --- | --- |
| .concat("birinci" , "ikinci"); | String ifadeleri birleştirir. |
| .length | Karakter sayısını gösterir |
| .toUpperCase(); | Karakterleri büyük harfe çevirir |
| .toLowerCase(); | Karakterleri küçük harfe çevirir |
| .indexOf(’’) | Aranan ifadenin kaçıncı eleman olduğunu gösterir (kelime aranırsa kelimenin başladığı index baz alınır) |
| .substring(3,5); | Belirtilen aralıktaki ifadeleri getirmek için kullanılır |
| .slice(3,5); | Belirtilen aralıktaki ifadeleri getirmek için kullanılır |
| .replace(’degistirilecek_yer, yeni_kelime’) | Bir ifadenin değiştirilmesi için kullanılır |
| .trim(); | Boşlukları kaldırır. |
| .split(”,”) | Virgüllerin kullanıldığı yerlerden dizi şeklinde ayırır. Boşluk veya başka şeyden de ayırılabilir. (Madde haline getirir) |

## Number Methods

| String İfadeyi Sayıya Çevirmek | Açıklama |
| --- | --- |
| Number(”0”); | İçerisindeki değeri tam sayıya çevirir. |
| parseInt(”0”); | İçerisindeki değeri tam sayıya çevirir. |
| parseFloat(”10.5”); | İçerisindeki değeri ondalıklı değere çevirir. |
| isNan (”10”); | Sayısal bir değer olup olmadığını söyler. Sayısal değer değilse ‘True’ döner. |

| Sayının Basamaklarını Almak | Açıklama |
| --- | --- |
| .toPrecision(5); | Sayıdaki ilk 5 rakamı alır. |
| .toFixed(3); | Virgülden sonra belirtildiği kadar basamak alır. |

| Math Methods | Açıklama |
| --- | --- |
| Math.PI; | Pi sayısını getirir |
| Math.round(2.4); | Belirtilen sayıyı en yakınına yuvarlar (2) |
| Math.ceil(2.4) | Belirtilen sayıyı yukarıya yuvarlar (3) |
| Math.floor(2.7) | Belirtilen sayıyı aşağıya yuvarlar (2) |
| Math.sqrt(64) | Karekökü almak için kullanılır |
| Math.pow(2,4) | Solda belirtilen rakamın sağdaki kadar üssünü alır. (2.2.2.2) |
| Math.abs(-100) | Mutlak değerini alır |
| Math.min(1,2,3,4,5,6) | Belirtilen sayılar arasındaki en küçük sayıyı getirir |
| Math.max(1,2,3,4,5,6) | Belirtilen sayılar arasındaki en büyük sayıyı getirir |
| Math.random(); | 0-1 arasında sayı çağırmak için kullanılır |
| Math.random()*10; | 0 ile 10 arasında sayı çağırmak için kullanılır (10 dahil olması için +1 eklenebilir. Math.random()*10+1; |

## Date & Times Methods

| GET Methods  (Değer çağırmak için kullanılanlar) | Açıklama |
| --- | --- |
| getDate(); | Ayın kaçıncı günü olduğunu gösterir |
| getDay(); | Haftanın kaçıncı günü olduğunu gösterir  (Dizi olduğu için 0’dan başlar) |
| getFullYear(); | Yıl bilgisi gelir |
| getHours(); | Saat bilgisi verilir |
| getMonth(); | Ay bilgisi gelir (Dizi olduğu için 0’dan başlar) |
| getMinutes() | Dakika bilgisi verilir |
| getSeconds(); | Saniye bilgisi verilir |

| SET Methods (Değer değiştirmek için kullanılanlar) | Açıklama |
| --- | --- |
| setFullYear(); | Yıl değerini değiştirmek için kullanılır |
| setMonth(); | Ay değerini değiştirmek için kullanılır |
| setDate(); | Tarih bilgisini  değiştirmek için kullanılır (ayın kaçıncı günüyse o değişir ) |
| setMinutes(); | Dakika bilgisi değiştirmek için kullanılır |
| setSeconds(); | Saniye bilgisi değiştirmek için kullanılır |

## Array Methods

| Array Methods | Açıklama |
| --- | --- |
| .push(); | En sona eleman eklemek için kullanılır |
| .unshift(); | En başa eleman eklemek için kullanılır |
| .pop(); | Dizinin son elemanını silmek için kullanılır |
| .shift(); | Dizinin ilk elemanını silmek için kullanılır |
| .indexOf(’’); | Arama işlemini yapar ve başladığı index numarasını gösterir.  |
| .reverse(); | Diziyi ters çevirmek için kullanılır |
| .sort(); | Sayısal veya alfabetik olarak sıralar (Varsayılan: Artan) |
| .concat(); | Dizileri birleştirmek için kullanılır |
| .splice(); | Dizinin belirtilen elemandan sonra kaç elemanın silineceğini ve bu işlemden sonra (istenilirse) eleman eklenmesini sağlar. Örneğin:   names.splice(0,1,”newName”); |
| .find(koşul); | Parantez içine koşul yazılır (bu bir fonksiyon olabilir). Belirtilen koşulu sağlayan, dizi içerisindeki ilk eleman çağrılır.  |
| .filter(koşul); | Parantez içine koşul yazılır (bu bir fonksiyon olabilir). Belirtilen koşulu sağlayan, dizi içerisindeki tüm elemanlar çağrılır.  |