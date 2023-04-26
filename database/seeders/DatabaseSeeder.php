<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@zaqat.com',
            'password' => Hash::make('123admin123')
        ]);

        DB::table('jumlah_zakat')->insert([
            'jumlah_beras' => 0,
            'jumlah_uang' => 0,
            'total_beras' => 0,
            'total_uang' => 0,
            'total_distribusi' => 0,
        ]);

        DB::table('kategori_mustahik')->insert([
            'nama_kategori' => 'Ghorim',
            'jumlah_hak' => 4,
        ]);

        DB::table('kategori_mustahik')->insert([
            'nama_kategori' => 'Fakir',
            'jumlah_hak' => 1,
        ]);

        DB::table('kategori_mustahik')->insert([
            'nama_kategori' => 'Miskin',
            'jumlah_hak' => 2,
        ]);

        DB::table('kategori_mustahik')->insert([
            'nama_kategori' => 'Mualaf',
            'jumlah_hak' => 1,
        ]);

        DB::table('articles')->insert([
            'slug' => 'panduan-praktis-tentang-pembagian-zakat-fitrah',
            'judul' => 'Panduan Praktis tentang Pembagian Zakat Fitrah',
            'author' => 'Administrator',
            'thumbnail' => 'https://www.sman1tambakboyo.sch.id/media_library/posts/large/1430d155e92d12c9a1aec31f739c589d.jpg',
            'content' => '<p>Dalam artikel ini, kita akan membahas secara detail tentang pembagian zakat fitrah. Mulai dari pengertian zakat fitrah, besaran zakat fitrah, hingga tata cara pembagian zakat fitrah yang benar sesuai dengan ajaran agama Islam. Mari kita simak bersama-sama.
            &nbsp; </p>

            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur congue justo id finibus. Nam a auctor lacus, rutrum interdum risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris a nisl magna. Donec aliquet eros ut turpis tincidunt, sed rutrum urna viverra. Duis placerat interdum lectus, eu ultrices magna semper non. Maecenas faucibus convallis ligula sed rhoncus. In in nibh vitae erat ultrices rutrum nec id sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </p>

            <p>
            Praesent sit amet porta felis, et imperdiet libero. Mauris dapibus, mi ac efficitur egestas, lectus metus maximus dolor, ut tempus mi augue sit amet dolor. Donec sem urna, consequat ut consequat nec, dictum at arcu. Vivamus eget faucibus orci. Fusce condimentum felis accumsan tellus aliquet vulputate. Phasellus placerat non tortor eu feugiat. Nulla facilisi. Etiam laoreet interdum nunc eu semper. Phasellus faucibus lectus sit amet tortor luctus suscipit. Etiam vel feugiat ligula, vel fermentum risus. Vivamus commodo, purus eget fermentum condimentum, mauris mauris molestie enim, eget tincidunt lorem leo ac diam. Aliquam metus libero, pretium non rutrum id, placerat nec eros. Nullam quis ipsum massa. In id erat sagittis, pharetra massa sed, sodales augue.
            </p>

            <p>
            Praesent facilisis nisl non elit vestibulum, in facilisis enim cursus. Maecenas pharetra libero eu metus placerat laoreet. Donec dignissim, magna at imperdiet mattis, turpis velit dignissim risus, ac faucibus sapien orci in dui. Nulla mattis justo ut lacus finibus, sit amet congue nisi mattis. Phasellus euismod ut diam ut ornare. Suspendisse rutrum orci vehicula convallis sollicitudin. Nunc eu ante ultricies, dapibus nulla eu, fermentum lorem. Sed eget tortor non odio bibendum gravida. Fusce eu nisi a orci fringilla laoreet sed ac nisi. Duis malesuada nulla id tincidunt pharetra. Nulla in vestibulum urna.
            </p>',
            'tanggal' => '2023-04-26',
        ]);
    }
}
