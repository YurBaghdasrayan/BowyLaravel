<?php

namespace Database\Seeders;

use App\Models\role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        $path = storage_path() . "/test.json";
//
//        $json = json_decode(file_get_contents($path), true);
//    //dd($json);
//        foreach ($json as $val){
//           // print_r($val['district']." ".$val['name']."<br>");
//            City::create(['city'=>$val['name'],'region'=>$val['district']]);
//        }
        DB::table('roles')->insert([
            [
                'id' => Role::USER_ID,
                'name' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Role::ADMIN_ID,
                'name' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
