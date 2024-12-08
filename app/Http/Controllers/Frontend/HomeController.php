<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobApplycation;
use App\Models\JobType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexPage()
    {
        $datas = JobType::latest('id')->get();
        return view('frontend.page.index', compact('datas'));
    }
    public function userProfile()
    {
        return view('frontend.page.user.profile');
    }
    public function jobSingle($id)
    {
        return view('frontend.page.singleJob', compact('single_job'));
    }
    public function jobApply($id)
    {
        return view('frontend.page.jobApply', compact('id'));
    }
}
