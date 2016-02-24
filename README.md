# Customer - Müşteri Takip
Müşteri Takip Programı, Laravel 5.1
Migrations ile kurulumunuzu yapabilirsiniz. 
Örnek veritabanı dosyasını SQL.sql olarak proje ana dizininde mevcuttur.
# Laravel Hakkında
Laravel 5.1 kurulumunuz yapıp veritabanınız oluşturduktan sonra projeyi indirip dosyaları üzerine atıp kullanabilirsiniz.

# Kurulum
Konsoldan laravel 5.1 sürümününun kurulumunu yapıyoruz
```composer create-project laravel/laravel customer "5.1.*"```
Ardından dosyayı indiriyoruz; 
https://github.com/osmanyilmazco/customer/archive/master.zip
Laravel 5.1 kurulumunu yapmış olduğumuz klasörün içine indirdimiz dosyalarımızı yapıştırıyoruz.
En son olarak composer.json içindede belirtilen eklentilerin kurulumununda yapılması için konsoldan projenin klasörüne girip ```composer install``` Komutunu yazdırıyoruz
## Veritabanı Kurulumu
kök dizindeki **.env** dosyasının içine veritabanı bilgilerimizi yazıyoruz
**Örnek bağlantı**
```
DB_HOST=localhost
DB_DATABASE=laravel5_customer
DB_USERNAME=root
DB_PASSWORD=
```

### En son olarak migrasyonların çalışması için
```
php artisan migrate
```
komutumuzu konsola yazdıktan sonra programı kullanmaya başlayabiliriz. :)

# Önizleme
![Customer](http://indir.astald.com/dosyalar/screen_db_56cd781b15696.png)
![Customer](http://indir.astald.com/dosyalar/screen-kopya-3_db_56cd79dfe815a.png)
![Customer](http://indir.astald.com/dosyalar/screen-kopya-2_db_56cd79dfe7f86.png)
![Customer](http://indir.astald.com/dosyalar/screen-kopya-kopya_db_56cd79dfe7c6c.png)
![Customer](http://indir.astald.com/dosyalar/screen-kopya-kopya-kopya_db_56cd79dfde581.png)

# Bilgi
Kullandığınız için teşekkürler.
