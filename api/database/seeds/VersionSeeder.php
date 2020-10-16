<?php

use Illuminate\Database\Seeder;
use App\Version;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::create([
            'version' => '1.1.0',
            'published' => true
        ]);

        Version::create([
            'version' => '1.2.0',
            'published' => false
        ]);

        Version::create([
            'version' => '1.0.7',
            'published' => true
        ]);
    }
}
