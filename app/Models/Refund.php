<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Refund extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_loan',
        'ref_num',
        'ref_date',
        'ref_stat',
        'ref_amount',
        'ref_payment'
    ];

    public function Loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }

    
}
