<?php

use Illuminate\Database\Seeder;
use App\Organization;
use App\Voter;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // REAL DATA

        // DB::table('organizations')->insert([
        //     'name' => 'Oplan',
        // ]);

        // DB::table('organizations')->insert([
        //     'name' => 'Youth',
        // ]);

        // DB::table('organizations')->insert([
        //     'name' => 'Senior Citizen',
        // ]);

        // DB::table('organizations')->insert([
        //     'name' => 'Administrators',
        // ]);

        // DB::table('organizations')->insert([
        //     'name' => 'Tanod',
        // ]);

        // DB::table('organizations')->insert([
        //     'name' => 'Baranggay Health Worker',
        // ]);

        // MOCK DATA

        factory(Organization::class, 6)
            ->create()
            ->each(function ($o) {
                $voters = factory(Voter::class, 10)->make([
                    'acquired' => true,
                ]);
                foreach ($voters as $v) {
                    $o->voters()->save($v);
                }
            });
    }
}
