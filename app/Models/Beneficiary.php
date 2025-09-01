<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Beneficiary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_cycle',
        'fk_mem',
        'pay_date',
        'amount_receive',
        'select_method',
    ];

    public function Member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function Cycle(): BelongsTo
    {
        return $this->belongsTo(TontineCycle::class);
    }
}
