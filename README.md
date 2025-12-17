# Sistem Informasi Ticket Masukan Mahasiswa

## Pendahuluan

Sistem Informasi Ticket Masukan Mahasiswa merupakan aplikasi berbasis web yang dikembangkan untuk mendukung proses penyampaian masukan, saran, dan keluhan dari mahasiswa kepada pihak pengelola kampus secara terstruktur dan terdokumentasi.

Aplikasi ini dirancang untuk menggantikan proses manual yang kurang efektif, dengan menyediakan mekanisme pelaporan yang terpusat, mudah digunakan, serta memiliki alur pengelolaan yang jelas melalui dashboard admin.

---

## Analisis Sistem

### Latar Belakang

Dalam lingkungan akademik, masukan dari mahasiswa merupakan salah satu komponen penting untuk peningkatan kualitas layanan. Namun, tanpa sistem yang terintegrasi, masukan tersebut berpotensi tidak terdokumentasi dengan baik dan sulit ditindaklanjuti.

### Tujuan Pengembangan Sistem

* Menyediakan media resmi bagi mahasiswa untuk menyampaikan masukan
* Memudahkan pihak pengelola dalam memantau dan mengelola masukan
* Menyediakan sistem pencatatan dan pelacakan status masukan

---

## Ruang Lingkup Sistem

Sistem ini memiliki dua jenis pengguna utama:

### Mahasiswa

* Melakukan autentikasi ke dalam sistem
* Mengirimkan ticket masukan atau saran
* Melihat status ticket yang telah dikirim

### Admin

* Melakukan autentikasi ke dashboard admin
* Melihat daftar ticket yang masuk
* Mengelola dan memantau ticket mahasiswa

---

## Gambaran Umum Fungsionalitas

Sistem bekerja dengan alur sebagai berikut:

1. Pengguna melakukan login ke dalam sistem
2. Mahasiswa mengirimkan ticket melalui form yang tersedia
3. Ticket tersimpan dan dapat diakses oleh admin
4. Admin memantau dan menindaklanjuti ticket melalui dashboard

Sistem ini menekankan pemisahan hak akses antara mahasiswa dan admin untuk menjaga keamanan dan keteraturan data.

---

## Rancangan Sistem

### Rancangan Class

Sistem dirancang menggunakan konsep pemrograman berorientasi objek dengan entitas utama berupa pengguna dan ticket. Setiap ticket terhubung dengan pengguna yang mengirimkannya, sehingga memungkinkan pelacakan sumber masukan secara sistematis.

### Rancangan Antarmuka

Antarmuka sistem dibagi menjadi beberapa bagian utama:

* Halaman login
* Form pengiriman ticket mahasiswa
* Dashboard admin untuk pengelolaan ticket

Desain antarmuka dibuat sederhana dan responsif agar mudah digunakan oleh seluruh pengguna.

---

## Teknologi yang Digunakan

* Framework Laravel
* Blade Template Engine
* Tailwind CSS
* Database relasional
* Git dan GitHub sebagai version control

---

## Penutup

Sistem Informasi Ticket Masukan Mahasiswa diharapkan dapat menjadi solusi yang efektif dalam menyalurkan aspirasi mahasiswa serta membantu pihak kampus dalam meningkatkan kualitas layanan melalui pengelolaan masukan yang terstruktur dan transparan.
