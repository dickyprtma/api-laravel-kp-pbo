<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    var $table = "soal";
    var $timestamps = false;

    public static function generateSoal(){
        // Tantangan 1.1
        Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa yang dimaksud dengan HTML?',
            'option_a' => 'Hypertext Markup Language',
            'option_b' => 'Hyperlink Text Markup Language',
            'option_c' => 'High Tech Markup Language',
            'option_d' => 'Home Tool Markup Language',
            'jawaban' => 0,
            'pembahasan' => 'Jawaban yang benar adalah "Hypertext Markup Language". HTML adalah bahasa markah yang digunakan untuk membangun halaman web.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa yang dimaksud dengan CSS?',
            'option_a' => 'Cascading Style Sheets',
            'option_b' => 'Coding Script Styles',
            'option_c' => 'Content Sharing System',
            'option_d' => 'Caching Server System',
            'jawaban' => 0,
            'pembahasan' => 'Jawaban yang benar adalah "Cascading Style Sheets". CSS adalah bahasa yang digunakan untuk mengatur tampilan dan tata letak halaman web.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa perbedaan antara HTTP dan HTTPS?',
            'option_a' => 'HTTP adalah protokol yang tidak aman, sedangkan HTTPS adalah protokol yang aman',
            'option_b' => 'HTTP digunakan untuk pengiriman data tanpa enkripsi, sedangkan HTTPS menggunakan enkripsi SSL/TLS',
            'option_c' => 'HTTP tidak memerlukan sertifikat SSL/TLS, sedangkan HTTPS memerlukan sertifikat SSL/TLS',
            'option_d' => 'Semua jawaban di atas benar',
            'jawaban' => 1,
            'pembahasan' => 'Jawaban yang benar adalah "HTTP digunakan untuk pengiriman data tanpa enkripsi, sedangkan HTTPS menggunakan enkripsi SSL/TLS". HTTPS adalah versi yang aman dari HTTP, di mana data yang dikirimkan antara klien dan server dienkripsi untuk menjaga keamanan dan privasi.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa peran JavaScript dalam pengembangan web?',
            'option_a' => 'Mengatur tampilan halaman web',
            'option_b' => 'Mengelola data pengguna',
            'option_c' => 'Membuat halaman web interaktif',
            'option_d' => 'Semua jawaban di atas benar',
            'jawaban' => 3,
            'pembahasan' => 'Jawaban yang benar adalah "Membuat halaman web interaktif". JavaScript digunakan untuk menambahkan interaksi, validasi, animasi, dan fitur dinamis lainnya pada halaman web.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa yang dimaksud dengan responsif dalam desain web?',
            'option_a' => 'Kemampuan halaman web untuk merespons input pengguna',
            'option_b' => 'Proses optimasi kode untuk meningkatkan kinerja web',
            'option_c' => 'Kemampuan halaman web untuk menyesuaikan tampilan dengan perangkat pengguna',
            'option_d' => 'Metode pengujian keamanan pada aplikasi web',
            'jawaban' => 2,
            'pembahasan' => 'Jawaban yang benar adalah "Kemampuan halaman web untuk menyesuaikan tampilan dengan perangkat pengguna". Desain responsif memungkinkan halaman web beradaptasi dengan baik pada berbagai perangkat, seperti desktop, tablet, dan ponsel.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa itu CMS dalam konteks web?',
            'option_a' => 'Content Management System',
            'option_b' => 'Customer Management System',
            'option_c' => 'Creative Media Solution',
            'option_d' => 'Code Markup Syntax',
            'jawaban' => 0,
            'pembahasan' => 'Jawaban yang benar adalah "Content Management System". CMS adalah perangkat lunak yang digunakan untuk mengelola dan mengorganisasi konten pada sebuah situs web.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa itu SEO dalam konteks web?',
            'option_a' => 'Sebuah teknologi untuk pembuatan animasi web',
            'option_b' => 'Sebuah metode untuk mengelola database',
            'option_c' => 'Sebuah strategi untuk meningkatkan visibilitas situs web di mesin pencari',
            'option_d' => 'Sebuah protokol keamanan untuk transfer data web',
            'jawaban' => 2,
            'pembahasan' => 'Jawaban yang benar adalah "Sebuah strategi untuk meningkatkan visibilitas situs web di mesin pencari". SEO (Search Engine Optimization) melibatkan serangkaian teknik yang digunakan untuk meningkatkan peringkat suatu situs web di hasil pencarian mesin pencari.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa itu UX dalam desain web?',
            'option_a' => 'User Experience',
            'option_b' => 'User Expectations',
            'option_c' => 'User Exchange',
            'option_d' => 'User Execution',
            'jawaban' => 0,
            'pembahasan' => 'Jawaban yang benar adalah "User Experience". UX (User Experience) merujuk pada pengalaman yang dialami oleh pengguna saat berinteraksi dengan suatu situs web atau aplikasi, termasuk antarmuka pengguna, interaksi, dan keseluruhan kepuasan pengguna.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa itu responsif mobile dalam desain web?',
            'option_a' => 'Proses pengoptimalan halaman web untuk kecepatan loading pada perangkat mobile',
            'option_b' => 'Penerapan desain web yang hanya ditampilkan pada perangkat mobile',
            'option_c' => 'Pengembangan aplikasi khusus untuk perangkat mobile',
            'option_d' => 'Pengaturan tampilan halaman web yang responsif terhadap perangkat mobile',
            'jawaban' => 3,
            'pembahasan' => 'Jawaban yang benar adalah "Pengaturan tampilan halaman web yang responsif terhadap perangkat mobile". Responsif mobile dalam desain web mengacu pada pengaturan tampilan yang dapat menyesuaikan diri dengan baik pada perangkat mobile, termasuk ukuran layar yang berbeda-beda.'
            ]);
            
            Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Apa yang dimaksud dengan pengujian fungsional dalam pengembangan web?',
            'option_a' => 'Pengujian yang memeriksa tampilan dan desain halaman web',
            'option_b' => 'Pengujian yang fokus pada kecepatan loading halaman web',
            'option_c' => 'Pengujian yang memastikan fitur dan fungsionalitas halaman web berjalan dengan baik',
            'option_d' => 'Pengujian yang menguji keamanan halaman web',
            'jawaban' => 2,
            'pembahasan' => 'Jawaban yang benar adalah "Pengujian yang memastikan fitur dan fungsionalitas halaman web berjalan dengan baik". Pengujian fungsional dalam pengembangan web bertujuan untuk memverifikasi apakah semua fitur dan fungsionalitas yang diharapkan dari halaman web berjalan sesuai dengan yang diinginkan.'
            ]);

            // Tantangan 1.2
            Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu CSS dalam konteks web?',
                'option_a' => 'Sebuah bahasa pemrograman web',
                'option_b' => 'Sebuah metode untuk mengirim email',
                'option_c' => 'Sebuah teknik untuk memperbarui bagian dari halaman web tanpa harus memuat ulang seluruh halaman',
                'option_d' => 'Sebuah bahasa stylesheet untuk mengatur tampilan halaman web',
                'jawaban' => 3,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah bahasa stylesheet untuk mengatur tampilan halaman web". CSS (Cascading Style Sheets) digunakan untuk mengontrol tampilan dan format halaman web, seperti warna, font, layout, dan lainnya.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa yang dimaksud dengan responsive design dalam pengembangan web?',
                'option_a' => 'Sebuah metode untuk menguji kualitas halaman web',
                'option_b' => 'Sebuah metode untuk mempercepat loading halaman web',
                'option_c' => 'Sebuah metode untuk mengatur tampilan halaman web agar sesuai dengan perangkat pengguna',
                'option_d' => 'Sebuah metode untuk mengelola konten pada halaman web',
                'jawaban' => 2,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah metode untuk mengatur tampilan halaman web agar sesuai dengan perangkat pengguna". Responsive design memungkinkan halaman web menyesuaikan diri dengan baik pada berbagai perangkat, seperti desktop, tablet, dan ponsel, sehingga pengguna dapat memiliki pengalaman yang optimal.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu front-end development dalam pengembangan web?',
                'option_a' => 'Pengembangan bagian belakang halaman web',
                'option_b' => 'Pengembangan bagian depan halaman web yang berhubungan dengan tampilan dan interaksi',
                'option_c' => 'Pengembangan database untuk halaman web',
                'option_d' => 'Pengembangan keamanan dan proteksi halaman web',
                'jawaban' => 1,
                'pembahasan' => 'Jawaban yang benar adalah "Pengembangan bagian depan halaman web yang berhubungan dengan tampilan dan interaksi". Front-end development fokus pada pengembangan aspek visual dan interaktif halaman web yang dapat dilihat dan diakses oleh pengguna.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu back-end development dalam pengembangan web?',
                'option_a' => 'Pengembangan bagian belakang halaman web yang berhubungan dengan tampilan dan interaksi',
                'option_b' => 'Pengembangan database untuk halaman web',
                'option_c' => 'Pengembangan keamanan dan proteksi halaman web',
                'option_d' => 'Pengembangan bagian depan halaman web yang berhubungan dengan tampilan dan interaksi',
                'jawaban' => 2,
                'pembahasan' => 'Jawaban yang benar adalah "Pengembangan bagian belakang halaman web yang berhubungan dengan tampilan dan interaksi". Back-end development melibatkan pengembangan server-side dari sebuah aplikasi web, termasuk pemrosesan data, interaksi dengan database, dan logika bisnis.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu CMS (Content Management System) dalam konteks web?',
                'option_a' => 'Sebuah metode untuk mengatur tampilan halaman web secara real-time',
                'option_b' => 'Sebuah protokol keamanan untuk transfer data web',
                'option_c' => 'Sebuah bahasa pemrograman web',
                'option_d' => 'Sebuah sistem yang memungkinkan pengguna untuk membuat, mengedit, dan mengatur konten pada halaman web',
                'jawaban' => 3,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah sistem yang memungkinkan pengguna untuk membuat, mengedit, dan mengatur konten pada halaman web". CMS adalah platform yang digunakan untuk mengelola dan mengatur konten pada halaman web, seperti blog, artikel, dan halaman lainnya.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa yang dimaksud dengan SEO (Search Engine Optimization) dalam konteks web?',
                'option_a' => 'Sebuah metode untuk meningkatkan kecepatan loading halaman web',
                'option_b' => 'Sebuah metode untuk menguji kualitas halaman web',
                'option_c' => 'Sebuah metode untuk meningkatkan visibilitas dan peringkat halaman web pada hasil pencarian',
                'option_d' => 'Sebuah metode untuk mengatur tampilan halaman web agar sesuai dengan perangkat pengguna',
                'jawaban' => 2,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah metode untuk meningkatkan visibilitas dan peringkat halaman web pada hasil pencarian". SEO melibatkan serangkaian teknik dan strategi untuk meningkatkan peringkat halaman web pada hasil pencarian mesin telusur, sehingga lebih mudah ditemukan oleh pengguna potensial.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu UX (User Experience) dalam pengembangan web?',
                'option_a' => 'Pengembangan aspek visual dan interaktif halaman web',
                'option_b' => 'Pengembangan keamanan dan proteksi halaman web',
                'option_c' => 'Pengembangan bagian belakang halaman web yang berhubungan dengan tampilan dan interaksi',
                'option_d' => 'Pengembangan pengalaman pengguna yang optimal dalam berinteraksi dengan halaman web',
                'jawaban' => 3,
                'pembahasan' => 'Jawaban yang benar adalah "Pengembangan pengalaman pengguna yang optimal dalam berinteraksi dengan halaman web". UX melibatkan desain dan pengembangan halaman web yang mempertimbangkan kebutuhan dan preferensi pengguna untuk menciptakan pengalaman pengguna yang memuaskan dan efektif.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa yang dimaksud dengan hosting web?',
                'option_a' => 'Proses pengembangan halaman web',
                'option_b' => 'Layanan penyimpanan dan aksesibilitas halaman web di internet',
                'option_c' => 'Sebuah metode untuk memeriksa kesalahan dan bug pada halaman web',
                'option_d' => 'Sebuah teknik untuk meningkatkan kecepatan loading halaman web',
                'jawaban' => 1,
                'pembahasan' => 'Jawaban yang benar adalah "Layanan penyimpanan dan aksesibilitas halaman web di internet". Hosting web adalah layanan yang menyediakan ruang penyimpanan dan aksesibilitas untuk menyimpan halaman web sehingga dapat diakses melalui internet.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa yang dimaksud dengan domain name?',
                'option_a' => 'Sebuah metode untuk mengelola database',
                'option_b' => 'Sebuah alamat unik yang digunakan untuk mengakses halaman web',
                'option_c' => 'Sebuah bahasa pemrograman web',
                'option_d' => 'Sebuah teknik untuk memperbarui tampilan halaman web secara real-time',
                'jawaban' => 2,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah alamat unik yang digunakan untuk mengakses halaman web". Domain name adalah nama yang digunakan untuk mengidentifikasi alamat suatu halaman web di internet, seperti contoh.com atau namaorganisasi.org.'
                ]);
                
                Soal::create([
                'tantangan_id' => 2,
                'soal' => 'Apa itu framework dalam pengembangan web?',
                'option_a' => 'Sebuah metode untuk mengelola database',
                'option_b' => 'Sebuah protokol keamanan untuk transfer data web',
                'option_c' => 'Sebuah kerangka kerja atau struktur yang digunakan untuk membangun aplikasi web',
                'option_d' => 'Sebuah bahasa pemrograman web',
                'jawaban' => 3,
                'pembahasan' => 'Jawaban yang benar adalah "Sebuah kerangka kerja atau struktur yang digunakan untuk membangun aplikasi web". Framework adalah kerangka kerja atau struktur yang menyediakan fungsi dan komponen siap pakai untuk mempercepat pengembangan aplikasi web.'
                ]);

                // Tantangan 2.1
                Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan HTML?',
                    'option_a' => 'Hypertext Markup Language',
                    'option_b' => 'Hyperlink Text Markup Language',
                    'option_c' => 'High Tech Markup Language',
                    'option_d' => 'Home Tool Markup Language',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Hypertext Markup Language". HTML adalah bahasa markah yang digunakan untuk membangun halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa fungsi utama dari elemen <head> dalam dokumen HTML?',
                    'option_a' => 'Menampilkan konten utama halaman web',
                    'option_b' => 'Menghubungkan halaman web dengan CSS',
                    'option_c' => 'Mengatur tampilan dan layout halaman web',
                    'option_d' => 'Menampilkan judul halaman web',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Menampilkan judul halaman web". Elemen <head> dalam dokumen HTML digunakan untuk menyertakan informasi meta dan judul halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <div> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat hyperlink',
                    'option_b' => 'Sebuah elemen untuk mengatur tampilan dan layout halaman web',
                    'option_c' => 'Sebuah elemen untuk menampilkan gambar',
                    'option_d' => 'Sebuah elemen untuk membagi halaman web menjadi bagian-bagian',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membagi halaman web menjadi bagian-bagian". Elemen <div> digunakan untuk membuat kotak atau wadah yang dapat digunakan untuk mengelompokkan dan mengatur konten halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan atribut "src" pada elemen <img> dalam HTML?',
                    'option_a' => 'Menentukan URL sumber daya yang akan ditampilkan',
                    'option_b' => 'Menentukan jenis konten media',
                    'option_c' => 'Menentukan lebar gambar',
                    'option_d' => 'Menentukan teks alternatif jika gambar tidak dapat ditampilkan',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan URL sumber daya yang akan ditampilkan". Atribut "src" pada elemen <img> digunakan untuk menentukan URL atau lokasi dari gambar yang akan ditampilkan pada halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan atribut "href" pada elemen <a> dalam HTML?',
                    'option_a' => 'Menentukan URL halaman tujuan',
                    'option_b' => 'Menentukan judul tautan',
                    'option_c' => 'Menentukan tipe media',
                    'option_d' => 'Menentukan teks alternatif jika tautan tidak dapat diakses',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan URL halaman tujuan". Atribut "href" pada elemen <a> digunakan untuk menentukan URL atau alamat halaman tujuan yang akan dibuka ketika tautan di klik.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan atribut "class" pada elemen HTML?',
                    'option_a' => 'Menentukan URL sumber daya yang akan ditampilkan',
                    'option_b' => 'Menentukan tautan internal pada halaman web',
                    'option_c' => 'Menentukan nama kelas atau klasifikasi elemen',
                    'option_d' => 'Menentukan teks alternatif jika elemen tidak dapat ditampilkan',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan nama kelas atau klasifikasi elemen". Atribut "class" pada elemen HTML digunakan untuk memberikan nama kelas atau klasifikasi tertentu kepada elemen, sehingga dapat diidentifikasi dan diubah dengan menggunakan CSS atau JavaScript.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan atribut "id" pada elemen HTML?',
                    'option_a' => 'Menentukan URL halaman tujuan',
                    'option_b' => 'Menentukan tautan internal pada halaman web',
                    'option_c' => 'Menentukan nama unik untuk elemen',
                    'option_d' => 'Menentukan lebar gambar',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan nama unik untuk elemen". Atribut "id" pada elemen HTML digunakan untuk memberikan nama unik kepada elemen, sehingga elemen tersebut dapat diidentifikasi dan dimanipulasi dengan menggunakan CSS atau JavaScript.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <table> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk membuat daftar',
                    'option_c' => 'Sebuah elemen untuk membuat tabel',
                    'option_d' => 'Sebuah elemen untuk menampilkan video',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membuat tabel". Elemen <table> digunakan untuk membuat tabel dalam HTML, dengan baris dan kolom untuk menyusun data tabular.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <form> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk mengelompokkan elemen-elemen lain',
                    'option_c' => 'Sebuah elemen untuk membuat daftar',
                    'option_d' => 'Sebuah elemen untuk membuat formulir input',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membuat formulir input". Elemen <form> digunakan untuk membuat formulir yang memungkinkan pengguna untuk menginput dan mengirim data ke server.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <input> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk mengelompokkan elemen-elemen lain',
                    'option_c' => 'Sebuah elemen untuk membuat daftar',
                    'option_d' => 'Sebuah elemen untuk menerima input dari pengguna',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk menerima input dari pengguna". Elemen <input> digunakan untuk membuat area input yang dapat menerima input teks, angka, checkbox, dan sebagainya dari pengguna.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <select> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk mengelompokkan elemen-elemen lain',
                    'option_c' => 'Sebuah elemen untuk membuat daftar',
                    'option_d' => 'Sebuah elemen untuk menampilkan gambar',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membuat daftar". Elemen <select> digunakan untuk membuat dropdown atau daftar pilihan, di mana pengguna dapat memilih salah satu atau beberapa opsi yang tersedia.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <button> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk mengelompokkan elemen-elemen lain',
                    'option_c' => 'Sebuah elemen untuk membuat daftar',
                    'option_d' => 'Sebuah elemen untuk membuat tombol',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membuat tombol". Elemen <button> digunakan untuk membuat tombol yang dapat diklik oleh pengguna, seperti tombol submit atau tombol aksi lainnya.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 3,
                    'soal' => 'Apa yang dimaksud dengan elemen <p> dalam HTML?',
                    'option_a' => 'Sebuah elemen untuk membuat paragraf',
                    'option_b' => 'Sebuah elemen untuk mengelompokkan elemen-elemen lain',
                    'option_c' => 'Sebuah elemen untuk membuat daftar',
                    'option_d' => 'Sebuah elemen untuk menampilkan gambar',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Sebuah elemen untuk membuat paragraf". Elemen <p> digunakan untuk membuat paragraf atau blok teks dalam HTML.'
                    ]);

                // Tantangan 2.2
                Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan CSS?',
                    'option_a' => 'Cascading Style Sheets',
                    'option_b' => 'Cascading Script Sheets',
                    'option_c' => 'Cascading Styling Sheets',
                    'option_d' => 'Cascading Sheet Styles',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Cascading Style Sheets". CSS adalah bahasa yang digunakan untuk mengatur tampilan dan gaya halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa fungsi utama dari CSS?',
                    'option_a' => 'Mengatur struktur dan konten halaman web',
                    'option_b' => 'Menghubungkan halaman web dengan JavaScript',
                    'option_c' => 'Mengatur tampilan dan gaya halaman web',
                    'option_d' => 'Menghubungkan halaman web dengan database',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Mengatur tampilan dan gaya halaman web". CSS digunakan untuk mengontrol tampilan, layout, dan gaya elemen-elemen dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan selektor dalam CSS?',
                    'option_a' => 'Elemen yang digunakan untuk memilih warna',
                    'option_b' => 'Instruksi yang digunakan untuk memilih elemen dalam JavaScript',
                    'option_c' => 'Pernyataan yang digunakan untuk memilih elemen dalam SQL',
                    'option_d' => 'Pattern yang digunakan untuk memilih elemen dalam CSS',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Pattern yang digunakan untuk memilih elemen dalam CSS". Selektor dalam CSS digunakan untuk memilih elemen atau grup elemen yang akan diberikan gaya atau modifikasi tertentu.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan ID selector dalam CSS?',
                    'option_a' => 'Selektor yang digunakan untuk memilih elemen berdasarkan nama kelas',
                    'option_b' => 'Selektor yang digunakan untuk memilih elemen berdasarkan atribut',
                    'option_c' => 'Selektor yang digunakan untuk memilih elemen berdasarkan tipe',
                    'option_d' => 'Selektor yang digunakan untuk memilih elemen berdasarkan ID unik',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Selektor yang digunakan untuk memilih elemen berdasarkan ID unik". ID selector dalam CSS digunakan untuk memilih elemen berdasarkan ID unik yang diberikan pada elemen tersebut.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan class selector dalam CSS?',
                    'option_a' => 'Selektor yang digunakan untuk memilih elemen berdasarkan nama kelas',
                    'option_b' => 'Selektor yang digunakan untuk memilih elemen berdasarkan atribut',
                    'option_c' => 'Selektor yang digunakan untuk memilih elemen berdasarkan tipe',
                    'option_d' => 'Selektor yang digunakan untuk memilih elemen berdasarkan ID unik',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Selektor yang digunakan untuk memilih elemen berdasarkan nama kelas". Class selector dalam CSS digunakan untuk memilih elemen berdasarkan nama kelas yang diberikan pada elemen tersebut.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan universal selector () dalam CSS?',
                    'option_a' => 'Selektor yang digunakan untuk memilih semua elemen',
                    'option_b' => 'Selektor yang digunakan untuk memilih elemen berdasarkan atribut',
                    'option_c' => 'Selektor yang digunakan untuk memilih elemen berdasarkan tipe',
                    'option_d' => 'Selektor yang digunakan untuk memilih elemen berdasarkan ID unik',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Selektor yang digunakan untuk memilih semua elemen". Universal selector () dalam CSS digunakan untuk memilih semua elemen dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan pseudo-class dalam CSS?',
                    'option_a' => 'Selektor yang digunakan untuk memilih elemen berdasarkan nama kelas',
                    'option_b' => 'Selektor yang digunakan untuk memilih elemen berdasarkan status',
                    'option_c' => 'Selektor yang digunakan untuk memilih elemen berdasarkan tipe',
                    'option_d' => 'Selektor yang digunakan untuk memilih elemen berdasarkan ID unik',
                    'jawaban' => 1,
                    'pembahasan' => 'Jawaban yang benar adalah "Selektor yang digunakan untuk memilih elemen berdasarkan status". Pseudo-class dalam CSS digunakan untuk memilih elemen berdasarkan status atau kondisi tertentu, seperti hover, active, dan focus.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan inline style dalam CSS?',
                    'option_a' => 'Cara menulis CSS dalam file eksternal',
                    'option_b' => 'Cara menulis CSS dalam tag <style> di dalam elemen',
                    'option_c' => 'Cara menulis CSS menggunakan ID selector',
                    'option_d' => 'Cara menulis CSS menggunakan class selector',
                    'jawaban' => 1,
                    'pembahasan' => 'Jawaban yang benar adalah "Cara menulis CSS dalam tag <style> di dalam elemen". Inline style dalam CSS adalah cara untuk menulis CSS langsung di dalam tag elemen menggunakan atribut style.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan external style sheet dalam CSS?',
                    'option_a' => 'Cara menulis CSS dalam file eksternal',
                    'option_b' => 'Cara menulis CSS dalam tag <style> di dalam elemen',
                    'option_c' => 'Cara menulis CSS menggunakan ID selector',
                    'option_d' => 'Cara menulis CSS menggunakan class selector',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Cara menulis CSS dalam file eksternal". External style sheet dalam CSS adalah cara untuk menulis CSS dalam file terpisah yang kemudian dihubungkan ke halaman web menggunakan tag <link>.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 4,
                    'soal' => 'Apa yang dimaksud dengan box model dalam CSS?',
                    'option_a' => 'Model tata letak untuk mengatur elemen dalam halaman web',
                    'option_b' => 'Model untuk mengatur tampilan teks dan font dalam halaman web',
                    'option_c' => 'Model untuk mengatur gambar dan media dalam halaman web',
                    'option_d' => 'Model untuk mengatur interaksi pengguna dalam halaman web',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Model tata letak untuk mengatur elemen dalam halaman web". Box model dalam CSS adalah model yang digunakan untuk mengatur dimensi, margin, padding, dan border dari sebuah elemen dalam halaman web.'
                    ]);

                // Tantangan 3.1
                Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan multimedia?',
                    'option_a' => 'Penggunaan beberapa media dalam satu halaman web',
                    'option_b' => 'Penggunaan teks dan gambar dalam satu halaman web',
                    'option_c' => 'Penggunaan audio dan video dalam satu halaman web',
                    'option_d' => 'Penggunaan animasi dan efek visual dalam satu halaman web',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Penggunaan beberapa media dalam satu halaman web". Multimedia mengacu pada penggunaan kombinasi media seperti teks, gambar, audio, video, animasi, dan efek visual dalam satu halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <img> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk memainkan video',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk menampilkan gambar". Elemen <img> dalam HTML digunakan untuk menampilkan gambar dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan atribut src dalam elemen <img>?',
                    'option_a' => 'Menentukan ukuran gambar',
                    'option_b' => 'Menentukan tautan gambar',
                    'option_c' => 'Menentukan deskripsi gambar',
                    'option_d' => 'Menentukan sumber gambar',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan sumber gambar". Atribut src dalam elemen <img> digunakan untuk menentukan URL atau lokasi sumber gambar yang akan ditampilkan.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan atribut alt dalam elemen <img>?',
                    'option_a' => 'Menentukan ukuran gambar',
                    'option_b' => 'Menentukan tautan gambar',
                    'option_c' => 'Menentukan deskripsi gambar',
                    'option_d' => 'Menentukan sumber gambar',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan deskripsi gambar". Atribut alt dalam elemen <img> digunakan untuk memberikan deskripsi alternatif tentang gambar. Ini berguna ketika gambar tidak dapat ditampilkan atau untuk aksesibilitas pengguna dengan keterbatasan visual.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <video> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk memainkan video',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk memainkan video". Elemen <video> dalam HTML digunakan untuk memasukkan dan memainkan video dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan atribut controls dalam elemen <video>?',
                    'option_a' => 'Menentukan ukuran video',
                    'option_b' => 'Menentukan tautan video',
                    'option_c' => 'Menentukan deskripsi video',
                    'option_d' => 'Menampilkan kontrol pemutaran video',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Menampilkan kontrol pemutaran video". Atribut controls dalam elemen <video> digunakan untuk menampilkan kontrol pemutaran video seperti tombol play, pause, dan volume.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <audio> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk memainkan video',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk memainkan audio". Elemen <audio> dalam HTML digunakan untuk memasukkan dan memainkan audio dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan atribut autoplay dalam elemen <audio>?',
                    'option_a' => 'Memutar audio secara otomatis',
                    'option_b' => 'Menghentikan audio',
                    'option_c' => 'Mengatur volume audio',
                    'option_d' => 'Memilih file audio',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Memutar audio secara otomatis". Atribut autoplay dalam elemen <audio> digunakan untuk memulai pemutaran audio secara otomatis ketika halaman web dimuat.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <source> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk memasukkan sumber media',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk memasukkan sumber media". Elemen <source> dalam HTML digunakan untuk menentukan sumber media seperti video atau audio yang akan digunakan dalam elemen <video> atau <audio>.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <embed> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk memasukkan konten media eksternal',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk memasukkan konten media eksternal". Elemen <embed> dalam HTML digunakan untuk memasukkan dan menampilkan konten media eksternal seperti video atau audio dalam halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan elemen <iframe> dalam HTML?',
                    'option_a' => 'Elemen untuk menampilkan gambar',
                    'option_b' => 'Elemen untuk menampilkan teks',
                    'option_c' => 'Elemen untuk memainkan audio',
                    'option_d' => 'Elemen untuk menyisipkan halaman web lain',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen untuk menyisipkan halaman web lain". Elemen <iframe> dalam HTML digunakan untuk menyisipkan halaman web lain dalam halaman web utama.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 5,
                    'soal' => 'Apa yang dimaksud dengan atribut width dalam elemen <video> dan <audio>?',
                    'option_a' => 'Menentukan lebar video atau audio',
                    'option_b' => 'Menentukan tinggi video atau audio',
                    'option_c' => 'Menentukan sumber video atau audio',
                    'option_d' => 'Menampilkan kontrol pemutaran video atau audio',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Menentukan lebar video atau audio". Atribut width dalam elemen <video> dan <audio> digunakan untuk menentukan lebar tampilan video atau audio dalam halaman web.'
                    ]);

                // Tantangan 3.2
                Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan CSS?',
                    'option_a' => 'Cascading Style Sheets',
                    'option_b' => 'Cascading Sheet Styles',
                    'option_c' => 'Cascading Styling Sheets',
                    'option_d' => 'Cascading Style System',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Cascading Style Sheets". CSS adalah bahasa yang digunakan untuk mengatur tampilan dan gaya suatu halaman web.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan selector dalam CSS?',
                    'option_a' => 'Properti yang digunakan untuk mengatur tampilan elemen',
                    'option_b' => 'Nilai yang digunakan untuk mengatur tampilan elemen',
                    'option_c' => 'Elemen yang dipilih untuk diberi gaya',
                    'option_d' => 'Metode untuk menghubungkan CSS dengan HTML',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Elemen yang dipilih untuk diberi gaya". Selector dalam CSS digunakan untuk memilih elemen HTML tertentu yang akan diberi gaya.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan properti dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen',
                    'option_b' => 'Nilai yang digunakan untuk mengatur tampilan elemen',
                    'option_c' => 'Elemen yang dipilih untuk diberi gaya',
                    'option_d' => 'Metode untuk menghubungkan CSS dengan HTML',
                    'jawaban' => 1,
                    'pembahasan' => 'Jawaban yang benar adalah "Nilai yang digunakan untuk mengatur tampilan elemen". Properti dalam CSS digunakan untuk mengatur tampilan elemen HTML seperti warna, ukuran, jarak, dan sebagainya.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan nilai dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen',
                    'option_b' => 'Properti yang digunakan untuk mengatur tampilan elemen',
                    'option_c' => 'Elemen yang dipilih untuk diberi gaya',
                    'option_d' => 'Nilai yang digunakan untuk mengatur tampilan elemen',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Nilai yang digunakan untuk mengatur tampilan elemen". Nilai dalam CSS digunakan untuk memberikan nilai spesifik kepada properti, seperti nilai warna, ukuran, dan sebagainya.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan id selector dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen berdasarkan class',
                    'option_b' => 'Selector yang digunakan untuk memilih elemen berdasarkan id',
                    'option_c' => 'Selector yang digunakan untuk memilih semua elemen',
                    'option_d' => 'Selector yang digunakan untuk memilih elemen berdasarkan nama tag',
                    'jawaban' => 1,
                    'pembahasan' => 'Jawaban yang benar adalah "Selector yang digunakan untuk memilih elemen berdasarkan id". Id selector dalam CSS digunakan untuk memilih elemen tertentu berdasarkan id unik yang diberikan pada elemen tersebut.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan class selector dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen berdasarkan class',
                    'option_b' => 'Selector yang digunakan untuk memilih elemen berdasarkan id',
                    'option_c' => 'Selector yang digunakan untuk memilih semua elemen',
                    'option_d' => 'Selector yang digunakan untuk memilih elemen berdasarkan nama tag',
                    'jawaban' => 0,
                    'pembahasan' => 'Jawaban yang benar adalah "Selector yang digunakan untuk memilih elemen berdasarkan class". Class selector dalam CSS digunakan untuk memilih elemen tertentu berdasarkan class yang diberikan pada elemen tersebut.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan tag selector dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen berdasarkan class',
                    'option_b' => 'Selector yang digunakan untuk memilih elemen berdasarkan id',
                    'option_c' => 'Selector yang digunakan untuk memilih semua elemen',
                    'option_d' => 'Selector yang digunakan untuk memilih elemen berdasarkan nama tag',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Selector yang digunakan untuk memilih elemen berdasarkan nama tag". Tag selector dalam CSS digunakan untuk memilih semua elemen dengan nama tag tertentu, seperti <h1>, <p>, <div>, dan sebagainya.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan pseudo-class dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen berdasarkan class',
                    'option_b' => 'Selector yang digunakan untuk memilih elemen berdasarkan id',
                    'option_c' => 'Selector yang digunakan untuk memilih elemen berdasarkan kondisi tertentu',
                    'option_d' => 'Selector yang digunakan untuk memilih semua elemen',
                    'jawaban' => 2,
                    'pembahasan' => 'Jawaban yang benar adalah "Selector yang digunakan untuk memilih elemen berdasarkan kondisi tertentu". Pseudo-class dalam CSS digunakan untuk memilih elemen berdasarkan kondisi tertentu, seperti hover, active, atau first-child.'
                    ]);
                    
                    Soal::create([
                    'tantangan_id' => 6,
                    'soal' => 'Apa yang dimaksud dengan pseudo-element dalam CSS?',
                    'option_a' => 'Selector yang digunakan untuk memilih elemen berdasarkan class',
                    'option_b' => 'Selector yang digunakan untuk memilih elemen berdasarkan id',
                    'option_c' => 'Selector yang digunakan untuk memilih elemen berdasarkan kondisi tertentu',
                    'option_d' => 'Selector yang digunakan untuk memilih bagian spesifik dari elemen',
                    'jawaban' => 3,
                    'pembahasan' => 'Jawaban yang benar adalah "Selector yang digunakan untuk memilih bagian spesifik dari elemen". Pseudo-element dalam CSS digunakan untuk memilih dan memberi gaya pada bagian spesifik dari elemen, seperti ::before dan ::after.'
                    ]);    
    }
}
