<?php

use Illuminate\Database\Seeder;

use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'title' => 'Computer Engineering',
            'slug' => 'computer_engineering',
            'code' => 007
        ]);
    }
}
