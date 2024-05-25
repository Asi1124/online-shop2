<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween($min = 100, $max = 1000),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function ($product) {
            $images = ImageFactory::new()->count(5)->make(); // Создаем 5 экземпляров изображений
            foreach ($images as $image) {
                $image->product_id = $product->id; // Заполняем product_id для каждого изображения
                $image->save();
            }// Сохраняем изображения, связанные с продуктом
        });
    }
}
