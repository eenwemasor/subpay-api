<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountLevel extends Model
{
    protected $fillable = [
        'name',
        'cost_to_upgrade',
        'direct_referrer_percentage_bonus',
        'indirect_referrer_percentage_bonus',
        'wallet_deposit_direct_referrer_percentage_bonus',
        'wallet_deposit_indirect_referrer_percentage_bonus',
        'bonus_wallet_withdrawal_minimum_balance'
    ];

    public function users()
    {
        return  $this->hasMany(User::class);
    }

    public function applicables()
    {
        return $this->hasMany(AccountLevelApplicable::class);
    }
}
