<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            // 'crm_user_name' => 'CRM Admin',
            'name' => 'Admin Name',
            // 'ae_number' =>  '123',
            // 'tlid' => '123',
            'mobile' => '981000000',
            'is_admin' => 1,
            // 'team_leader' => 'Team Leader',
            // 'team_leader_email' => 'teamlead@gmail.com',
            'status' => 1,
            'work_phone' => null,
            'address_street' => null,
            'address_city' => null,
            'address_state' => null,
            // 'address_postal_code' => null,
            'description' => null,
            'email' => 'admin@gmail.com',
            // 'email_address' => 'Nepal',
            'password' => bcrypt('admin123'),
            ],
            [
            // 'crm_user_name' => 'CRM test',
            'name' => 'Test Name',
            // 'ae_number' =>  '456',
            // 'tlid' => '456',
            'mobile' => '981000000',
            'is_admin' => 0,
            // 'team_leader' => 'Team Leader Test',
            // 'team_leader_email' => 'teamleadtest@gmail.com',
            'status' => 1,
            'work_phone' => null,
            'address_street' => null,
            'address_city' => null,
            'address_state' => null,
            // 'address_postal_code' => null,
            'description' => null,
            'email' => 'test@gmail.com',
            // 'email_address' => 'Nepal',
            'password' => bcrypt('test123'),
            ]
        ];
        foreach($users as $keys => $value){
            User::create($value);
        }
    }
}
