<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
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
