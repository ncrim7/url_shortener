# URL Shortener

Bu proje, uzun URL'leri kısa URL'lere dönüştüren basit bir Laravel uygulamasıdır. Kullanıcılar, uzun bir URL'i girerek kısa bir URL oluşturabilirler. Oluşturulan kısa URL'ye tıklayan kullanıcılar, otomatik olarak orijinal uzun URL'ye yönlendirilir.

## Özellikler

- Uzun URL'leri kısaltma
- Kısa URL'lerden orijinal URL'lere yönlendirme
- Bootstrap kullanılarak modern ve kullanıcı dostu arayüz

## Kurulum

### Gereksinimler

- PHP >= 7.3
- Composer
- MySQL

### Adımlar

1. **Depoyu klonlayın:**
    ```bash
    git clone https://github.com/bomb1338/url-shortener.git
    cd url-shortener
    ```

2. **Bağımlılıkları yükleyin:**
    ```bash
    composer install
    ```

3. **Çevresel değişkenleri ayarlayın:**
    `.env` dosyasını oluşturun ve yapılandırın:
    ```bash
    cp .env.example .env
    ```
    `.env` dosyasını açın ve veritabanı yapılandırmalarını yapın:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=url_shortener
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Uygulama anahtarını oluşturun:**
    ```bash
    php artisan make:model Url -m
    ```

5. **Veritabanını oluşturun ve migrasyonları çalıştırın:**
    ```bash
    php artisan migrate
    ```

6. **Geliştirme sunucusunu başlatın:**
    ```bash
    php artisan serve
    ```

Uygulama artık `http://localhost:8000` adresinde çalışır durumda olacaktır.

## Kullanım

1. Ana sayfada, uzun URL'i girin ve "Shorten" butonuna tıklayın.
2. Başarılı bir şekilde kısa URL oluşturulduğunda, kısa URL ekranda görüntülenecektir.
3. Kısa URL'e tıkladığınızda, orijinal uzun URL'e yönlendirileceksiniz.

## Ekran Görüntüleri

### Ana Sayfa
![Ana Sayfa](https://imgur.com/UAiqGAt)

## Katkıda Bulunma

1. Bu projeyi forklayın.
2. Yeni bir dal (branch) oluşturun: `git checkout -b yeni-ozellik`
3. Değişikliklerinizi yapın ve commit edin: `git commit -m 'Yeni özellik ekle'`
4. Dalınıza push yapın: `git push origin yeni-ozellik`
5. Bir Pull Request açın.

## Lisans

Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakın.
