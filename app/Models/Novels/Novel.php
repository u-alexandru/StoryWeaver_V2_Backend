<?php

namespace App\Models\Novels;

use App\Contracts\Likeable;
use App\Contracts\Reportable;
use App\Models\Concerns\Likes;
use App\Models\Concerns\Reports;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Novel extends Model implements Likeable, Reportable
{
    use HasFactory, SoftDeletes, Likes, Reports;

    protected $fillable = [
        'title',
        'description',
        'author_notes',
        'typology_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function typology(): BelongsTo
    {
        return $this->belongsTo(Typology::class);
    }

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }

    // last chapter  by chapter number and not deleted
    public function lastChapter(): HasOne
    {
        return $this->hasOne(Chapter::class)->orderBy('chapter_number', 'desc')->where('deleted_at', null);
    }

    public function chaptersCount(): int
    {
        return $this->chapters()->count();
    }
}
