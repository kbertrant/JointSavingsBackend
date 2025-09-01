<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TontineRule extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_ton',
        'rule_type',
        'key',
        'value',
        'is_active',
    ];

    public function Tontine(): BelongsTo
    {
        return $this->belongsTo(Tontine::class);
    }

    
}
