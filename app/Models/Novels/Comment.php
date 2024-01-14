<?php

namespace App\Models\Novels;

use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Termwind\Components\Li;

class Comment extends Model implements Likeable
{
    use HasFactory, SoftDeletes, Likes;

    protected $fillable = [
        'content',
        'author_id',
        'chapter_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}