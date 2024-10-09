<?php

namespace Database\Seeders;

use App\Models\Alerts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        private array $alerts = [
        [
            "user_id"=>5,
            "title"=>"Установка и замена водосчетчиков",
            "price"=>"1500",
            "status"=>"Принят"
        ],
        [
            "user_id"=>6,
            "title"=>"Очистка и промывка водопроводных труб",
            "price"=>"3000",
            "status"=>"Новый"
        ],
        [
            "user_id"=>12,
            "title"=>"Установка и замена водосчетчиков",
            "price"=>"1500",
            "status"=>"Принят"
        ],
        [
            "user_id"=>13,
            "title"=>"Установка и замена водосчетчиков",
            "price"=>"1500",
            "status"=>"Новый"
        ],
        [
            "user_id"=>5,
            "title"=>"Установка фильтров для воды",
            "price"=>"2000",
            "status"=>"Отклонен"
        ],
        [
            "user_id"=>6,
            "title"=>"Очистка и промывка водопроводных труб",
            "price"=>"3000",
            "status"=>"Новый"
        ],
        [
            "user_id"=>9,
            "title"=>"Установка фильтров для воды",
            "price"=>"2000",
            "status"=>"Отклонен"
        ],
        [
            "user_id"=>10,
            "title"=>"Очистка и промывка водопроводных труб",
            "price"=>"3000",
            "status"=>"Новый"
        ],
        [
            "user_id"=>12,
            "title"=>"Установка и замена водосчетчиков",
            "price"=>"1500",
            "status"=>"Отклонен"
        ],
        [
            "user_id"=>6,
            "title"=>"Установка фильтров для воды",
            "price"=>"2000",
            "status"=>"Новый"
        ],
        [
            "user_id"=>7,
            "title"=>"Очистка и промывка водопроводных труб",
            "price"=>"3000",
            "status"=>"Принят"
        ],
        [
            "user_id"=>6,
            "title"=>"Установка и замена водосчетчиков",
            "price"=>"1500",
            "status"=>"Новый"
        ],
        [
            "user_id"=>5,
            "title"=>"Установка фильтров для воды",
            "price"=>"2000",
            "status"=>"Принят"
        ],
        [
            "user_id"=>7,
            "title"=>"Установка фильтров для воды",
            "price"=>"2000",
            "status"=>"Новый"
        ],
     ];
    public function run(): void {
        foreach ($this->alerts as $alert)Alerts::query()->create($alert);
    }
}
