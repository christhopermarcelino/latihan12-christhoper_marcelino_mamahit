<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('history_chat')->insert([
            'send_chat' => 'sebutkan nama saya',
            'get_chat' => 'nico gonzales',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
