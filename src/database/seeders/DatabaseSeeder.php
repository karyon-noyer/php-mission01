<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(1)->create([
        //     'last_name' => \App\Models\Company::factory()->create()->company_name,
        // ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Postage::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\ProductDetailExplanation::factory(10)->create();
        \App\Models\ProductOption::factory(10)->create();
        \App\Models\Review::factory(10)->create();
        \App\Models\ProductTag::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
        // $this->call(CompaniesTableSeeder::class);
    }
}
