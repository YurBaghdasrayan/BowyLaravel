<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Region;
use Carbon\Carbon;
use http\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $response = Http::get('http://htmlweb.ru/geo/api.php?country=ru&json&api_key=' . config('services.country_api.url'));
        $regions = $response->json('items');
        $i = 0;
        foreach ($regions as $region) {
            $i++;
            Region::create([
                'name' => $region['name'],
            ]);
            $citiesResponse = Http::get('http://htmlweb.ru/geo/api.php?area_rajon='.$region['id'].'&json&api_key=' . config('services.country_api.url'));
            foreach ($citiesResponse->json('items') as $city) {
                if (is_array($city)) {
                    City::query()->create([
                        'name' => $city['name'],
                        'region_id' => $i
                    ]);
                }
            }
        }
    ;}
}
