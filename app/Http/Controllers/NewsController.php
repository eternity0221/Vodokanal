<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;

class NewsController extends Controller {

    // Route Pages

    private array $routes = [
        "news"=>"pages.news.index",
        "show"=>"pages.news.show",
        "create"=>"pages.news.create",
        "edit"=>"pages.news.edit",
        "publish"=>"pages.news.publish",
    ];

    // Pages

    public function index(Request $request): View {
        $data = News::findAll($request);
        return view($this->routes["news"], compact("data"));
    }

    public function create(): View {
        return view($this->routes["create"]);
    }

    public function show(News $news): View {
        return view($this->routes["show"],compact('news'));
    }

    public function edit(News $news): View {
        return view($this->routes["edit"],compact('news'));
    }

    // Actions

    public function store(StoreNewsRequest $request): Redirect {

        $data = $request->validated();
        News::createNews($data);

//        news::create($request->all());

        return redirect()->route('news.index')->with('success','Новость была добавлена.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//        ]);

        $data = $request->validated();
        News::updateNews($data, $news->id);

//        $news->update($request->all());

        return redirect()->route('news.index')->with('success','Новость была изменена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('danger','Новость удалена!');
    }

    public function publish(Request $request): View {
        $data = News::findAll($request);
        return view($this->routes["publish"], compact("data"));
    }
}
