<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Reportable
{
    public function reports(): MorphMany;
}
