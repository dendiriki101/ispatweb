<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Administrator',
        //     'email' => 'adminisadmin@gmail.com',
        //     'password' => bcrypt('passwordisvalid'),
        // ]);

        User::create([
            'name' => 'DendiRiki',
            'email' => 'dendirikirahmawan@gmail.com',
            'password' => bcrypt('passwordisvalid'),
        ]);

        User::create([
            'name' => 'MarketingUser',
            'email' => 'marketing@gmail.com',
            'password' => bcrypt('marketingpassword'),
        ]);

        User::create([
            'name' => 'SHEUser',
            'email' => 'safetyhealthenvironment@gmail.com',
            'password' => bcrypt('shepassword'),
        ]);

        User::create([
            'name' => 'INTUser',
            'email' => 'ispatnewsteam@gmail.com',
            'password' => bcrypt('intpassword'),
        ]);

        User::create([
            'name' => 'PersonaliaUser',
            'email' => 'personalia@gmail.com',
            'password' => bcrypt('personaliapassword'),
        ]);

        User::create([
            'name' => 'QualityControlUser',
            'email' => 'quality@gmail.com',
            'password' => bcrypt('qualitypassword'),
        ]);

           User::create([
            'name' => 'StoreUser',
            'email' => 'storeuser@gmail.com',
            'password' => bcrypt('qualitypassword'),
        ]);



    }



}
