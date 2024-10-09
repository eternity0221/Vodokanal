<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;
use App\Http\Requests\Alerts\StoreAlertsRequest;

class AlertsController extends Controller
{

    private array $routes = [
        "alerts"=>"pages.alerts.index",
        "create"=>"pages.alerts.create",
        "edit"=>"pages.alerts.edit",
        "publish"=>"pages.alerts.publish",
    ];

    public function index(Request $request)
    {
        $data = Alerts::getAllAlerts($request);
        return view($this->routes["alerts"], compact("data"))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View {
        return view($this->routes["create"]);
    }

    public function store(StoreAlertsRequest $request): Redirect {
        $data = $request->validated();
        Alerts::create($data);
        return redirect()->route(Auth::user()->role=="user" ? 'dashboard' : 'alerts')->with(["create"=>true])->with('success','Ваша заявка была создана и отправлена на обработку.');
    }

    public function accept($id): Redirect {
        Alerts::reportAccept($id);
//        return back()->with(["Принято"=>true]);
        return back()->with('success','Заявка была принята.');
    }

    public function reject($id): Redirect {
        Alerts::reportReject($id);
//        return back()->with(["Отклонено"=>true]);
        return back()->with('danger','Заявка была отклонена.');
    }

    /**
     * Display a listing of the resource.
     */
//    public function index(Request $request): View {
//        $alerts = Alerts::findAll($request);
//        $users = User::findAll($request);
//        return view($this->routes["alerts"], compact(["alerts", "users"]));
//    }


    /**
     * Show the form for creating a new resource.
     */
//    public function create(): View {
//        return view($this->routes["create"]);
//    }


    /**
     * Store a newly created resource in storage.
     */
//    public function store(StoreAlertsRequest $request): Redirect {
//
////        $data['user_id']=Auth::id();
//        $data = $request->validated();
////        Alerts::createAlerts($data);
//        Alerts::create($request->all());
//
//        return redirect()->route('pages.alerts.index', compact('data'))->with('success','Заявка была добавлена.');
//    }

//    public function store(StoreAlertsRequest $request): Redirect {
//        $data = $request->validated();
//        Alerts::create($data);
//        return redirect()->route(Auth::user()->role)->with(["create"=>true]);
//    }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
