<?php

namespace Database\Seeders;

use App\Models\Materi;
use App\Models\Siswa;
use App\Models\Soal;
use App\Models\Tantangan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    public function run() {
        Materi::create([
            'level' => 1,
            'nama' => "Konsep Teknologi Web",
            'image' => "materi1.png",
            'image_tantangan' => "train1.png",
            'konten'=> "materi1.pdf"
        ]);

        Materi::create([
            'level' => 2,
            'nama' => "HTML",
            'image' => "materi2.png",
            'image_tantangan' => "train2.png",
            'konten'=> "materi2.pdf"
        ]);

        Materi::create([
            'level' => 3,
            'nama' => "Tampilan Format Multimedia",
            'image' => "materi3.png",
            'image_tantangan' => "train3.png",
            'konten'=> "materi3.pdf"
        ]);

        Materi::create([
            'level' => 4,
            'nama' => "Format Tabel Pada Halaman Web",
            'image' => "materi4.png",
            'image_tantangan' => "train4.png",
            'konten'=> "materi4.pdf"
        ]);

    

        Materi::create([
            'level' => 5,
            'nama' => "Membuat Form atau Formulir",
            'image' => "materi5.png",
            'image_tantangan' => "train1.png",
            'konten'=> "materi5.pdf"
        ]);

        Materi::create([
            'level' => 6,
            'nama' => "CSS",
            'image' => "materi6.png",
            'image_tantangan' => "train2.png",
            'konten'=> "materi6.pdf"
        ]);

        Materi::create([
            'level' => 7,
            'nama' => "Javascript",
            'image' => "materi7.png",
            'image_tantangan' => "train3.png",
            'konten'=> "materi7.pdf"
        ]);

        Materi::create([
            'level' => 8,
            'nama' => "Dasar Pemrograman Web Client",
            'image' => "materi8.png",
            'image_tantangan' => "train4.png",
            'konten'=> "materi8.pdf"
        ]);

        Materi::create([
            'level' => 9,
            'nama' => "Looping",
            'image' => "materi9.png",
            'image_tantangan' => "train1.png",
            'konten'=> "materi9.pdf"
        ]);

        Materi::create([
            'level' => 10,
            'nama' => "Mengenal OOP",
            'image' => "materi10.png",
            'image_tantangan' => "train2.png",
            'konten'=> "materi10.pdf"
        ]);

        Materi::create([
            'level' => 11,
            'nama' => "Mengenal PHP",
            'image' => "materi11.png",
            'image_tantangan' => "train3.png",
            'konten'=> "materi11.pdf"
        ]);

        Materi::create([
            'level' => 12,
            'nama' => "Mengenal Pernyataan Kontrol",
            'image' => "materi12.png",
            'image_tantangan' => "train4.png",
            'konten'=> "materi12.pdf"
        ]);

        Materi::create([
            'level' => 13,
            'nama' => "Membuat Form Login dengan PHP dan Mysql",
            'image' => "materi13.png",
            'image_tantangan' => "train1.png",
            'konten'=> "materi13.pdf"
        ]);

        Materi::create([
            'level' => 14,
            'nama' => "Get dan Post",
            'image' => "materi14.png",
            'image_tantangan' => "train2.png",
            'konten'=> "materi14.pdf"
        ]);
        // end of materi

        Tantangan::create([
            'materi_id' => 1,
            'level'=> 1,
            'nama' => "Tantangan Konsep Teknologi Web Bagian I"
        ]);

        Tantangan::create([
            'materi_id' => 1,
            'level'=> 2,
            'nama' => "Tantangan Konsep Teknologi Web Bagian II"
        ]);

        Tantangan::create([
            'materi_id' => 2,
            'level'=> 1,
            'nama' => "Tantangan HTML Bagian I"
        ]);

        Tantangan::create([
            'materi_id' => 2,
            'level'=> 2,
            'nama' => "Tantangan HTML Bagian II"
        ]);

        Tantangan::create([
            'materi_id' => 3,
            'level'=> 1,
            'nama' => "Tantangan Tampilan Format Multimedia Bagian I"
        ]);

        Tantangan::create([
            'materi_id' => 3,
            'level'=> 2,
            'nama' => "Tantangan Tampilan Format Multimedia Bagian II"
        ]);

        Siswa::create([
            'nama_lengkap' => "Dicky Pratama",
            "nisn" => "12345678910",
            "alamat" => "Jl. Danau, Kel. Dusun Besar, Kec. Singaran Pati, Kota Bengkulu",
            "ttl" => "Bengkulu, 20 April 2020",
            "no_hp" => "0895412791504",
            "password" => bcrypt("12345678"),
            "motto" => "Ganbatte kudasai",
            "exp" => 20,
            "level_materi" => 1,
            "level_tantangan" => 1 
        ]);

        Soal::generateSoal();
    }
}
