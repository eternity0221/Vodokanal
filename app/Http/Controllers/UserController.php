<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::findAll($request);
        return view('pages.users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success','Пользователь был добавлен.');
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
    public function edit(User $user)
    {
        $roles = ["admin"=>"Администратор", "moderator"=>"Модератор", "employee"=>"Работник", "user"=>"Пользователь"];

        $selects = [
            ["value"=>"admin", "title"=>"Администратор", "isActive"=>false],
            ["value"=>"moderator", "title"=>"Модератор", "isActive"=>false],
            ["value"=>"employee", "title"=>"Работник", "isActive"=>false],
            ["value"=>"user", "title"=>"Пользователь", "isActive"=>false],
        ];

        foreach ($selects as $key => $select) {
            if ($user["role"] == $select["value"]){
                $selects[$key] = ["value"=>$user["role"], "title"=>$roles[$user["role"]], "isActive"=>true];
            }
        }

        return view('pages.users.edit',compact('user', 'selects'));
    }

    /**
     * Update the specified resource in storage.
     */
    private function delKey($data,$key){unset($data[$key]);
        return $data;
    }

    private function hashPassword($password):string{return Hash::make($password);}


    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        !!$data["password"] ? $data["password"] = $this->hashPassword($data["password"]) : $data = $this->delKey($data,"password");
        $user->update($data);
        if (Auth::user()->role == "admin") {
            return redirect()->route('users.index', compact('user'))->with('success','Пользователь был изменен');
        } else {
            return redirect()->route('dashboard')->with('success','Пользователь был изменен');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
    $user->delete();

    return redirect()->route('users.index')
    ->with('danger', 'Пользователь удален');
    }

    public function deleteUser(Request $request)
    {
        $user = User::query()->findOrFail(Auth::id());
        Auth::logout();
        $user->delete();
        $request->session()->regenerate();

        return redirect()->route('users.index')
            ->with('danger', 'Пользователь удален!');
    }
}
