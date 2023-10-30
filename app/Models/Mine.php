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
        return $this->belongsTo{ related: Concession;;class};
    }

}