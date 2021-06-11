
<?php

namespace App\Http\Controllers\Admin;

use App\User;
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
        return view ('Admin.index' , ['admins' => User::all()]);
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
'name' => 'required|min:3',
'email' => 'required|email',
'password' => 'required|min:5',
'adress' => 'required|min:5',
'phone' => 'required',

            ]);
        $admin = new User;
        $admin->admin = 1;
        $admin->name= $request->name;
        $admin->email = $request->email;
        $admin->password= $request->password;
        $admin->adresse = $request->adresse;
        $admin->phone= $request->phone;
        $admin->save();
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
        $admin = User::find($id); 
        return view ('Admin.showAdmin' ,['admin' =>  $admin ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view ('Admin.edit' ,['admin' =>  $admin ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|min:5',
                'adress' => 'required|min:5',
                'phone' => 'required',
                
            ]);
            $admin -> update($validatedData);
            return view ('Admin.showAdmin' ,['admin' =>  $admin ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin ->delete();
        return redirect()->route('admins.index')->with('deleteAdmin','Admin has been deleted successfully !'); 
    }
}