<?php

namespace Database\Seeders;
use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Buku::create([
            'judul' => 'sketsa',
            'slug' => Str::slug('sketsa'),
            'sampul' => 'sketch.PNG',
            'penulis' => 'kim-jung-gi',
            'penerbit_id' =>2,
            'kategori_id' =>2,
            'rak_id' =>1,
            'stok' =>5
        ]);

        Buku::create([
            'judul' => 'Bek Grond',
            'slug' => Str::slug('Bek Grond'),
            'sampul' => 'BG.JPG',
            'penulis' => 'Vanengems',
            'penerbit_id' =>1,
            'kategori_id' =>4,
            'rak_id' =>1,
            'stok' =>5
        ]);

        Buku::create([
            'judul' => 'Kamvret Lyfe',
            'slug' => Str::slug('Kamvret Lyfe'),
            'sampul' => 'Kamvret Lyfe SII by Claarin.jpg',
            'penulis' => 'Ghazie Arsha',
            'penerbit_id' =>2,
            'kategori_id' =>5,
            'rak_id' =>1,
            'stok' =>5
        ]);
    }
}
