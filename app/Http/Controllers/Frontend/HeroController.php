<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Hero;
use App\skill;
use App\SkillDetails;
use App\Project;
use App\Footer;
use App\Social;

use Illuminate\Http\Request;

class HeroController extends Controller
{
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
}
