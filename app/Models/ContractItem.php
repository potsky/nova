<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ContractItem extends Pivot
{
    public $incrementing = true;
    protected $touches = ['contract'];

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
}
