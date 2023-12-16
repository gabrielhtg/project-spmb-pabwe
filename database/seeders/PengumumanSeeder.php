<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus data pengumuman yang sudah ada (jika ada)
        Pengumuman::truncate();

        // Generate 20 pengumuman baru
        Pengumuman::factory(30)->create();
    }
}
