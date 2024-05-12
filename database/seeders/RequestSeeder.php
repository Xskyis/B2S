<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RequestMateri;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            RequestMateri::insert([
                ['id' => 1, 'nama' => 'Rizky', 'mapel'  => 'Matematika', 'req_materi' => 'Integral', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'nama' => 'Rizal', 'mapel'  => 'Bahasa Indonesia', 'req_materi' => 'Kalimat Tanya', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 3, 'nama' => 'Rizki', 'mapel'  => 'Bahasa Inggris', 'req_materi' => 'Simple Present Tense', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 4, 'nama' => 'Rizka', 'mapel'  => 'IPA', 'req_materi' => 'Sifat Benda', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 5, 'nama' => 'Rizal', 'mapel'  => 'IPS', 'req_materi' => 'Sejarah Indonesia', 'created_at' => now(), 'updated_at' => now()],
            ]);
            DB::commit();
            $this->command->info("Request materi berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->info($th->getMessage());
        }
    }
}
