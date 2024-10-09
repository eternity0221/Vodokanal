<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        return view('pages.dashboard.dashboard');
    }

//    public function dashboardUpdate(UpdateRequest $request, User $user)
//    {
//        $data = $request->validated();
//        !!$data["password"] ? $data["password"] = $this->hashPassword($data["password"]) : $data = $this->delKey($data,"password");
//        $user->update($data);
//
//        return redirect()->route('dashboard')->with('success','Вы изменили свои данные');
//    }
//
//    private function delKey($data,$key){unset($data[$key]);
//        return $data;
//    }

}
