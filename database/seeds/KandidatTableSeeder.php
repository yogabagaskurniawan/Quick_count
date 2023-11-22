<?php

use App\Kandidat;
use Illuminate\Database\Seeder;

class KandidatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Kandidat::class, 10)->create();
    }
}
