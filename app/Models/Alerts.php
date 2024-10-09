<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Alerts extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","title","status","price"];

    private static string $orderBy = "desc";
    private static int $paginate= 10;

    static function getAllAlerts(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator {
        $search = $request->get('search', null);
        if ($search)  {
            return Alerts::query()->
            where('status', 'like', '%' . $search . '%')->
            orderBy('created_at', static::$orderBy)->
            paginate(static::$paginate);
        }
        return Alerts::query()->
        orderBy('status', static::$orderBy)->
        paginate(static::$paginate);
    }

    static function reportAccept($id): void {
        $report = Alerts::query()->findOrFail($id);
        if (!$report) return;
        $report["status"] = "Принят";
        $report->save();
    }

    static function reportReject($id): void {
        $report = Alerts::query()->findOrFail($id);
        if (!$report) return;
        $report["status"] = "Отклонен";
        $report->save();
    }

    static function create($data): Builder | Model {
        return Alerts::query()->create([
            "user_id"=> Auth::check() ? Auth::id() : $data["user_id"],
            "title"=> $data["title"],
            "price"=> $data["price"],
            "status"=> $data["status"] ?? "Новый",
        ]);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }



//    private static string $orderBy = "desc";
//
//    protected $guarded = ["id"];
//    private static int $paginate = 10;
//    protected $fillable = ["user_id","status","title", "price"];
//
////    static function getAllAlerts(): array {
////        return Alerts::query()->orderBy("status","asc")->get()->all();
////    }
//
//
//    static function findAll(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
//    {
//        $search = $request->get('search', null);
//        if ($search)  {
//            return Alerts::query()->
//            where('status', 'like', '%' . $search . '%')->
//            orderBy('created_at', static::$orderBy)->
//            paginate(static::$paginate);
//        }
//        return Alerts::query()->
//        orderBy('status', static::$orderBy)->
//        paginate(static::$paginate);
//    }
//
//
}
