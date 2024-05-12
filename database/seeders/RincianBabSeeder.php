<?php

namespace Database\Seeders;

use App\Models\RincianBab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianBabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            RincianBab::insert([
                ['id' => 1, 'id_bab' => '1', 'video'  => 'E86ckq8yLUU?si=965zAiALpTEOJQW9', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'id_bab' => '2', 'video'  => 'UtTvAVOOD6U?si=nkta4ioWgbo8BMQz', 'created_at' => now(), 'updated_at' => now()],
            ]);
            DB::commit();
            $this->command->info("Rincian bab berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->info($th->getMessage());
        }
    }
}
