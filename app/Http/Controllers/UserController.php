<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        $send = [
            'data' => $data,
        ];
        return view('home')->with($send);
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('index');
    }

    public function update($id)
    {
        $data = User::findOrFail($id);
        $send = [
            'data' => $data,
        ];
        return view('update')->with($send);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
        return redirect()->route('index');
    }

    public function save(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->update();
        return redirect()->route('index');
    }
}
