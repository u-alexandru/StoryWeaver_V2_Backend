<?php

namespace App\Models\Novels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Typology extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'novels_typologies';
    protected $fillable = [
        'name',
        'description',
    ];
}