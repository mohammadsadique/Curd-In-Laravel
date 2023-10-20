<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData     =   [
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com ',
                'password' => 'password',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            
        ];
        foreach($userData as $data){
            DB::table('users')->insert(
                [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'created_at' => $data['created_at']
                ]
            );
        }
    }
}
