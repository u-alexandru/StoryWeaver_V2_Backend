<?php

namespace App\Models\Concerns;

use App\Models\Novels\Like;
use App\Models\Novels\Report;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Reports
{
    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class, 'reportable');
    }
}
