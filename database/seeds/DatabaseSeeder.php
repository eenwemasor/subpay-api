<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DataPlanListSeeder::class);
        $this->call(CablePlanListSeeder::class);
        $this->call(ReferralReward::class);
        $this->call(AdminChannelUtil::class);
        $this->call(PowerPlanListSeeder::class);


        factory(\App\AirtimeTransaction::class, 20)->create();
        factory(\App\CableTransaction::class, 20)->create();
        factory(\App\DataTransaction::class, 20)->create();
        factory(\App\ElectricityTransaction::class, 20)->create();
        factory(\App\WalletTransaction::class, 20)->create();
        factory(\App\User::class, 3)->create();
        factory(\App\NewsFeed::class, 3)->create();
        factory(\App\NewsUpdate::class, 1)->create();


        DB::table('users')->insert([
            'full_name' => "Gtserviz Admin",
            'email' => "qhodeweb@gmail.com",
            'phone' => "09096006817",
            'wallet' => 0, // wallet
            'accessibility' => "ADMIN",
            'email_confirmed' => true,
            'phone_verified' => true,
            'unique_id' => 'sjdfsdkjfdslksdfodsfoisd',
            'active' => true,
            'username'=>'admin20',
            'bonus_wallet' => 0,
            'password' => bcrypt('Admin'),
        ]);


        DB::table('users')->insert([
            'full_name' => "Gt User1",
            'email' => "user1@gtserviz.com",
            'phone' => "09090000000",
            'wallet' => 0, // wallet
            'accessibility' => "USER",
            'email_confirmed' => true,
            'phone_verified' => true,
            'unique_id' => '093248438439843239',
            'active' => true,
            'username'=>'user1',
            'bonus_wallet' => 0,
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'full_name' => "Gt User2",
            'email' => "user2@gtserviz.com",
            'phone' => "09090000000",
            'wallet' => 0, // wallet
            'accessibility' => "USER",
            'email_confirmed' => true,
            'phone_verified' => true,
            'unique_id' => '093248438439843239',
            'active' => true,
            'username'=>'user2',
            'bonus_wallet' => 0,
            'password' => bcrypt('password'),
        ]);

    }
}
