<?php

use Illuminate\Database\Seeder;
use App\Directory;

class DirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Directory::create([
            'label' => 'Get Started',
            'slug' => 'get-started',
            'score' => 1
        ]);

        Directory::create([
            'label' => 'Utilities',
            'slug' => 'utilities'
        ]);

        Directory::create([
            'label' => 'Layout',
            'slug' => 'layout'
        ]);

        Directory::create([
            'label' => 'Typography',
            'slug' => 'typography'
        ]);
    }
}
