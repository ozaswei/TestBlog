<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title'=>'Post Two',
                'summary'=>'This is Post Two',
                'details'=>'This is the second post i have created in this blog.'
            ],
            [
                'title'=>'Post Three',
                'summary'=>'This is Post Three',
                'details'=>'This is the Third post i have created in this blog.'
            ]

        ]);
    }
}
