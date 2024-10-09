<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    private array $roles = ["user", "employee", "moderator", "admin"];

    public function up(): void {
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("name");
            $table->string("email")->unique();
            $table->string("password");
            $table->enum("role", $this->roles)->default("user");
            $table->timestamps();
        });
    }

    public function down(): void{Schema::dropIfExists("users");}
};
