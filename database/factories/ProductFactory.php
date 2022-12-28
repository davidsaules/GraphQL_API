<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $IDs = Brand::all()->pluck('bnd_id')->toArray();
        $colors = array('blue','red','yellow','black','white','gray');
        $categories = array('skincare', 'makeup', 'fragrances', 'Luxe sets','hair');

        return [
            'prod_category' => $this->faker->randomElement($categories),
            'prod_color' =>  $this->faker->randomElement($colors),
            'prod_size' => $this->faker->numberBetween(1 , 10),
            'prod_price' => $this->faker->numberBetween(1 , 1000),
            'prod_bnd_id' => $this->faker->randomElement($IDs)
        ];
    }
}
