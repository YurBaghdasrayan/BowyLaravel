<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
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
//
//        foreach ($json as $val){
        DB::table('regions')->insert([
//            [
//                'name' => $val['name']
//            ]


            [
                'id' => '1',
                'name' => 'Адыгея',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'name' => 'Башкортостан',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'name' => 'Бурятия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'name' => 'Алтай',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '5',
                'name' => 'Дагестан',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '6',
                'name' => 'Ингушетия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '7',
                'name' => 'Кабардино-Балкарская',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '9',
                'name' => 'Калмыкия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '10',
                'name' => 'Карачаево-Черкесская',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '11',
                'name' => 'Карелия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '12',
                'name' => 'Коми',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '13',
                'name' => 'Марий Эл',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '14',
                'name' => 'Мордовия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '15',
                'name' => 'Саха',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '16',
                'name' => 'Северная Осетия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '17',
                'name' => 'Татарстан',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '18',
                'name' => 'Тыва',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '19',
                'name' => 'Удмуртская',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '20',
                'name' => 'Хакасия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '21',
                'name' => 'Чеченская',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '22',
                'name' => 'Чувашия',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '23',
                'name' => 'Алтайский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '24',
                'name' => 'Краснодарский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '25',
                'name' => 'Красноярский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '26',
                'name' => 'Приморский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '27',
                'name' => 'Ставропольский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '28',
                'name' => 'Хабаровский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '29',
                'name' => 'Амурская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '30',
                'name' => 'Архангельская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '31',
                'name' => 'Астраханская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '32',
                'name' => 'Белгородская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '33',
                'name' => 'Брянская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '34',
                'name' => 'Владимирская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '35',
                'name' => 'Волгоградская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '36',
                'name' => 'Вологодская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '37',
                'name' => 'Воронежская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '38',
                'name' => 'Ивановская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '39',
                'name' => 'Иркутская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '40',
                'name' => 'Калининградская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '41',
                'name' => 'Калужская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '42',
                'name' => 'Камчатский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '43',
                'name' => 'Кемеровская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '44',
                'name' => 'Кировская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '45',
                'name' => 'Костромская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '46',
                'name' => 'КурганОбласть, край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '47',
                'name' => 'Курская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '48',
                'name' => 'Ленинградская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '49',
                'name' => 'Липецкая область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '50',
                'name' => 'Магаданская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '51',
                'name' => 'Московская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '52',
                'name' => 'Мурманская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '53',
                'name' => 'Нижегородская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '54',
                'name' => 'Новгородская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '55',
                'name' => 'Новосибирская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '56',
                'name' => 'Омская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '57',
                'name' => 'Оренбургская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '58',
                'name' => 'Орловская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '59',
                'name' => 'Пензенская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '60',
                'name' => 'Пермский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '61',
                'name' => 'Псковская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '62',
                'name' => 'Ростовская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '63',
                'name' => 'Рязанская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '64',
                'name' => 'Самарская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '65',
                'name' => 'Саратовская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '66',
                'name' => 'Сахалинская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '67',
                'name' => 'Свердловская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '68',
                'name' => 'Смоленская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '69',
                'name' => 'Тамбовская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '70',
                'name' => 'Тверская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '71',
                'name' => 'Томская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '72',
                'name' => 'Тульская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '73',
                'name' => 'Тюменская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '74',
                'name' => 'Ульяновская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '75',
                'name' => 'Челябинская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '76',
                'name' => 'Забайкальский край',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '77',
                'name' => 'Ярославская область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '78',
                'name' => 'Москва',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '79',
                'name' => 'Санкт-Петербург',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '80',
                'name' => 'Еврейская автономная область',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '81',
                'name' => 'Ненецкий автономный округ',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '82',
                'name' => 'Ханты-Мансийский автономный округ',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '83',
                'name' => 'Чукотский автономный округ',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '84',
                'name' => 'Ямало-Ненецкий автономный округ',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '85',
                'name' => 'Республика Крым',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '86',
                'name' => 'Севастополь',
                'created_at' => Carbon::now(),
            ],


        ]);
    }
}
