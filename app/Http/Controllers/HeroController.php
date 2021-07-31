<?php

namespace App\Http\Controllers;

use App\Hero;
use App\skill;
use App\SkillDetails;
use App\Project;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero=Hero::orderBy('id','desc')->get();
        $skill=Skill::orderBy('priority','asc')->get();
        $skilldetails=SkillDetails::orderBy('id','asc')->get();
        $prjects=Project::orderBy('priority','asc')->get();
        return view('frontend.layouts.master',compact('hero','skill','skilldetails','prjects'));
    }

    public function ViewInfo(){
        $hero=Hero::orderBy('id','desc')->get();
        return view('backend.pages.hero.index',compact('hero'));
    }

    public function ViewSingleData($id){
        $heroData =Hero::find($id)->get();
        return view('backend.pages.hero.show',compact('heroData'));
    }

    public function Edit($id){
        $data =Hero::find($id);
        return view('backend.pages.hero.edit',compact('data'));
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
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
