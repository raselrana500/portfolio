<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer=Footer::orderBy('id','desc')->get();
        return view('backend.pages.footer.index',compact('footer'));
    }

    public function showEdit($id)
    {
        $footer=Footer::find($id);
        return view('backend.pages.footer.edit',compact('footer'));
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
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:150',
            'declare' => 'required',
            'copyright' => 'required',
            'developer' => 'required',
            'link' => 'required'
        ]);



        $data =Footer::find($id);
        $data->name = $request->name;
        $data->declare = $request->declare;
        $data->copyright = $request->copyright;
        $data->developer = $request->developer;
        $data->link = $request->link;
        $data->save();
        if ($data->save()) {
            session()->flash('success','Success');
            return redirect()->back();
        }else{
            session()->flash('error','Something Wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
