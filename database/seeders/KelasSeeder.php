<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'VII A'],
            ['nama' => 'VII B'],
            ['nama' => 'VII C'],
            ['nama' => 'VIII A'],
            ['nama' => 'VIII B'],
            ['nama' => 'VIII C'],
            ['nama' => 'IX A'],
            ['nama' => 'IX B'],
            ['nama' => 'IX C'],
        ];
        DB::table('kelas')->insert($data);
    }
}
