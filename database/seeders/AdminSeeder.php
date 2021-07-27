<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('admins')->truncate();
        for ($i = 0; $i < 100; $i++) {
            Admin::create([
                'name' => $fake->name,
                'position' => $fake->name,
                'salary' =>random_int(10000,1000000),
                'department' => $fake->name,
            ]);
        }
    }
}
