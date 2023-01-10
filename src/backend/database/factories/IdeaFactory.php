<?php

namespace Database\Factories;

use App\Enums\IdeaStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdeaFactory extends Factory
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
            'author_name' => 'Александр Иванов',
            'description' => 'Добавить новую функцию проверки билета с телефона...',
            'count_likes' => 98,
            'status' => IdeaStatus::NEW,
        ];
    }
}
