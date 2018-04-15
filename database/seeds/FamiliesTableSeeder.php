<?php

use Illuminate\Database\Seeder;
use App\Family;
use App\Voter;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // REAL DATA

        // DB::table('families')->insert([
        //     'name' => 'Abundabar',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Chavez',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Credo',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Valencia',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Remitir',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Concina',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Corona',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Perias',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Cepcon',
        // ]);

        // DB::table('families')->insert([
        //     'name' => 'Others',
        // ]);

        // MOCK DATA

        factory(Family::class, 6)
            ->create()
            ->each(function ($f) {
                $voters = factory(Voter::class, 10)->make([
                    'acquired' => true,
                ]);
                foreach ($voters as $v) {
                    $f->voters()->save($v);
                }
            });
    }
}
