<?php

namespace App\Http\Controllers;

use App\Http\Requests\Schedules\UpdateSchedulesRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScheduleController extends Controller
{

    private array $routes = [
        "services"=>"pages.schedules.index",
        "edit"=>"pages.schedules.edit",
    ];

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schedules = Schedule::getSchedule($request);
        return view('pages.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit(string $id)
//    {
//
//    }


    public function edit(int $id): View {
        $schedules = Schedule::query()->findOrFail($id);
        return view($this->routes["edit"],compact('schedules'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchedulesRequest $request, Schedule $schedule)
    {
        $data = $request->validated();
        Schedule::updateSchedule($data, $schedule->id);

        return redirect()->route('schedules.index')->with('success','Расписание было изменено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
