<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\ActorMovie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Actor::factory(15)->create();
        Movie::factory(15)->create();
        ActorMovie::factory(50)->create();
       
    }
}
