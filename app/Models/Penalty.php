<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penalty extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_con',
        'fk_ref',
        'amount',
        'reason',
        'stat',
        'apply_at',
    ];

    public function Contribution(): BelongsTo
    {
        return $this->belongsTo(Contribution::class);
    }

    public function Refund(): BelongsTo
    {
        return $this->belongsTo(Refund::class);
    }

    public function PenaltyPayments(): HasMany
    {
        return $this->hasMany(PenaltyPayment::class);
    }
}
