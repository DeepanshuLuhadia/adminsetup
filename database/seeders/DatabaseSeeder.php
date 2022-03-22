<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CmsSeeder;
use Database\Seeders\GlobalSettingSeeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
            AdminSeeder::class,
        CmsSeeder::class,
        GlobalSettingSeeder::class,
    ]);
        // \App\Models\User::factory(10)->create();
    }
}
