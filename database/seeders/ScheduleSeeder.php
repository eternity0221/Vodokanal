<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        private array $schedule = [
        [
            "day" => "пн",
            "time" => "8:00 - 17:00",
        ],
        [
            "day" => "вт",
            "time" => "8:00 - 16:00",
        ],
        [
            "day" => "ср",
            "time" => "8:00 - 16:00",
        ],
        [
            "day" => "чт",
            "time" => "8:00 - 16:00",
        ],
        [
            "day" => "пт",
            "time" => "8:00 - 16:00",
        ],
        [
            "day" => "сб",
            "time" => "8:00 - 13:00",
        ],
        [
            "day" => "вс",
            "time" => "8:00 - 13:00",
        ],
    ];

        public function run(): void {
        foreach ($this->schedule as $schedule)Schedule::query()->create($schedule);
    }
}
