<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Api',
            'post' => 'Today I created a tiny api system with Laravel',
        ]);
        DB::table('posts')->insert([
            'title' => 'Hello',
            'post' => 'I created data',
        ]);
        DB::table('posts')->insert([
            'title' => 'Summer Vacation started yesterday',
            'post' => 'I plan to visit a few destinations such as Hokkaido and Okinawa',
        ]);
        DB::table('posts')->insert([
            'title' => 'Keep practicing...',
            'post' => 'Kobe Bryant said "Keep practicing, Keep practicing, Keep practicing... in his interview"',
        ]);
        DB::table('posts')->insert([
            'title' => 'Laravel',
            'post' => "Let's create something exciting with Laravel's api features!",
        ]);
    }
}
