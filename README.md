<h1 align="center">Selamat datang di repository Zaqat! 👋🏻</h1>

![Zaqat-Preview](https://user-images.githubusercontent.com/46257169/234664301-22284b9b-6cdb-4597-8d4d-a24d8719dcca.png)

<p></p>

<h4 align="center">Website yang menyediakan layanan pembayaran dan pendataan zakat fitrah yang dibuat dengan <a href="https://laravel.com/" target="_blank">Laravel</a>.
</h4>

<p></p>

<p align="center">
	<img src="https://img.shields.io/github/issues/syauqi/zaqat?style=flat-square">
	<img src="https://img.shields.io/github/stars/syauqi/zaqat?style=flat-square"> 
	<img src="https://img.shields.io/github/forks/syauqi/zaqat?style=flat-square">
	<img src="https://img.shields.io/github/license/syauqi/zaqat?style=flat-square">
	<img src="https://img.shields.io/badge/maintained%3F-yes-green.svg?style=flat-square">
	<img src="https://img.shields.io/github/followers/syauqi.svg?style=flat-square&label=followers">
</p>

<p align="center">
  <a href="#tentang">Tentang Project</a> •
  <a href="#fitur">Fitur</a> •
  <a href="#download">Download & Install</a> •
  <a href="#dukungan">Dukungan</a> •
  <a href="#lisensi">Lisensi</a>
</p>

<p></p>

<h2 id="tentang">🕌 Tentang Zaqat</h2>

Website ini berperan sebagai tempat pembayaran dan pendataaan zakat
fitrah di masing masing daerah DKM Indonesia. Disini Terdapat banyak sekali fitur yang membantu mendigitalisasi pembayaran zakat di daerah daerah Indonesia.

<p></p>

<h2 id="fitur">✨ Fitur Tersedia</h2>

- Landing Page dan Autentikasi
  - Halaman [homepage, tentang, fitur, kontak]
  - Autentikasi [daftar dan login]
- Pengelolaan Data Muzakki
  - Tambah Data Muzakki
  - Update dan Hapus data Muzakki
  - Data Laporan Muzakki
- Pengelolaan Data Mustahik
  - Tambah Data Mustahik
  - Update dan Hapus data Mustahik
  - Data Laporan Mustahik
- Pengelolaan Data Kategori Mustahik
  - Tambah Data Kategori
- Fitur Report
  - Laporan Pembayaran Pengumpulan
  - Laporan Distribusi
- Fitur Pembayaran dan Pendistribusian Zakat
  - Pengumpulan Zakat
  - Distribusi Zakat

<p></p>

<h2 id="demo">🏠 Halaman Demo</h2>

Halaman demo saat ini tidak ada, oleh karena itu baiknya anda coba di local dengan menutur tahapan dibawah instalasi dibawah ini

<p></p>

<h2 id="syarat">💾 Prasyarat yang Diperlukan</h2>

Berikut adalah daftar layanan dan aplikasi yang wajib dan diperlukan selama anda menjalankan aplikasi learnify jika anda belum menginstall nya maka disarankan untuk menginstall nya terlebih dahulu

- PHP 8 & Web Server [XAMPP, LAMPP, MAMP]
- Web Browser [Chrome, Firefox, Safari & Opera]
- Internet [Karena menggunakan banyak CDN]

<p></p>

<h2 id="download">🐱‍💻 Panduan Menjalankan & Install Aplikasi</h2>

Untuk menjalankan aplikasi atau web ini kamu harus install XAMPP atau web server lain dan mempunyai setidaknya satu web browser yang terinstall di komputer anda.

```bash
# Clone repository ini atau download di
$ git clone https://github.com/syauqi/zaqat.git

# Kemudian jalankan command composer install, ini akan menginstall resources yang laravel butuhkan
$ composer install

# Lakukan copy .env dengan cara ketik command seperti dibawah 
$ cp .env.example .env

# Generate key juga jangan lupa dengan command dibawah
$ php artisan key:generate

# Jangan lupa migrate database dengan cara membuat database di phpmyadmin atau aplikasi lainnya yang kalian pakai,
# lalu jangan lupa untuk mengganti variable DB_DATABASE di file .env yang di folder project
$ php artisan migrate:fresh --seed

# Lalu jalankan aplikasi kalian dengan command dibawah
$ php artisan serve

# Selamat aplikasi dapat anda nikmati di local!
```
<p></p>

<h2 id="dukungan">💌 Dukungan</h2>

Kalian bisa mendukung saya di platform trakteer! Dukungan kalian akan sangat membantu untuk saya, namun dengan anda star project ini juga sudah sangat membantu lho!

<p></p>

<a href="https://trakteer.id/syaufy" target="_blank"><img id="wse-buttons-preview" src="https://cdn.trakteer.id/images/embed/trbtn-red-5.png" height="40" style="border:0px;height:40px;" alt="Trakteer Saya"></a>

<p></p>

<h2 id="kontribusi">🤝 Kontribusi</h2>

Contributions, issues and feature requests sangat saya apresiasi karena aplikasi ini jauh dari kata sempurna. Jangan ragu untuk pull request dan membuat perubahan pada project ini.

Berhubung Project ini saya selesaikan sendiri, namun banyak fitur dan banyak hal yang bisa diperbaiki maka bantuan kalian sangat saya apresiasi.

<p></p>

<h2 id="lisensi">📝 Lisensi</h2>

- Copyright © 2023 SYAUQIZAIDAN KHAIRAN KHALAF
- Zaqat adalah aplikasi web open-source yang berlisensi dibawah lisensi MIT

---

**<p align="center">Made with ❤️ by SYAUQIZAIDAN KHAIRAN KHALAF</p>**
