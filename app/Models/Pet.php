<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'breed',
        'type',
        'weight',
        'age',
        'photo',
    ];

    public function __toString()
    {
        return $this->name;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Um pet pode ter várias vacinas.
     */
    public function vaccines(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Vaccine::class);
    }

    /**
     * Um pet pode ter vários medicamentos.
     */
    public function medicines(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Medicine::class);
    }
}
