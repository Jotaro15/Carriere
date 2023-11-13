<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mine extends Model
{
    use HasFactory;


    public function concession(): BelongsTo
    {
        return $this->belongsTo{ Concession::class};
    }

    public function equipement(): BelongsTo
    {
        return $this->belongsToMany{ Equipement::class};
    }

}