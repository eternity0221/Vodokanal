<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'time',];
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    static function getSchedule(Request $request): array {
        return Schedule::query()->get()->all();
    }

    static function updateSchedule(array $data, int $id): Model | Builder {
        $schedules = Schedule::query()->findOrFail($id);
        $schedules->update($data);
        return $schedules;
    }
}
