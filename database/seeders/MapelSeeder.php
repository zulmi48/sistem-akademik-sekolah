<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "kode" => "MTK0701",
                "nama" => "Matematika Kelas VII",
                "semester" => "Ganjil",
            ], [
                "kode" => "MTK0702",
                "nama" => "Matematika Kelas VII",
                "semester" => "Genap"
            ], [
                "kode" => "BIN0702",
                "nama" => "Bhs Indonesia Kelas VII",
                "semester" => "Genap"
            ], [
                "kode" => "BEN0701",
                "nama" => "Bhs Inggris Kelas VII",
                "semester" => "Ganjil"
            ], [
                "kode" => "BEN0702",
                "nama" => "Bhs Inggris Kelas VII",
                "semester" => "Genap"
            ]
        ];
        DB::table('mapel')->insert($data);
    }
}
