# Web Data Sekolah 🏫

Web ini aku buat sebagai salah satu project yang harus dituntaskan dalam mapel Kompetensi Keahlian RPL. Temanya soal manajemen data sekolah dan memakai PHP dan MySQL untuk bahasa pemrogramannya.

> Sekalian belajar Backend :P

---

## Fitur Utama

- Dashboard terpisah antara Siswa dan Guru
- Menambah data siswa, guru, mapel, kelas, prodi, mengajar, dan nilai
- Menampilkan data tersebut
- Mengedit data tersebut
- Menghapus data tersebut
- Fitur diatas hanya tersedia bila ada login sebagai Guru atau Admin

---

## Setup Lokal

### 1. Download dan Install XAMPP atau Laragon

- **XAMPP**: https://www.apachefriends.org/download.html
- **Laragon**: https://laragon.org/download

> Jangan lupa nyalakan Apache dan MySQL nya!

### 2. Konfigurasi Databases

- Masuk ke phpMyAdmin
- Buat database dengan nama "**smk**"
- Import file **smk.sql** ke dalam database yang telah dibuat
- Pada tabel login, masukkan 1 data akun admin sesuai kalian yang mau. Tapi saya rekomendasikan

```
no: 1
username: admin
password: admin#123
```

### 3. Clone Repository

- Masuk ke folder **htdocs** jika memakai XAMPP (**www** jika Laragon)
- Buka Terminal didalam folder tersebut dan jalankan perintah dibawah

```cmd
git clone https://github.com/M-Ari-ZM/Web-Data_Sekolah.git
```

### 4. Masuk ke Web

- Buka browser favorit kalian
- Ketik **localhost/web-data_sekolah**
- Lalu login menggunakan data admin yang telah dimasukkan

**Selamat! Web sudah bisa langsung digunakan**

---

## 📄 Lisensi

Project ini bersifat open-source dan dapat digunakan untuk pembelajaran.

---

### Jika memiliki kritik atau saran, jangan sungkan untuk beritahu saya :D
