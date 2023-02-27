<?php

namespace Database\Seeders;

use App\Models\Materi;
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
    }
}
