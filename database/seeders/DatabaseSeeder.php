<?php

namespace Database\Seeders;

use App\Models\Materi;
use App\Models\Soal;
use App\Models\Tantangan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Materi::create([
            'nama' => "Class dan Objek",
            'image' => "class-dan-objek.png",
            'image_tantangan' => "class-dan-objek-t.png",
            'konten'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, blanditiis ab? Modi, eligendi pariatur illo voluptate quasi voluptatibus reiciendis velit sed assumenda consectetur cum quaerat iusto eveniet aliquid repudiandae impedit qui deserunt unde veritatis, doloribus delectus? Explicabo fugiat molestias laborum eveniet, ea aliquid voluptas in accusantium dolor ipsa. Sed adipisci eum sit accusamus tempore delectus saepe necessitatibus sint voluptatem corporis, vel tempora enim temporibus? Autem doloribus similique laborum repudiandae ad doloremque praesentium accusamus nobis necessitatibus quas repellat iusto voluptate voluptatem esse, tempora ipsum dolor fuga aliquam? Reprehenderit officiis fugiat ab obcaecati beatae itaque tempore, quasi facilis dolorum nostrum sint ratione."
        ]);

        Materi::create([
            'nama' => "Encapsulation",
            'image' => "encapsulation.png",
            'image_tantangan' => "class-dan-objek-t.png",
            'konten'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, blanditiis ab? Modi, eligendi pariatur illo voluptate quasi voluptatibus reiciendis velit sed assumenda consectetur cum quaerat iusto eveniet aliquid repudiandae impedit qui deserunt unde veritatis, doloribus delectus? Explicabo fugiat molestias laborum eveniet, ea aliquid voluptas in accusantium dolor ipsa. Sed adipisci eum sit accusamus tempore delectus saepe necessitatibus sint voluptatem corporis, vel tempora enim temporibus? Autem doloribus similique laborum repudiandae ad doloremque praesentium accusamus nobis necessitatibus quas repellat iusto voluptate voluptatem esse, tempora ipsum dolor fuga aliquam? Reprehenderit officiis fugiat ab obcaecati beatae itaque tempore, quasi facilis dolorum nostrum sint ratione."
        ]);

        Tantangan::create([
            'materi_id' => 1,
            'nama' => "Tantangan Class dan Objek Bagian I"
        ]);

        Tantangan::create([
            'materi_id' => 1,
            'nama' => "Tantangan Class dan Objek Bagian II"
        ]);

        Soal::create([
            'tantangan_id' => 1,
            'soal' => 'Class memungkinkan pemrogram untuk membuat banyak objek. Apakah pernyataan tersebut benar?',
            'option_a' => "Salah",
            'option_b' => "Benar",
            'option_c' => "Keduanya benar",
            'option_d' => "Semuanya benar",
            'jawaban' => 1,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);
    }
}
