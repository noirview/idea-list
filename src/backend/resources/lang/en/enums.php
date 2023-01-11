<?php

use App\Enums\CategoryStatus;
use App\Enums\IdeaStatus;

return [
    CategoryStatus::class => [
        CategoryStatus::ACTIVE => 'Включена',
        CategoryStatus::DISACTIVE => 'Выключена'
    ],

    IdeaStatus::class => [
        IdeaStatus::NEW => 'Новая',
        IdeaStatus::IMPLEMENTATION => 'В релизации',
        IdeaStatus::REALISED => 'Реализована',
    ],
];
