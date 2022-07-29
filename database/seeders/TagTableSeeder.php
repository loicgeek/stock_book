<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::query()->create(["name" => "Phone"]);
        Tag::query()->create(["name" => "hot"]);
        Tag::query()->create(["name" => "trending"]);
        Tag::query()->create(["name" => "tech"]);
    }
}
