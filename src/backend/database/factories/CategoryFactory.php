<?php

namespace Database\Factories;

use App\Enums\CategoryStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Афиша для продажи билетов онлайн и их проверки',
            'description' => 'Решение для продажи Билетов онлайн и их Проверки с телефона, без дополнительного оборудования... ',
            'status' => CategoryStatus::ACTIVE
        ];
    }
}
