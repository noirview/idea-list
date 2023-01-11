<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class IdeaStatus extends Enum implements LocalizedEnum
{
    const NEW = 1;
    const IMPLEMENTATION = 2;
    const REALISED = 3;
}
