<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
>>>>>>> 0675f0c2a7668aba4b98b7b56d08c3bb687f1eb0
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!DB::table('base_date')->first()) {
          DB::table('base_date')->insert(['time' => mktime(3, 0, 0, date('m'), 1, date('Y'))]);
        }
    }
}
