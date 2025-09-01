<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_usr',
        'member_name',
        'cni',
        'member_phone',
        'member_address',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Contributions(): HasMany
    {
        return $this->hasMany(Contribution::class);
    }

    public function Loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }
}
