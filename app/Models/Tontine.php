<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tontine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_usr',
        'tontine_name',
        'tontine_status',
        'start_date',
        'cycle_duration'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function TontineRule(): HasMany
    {
        return $this->hasMany(TontineRule::class);
    }

    public function TontineCycle(): HasMany
    {
        return $this->hasMany(TontineCycle::class);
    }

    public function TontineMember(): HasMany
    {
        return $this->hasMany(TontineMember::class);
    }

    
}
