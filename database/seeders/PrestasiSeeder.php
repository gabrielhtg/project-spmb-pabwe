<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestasi')->insert([
            'jenis_prestasi' => 'Mahasiswa',
            'photo' => 'assets/img/prestasi/prestasi1703051595.jpeg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit alias, in iste quos nihil totam facere eum hic rerum dignissimos. Commodi, velit! Quidem voluptates temporibus in facilis, sapiente fuga nostrum excepturi eos perferendis, sunt architecto labore soluta quo enim, error aut aspernatur id odit necessitatibus? Voluptas, culpa eveniet! Eaque nostrum obcaecati nulla ducimus nobis vel ullam culpa ab, excepturi assumenda est! Rem fugit officia reprehenderit sapiente iste sunt consequuntur est reiciendis? Quibusdam fugiat iure, eligendi exercitationem neque repellendus quia ut quasi praesentium aperiam eaque, modi expedita veritatis! Commodi corrupti placeat nihil officia aliquid asperiores nobis aspernatur facilis temporibus, tempore harum..',
            'judul_prestasi' => 'Olimpiade Sains.',
        ]);
    }
}
