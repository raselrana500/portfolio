<?php

namespace App\Http\Controllers;

use App\SkillDetails;
use Illuminate\Http\Request;

class SkillDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
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
     * @param  \App\SkillDetails  $skillDetails
     * @return \Illuminate\Http\Response
     */
    public function show(SkillDetails $skillDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SkillDetails  $skillDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillDetails $skillDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SkillDetails  $skillDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillDetails $skillDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SkillDetails  $skillDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillDetails $skillDetails)
    {
        //
    }
}
