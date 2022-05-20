<?php

namespace Johl\DefuntCode\Updates;

use Seeder;
use Johl\DefuntCode\Models\Defunt;

class SeedDefuntsTable extends Seeder
{
    public function run()
    {
        $defunt = Defunt::create([
            'nom' => 'unNom',
            'prenom' => 'unPrenom',
            'published_at' => date("Y-m-d H:i:s"),
            'is_published' => true,
            'description' => 'un ptit peu de description'
        ]);
    }
}
