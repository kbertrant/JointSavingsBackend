<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TontineCycle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_ton',
        'cycle_num',
        'start_date',
        'end_date',
        'total',
        'stat',
    ];

    public function Tontine(): BelongsTo
    {
        return $this->belongsTo(Tontine::class);
    }

    public function Contributions(): HasMany
    {
        return $this->hasMany(Contribution::class);
    }

    public function Beneficiaries(): HasMany
    {
        return $this->hasMany(Beneficiary::class);
    }
}
