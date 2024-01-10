<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(category_1::class);
        $this->call(category_2::class);
        $this->call(products::class);
        $this->call(banner::class);
        $this->call(blog::class);
        $this->call(user::class);
        $this->call(comment::class);

    }
}
