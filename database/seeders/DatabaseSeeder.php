<?php

namespace Database\Seeders;

use App\Models\Materi;
use App\Models\Soal;
use App\Models\Tantangan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Materi::create([
            'level' => 1,
            'nama' => "Dasar dan Aturan",
            'image' => "dasar.png",
            'image_tantangan' => "train1.png",
            'konten'=> "
            <h3>Package</h3>
            Perintah java yang digunakan untuk memberitahukan bahwa suatu class adalah anggota dari package, sedangkan nama Package dapat berupa susunan direktori tempat dimana file class disimpan atau nama folder.

            <h3>Import</h3>
            Perintah import digunakan untuk memberitahukan kepada program untuk mengacu pada class-class yang terdapat pada package tersebut dan bukan menjalankan class-class tersebut. Dalam program, dapat diimport class-class tertentu saja dan dapat pula mengimport semua class yang terdapat pada package.

            <h3>Class</h3>
            Merupakan bentuk logis yang menjadi landasan bangun seluruh bahasa pemograman berorientasi object. Class mendefinisikan bentuk dan perilaku object. Class merupakan contoh abstrak dari sebuah object yang telah terbentuk dari proses penyederhanaan. Dengan kata lain class merupakan cikal bakal dari object. Kemudian contoh nyata atau perwujudan dari sebuah object dinamakan instance

<pre style=\"background-color:#f8f8f8; font-size: 12px;\"><br>
class MyClass{<br/>
    public static void main(){<br/>
        System.out.println(\"Hello World\");<br/>
    }<br/>
}
</pre>

            <h3>Data dan Method</h3>
            Data merupakan identitas yang berupa variabel yang menjelaskan properti dari class. Metoda adalah sekumpulan instruksi untuk menjalankan data yang diberi nama dan dapat dipanggil dari manapun di dalam program dengan menuliskan nama metoda tersebut.<br>

            <h2>Perbedaan Syntax Error dan Runtime Error</h2>
                <h3>Syntax Error</h3>
                Kesalahan penulisan dapat menyebabkan Syntax Error di Java, yang biasanya terjadi jika terdapat kesalahan dalam penulisan kode seperti kurangnya sebuah perintah atau lupa menulis tanda titik koma pada akhir pernyataan. Kesalahan penulisan juga bisa terjadi dalam kapitalisasi, ejaan, penggunaan karakter khusus yang tidak benar, dan penghilangan tanda baca yang sebenarnya.
                
                <h3>Runtime Error</h3>
                Sebuah program yang berhasil dikompile belum tentu berhasil dijalankan. Inilah yang dinamakan Run time error, kesalahan ini tidak akan ditampilkan sampai kita menjalankan program tersebut. Hal ini bisa saja terjadi misalnya dikarenakan struktur yang dibuat programmer tidak jelas atau mungkin tidak logis.

            <h2>Tipe Data Primitif</h2>
            Bahasa pemrograman Java mendefinisikan delapan tipe data primitif. Mereka diantaranya adalah boolean (untuk bentuk logika), char (untuk bentuk tekstual), byte, short, int, long (integral), double and float (floating point).

                <h3>Logika - Boolean</h3>
                Tipe data boolean diwakili oleh dua pernyataan : true dan false. Sebagai contoh adalah, boolean result = true; Contoh yang ditunjukkan diatas, mendeklarasikan variabel yang dinamai result sebagai tipe data boolean dan memberinya nilai true.

                <h3>Tekstual - Char</h3>
                Tipe data character (char), diwakili oleh karakter single Unicode. Tipe data ini harus memiliki ciri berada dalam tanda single quotes(’ ’).

                <h3>Integral - byte, short, int & long</h3>
                Tipe-tipe integral memiliki default tipe data yaitu int. Anda dapat merubahnya ke bentuk long dengan menambahkan huruf l atau L

                <h3>Floating Point - float dan Double</h3>
                Tipe Floating point memiliki double sebagai default tipe datanya. Floatingpoint literal termasuk salah satunya decimal point 

                <h2>Variabel</h2>
                Variabel adalah item yang digunakan data untuk menyimpan pernyataan objek. Variabel memiliki tipe data dan nama. Tipe data menandakan tipe nilai yang dapat dibentuk oleh variabel itu sendiri. Nama variabel harus mengikuti aturan untuk identifier.
            
            <h2>Operator</h2>
            Dalam Java, ada beberapa tipe operator. Ada operator aritmatika, operator relasi, operator logika, dan operator kondisi. Operator ini mengikuti bermacam-macam prioritas yang pasti sehingga compilernya akan tahu yang mana operatoruntuk dijalankan lebih dulu dalam kasus beberapa operator yang dipakai bersama-sama dalam satu pernyataan.

            <h3>Operator Aritmatika</h3>
            Operator aritmatika digunakan untuk melakukan operasi matematika seperti penjumlahan, pengurangan, perkalian, pembagian, dan modulus. Berikut adalah contoh operator aritmatika di Java:
            <ul>
                <li>+	    Penjumlahan</li>
                <li>-	    Pengurangan</li>
                <li>*	    Perkalian</li>
                <li>/	    Pembagian</li>
                <li>%	    Modulus</li>
            </ul>

            <h3>Variabel Increment dan Decrement</h3>
            Dari sisi operator dasar aritmatika, Java juga terdiri atas operator unary increment (++) dan operator unary decrement (--).Operator increment dan decrement menambah dan mengurangi nilai yang tersimpan dalam bentuk variabel angka terhadap nilai 1

            <h3>Operator Relasi</h3>
            Operator Relasi membandingkan dua nilai dan menentukan keterhubungan diantara nilai- nilai tersebut. Hasil keluarannya berupa nilai boolean yaitu true atau false.

            <h3>Operator Logika</h3>
            Operator logika memiliki satu atau lebih operand Boolean yang menghasilkan nilai boolean. Terdapat enam operator logika yaitu : && (logika AND), & (Boolean logika AND), || (logika OR), | (Boolean logika inclusive OR), ^ (Boolean logika exclusive OR), dan ! (logika NOT)

            <h2>Kondisi</h2>
            Struktur kontrol atau perkondisian adalah pernyataan dari Java yang mengijinkan user untuk memilih dan mengeksekusi blok kode spesifik dan mengabaikan blok kode yang lain

                <h3>Statement If</h3>
                Pernyataan if akan menentukan sebuah pernyataan (atau blok kode) yang akan eksekusi jika dan hanya jika persyaratan bernilai benar (true). 

                <h3>Statement If-else</h3>
                Pernyataan if-else digunakan apabila kita ingin mengeksekusi beberapa pernyataan dengan kondisi true dan pernyataan yang lain dengan kondisi false.

                <h3>Statement If-else-if</h3>
                Pernyataan pada bagian kondisi else dari blok if-else dapat menjadi struktur ifelse yang lain. Kondisi struktur seperti ini mengijinkan kita untuk membuat seleksi persyaratan yang lebih kompleks.

                <h3>Statement Switch</h3>
                Cara lain untuk membuat cabang adalah dengan menggunakan kata kunci switch.Switch mengkonstruksikan cabang untuk beberapa kondisi dari nilai.

            <h2>Perulangan</h2>
            Struktur kontrol pengulangan adalah berupa pernyataan dari Java yang mengijinkan kita untuk mengeksekusi blok code berulang-ulang sesuai dengan jumlah tertentu yang diinginkan. Ada tiga macam jenis dari struktur kontrol pengulangan yaitu while, do- while, dan for-loops.

            <h3>While loop</h3>
            Pernyataan whileloop adalah pernyataan atau blok pernyataan yang diulang-ulang sampai mencapai kondisi yang cocok. Bentuk pernyataan while, while(boolean_expression){ statement1; statement2;}

            <h3>Do While loop</h3>
            Do-while loop mirip dengan while-loop. Pernyataan di dalam do-whileloop akan dieksekusi beberapa kali selama kondisi bernilai benar (true). Perbedaan antara while dan do-whileloop adalah dimana pernyataan di dalam do-while loop akan dieksekusi sedikitnya satu kali.

            <h3>For loop</h3>
            Pernyataan forloop memiliki kondisi hampir mirip seperti struktur pengulangan sebelumnya yaitu melakukan pengulangan untuk mengeksekusi kode yang sama sebanyak jumlah yang telah ditentukan.
            "
        ]);
        // end of materi dasar

        Materi::create([
            'level' => 2,
            'nama' => "Class dan Objek",
            'image' => "class-dan-objek.png",
            'image_tantangan' => "train2.png",
            'konten'=> "
            <h3>Class</h3>
            Dalam pemrograman berorientasi objek, class adalah sebuah blueprint atau cetak biru yang mendefinisikan properti, metode, dan perilaku sebuah objek. Class adalah konstruksi dasar dalam pemrograman berorientasi objek yang memungkinkan untuk membuat objek baru yang memiliki sifat dan perilaku yang sama dengan objek yang dibuat sebelumnya dari class yang sama.

            <h3>Objek</h3>
            Dalam pemrograman berorientasi objek (PBO), objek adalah suatu instance atau contoh dari sebuah class. Dalam konsep PBO, sebuah objek terdiri dari properti dan metode yang didefinisikan dalam class-nya. Properti dapat berupa variabel yang menyimpan data atau informasi tentang objek, sedangkan metode adalah fungsi atau prosedur yang dapat memanipulasi properti objek atau melakukan operasi tertentu pada objek.

            <h2>Method</h2>
            Dalam Pemrograman Berorientasi Objek (PBO), method (metode) adalah suatu fungsi atau prosedur yang didefinisikan di dalam sebuah class untuk melakukan suatu tindakan atau operasi tertentu pada objek dari class tersebut. Method didefinisikan untuk memanipulasi data atau properti yang dimiliki oleh sebuah objek atau melakukan operasi pada objek tersebut.

            <h3>Pass by Value Method</h3>
            Ketika pass-by-value terjadi, method membuat sebuah salinan dari nilai variable yang dikirimkan ke method. Walaupun demikian, method tidak dapat secara langsung memodifikasi nilai variabel pengirimnya meskipun parameter salinannya sudah dimodifikasi nilainya di dalam method.

            <h3>Pass by Reference Method</h3>
            Ketika sebuah pass-by-reference terjadi,alamat memori dari nilai pada sebuah variabel dilewatkan pada saat pemanggilan method. Hal ini berarti bahwa method menyalin alamat memori dari variabel yang dilewatkan pada method. Ini tidak seperti pada pass-byvalue, method dapat memodifikasi variabel asli dengan menggunakan alamat memori tersebut. Meskipun berbeda nama, variabel yang digunakan dalam method dengan variabel aslinya, kedua variabel ini menunjukkan lokasi dari data yang sama.

            <h3>Static Method</h3>
            Method Static adalah method yang dapat dipakai tanpa harus menginisialisasi suatu class (maksudnya tanpa menggunakan variabel terlebih dahulu). Method static hanya dimiliki oleh class dan tidak dapat digunakan oleh instance (atau object) dari suatu class. Method static dibedakan dari method yang dapat instance di dalam suatu class oleh kata kunci static.

            <h3>This dan Constructor</h3>
            Reference this digunakan untuk mengakses instance variable yang dibiaskan oleh parameter sedangkan constructor adalah method dimana seluruh inisialisasi object ditempatkan.
            "
        ]);

        Materi::create([
            'level' => 3,
            'nama' => "Encapsulation",
            'image' => "encapsulation.png",
            'image_tantangan' => "train3.png",
            'konten'=> "
            Enkapsulasi merupakan teknik yang membuat variabel/field class menjadi bersifat private dan menyediakan akses ke variabel/field melalui public method. Jika field di deklarasikan sebagai private, maka field ini tidak bisa diakses oleh siapapun diluar class, dengan demikian field disembunyikan di dalam class.

            Manfaat utama teknik enkapsulasi adalah kita mampu memodifikasi kode tanpa merusak kode yang telah digunakan pada class lain.

            <h2>Access Modifier</h2>
            Terdapat 4 macam access modifiers di JAVA, yaitu : public, private, protected dan default. 3 tipe akses pertama tertulis secara ekplisit pada kode untuk mengindikasikan tipe akses, sedangkan yang keempat yang merupakan tipe default, tidak diperlukan penulisan keyword atas tipe.

            <h3>Public</h3>
            Public dapat diakses didalam class itu sendiri, dapat diakses dengan menggunakan metode extend dan instan pada paket yang sama, serta dapat diakses dengan metode extend maupun instan dalam paket yang berbeda. Artinya hak akses public dapat diakses oleh sembarang object manapun dan dimanapun posisinya serta dengan apapun caranya

            <h3>Protected</h3>
            Suatu data maupun method yang dideklarasikan dengan tingkat akses protected dapat diakses oleh kelas yang memilkinya dan juga oleh kelas - kelas yang masih memiliki oleh hubungan turunan. Sebagai contoh, apabila data x dalam kelas A dideklarasikan sebagai protected, maka kelas B (yang merupakan turunan dari kelas A) diizinkan untuk mengakses data x. Namun apabila terdapat kelas lain, misalnya C (yang bukan merupakan turunan dari kelas A maupun B), tetap tidak dapat mengakses data - data yang dideklarasikan dengan tingkat akses protected. Untuk mendeklarasikan
            suatu data atau method dengan tingkat akses protected, gunakan kata kunci protected.

            <h3>Private</h3>
            Dengan mendeklarasikan data dan method menggunakan tingkat akses private, maka data dan method tersebut hanya dapat diakses oleh kelas yang memilikinya saja. Ini berarti data dan method tersebut tidak boleh diakses atau digunakan oleh kelas-kelas lain yang terdapat didalam program. Untuk mendeklarasikan suatu data atau method dengan tingkat akses private, gunakan kata kunci private
            "
        ]);

        Materi::create([
            'level' => 4,
            'nama' => "Inheritance",
            'image' => "inheritance.png",
            'image_tantangan' => "train4.png",
            'konten'=> "
            Konsep inheritance ini mengadopsi dunia riil dimana suatu entitas/obyek dapat mempunyai entitas/obyek turunan. Dengan konsep inheritance, sebuah class dapat mempunyai class turunan.Suatu class yang mempunyai class turunan dinamakan parent class atau base class. Sedangkan class turunan itu sendiri seringkali disebut subclass atau child class. Suatu subclass dapat mewarisi apa-apa yang dipunyai oleh parent class. Karena suatu subclass dapat mewarisi apa apa yang dipunyai oleh parent class-nya, maka member dari suatu subclass adalah terdiri dari apa-apa yang ia punyai dan juga apa-apa yang ia warisi dari class parent-nya. Kesimpulannya, boleh dikatakan bahwa suatu subclass adalah tidak lain hanya memperluas (extend) parent class-nya.

            <h3>Super</h3>
            Subclass juga dapat memanggil constructor secara eksplisit dari superclass terdekat. Hal ini dilakukan dengan pemanggil constructor super. Pemanggil constructor super dalam constructor dari subclass akan menghasilkan eksekusi dari superclass constructor yang bersangkutan, berdasar dari argument sebelumnya. Sebagai contoh, pada contoh class sebelumnya.
            
            <h3>Overloading Method</h3>
            Overloading adalah suatu keadaan dimana beberapa method sekaligus dapat mempunyai nama yang sama, akan tetapi mempunyai fungsionalitas yang berbeda. Overloading ini dapat terjadi pada class yang sama atau pada suatu parent class dan subclass-nya. Overloading mempunyai ciri-ciri sebagai berikut:
                - Nama method harus sama 
                - Daftar parameter harus berbeda 
                - Return type boleh sama, juga boleh berbeda
            
            <h3>Overriding Method</h3>
            Overriding adalah suatu keadaan dimana method pada subclass menolak method pada parent class-nya. Overriding mempunyai ciri-ciri sebagai berikut:
                - Nama parameter harus sama
                - Daftar parameter harus sama
                - Return type harus sama
            Untuk beberapa pertimbangan, terkadang class asal perlu mempunyai implementasi berbeda dari method yang khusus dari superclass tersebut. Oleh karena itulah, method overriding digunakan. Subclass dapat mengesampingkan method yang didefinisikan dalam superclass dengan menyediakan implementasi baru dari method tersebut
            
            <h3>Final dan Class Final</h3>
            Dalam Java, juga memungkinkan untuk mendeklarasikan class-class yang tidak lama menjadi subclass. Class ini dinamakan class final. Untuk mendeklarasikan class untuk menjadi final kita hanya menambahkan kata kunci final dalam deklarasi class.

            Beberapa class dalam Java API dideklarasikan secara final untuk memastikan sifatnya tidak dapat di-override. Contoh-contoh dari class ini adalah Integer , Double , dan String. Ini memungkinkan dalam Java membuat method yang tidak dapat di-override. Method ini dapat kita panggil method final. Untuk mendeklarasikan method untuk menjadi final,kita tambahkan kata kunci final kedalam deklarasi method.
            "
        ]);

        Materi::create([
            'level' => 5,
            'nama' => "Polimorfisme",
            'image' => "polimorfisme.png",
            'image_tantangan' => "train5.png",
            'konten'=> "
            Polimorfisme adalah kemampuan objek dalam bahasa pemrograman untuk memiliki banyak bentuk atau perilaku. Ini berarti bahwa suatu objek dapat mengambil banyak bentuk atau berperilaku berbeda-beda tergantung pada konteks yang diberikan. Dalam paradigma pemrograman berorientasi objek, polimorfisme terjadi ketika suatu objek dapat digunakan sebagai instance dari kelas yang berbeda-beda, dan dapat menunjukkan perilaku yang berbeda-beda tergantung pada kelas mana yang digunakan untuk mengaksesnya.

            <h3>Virtual Method Invocation (VMI)</h3>
            Virtual Method Invocation (VMI) bisa terjadi jika terjadi polimorfisme dan overriding. Pada saat obyek yang sudah di buat tersebut memanggil overridden method pada parent class, compiler Java akan melakukan invocation (pemanggilan) terhadap overriding method pada subclass , dimana yang seharusnya di panggil adalah overridden method.

            Virtual Method Invocation (VMI) terjadi karena objek yang sudah di buat memanggil overriden method pada parent class dan akan melakukan panggilan pada overriding method yang seharusnya adalah overriden. Polymorphic arguments adalah tipe suatu parameter yang menerima suatu nilai yang bertipe subclass-nya. Pernyataan instance of sangat berguna untuk mengetahui tipe asal dari suatu polymorphic arguments } Seringkali pemakaian instance of diikuti dengan casting object dari tipe parameter ke tipe asal.

            <h3>Casting Object dan Instance of</h3>
            Casting digunakan untuk mengubah variabel-varibel suatu tipe primitif menjadi tipe primitif lain dan digunakan pula untuk untuk mengubah objek dengan suatu tipe kelas menjadi objek dengan tipe kelas lain. Sintaks yang digunakan sama seperti yang digunakan untuk meng-casting tipe primitif, tipe objek target diapit oleh sepasang kurung dan ditempatkan sebelum objek yang akan dicast. Agar casting berhasil dilakukan, Anda perlu memastikan bahwa objek yang akan di-cast merupakan suatu instans subkelas. Jika objek superkelas bukan merupakan suatu instans subkelas, error ClassCastException akan terjadi. Casting bisa dilakukan hanya jika objek sumber merupakan suatu instans dari kelas target. Program menggunakan operator instanceof untuk memastikan bahwa obyek sumber merupakan suatu instans dari kelas target sebelum melakukan suatu casting.
            "
        ]);

        Materi::create([
            'level' => 6,
            'nama' => "Package",
            'image' => "package.png",
            'image_tantangan' => "train6.png",
            'konten'=> "
            Package adalah sebuah sarana untuk mengelompokkan atau mengorganisasikan kelas dan interface yang sama atau sekelompok menjadi satu unit tunggal dalam library. Package mempengaruhi mekanisme hak akses ke kelas didalamnya. Hal terpenting yang diperhatikan pada saat mendeklarasikan package, bahwa class tersebut harus disimpan pada suatu directory yang sama dengan nama packagenya. Alasan menggunakan package pada java ialah untuk menghindari tabrakan nama kelas yang akan dibuat dengan nama kelas yang sudah ada. Selain itu, salah satu yang menjadi keuntungan menggunakan package adalah untuk mudahnya developer dalam hal mencari dan me-manage akses yang diberikan.Syarat nama package :<br> 1. Diawali huruf kecil,<br>
             2. Menggambarkan kelas-kelas yang dibungkusnya,<br>
             3. Harus unik (berbeda dengan nama package standard),<br>
             4. Merepresentasikan path dari package tersebut<br>
             5. Harus sama dengan nama direktorinya<br>

             Supaya dapat menggunakan class yang berada diluar package yang sedang dikerjakan, Anda harus mengimport package dimana class tersebut berada. Pada dasarnya, seluruh program JAVA mengimport package java.lang*, sehingga anda dapat menggunakan class seperti String dan Integer dalam program meskipun belum mengimport package sama sekali.

            "
        ]);
        // end of materi

        Tantangan::create([
            'materi_id' => 1,
            'level'=> 1,
            'nama' => "Tantangan Class dan Objek Bagian I"
        ]);

        Tantangan::create([
            'materi_id' => 1,
            'level'=> 2,
            'nama' => "Tantangan Class dan Objek Bagian II"
        ]);

        Tantangan::create([
            'materi_id' => 2,
            'level'=> 1,
            'nama' => "Tantangan Class dan Objek Bagian II"
        ]);

        Tantangan::create([
            'materi_id' => 2,
            'level'=> 2,
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

        Soal::create([
            'tantangan_id' => 1,
            'soal' => 'OOP adalah?',
            'option_a' => "Object Oriented programming",
            'option_b' => "Oalah orang poh",
            'option_c' => "Keduanya benar",
            'option_d' => "Opsi C benar",
            'jawaban' => 1,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);

        Soal::create([
            'tantangan_id' => 2,
            'soal' => 'Nomu?',
            'option_a' => "Minum",
            'option_b' => "Oalah orang poh",
            'option_c' => "Keduanya benar",
            'option_d' => "Opsi C benar",
            'jawaban' => 0,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);

        Soal::create([
            'tantangan_id' => 2,
            'soal' => 'Yoru',
            'option_a' => "Object Oriented programming",
            'option_b' => "Malam",
            'option_c' => "Keduanya benar",
            'option_d' => "Opsi C benar",
            'jawaban' => 1,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);
        
        Soal::create([
            'tantangan_id' => 3,
            'soal' => 'Nomu?',
            'option_a' => "Minum",
            'option_b' => "Oalah orang poh",
            'option_c' => "Keduanya benar",
            'option_d' => "Opsi C benar",
            'jawaban' => 0,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);

        Soal::create([
            'tantangan_id' => 4,
            'soal' => 'Yoru',
            'option_a' => "Object Oriented programming",
            'option_b' => "Malam",
            'option_c' => "Keduanya benar",
            'option_d' => "Opsi C benar",
            'jawaban' => 1,
            'pembahasan' => "Class dapat diibaratkan seperti blueprint atau cetak biru, yang menjadi dasar atau acuan untuk membuat objek nyata. Dengan class kita dapat membuat banyak objek"
        ]);
    }
}
