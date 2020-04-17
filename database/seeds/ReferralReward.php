<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferralReward extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referral_rewards')->insert([
            [
                'registration_fee' =>'1000',
                'direct_referrer_percentage' => '10',
                'indirect_referrer_percentage' => '5',
                'referee_percentage' => '20',
                'site_percentage' => '40'
            ],
        ]);
    }
}
