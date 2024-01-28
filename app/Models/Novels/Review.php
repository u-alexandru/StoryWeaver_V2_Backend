<?php

namespace App\Models\Novels;

use App\Contracts\Likeable;
use App\Contracts\Reportable;
use App\Models\Concerns\Likes;
use App\Models\Concerns\Reports;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model implements Likeable, Reportable
{
    use HasFactory, SoftDeletes, Likes, Reports;

    protected $fillable = [
        'content',
        'author_id',
        'novel_id',
        'character_design_rating',
        'world_building_rating',
        'story_development_rating',
        'writing_style_rating',
        'fun_rating',
        'likes',
        'dislikes',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function novel(): BelongsTo
    {
        return $this->belongsTo(Novel::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(ReviewComment::class);
    }
}
