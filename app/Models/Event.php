<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator as LAP;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class Event extends Model {
    use HasFactory;
    protected $primaryKey = "id";
    protected $guarded = ["id"];
    protected $fillable = ["title", "description", "image"];

    static string $orderBy = "desc";
    static int $paginate = 9;


    private static string $imagePath = "public/events";
    private static function imageUpload($new_image, $old_image, $news_id): string{
        $fileName = $news_id.".".$new_image->extension();
        if ($old_image !== env("LARAVEL_API")."/images/no-events-image.png"){
            Storage::delete($old_image);
        }
        $path = Storage::putFileAs(static::$imagePath, $new_image, $fileName);
        return Storage::url($path);
    }

    static function getEvents(Request $request): LAP {
        $orderBy = $request->get("orderBy", static::$orderBy);
        $paginate = $request->get("paginate", static::$paginate);
        return Event::eventsFilter($orderBy, $paginate);
    }

    static function getEventById(int $id): Model | Collection | Builder | array | null {
        return Event::query()->findOrFail($id);
    }

    static function eventsFilter(string $orderBy, int $paginate = 5): LAP {
        return Event::query()->
        orderBy("created_at", $orderBy)->
        paginate($paginate);
    }

    static function createEvents(array $data): Model | Builder {
        $events = Event::query()->create($data);
        if (isset($data["image"])){
            $events->image = static::imageUpload($data["image"], $events->image, $events->id);
            return Event::updateEvents($data, $events->id);
        }
    }

    static function updateEvents(array $data, int $id): Model | Builder {
        $events = Event::getEventById($id);
        isset($data["image"]) && $data["image"] = static::imageUpload($data["image"], $events->image, $id);
        $events->update($data);
        return $events;
    }

    static function findAll(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $search = $request->get('search', null);
        if ($search)  {
            return Event::query()->
            where('title', 'like', '%' . $search . '%')->
            orderBy('created_at', static::$orderBy)->
            paginate(static::$paginate);
        }
        return Event::query()->
        orderBy('created_at', static::$orderBy)->
        paginate(static::$paginate);
    }
}
