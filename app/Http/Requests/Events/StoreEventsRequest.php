<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreEventsRequest extends FormRequest {
    public function authorize(): bool {return Auth::check() && in_array(Auth::user()->role, ['admin', 'moderator']) ;}

    public function rules(): array{
        return [
            "image"=>"required|max:10000",
            "title"=>"required|min:3|max:64",
            "description"=>"required|min:3",
        ];
    }
}
