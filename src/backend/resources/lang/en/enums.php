<?php

use App\Enums\CategoryStatus;

return [
    CategoryStatus::class => [
        CategoryStatus::ACTIVE => 'Включена',
        CategoryStatus::DISACTIVE => 'Выключена'
    ],
];
