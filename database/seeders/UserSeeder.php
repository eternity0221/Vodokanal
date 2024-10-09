<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    private array $users = [
        [
            "email" => "admin@mail.com",
            "name" => "Администратор",
            "password" => "password",
            "role" => "admin",
        ],
        [
            "email" => "moderator@mail.com",
            "name" => "Модератор",
            "password" => "password",
            "role" => "moderator",
        ],
        [
            "email" => "employee@mail.com",
            "name" => "Работник",
            "password" => "password",
            "role" => "employee",
        ],
        [
            "email" => "user@mail.com",
            "name" => "Пользователь",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user1@mail.com",
            "name" => "Фадеев Артём Иванович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user2@mail.com",
            "name" => "Дорофеев Артём Макарович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user3@mail.com",
            "name" => "Костина Софья Андреевна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user4@mail.com",
            "name" => "Максимова Таисия Львовна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user5@mail.com",
            "name" => "Сухарев Макар Иванович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user6@mail.com",
            "name" => "Евдокимов Артём Тимурович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user7@mail.com",
            "name" => "Черкасова Полина Егоровна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user8@mail.com",
            "name" => "Ушакова Сабрина Леонидовна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user9@mail.com",
            "name" => "Львова Анна Ильинична",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user10@mail.com",
            "name" => "Демина Елизавета Андреевна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user11@mail.com",
            "name" => "Сычева Ангелина Денисовна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user12@mail.com",
            "name" => "Лебедев Вячеслав Тимурович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user13@mail.com",
            "name" => "Карпова Виктория Константиновна",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user14@mail.com",
            "name" => "Малышев Лука Максимович",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user15@mail.com",
            "name" => "Федосеев Александр Алексеевич",
            "password" => "password",
            "role" => "user",
        ],
        [
            "email" => "user16@mail.com",
            "name" => "Плотникова Алина Владиславовна",
            "password" => "password",
            "role" => "user",
        ],
    ];

    public function run(): void {
        foreach ($this->users as $user) User::create($user);
    }
}
