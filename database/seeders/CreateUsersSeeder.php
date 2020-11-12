<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
               'phone'=>'0715421423',
                'is_admin'=>'1',
               'password'=> bcrypt('111111'),
            ],
            [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
               'phone'=>'0715421423',
                'is_admin'=>'0',
               'password'=> bcrypt('111111'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
