<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/test.json";

        $json = json_decode(file_get_contents($path), true);

        foreach ($json as $val) {
            DB::table('cities')->insert([
                [
                    'name' => $val['name'],
                    'created_at' => Carbon::now(),
                ]
            ]);
        }
    }
}
