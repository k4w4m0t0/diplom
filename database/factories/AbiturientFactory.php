<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Speciality;
use App\Models\Documenttype;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abiturient>
 */
class AbiturientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->middleName(),
            'last_name' => $this->faker->lastName(),
            'seria' => $this->faker->numerify('####'),
            'nomer' => $this->faker->numerify('######'),
            'passport' => $this->faker->address(),
            'inn' => $this->faker->numerify('############'),
            'snils' => $this->faker->numerify('###########'),
            'telephone' => $this->faker->numerify('+79#########'),
            'address' => $this->faker->address(),
            'citizenship' => $this->faker->randomElement(['Российская федерация', 'Республика Казахстан', 'Республика Беларусь']),
            'specialities_id' => Speciality::inRandomOrder()->first()->id,
            'documenttypes_id' => Documenttype::inRandomOrder()->first()->id,
            'series_doc'=> $this->faker->numerify('######'),
            'number_doc'=> $this->faker->numerify('#######'),
            'date_of' => $this->faker->date('Y-m-d'),
            'date_sub' => $this->faker->date('Y-m-d'),
            'reg_number' => null,
            'home_status' => $this->faker->randomElement([0,1]),
        ];
    }
}
