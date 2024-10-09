<?php

namespace App\Http\Requests\Alerts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAlertsRequest extends FormRequest
{
    public function authorize(): bool {return Auth::check() && in_array(Auth::user()->role, ['admin', 'user']) ;}

    public function rules(): array{
        return [
            "title"=>"required|min:3|max:64",
            'price' => 'required',
        ];
    }
}
