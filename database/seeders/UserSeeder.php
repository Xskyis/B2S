<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            User::insert([
                ['id' => 1, 'name' => 'Admin', 'password' => bcrypt("admin"), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ]);
            DB::commit();
            $this->command->info("User berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->info($th->getMessage());
        }
    }
}
