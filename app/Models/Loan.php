<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_mem',
        'loan_num',
        'start_date',
        'end_date',
        'loan_stat',
        'percent',
        'loan_caution',
        'amount_lent',
        'amount_return',
        'type_refunds'
    ];

    public function Member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function Refunds(): HasMany
    {
        return $this->hasMany(Refund::class);
    }
}
