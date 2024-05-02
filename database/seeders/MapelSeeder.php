<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            Mapel::insert([
                ['id'=>1, 'nama'=>'Matematika', 'gambar_url'=>'https://miro.medium.com/v2/resize:fit:1400/1*L76A5gL6176UbMgn7q4Ybg.jpeg',  'created_at' => now(), 'updated_at' => now()],
                ['id'=>2, 'nama'=>'Fisika', 'gambar_url'=>'https://images.shiksha.com/mediadata/images/articles/1697441252phpVS7Kyh.jpeg',  'created_at' => now(), 'updated_at' => now()],
                ['id'=>3, 'nama'=>'Bahasa Indonesia', 'gambar_url'=>'https://images.indonews.id/posts/1/2022/2022-06-19/ccd5531a8446a38af29406e73fbcee96_1.png',  'created_at' => now(), 'updated_at' => now()],
                ['id'=>4, 'nama'=>'Bahasa Inggris', 'gambar_url'=>'https://smpn2.bimakota.sch.id/upload/kontent/1708920202_72d96afa7078d163d7f6.jpg',  'created_at' => now(), 'updated_at' => now()],
                ['id'=>5, 'nama'=>'IPA', 'gambar_url'=>'https://www.unc.edu/wp-content/uploads/2022/01/hero_scienceinthestacks.jpg',  'created_at' => now(), 'updated_at' => now()],
            ]);
            DB::commit();
            $this->command->info("Mapel berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->info($th->getMessage());
        }
    }
}
