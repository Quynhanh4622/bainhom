<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        return view('users/list',[
            'admins' =>Admin::query()->orderBy('created_at','DESC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view('users/form');
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->fill($request->all());
        $admin->save();
        return redirect('/users/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $detail = Admin::find($id);
        return view('users/edit',[
            'edit' => $detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $detail = Admin::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/users/list');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $detail = Admin::find($id);
        $detail->delete();
        return redirect('/users/list');
    }
}
