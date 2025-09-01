<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TontineMember extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_ton',
        'fk_mem',
        'fk_usr',
        'join_date',
        'position_color',
        'cur_balance',
        'stat',
    ];

    public function Tontine(): BelongsTo
    {
        return $this->belongsTo(Tontine::class);
    }

    public function Member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
