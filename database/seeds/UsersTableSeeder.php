<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'=>'fake@aston.com',
            'name'=>'fake one', 
            'password'=>\Hash::make('fake@1234'),
            'role' => '2',
            'department_id' => 1
            ]);


        User::create([
            'email'=>'student@aston.com',
            'name'=>'student',
            'password'=>\Hash::make('student@1234'),
            'role' => '1',
            'department_id' => 1
        ]);
    }
}
