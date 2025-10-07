<?php

namespace Database\Seeders\Admin;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = "saraniknam";
        $admin->email = "saraniknaam76@gmail.com";
        $admin->password = bcrypt("sara");
        $admin->save();
    }
}
