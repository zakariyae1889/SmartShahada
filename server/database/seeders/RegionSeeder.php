<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regionsToInsert=[
            [
                'name' => 'جهة الشرق',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'جهة طنجة تطوان الحسيمة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'جهة فاس مكناس',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'جهة الرباط سلا القنيطرة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'جهة بني ملال خنيفرة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'جهة الدار البيضاء سطات',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة مراكش آسفي',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة درعة تافيلالت',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة سوس ماسة',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة كلميم واد نون',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة العيون الساقية الحمراء',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جهة الداخلة وادي الذهب',
                'created_at' => now(),
                'updated_at' => now()
            ],

       ];
       DB::table('regions')->insert($regionsToInsert);
    }
}
