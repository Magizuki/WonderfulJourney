<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Table
        DB::table('articles')->insert([
            'user_id' => '2',
            'category_id' => '1',
            'title' => 'Pantai Kuta, Bali',
            'description' => 'Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan kuta,
                              sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah
                              tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali 
                              sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari
                              terbenam (sunset beach) sebagai lawan dari pantaiSanur. Selain itu, Lapangan Udara
                              I Gusti Ngurah Rai terletak tidak jauh dari Kuta. -Wikipedia-',
            'image' => '/Assets/PantaiKuta.jpg'
        ]);

    }
}
