<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator as LAP;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    private static string $orderBy = "desc";
    private static int $paginate = 9;
    private static string $imagePath = "public/news";
    private static function imageUpload($new_image, $old_image, $news_id): string{
        $fileName = $news_id.".".$new_image->extension();
        if ($old_image !== env("LARAVEL_API")."/images/no-news-image.png"){
            Storage::delete($old_image);
        }
        $path = Storage::putFileAs(static::$imagePath, $new_image, $fileName);
        return Storage::url($path);
    }

    static function getNews(Request $request): LAP {
        return News::query()->orderBy("created_at",static::$orderBy)->paginate(static::$paginate);
    }

    static function getNewsById(int $id): Model | Collection | Builder | array | null {
        return News::query()->findOrFail($id);
    }

    static function createNews(array $data): Model | Builder {
        $news = News::query()->create($data);
        if (isset($data["image"])){
            $news->image = static::imageUpload($data["image"], $news->image, $news->id);
            return News::updateNews($data, $news->id);
        }
    }

    static function updateNews(array $data, int $id): Model | Builder {
        $news = News::getNewsById($id);
        isset($data["image"]) && $data["image"] = static::imageUpload($data["image"], $news->image, $id);
        $news->update($data);
        return $news;
    }

    static function findAll(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $search = $request->get('search', null);
        if ($search)  {
            return News::query()->
            where('title', 'like', '%' . $search . '%')->
            orderBy('created_at', static::$orderBy)->
            paginate(static::$paginate);
        }
        return News::query()->
        orderBy('created_at', static::$orderBy)->
        paginate(static::$paginate);
    }
}
