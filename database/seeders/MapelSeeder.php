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
                "nama" => "Matematika",
                "kelas" => "VII",
                "semester" => "Ganjil",
            ],
            [
                "kode" => "BIN0701",
                "nama" => "Bhs. Indonesia",
                "kelas" => "VII",
                "semester" => "Ganjil",
            ],
            [
                "kode" => "SNS0701",
                "nama" => "Sains",
                "kelas" => "VII",
                "semester" => "Ganjil",
            ],
            [
                "kode" => "BEN0701",
                "nama" => "BHs.Inggris",
                "kelas" => "VII",
                "semester" => "Ganjil",
            ],
            [
                "kode" => "IPS0701",
                "nama" => "Ilmu Pengetahuan Sosial",
                "kelas" => "VII",
                "semester" => "Ganjil",
            ],
        ];
        DB::table('mapel')->insert($data);
    }
}
