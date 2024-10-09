<?php

namespace App\Http\Controllers;


use App\Http\Requests\Events\StoreEventsRequest;
use App\Http\Requests\Events\UpdateEventsRequest;
use App\Models\Event;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;

class EventController extends Controller {

    // Route Pages

    private array $routes = [
        "events"=>"pages.events.index",
        "show"=>"pages.events.show",
        "create"=>"pages.events.create",
        "edit"=>"pages.events.edit",
        "publish"=>"pages.events.publish",
    ];

    // Pages

    public function index(Request $request): View {
        $events = Event::findAll($request);
//        $events = Event::getEvents($request);
        return view($this->routes["events"], compact("events"));
    }

    public function create(): View {
        return view($this->routes["create"]);
    }


    public function show(Event $event): View {
        return view($this->routes["show"], compact("event"));
    }

    public function edit(Event $event): View {
        return view($this->routes["edit"],compact("event"));
    }

    // Actions

    public function store(StoreEventsRequest $request)
    {
        $events = $request->validated();
        Event::createEvents($events);

        return redirect()->route('events.index')->with('success','Мероприятие было добавлено.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Event $event)
    {
        $data = $request->validated();
        Event::updateEvents($data, $event->id);

        return redirect()->route('events.index')->with('success','Мероприятие было изменено.');
    }


    public function destroy(Event $event): Redirect {
        $event->delete();
        return redirect()->route("events.index")->with(["danger"=>"Мероприятие удалено!"]);
    }

    public function publish(Request $request): View {
        $data = Event::findAll($request);
        return view($this->routes["publish"], compact("data"));
    }
}
