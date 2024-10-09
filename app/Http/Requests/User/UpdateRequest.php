<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool {return Auth::check();}

    public function rules(): array {
        return ["name"=>"required", "email"=>"required", "role"=>"nullable", "password"=>"nullable"];
    }
}
