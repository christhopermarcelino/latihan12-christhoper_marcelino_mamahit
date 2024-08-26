<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create([
            'nama_lengkap' => 'Marcel',
            'nik' => '0812345678',
            'umur' => 17,
            'alamat' => 'Jalan jalan',
        ]);
    }
}
