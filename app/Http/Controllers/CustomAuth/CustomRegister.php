<?php

namespace App\Http\Controllers\CustomAuth;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CustomRegister extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('CustomAuth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


       
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|confirmed|max:255',
            'terms' => 'required',
        ]);
          
        $CreatData  =  User::create($validated);
         
        if($CreatData)
        {

            event(new Registered($CreatData));
             return redirect()->route('login');
       

        }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
