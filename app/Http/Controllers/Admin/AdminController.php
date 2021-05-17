<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Admin.index' , ['admins' => Admin::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Admin.createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
'user_name' => 'required|min:2',
'first_name' => 'required|min:3',
'last_name' => 'required|min:3',
'email_admin' => 'required|email',
'phone_admin' => 'required',
'photo' => 'required|min:2',
'password' => 'required|min:5',
'type_id' => 'required',

            ]);

        $admin = Admin::create($validatedData);
        return redirect()->route('admins.index',$admin);
       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id); 
        return view ('Admin.showAdmin' ,['admin' =>  $admin ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view ('Admin.edit' ,['admin' =>  $admin ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate(
            [
             'first_name' => 'required|min:3',
             'last_name' => 'required|min:3',
             'email_admin' => 'required|email',
             'phone_admin' => 'required',
            ]);
            $admin -> update($validatedData);
            return view ('Admin.showAdmin' ,['admin' =>  $admin ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin ->delete();
        return redirect()->route('admins.index')->with('deleteAdmin','Admin has been deleted successfully !'); 
    }
}