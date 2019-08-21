<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'Hot',
            'color' => '#f5365c',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'Trending',
            'color' => '#5e72e4',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'New',
            'color' => '#11cdef',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
