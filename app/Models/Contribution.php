<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contribution extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_cycle',
        'fk_mem',
        'due_date',
        'pay_date',
        'amount',
        'penalty_amount',
        'pay_status'
    ];

    public function Member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function Cycle(): BelongsTo
    {
        return $this->belongsTo(TontineCycle::class);
    }

    public function Penalties(): HasMany
    {
        return $this->hasMany(Penalty::class);
    }
}
