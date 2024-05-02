<?php

namespace Database\Seeders;

use App\Models\Bab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            Bab::insert([
                ['id' => 1, 'id_mapel' => '1', 'nama' => 'Integral', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'id_mapel' => '1', 'nama' => 'Differensial (Turunan)', 'created_at' => now(), 'updated_at' => now()],
            ]);
            DB::commit();
            $this->command->info("Bab berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->info($th->getMessage());
        }
    }
}
