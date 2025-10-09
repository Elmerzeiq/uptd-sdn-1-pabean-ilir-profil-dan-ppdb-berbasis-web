<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![alt text](https://github.com/Dellafaiza/uptd-sdn-1-pabean-ilir-profil-dan-ppdb-berbasis-web/blob/main/public/img/1.png?raw=true)

![alt text](https://github.com/Dellafaiza/uptd-sdn-1-pabean-ilir-profil-dan-ppdb-berbasis-web/blob/main/public/img/2.png?raw=true)

![alt text](https://github.com/Dellafaiza/uptd-sdn-1-pabean-ilir-profil-dan-ppdb-berbasis-web/blob/main/public/img/3.png?raw=true)

![alt text](https://github.com/Dellafaiza/uptd-sdn-1-pabean-ilir-profil-dan-ppdb-berbasis-web/blob/main/public/img/4.png?raw=true)

![alt text](https://github.com/Dellafaiza/uptd-sdn-1-pabean-ilir-profil-dan-ppdb-berbasis-web/blob/main/public/img/5.png?raw=true)


# 🏫 Website UPTD SDN 1 Pabean Ilir

Website profil sekolah dan sistem Penerimaan Peserta Didik Baru (PPDB) online untuk UPTD SDN 1 Pabean Ilir, Indramayu, Jawa Barat.

## 📋 Tentang Proyek

Aplikasi web ini dikembangkan untuk memudahkan proses penerimaan peserta didik baru di UPTD SDN 1 Pabean Ilir. Website ini menggabungkan profil sekolah yang informatif dengan sistem PPDB online yang efisien, sehingga orang tua dapat mendaftarkan anak mereka secara mudah dan transparan.

## ✨ Fitur Utama

### Website Profil Sekolah
- 📰 Informasi lengkap tentang sekolah (visi, misi, sejarah)
- 👥 Profil guru dan tenaga kependidikan
- 🎓 Program dan kegiatan sekolah
- 📸 Galeri foto dan dokumentasi kegiatan
- 📢 Berita dan pengumuman terkini
- 📞 Informasi kontak dan lokasi sekolah

### Sistem PPDB Online
- 📝 Formulir pendaftaran online untuk calon siswa baru
- 📤 Upload dokumen persyaratan secara digital
- 🔍 Tracking status pendaftaran real-time
- ✅ Verifikasi dan validasi data pendaftar
- 📊 Dashboard admin untuk mengelola pendaftaran
- 📈 Laporan dan statistik PPDB
- 🔔 Notifikasi status pendaftaran
- 🖨️ Cetak bukti pendaftaran

## 🛠️ Teknologi yang Digunakan

- **Framework:** Laravel (PHP)
- **Frontend:** Blade Template, Bootstrap/Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Sanctum/Breeze
- **File Storage:** Laravel Storage

## 📦 Persyaratan Sistem

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM (untuk asset compilation)
- Apache/Nginx

## 🚀 Instalasi

1. Clone repository
```bash
git clone https://github.com/username/uptd-sdn1-pabeanilir.git
cd uptd-sdn1-pabeanilir
```

2. Install dependencies
```bash
composer install
npm install
```

3. Copy file environment
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Konfigurasi database di file `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

6. Jalankan migration dan seeder
```bash
php artisan migrate --seed
```

7. Compile assets
```bash
npm run dev
```

8. Jalankan aplikasi
```bash
php artisan serve
```

Aplikasi dapat diakses di `http://localhost:8000`

## 👤 Default Login

**Admin:**
- Email: admin@gmail.com
- Password: 12345678

**Catatan:** Segera ganti password default setelah instalasi pertama kali.

## 📚 Dokumentasi Laravel

Laravel memiliki [dokumentasi](https://laravel.com/docs) yang lengkap dan menyeluruh, serta video tutorial library yang membuat Anda mudah memulai dengan framework ini.

Anda juga dapat mencoba [Laravel Bootcamp](https://bootcamp.laravel.com), di mana Anda akan dipandu membangun aplikasi Laravel modern dari awal.

Jika tidak ingin membaca, [Laracasts](https://laracasts.com) dapat membantu. Laracasts berisi ribuan video tutorial tentang berbagai topik termasuk Laravel, modern PHP, unit testing, dan JavaScript.

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan buat pull request atau laporkan issue jika menemukan bug.

Untuk berkontribusi pada Laravel framework, silakan lihat [panduan kontribusi Laravel](https://laravel.com/docs/contributions).

---

Dikembangkan dengan ❤️ untuk pendidikan yang lebih baik
