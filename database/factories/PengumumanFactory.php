<?php

// database/factories/PengumumanFactory.php

namespace Database\Factories;

use App\Models\Pengumuman;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengumumanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengumuman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategoriPengumuman' => $this->faker->word,
            'judulPengumuman' => $this->faker->sentence,
            'filePengumuman' => $this->faker->word, // Adjust accordingly (file name, path, etc.)
            'tanggalPengumuman' => $this->faker->date,
            // 'timestamps' will be automatically managed by Eloquent
        ];
    }
}

