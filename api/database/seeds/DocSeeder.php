<?php

use Illuminate\Database\Seeder;
use App\Doc;

class DocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doc1 = Doc::create([
            'title' => 'Install Bootnative',
            'label' => 'Installation',
            'description' => '**install bootnative on your PC**',
            'slug' => 'install-bootnative',
            'directory_id' => 1,
            'score' => 1
        ]);

        $doc2 = Doc::create([
            'title' => 'Usage',
            'label' => 'Usage',
            'description' => '**Implement Bootnative in your project**',
            'slug' => 'usage-and-implementation',
            'directory_id' => 1
        ]);

        $doc1->versions()->sync([1]);
        $doc2->versions()->sync([1]);
    }
}
