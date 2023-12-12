<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Profile::truncate();
        Schema::enableForeignKeyConstraints();

        Profile::insert([
            'user_id' => '1',
            'username' => 'admin',
            'fullname' => 'admin',
            'bio' => 'admin',
            'photos' => 'admin'
        ]);
    }
}
