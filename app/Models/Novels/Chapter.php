<?php

namespace App\Models\Novels;

use App\Contracts\Likeable;
use App\Contracts\Reportable;
use App\Models\Concerns\Likes;
use App\Models\Concerns\Reports;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model implements Likeable, Reportable
{
    use HasFactory, SoftDeletes, Likes, Reports;

    protected $fillable = [
        'title',
        'content',
        'author_notes',
        'chapter_number',
        'novel_id',
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

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
