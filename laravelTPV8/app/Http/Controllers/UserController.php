<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users=User::all();
        $users=User::paginate(15);
        return view("users.index",["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user=User::findorFail($id);
        $formations = $user->formations;
        return view("users.show",["user"=>$user,"formations"=>$formations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findorFail($id);
        return view("users.edit",["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validate = $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'password'=>['required','string'],
            ]);

        $user= User::findorfail($id);
        $user->name = $validate['name'];;
        $user->email =$validate['email'];
        $user->password =$validate['password'];
        $user->save();

        session()->flash('messageSuccess','user is updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user= user::findorfail($id);
        $user->delete();
        session()->flash('message','user is updated successfully');
        return redirect()->back()->with(['message'=>session('message')]);
    }
}
