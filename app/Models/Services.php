<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'user_id'
    ];

    private static string $orderBy = "desc";
    private static int $paginate= 6;

    static function findAll(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $search = $request->get('search', null);
        if ($search)  {
            return Services::query()->
            where('title', 'like', '%' . $search . '%')->
            orderBy('created_at', static::$orderBy)->
            paginate(static::$paginate);
        }
        return Services::query()->
        orderBy('created_at', static::$orderBy)->
        paginate(static::$paginate);
    }

//    public function user(): BelongsTo {
//        return $this->BelongsTo(User::class);
//    }

}
