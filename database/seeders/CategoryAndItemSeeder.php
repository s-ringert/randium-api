<?php

namespace Database\Seeders;

use App\Models\Item;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategoryAndItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $uuid = $faker->uuid();
        DB::table('categories')->insert(
            [
                'id' => $uuid,
                'name' => 'Emotions',
            ]);
        DB::table('items')->insert(
            [
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Happy',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Sad',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Angry',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Scared',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Excited',
                ],
            ]
        );

        $uuid = $faker->uuid();
        DB::table('categories')->insert(
            [
                'id' => $uuid,
                'name' => 'Locations',
            ]);

        Item::insert(
            [
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Beach',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Mountain',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Castle',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Jungle',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Library',
                ],
            ]
        );

        $uuid = $faker->uuid();
        DB::table('categories')->insert(
            [
                'id' => $uuid,
                'name' => 'Jobs',
            ]);
        DB::table('items')->insert(
            [[
                'id' => $faker->uuid(),
                'category_id' => $uuid,
                'name' => 'Teacher',
            ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Doctor',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Chef',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Firefighter',
                ],
                [
                    'id' => $faker->uuid(),
                    'category_id' => $uuid,
                    'name' => 'Artist',
                ],
            ]
        );
    }
}
