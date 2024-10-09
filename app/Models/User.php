<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ["name", "email", "role", "password"];

    protected $hidden = ["password"];
    protected $casts = ["password" => "hashed"];
    private static string $orderBy = "desc";
    private static int $paginate= 10;

    static function create(array $data): Model | Builder | Authenticatable {
        $data["password"] = Hash::make($data["password"]);
        return User::query()->create($data);
    }

    static function findAll(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $search = $request->get('search', null);
        if ($search)  {
            return User::query()->
            where('name', 'like', '%' . $search . '%')->
                orderBy('created_at', static::$orderBy)->
                paginate(static::$paginate);
        }
        return User::query()->
        orderBy('created_at', static::$orderBy)->
        paginate(static::$paginate);
    }


    public function alert(): HasMany {
        return $this->hasMany(Alerts::class);
    }

//    static function update(array $data){
//
//    }

}
