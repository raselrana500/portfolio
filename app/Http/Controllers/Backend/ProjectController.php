<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

use App\Project;
use Illuminate\Http\Request;
use Image;
use File;

class ProjectController extends Controller
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
        $project=Project::orderBy('id','desc')->get();
        return view('backend.pages.project.index',compact('project'));
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

    public function showCreatePage()
    {
        return view('backend.pages.project.insertproject');
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
            'title' => 'required|max:150',
            'description' => 'required',
            'priority' => 'required',
            'link' => 'required',
        ]);

        $data =new Project;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->priority = $request->priority;
        $data->link = $request->link;

        if ($request->hasFile('image')) {
            $img = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $img_size = $_FILES['image']['size'];
            $img_tem_loc = $_FILES['image']['tmp_name'];
            $img_store="public/img/projects/".$img;

            move_uploaded_file($img_tem_loc,$img_store);

            $data->image = $img;
        }
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
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Project::find($id);
        return view('backend.pages.project.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'priority' => 'required',
            'link' => 'required',
        ]);



        $data =Project::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->priority = $request->priority;
        $data->link = $request->link;

        if($request->image > 0 ){
            if(File::exists('public/img/projects/'.$data->image)){
                File::delete('public/img/projects/'.$data->image);
            }
        // $image = $request->file('image');
        // $imgName = time().'.'. $image->getClientOriginalExtension();
        // $location = public_path('public/img/profile_image/'.$imgName);
        if ($request->hasFile('image')) {
            $img = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $img_size = $_FILES['image']['size'];
            $img_tem_loc = $_FILES['image']['tmp_name'];
            $img_store="public/img/projects/".$img;

            move_uploaded_file($img_tem_loc,$img_store);

            $data->image = $img;
        }
        $data->save();
        if ($data->save()) {
            session()->flash('success','Success');
            return redirect()->back();
        }else{
            session()->flash('error','Something Wrong');
            return redirect()->back();
        }
    }
    }

    public function Delete($id){

        $data =Project::find($id);
        if(!is_null($data)){
            if(File::exists('public/img/projects/'.$data->image)){
                File::delete('public/img/projects/'.$data->image);
                    
                }
            $data->delete();
            session()->flash('error','Project Deleted successfully !!');
            return redirect()->back();
        }
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
