<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
        'name',
        'application_date',
        'next_application_date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Uma vacina pertence a um pet.
     */
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
