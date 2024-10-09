<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\News;
use App\Models\Schedule;
use App\Models\Services;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    protected array $seeders = [UserSeeder::class, NewsSeeder::class, ServicesSeeder::class, EventsSeeder::class, ScheduleSeeder::class];

    public function run(): void {
        $this->call($this->seeders);
//        News::factory()->count(30)->create();
//        Event::factory()->count(30)->create();
//        Services::factory()->count(4)->create();
        $this->call(AlertSeeder::class);
    }
}
