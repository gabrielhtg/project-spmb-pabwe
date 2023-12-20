<?php

namespace Database\Factories;

use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestasi>
 */
class PrestasiFactory extends Factory
{

    protected $model = Prestasi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typePrestasi = $this->faker->randomElement(['Institut', 'Dosen', 'Mahasiswa']);

        switch ($typePrestasi)
        {
            case 'Institut' :
                $fileName = 'institut';
                break;
            case 'Dosen' :
                $fileName = 'dosenstaff';
                break;
            case 'Mahasiswa' :
                $fileName = 'mahasiswa';
                break;
        }

        return [
            'jenis_prestasi' => $typePrestasi,
            'photo' => 'assets/img/prestasi/'.$fileName.'.jpg',
            'deskripsi' => htmlspecialchars(addslashes($this->faker->sentence)),
            'judul_prestasi' => htmlspecialchars(addslashes($this->faker->realText(50))),
        ];
    }
}
