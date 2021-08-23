<?php

namespace App\Http\Controllers;

use App\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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
        $skill=Skill::orderBy('id','desc')->get();
        return view('backend.pages.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreatePage()
    {
        return view('backend.pages.skill.insertskill');
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
            'skillname' => 'required|max:150',
            'skillvalue' => 'required',
            'priority' => 'required',
        ]);



        $data = new Skill;
        $data->skillname = $request->skillname;
        $data->skillvalue = $request->skillvalue;
        $data->priority = $request->priority;

        $data->save();
        if ($data->save()) {
            session()->flash('success','Success');
            return redirect()->back();
        }else{
            session()->flash('error','Not Inserted');
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Skill::find($id);
        return view('backend.pages.skill.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'skillname' => 'required|max:150',
            'skillvalue' => 'required',
            'priority' => 'required',
        ]);



        $data =Skill::find($id);
        $data->skillname = $request->skillname;
        $data->skillvalue = $request->skillvalue;
        $data->priority = $request->priority;

        $data->save();
        if ($data->save()) {
            session()->flash('success','Success');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function Delete($id){

        $data =Skill::find($id);
        $data->delete();
        session()->flash('error','Skill Deleted successfully !!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(skill $skill)
    {
        //
    }
}
