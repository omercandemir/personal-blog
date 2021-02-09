 


## Proje Hakkında
Bu proje ile birlikte laravel öğrenmeye başladım. Belirli şeyleri bu proje sayesinde öğrendim ve şuanda omercn.net sitemde bu sistemi kullanmaktayım. Sistemde yönetim paneline eklenmesi gereken basit birkaç şey var. Bunları yapabildiğim fakat vueJS öğrenmeye başladığım için vakit ayırmadım.

## Proje Eksikleri
--- Anasayfa ---
-> Jr. Web Developer yazısı için veritabanının ayarlar tablosunda bir field oluşturulması gerek. 
-> Özel söz kısmı için özel söz sahibi kısmı veritabanında mevcut değil. 
-> Arkaplan resimleri için veritabanının ayarlar tablosunda background image field'i bulunmamakta. 

--- Kontrol Paneli ---
-> Kategori Ekleme, düzenleme, silme bulunmuyor. 
-> Blog yazarı otomatik olarak ÖmerCan ismi ile atanıyor, <code>auth()->name</code> ile değiştirilmeli.
-> Yukarıda belirtilen anasayfa dinamikleştirilmesi. 

## Panel Üyesi Oluşturma (Admin Oluşturma) 
İlk olarak siteadresi/giris ile yönetim paneline erişebilirsiniz. 
Yeni üyelik oluşturmak için Jetstream features kısmınan register kısmını açıp /register ile üye olduktan sonra bu features'i kapatabilir ve panele erişebilirsiniz. 


