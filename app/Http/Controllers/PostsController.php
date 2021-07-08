<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserWedding.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birth' => 'required',
            'age' => 'required',
            'date' => 'required',
            'service' => 'required',
            'budget' => 'required',
            'guest' => 'required',
            'sprequest' => 'required',
        ]);

        $ordr = new Post();
        $ordr->name = $request->name;
        $ordr->email = $request->email;
        $ordr->phone = $request->phone;
        $ordr->gender = $request->gender;
        $ordr->birth = $request->birth;
        $ordr->age = $request->age;
        $ordr->date = $request->date;
        $ordr->service = $request->service;
        $ordr->budget = $request->budget;
        $ordr->guest = $request->guest;
        $ordr->sprequest = $request->sprequest;
        $save = $ordr->save();

        if($save){
            Session::flash('success', 'Sukses menambah order');
            return redirect()->route('home');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah order!']);
            return redirect()->route('table.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }
}
