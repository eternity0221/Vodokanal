<?php

namespace App\Http\Requests\Schedules;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSchedulesRequest extends FormRequest
{
    public function authorize(): bool {return Auth::check() && in_array(Auth::user()->role, ['admin', 'moderator']) ;}

    public function rules(): array{
        return [
            "time"=>"required|min:12|max:13",
        ];
    }
}
