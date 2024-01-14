<?php

namespace App\Models\Novels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'novels_tags';

    protected $fillable = [
        'name',
        'description',
    ];
}
