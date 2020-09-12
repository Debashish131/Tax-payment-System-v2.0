<?php

namespace App\Http\Controllers;

use App\CRUD;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        crud = CRUD::latest()->paginate(5);

        return view('payments.index',compact('payments00'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.create');
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
     * @param  \App\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show(CRUD $cRUD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit(CRUD $cRUD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CRUD $cRUD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy(CRUD $cRUD)
    {
        //
    }
}
