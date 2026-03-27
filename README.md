### Kullanılan Teknolojiler
- Laravel
- MySQL
- Postman
- Laravel Queue / Jobs
- Laravel Seeders


### Projeyi Çalıştırma
1-) Repoyu Klonlayın
```
git clone https://github.com/Bilalng/TaskEterna.git
```

2-) Laravel Bağımlılıklarını Kurun
```
composer install
```
3-) Environment Dosyasını Oluşturun
```
cp .env.example .env
```
4-) Veritabanı Ayarlarını Yapın
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=license_system
DB_USERNAME=root
DB_PASSWORD=
```

5-) Uygulama Key Oluşturun
```
php artisan key:generate
```
6-) Migrationları Çalıştırın
```
php artisan migrate
```
7-) Seederları Çalıştırın
```
php artisan db:seed --class=testSeed
```
8-) Queue Worker Çalıştırın
```
php artisan queue:work
```
9-) Uygulamayı Başlatın
```
php artisan serve
```

### Notlar
Bu proje bir teknik değerlendirme kapsamında geliştirilmiştir.

Verilen taskı analiz ederek gerekli mimariyi tasarladım ve sistemin arka plan yapısını (job kullanımı, veri akışı vb.) buna göre kurdum. Düşünme sürecimi ve yaklaşımımı, değerlendirme sırasında alınan canlı kayıttan inceleyebilirsiniz.

Ancak geliştirme sürecinde fark etmesi geç süren küçük bir yazım hatası nedeniyle yaklaşık 1.5 saatlik süreyi bu problemi çözmeye çalışarak harcadım. Bu durum taskın istenilen tüm gereksinimlerini tam olarak tamamlayamamama sebep oldu.

Ayrıca bazı Eloquent sorgularını süre kısıtı nedeniyle yazamadım. Projeyi geliştirirken AI kullanımını mümkün olan en düşük seviyede tutmaya çalıştım ve çözümün büyük kısmını kendi analizim doğrultusunda oluşturdum.

Bu nedenle değerlendirme yapılırken yalnızca ortaya çıkan sonuca değil, kurulan mimariye ve problem çözme yaklaşımına da bakılmasının daha sağlıklı olacağını düşünüyorum.

Projeyi incelemek ve geri bildirim vermek için zaman ayırdığınız için gerçekten teşekkür ederim.
