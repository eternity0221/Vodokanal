<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest {
    public function authorize(): bool {return !Auth::check();}

    public function rules(): array {
        return ["name"=>"required", "email"=>"required|email|users:unique", "password"=>"required|min:8"];
    }
}
