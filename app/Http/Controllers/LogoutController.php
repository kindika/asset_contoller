<?php

namespace App\Http\Controllers;

use App\Models\Logout;
use App\Http\Requests\StoreLogoutRequest;
use App\Http\Requests\UpdateLogoutRequest;

class LogoutController extends Controller
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
     * @param  \App\Http\Requests\StoreLogoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function show(Logout $logout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function edit(Logout $logout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogoutRequest  $request
     * @param  \App\Models\Logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogoutRequest $request, Logout $logout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logout $logout)
    {
        //
    }
}
