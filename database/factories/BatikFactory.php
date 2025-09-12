<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Batik;
use App\Models\Category;
use App\Models\Umkm;

class BatikFactory extends Factory
{
    protected $model = Batik::class;

    public function definition(): array
    {
        // Ambil random category & umkm
        $categoryId = Category::inRandomOrder()->first()->id ?? 1;
        $umkmId     = Umkm::inRandomOrder()->first()->id ?? 1;

        return [
            'title'       => $this->faker->words(3, true), // contoh: "Batik Motif Indah"
            'slug'        => $this->faker->slug(),
            'sku'         => 'BT' . $this->faker->unique()->numerify('###'),
            'description' => $this->faker->sentence(10),
            'material'    => $this->faker->randomElement(['Katun', 'Polyester', 'Silk']),
            'size'        => $this->faker->randomElement(['S','M','L','XL']),
            'quality'     => $this->faker->randomElement(['Standar','Good','Premium']),
            'gender'      => $this->faker->randomElement(['male','female','unisex']),
            'price'       => $this->faker->numberBetween(100000, 500000),
            'stock'       => $this->faker->numberBetween(5, 50),
            'category_id' => $categoryId,
            'umkm_id'     => $umkmId,
            'user_id'     => null,
            'image'       => 'batiks/batik-'.$this->faker->unique()->word().'.png',
        ];
    }
}
