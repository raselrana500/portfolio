<?php

namespace App\Http\Controllers;

use App\Hero;
use App\skill;
use App\SkillDetails;
use App\Project;
use App\Footer;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use File;
use Image;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
        $hero=Hero::orderBy('id','desc')->get();
        $skill=Skill::orderBy('priority','asc')->get();
        $skilldetails=SkillDetails::orderBy('id','asc')->get();
        $prjects=Project::orderBy('priority','asc')->get();
        $footer=Footer::orderBy('id','asc')->get();
        $social=Social::orderBy('priority','asc')->get();
        return view('frontend.layouts.master',compact('hero','skill','skilldetails','prjects','footer','social'));
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
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:150',
            'profession' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);



        $data =Hero::find($id);
        $data->name = $request->name;
        $data->profession = $request->profession;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->facebooklink = $request->facebooklink;
        $data->instagramlink = $request->instagramlink;
        $data->twitterlink = $request->twitterlink;
        $data->youtubelink = $request->youtubelink;
        $data->linkedlink = $request->linkedlink;
        $data->github = $request->github;

        if($request->image > 0 ){
            if(File::exists('public/img/profile_image/'.$data->image)){
                File::delete('public/img/profile_image/'.$data->image);
            }
        // $image = $request->file('image');
        // $imgName = time().'.'. $image->getClientOriginalExtension();
        // $location = public_path('public/img/profile_image/'.$imgName);
        $pdf = $_FILES['image']['name'];
        $pdf_type = $_FILES['image']['type'];
        $pdf_size = $_FILES['image']['size'];
        $pdf_tem_loc = $_FILES['image']['tmp_name'];
        $pdf_store="public/img/profile_image/".$pdf;

        move_uploaded_file($pdf_tem_loc,$pdf_store);

        $data->image = $pdf;
        }

        if (count([$request->cvlink]) > 0) {
            if(File::exists('public/cv/'.$data->cvlink)){
                File::delete('public/cv/'.$data->cvlink);
        }
        if ($request->hasFile('cvlink')) {
            
            $pdf = $_FILES['cvlink']['name'];
            $pdf_type = $_FILES['cvlink']['type'];
            $pdf_size = $_FILES['cvlink']['size'];
            $pdf_tem_loc = $_FILES['cvlink']['tmp_name'];
            $pdf_store="public/cv/".$pdf;

            move_uploaded_file($pdf_tem_loc,$pdf_store);
            $data->cvlink = $pdf;
        }
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
