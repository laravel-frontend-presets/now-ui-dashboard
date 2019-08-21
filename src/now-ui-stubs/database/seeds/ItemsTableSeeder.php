<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'name' => '5 citybreak ideas for this year',
            'excerpt' => 'Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante.',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
            'category_id' => 1,
            'status' => 'published',
            'date' => now()->format('Y-m-d'),
            'show_on_homepage' => 1,
            'options' => '["0","1"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'name' => 'Top 10 restaurants in Italy',
            'excerpt' => 'Mauris sodales leo erat, at vehicula tellus molestie fringilla.',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
            'category_id' => 2,
            'status' => 'published',
            'date' => now()->format('Y-m-d'),
            'show_on_homepage' => 1,
            'options' => '["0","1"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'name' => 'Cocktail ideas for your birthday party',
            'excerpt' => 'Vestibulum semper semper urna a tincidunt.',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
            'category_id' => 2,
            'status' => 'published',
            'date' => now()->format('Y-m-d'),
            'show_on_homepage' => 1,
            'options' => '["0","1"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 1,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 2,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 3,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 2,
                'tag_id' => 1,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 3,
                'tag_id' => 1,
            ]
        );
    }
}
