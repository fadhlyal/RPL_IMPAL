<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'firstname' => 'Jajang',
            'lastname' => 'Rohidin',
            'phonenumber' => '089511',
            'email' => 'admin0001@gmail.com',
            'password' => '123456',
        ]);
    }
}
