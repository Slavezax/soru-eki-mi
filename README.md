# soru-eki-mi
## Soru Eki Mi

Soru eki mi'nin kelimenin son hecesindeki sesli harfe göre doğru şekillenmesini sağlar. (-mi, -mu, -mü vb.)

```php
include "soruekimi.php";

$metin = "bozuldu";

//Örnek kullanım:
echo "Berkan " . soruEkiGetir("deli"); //çıktı: Berkan deli mi? 
echo soruEkiGetir($metin); //çıktı: bozuldu mu?
echo soruEkiGetir("şerrefsiz"); //çıktı: şerrefsiz mi?
echo soruEkiGetir("OOOORRROSPUÇOCUUUĞUUUU"); //çıktı: OOOORRROSPUÇOCUUUĞUUUU mu?
```
