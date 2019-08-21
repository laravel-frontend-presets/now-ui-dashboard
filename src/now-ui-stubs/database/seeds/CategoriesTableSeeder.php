<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Travel',
            'description' => 'Travel ideas for everyone',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Food',
            'description' => 'Our favourite recipes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Home',
            'description' => 'The latest trends in home decorations',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Fashion',
            'description' => 'Stay in touch with the latest trends',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Health',
            'description' => 'An apple a day keeps the doctor away',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
