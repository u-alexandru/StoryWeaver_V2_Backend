<?php

namespace App\Models\Novels;

use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewComment extends Model implements Likeable
{
    use HasFactory, SoftDeletes, Likes;

    protected $fillable = [
        'content',
        'author_id',
        'review_id',
        'likes',
        'dislikes',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
