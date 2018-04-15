<?php

use Illuminate\Database\Seeder;
use App\Candidate;
use App\Voter;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Candidate::class, 6)
            ->create()
            ->each(function ($c) {
                $voters = factory(Voter::class, 50)->make([
                    'acquired' => true,
                ]);
                foreach($voters as $v)
                {
                    $c->voters()->save($v);
                }
            });
    }
}
