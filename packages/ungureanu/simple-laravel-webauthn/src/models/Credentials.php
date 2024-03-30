<?php

namespace Ungureanu\SimpleLaravelWebauthn\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credentials extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'credential_id',
        'public_key',
        'counter',
        'transports',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function incrementCounter()
    {
        $this->counter++;
        $this->save();
    }
}
