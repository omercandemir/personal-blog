 


## Proje Hakkında
<b>Laravel Version:</b> 8.x.x<br>
<b>Php Version:</b>7.x.x<br>
Bu proje ile birlikte laravel öğrenmeye başladım. Belirli şeyleri bu proje sayesinde öğrendim ve şuanda omercn.net sitemde bu sistemi kullanmaktayım. Sistemde yönetim paneline eklenmesi gereken basit birkaç şey var. Bunları yapabildiğim fakat vueJS öğrenmeye başladığım için vakit ayırmadım.

## Proje Eksikleri
<b>--- Anasayfa --- </b><br>
-> Jr. Web Developer yazısı için veritabanının ayarlar tablosunda bir field oluşturulması gerek. <br>
-> Özel söz kısmı için özel söz sahibi kısmı veritabanında mevcut değil. <br>
-> Arkaplan resimleri için veritabanının ayarlar tablosunda background image field'i bulunmamakta. <br>

<b>--- Kontrol Paneli ---</b><br>
-> Kategori Ekleme, düzenleme, silme bulunmuyor. <br>
-> Blog yazarı otomatik olarak ÖmerCan ismi ile atanıyor, <code>auth()->name</code> ile değiştirilmeli.<br>
-> Yukarıda belirtilen anasayfa dinamikleştirilmesi. <br>

## Panel Üyesi Oluşturma (Admin Oluşturma) 
İlk olarak siteadresi/giris ile yönetim paneline erişebilirsiniz. <br>
Yeni üyelik oluşturmak için Jetstream features kısmınan register kısmını açıp /register ile üye olduktan sonra bu features'i kapatabilir ve panele erişebilirsiniz. <br>


