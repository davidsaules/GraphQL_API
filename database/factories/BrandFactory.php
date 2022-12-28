<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    protected $model = Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brands = array(
                'Bain de Soleil','Bajaj Consumer Care',
                'Balmshell','Bayankala ','Beautycounter',
                'Benefit Cosmetics','BITE Beauty','Bondi Sands','Boots ',
                'O Boticário','Bobbi Brown','Burts Bees',
                'Carmex','Cativa Natureza','Chanel',
                'Charlotte Tilbury Beauty','Clarins','Clinique',
                'ColourPop Cosmetics','Coppertone ','CoverGirl'
            );

        return [
            'bnd_name' => $this->faker->randomElement($brands),
            'bnd_type' => $this->faker->text()
        ];
    }
}
