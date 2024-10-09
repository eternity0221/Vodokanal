<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\StoreServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ServicesController extends Controller
{
    private array $routes = [
        "services"=>"pages.services.index",
        "create"=>"pages.services.create",
        "edit"=>"pages.services.edit",
        "show"=>"pages.services.show",
        "publish"=>"pages.services.publish",
    ];

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = Services::findAll($request);
//        $services = Services::latest()->paginate(5);

        return view('pages.services.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesRequest $request)
    {
        $data = $request->validated();

//        $data['user_id']=Auth::id();
//        dd($data);
        Services::create($data);

        return redirect()->route('services.index')->with('success','Услуга была добавлен.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $service): View
    {
        return view($this->routes["show"],compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $service)
    {
        return view('pages.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success','Услуга была изменена.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('danger','Услуга была удалена!');
    }

    public function publish(Request $request): View {
        $data = Services::findAll($request);
        return view($this->routes["publish"], compact("data"));
    }
}
