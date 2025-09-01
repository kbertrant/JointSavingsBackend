<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenaltyPayment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_pen',
        'amount',
        'ref',
        'pay_date',
    ];

    public function Contribution(): BelongsTo
    {
        return $this->belongsTo(Contribution::class);
    }

    public function Refund(): BelongsTo
    {
        return $this->belongsTo(Refund::class);
    }
    
}
