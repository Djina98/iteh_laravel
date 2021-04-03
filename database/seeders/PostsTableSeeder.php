<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Seeder Post 1',
                'body' => 'Seeder Body',
                'cover_image' => 'noimage.jpg',
                'user_id' => '1',
                'category' => 'Unknown category'
            
            ], [
                'title' => 'Seeder Post 2',
                'body' => 'Seeder Body',
                'cover_image' => 'noimage.jpg',
                'user_id' => '2',
                'category' => 'Unknown category'
            ]

        ]);
    }
}
