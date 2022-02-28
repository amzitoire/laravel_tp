<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $formation=Formation::findorFail($id);

        return view("formations.show",["formation"=>$formation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation=Formation::findorFail($id);
        $users=User::all();
        return view("formations.edit",["formation"=>$formation,"users"=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validate = $request->validate([
                    'name'=>['required','string'],
                    'price'=>['required','string'],
                    'user_id'=>['required','string'],
                    ]);

                $formation= Formation::findorfail($id);
                $formation->name = $validate['name'];;
                $formation->price =$validate['price'];
                $formation->user_id =$validate['user_id'];
                $formation->save();
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
          $formation= Formation::findorfail($id);
          $formation->delete();
          session()->flash('message','formation is deleted successfully');
          return redirect()->back()->with(['message'=>session('message')]);
    }
}
