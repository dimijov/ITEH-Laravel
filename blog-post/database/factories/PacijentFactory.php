<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lekar;

class PacijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'dijagnoza' => $this->faker->regexify('[A-Z]{1}[0-9]{2}'),//randomElement($array = array('anemija','astma','gastritis','grip','gonoreja','dijabetes','epilepsija','isijas','katarakta','karijes','malarija','migrena','osteoporoza','rak','salmonela','sifilis','tifus','tuberkuloza','hepatitis','shizofrenija','HIV')),
            'godine' => $this->faker->numberBetween($min = 18, $max = 99),
            'lekar_id' => Lekar::factory()
        ];
    }
}
