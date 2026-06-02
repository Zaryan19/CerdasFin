# CerdasFin — Platform Literasi & Edukasi Keuangan Interaktif

CerdasFin adalah platform Learning Management System (LMS) mini yang dirancang khusus untuk meningkatkan literasi keuangan masyarakat Indonesia secara interaktif. Platform ini fokus memberikan edukasi mendalam guna melindungi masyarakat dari ancaman finansial modern, seperti jebakan **Pinjaman Online (Pinjol) Ilegal** dan kecanduan **Judi Online (Judol)**.

Proyek ini dikembangkan menggunakan framework **Laravel** dan **Tailwind CSS** sebagai pemenuhan tugas besar UAS mata kuliah Pemrograman Web Lanjut.

---

## Fitur Utama

### 1. Force-Learning Workflow (Kurikulum Terarah)
Sistem memaksa alur pembelajaran yang terstruktur demi menghasilkan data peningkatan pemahaman yang valid dan terukur:
* **Satu Pintu Edukasi (Menu Modul):** Mengintegrasikan daftar kursus langsung ke dalam 4 modul utama.
* **Gerbang Pre-Test Wajib:** Pengguna wajib menyelesaikan Pre-Test sebelum dapat mengakses materi pembelajaran untuk menguji pengetahuan awal.
* **Direct Learning Access:** Setelah *submit* kuis, pengguna langsung dialihkan (*direct redirect*) ke halaman detail materi tanpa halaman perantara yang mubazir.

### 2. 4 Modul Kurikulum Inti
* **Fondasi:** Dasar-dasar literasi keuangan, pentingnya menabung, dan prinsip dasar pengelolaan uang.
* **Waspada:** Mengupas tuntas ciri-ciri pinjol ilegal, legalitas OJK, dan bahaya bunga majemuk yang mencekik.
* **Lindungi:** Edukasi berbasis data mengenai matematika kekalahan judi online serta strategi psikologis untuk keluar dari kecanduan.
* **Sejahtera:** Pengenalan instrumen investasi aman (emas, deposito, reksa dana) dan pembentukan dana darurat.

### 3. Simulasi Keuangan Real-Time (Interactive Calculators)
* **Kalkulator Bahaya Pinjol Ilegal:** Mensimulasikan bagaimana skema bunga harian pinjol ilegal dapat membengkakkan utang secara eksponensial dalam hitungan hari.
* **Kalkulator Investasi Aman:** Menghitung potensi pertumbuhan aset masa depan menggunakan efek *compound interest* (bunga berbunga).
* **Perencana Anggaran 50/30/20:** Membagi penghasilan bulanan pengguna secara otomatis ke dalam pos Kebutuhan (50%), Keinginan (30%), dan Tabungan (20%).

### 4. UI/UX Modern & Responsif
* Menggunakan palet warna bertema *Nature & Trust* (*Mint Green Glow* dan *Deep Fern Green*).
* Desain kartu modul yang bersih, dilengkapi visualisasi komponen gambar lokal (`<img>` tag dengan efek `hover:scale-105`), serta tata letak kalkulator yang presisi di tengah (*centered layout*).

---

## 🛠️ Spesifikasi Teknologi (Tech Stack)

* **Backend Framework:** Laravel
* **Frontend Styling:** Tailwind CSS
* **Animation Engine:** GSAP (GreenSock Animation Platform) & ScrollTrigger via CDN
* **Database:** MySQL / MariaDB

---

## 📦 Cara Install dan Menjalankan Proyek di Lokal

Ikuti langkah-langkah berikut secara berurutan untuk memasang dan menjalankan proyek ini di komputer lokal Anda:

1. **Clone Repositori**
```bash
   git clone [https://github.com/Zaryan19/CerdasFin.git](https://github.com/Zaryan19/CerdasFin.git)
   cd CerdasFin






Install Dependency PHP (Composer)

Bash

   composer install






Install & Build Aset Frontend

Bash

   npm install
   npm run dev






Konfigurasi Environment

Salin file konfigurasi contoh bawaan Laravel menjadi file .env lokal, lalu buka file .env tersebut untuk menyesuaikan nama database Anda.

Bash

   cp .env.example .env






Generate Application Key

Bash

   php artisan key:generate






Migrasi Database & Seeder

Jalankan perintah ini untuk membuat seluruh struktur tabel database sekaligus mengisi data awal kurikulum, modul, dan kuis bawaan proyek.

Bash

   php artisan migrate --seed






Jalankan Server Lokal

Bash

   php artisan serve


Setelah server menyala, buka browser Anda dan akses alamat: http://127.0.0.1:8000
