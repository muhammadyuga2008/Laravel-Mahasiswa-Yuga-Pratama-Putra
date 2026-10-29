<?php

namespace Database\Seeders;

use App\Models\CalonMahasiswa;
use App\Models\Fakultas;
use App\Models\Laporan;
use App\Models\Pembayaran;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name'=>'admin',
        'nik'=>'1122334455',
        'password'=>bcrypt('admin123'),
        'role'=>'admin'
       ]);
       Fakultas::create([
        'id'=>1,
        'nama_fakultas'=>'Fakultas Teknik',
        'foto'=>'image/hukum.jpg'
       ]);
        Fakultas::create([
        'id'=>2,
        'nama_fakultas'=>'Fakultas Hukum',
        'foto'=>'image/hukum.jpg'
       ]);
       ProgramStudi::create([
        'fakultas_id'=>1,
        'nama_prodi'=>'Teknik Informatika',
        'biaya_formulir'=>50000,
        'almamater'=>100000,
        'pembangunan'=>500000
       ]);
        ProgramStudi::create([
        'fakultas_id'=>2,
        'nama_prodi'=>'Ilmu Hukum',
        'biaya_formulir'=>100000,
        'almamater'=>700000,
        'pembangunan'=>900000
       ]);
        ProgramStudi::create([
        'fakultas_id'=>2,
        'nama_prodi'=>'Ilmu Politik',
        'biaya_formulir'=>120000,
        'almamater'=>300000,
        'pembangunan'=>600000
       ]);
      
    }
}
