<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Memoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert([
            [
                'user_id' => 1,
                'title' => 'メモ1',
                'body' => 'メモ1メモ1メモ1メモ1メモ1メモ1メモ1'
            ],
            [
                'user_id' => 1,
                'title' => 'メモ2',
                'body' => 'メモ2メモ2メモ2メモ2メモ2メモ2メモ2'
            ],
            [
                'user_id' => 1,
                'title' => 'メモ3',
                'body' => 'メモ3メモ3メモ3メモ3メモ3メモ3メモ3'
            ],
            [
                'user_id' => 1,
                'title' => 'メモ4',
                'body' => 'メモ4メモ4メモ4メモ4メモ4メモ4メモ4'
            ],
            [
                'user_id' => 1,
                'title' => 'メモ5',
                'body' => 'メモ5メモ5メモ5メモ5メモ5メモ5メモ5'
            ],
            [
                'user_id' => 1,
                'title' => 'メモ6',
                'body' => 'メモ6メモ6メモ6メモ6メモ6メモ6メモ6'
            ],
        ]);
    }
}
