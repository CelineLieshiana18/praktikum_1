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



    /////////////////////API///////////////////////

    function getAllUser(Request $request){
        $user = User::all();
        return json_encode($user);
    }

    function getOneUser(Request $request,$id){
        $user = User::where('id','=',$id)->get();
        return json_encode($user);
    }
    
    function deleteUser(Request $request,$id){
        $data = User::findOrFail($id);
        $data->delete();
        $result = array();
        $result["id"] = 1;
        $result["message"] = 'Delete Successfull';
        return json_encode($result);
    }

    function updateUser(Request $request,$id){
        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->update();
        $result["id"] = 1;
        $result["message"] = 'Update Successfull';
        return json_encode($result);
    }

    function insertUser(Request $request){
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
        $result["id"] = 1;
        $result["message"] = 'Insert Successfull';
        return json_encode($result);
    }

    public function client2POST(Request $request)
    {
        return redirect('/client2/'.$request->nama);
    }

    public function client2($nama)
    {
        $send = [
            'nama'=>$nama
        ];
        return view('client2')->with($send);
    }

    public function server2()
    {
        return view('server2');
    }

    ///////////////////End of API/////////////////////
}
