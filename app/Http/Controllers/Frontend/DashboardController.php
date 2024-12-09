<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobPost;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::has('jobPosts', '>', 0)->latest()->take(8)->get();
        $jobs = JobPost::has('category.jobPosts', '>', 0)->latest()->take(8)->get();
        return view('frontend.page.index', compact('categories', 'jobs'));
    }
    public function allCategory()
    {
        $categories = Category::all();
        return view('frontend.page.all_category', compact('categories'));
    }
    public function allJob(Request $request)
    {
        if ($request->has('category_id')) {
            $jobs = JobPost::with('category')->where('category_id', $request->category_id)->latest()->paginate(8);
            return view('frontend.page.all_job', compact('jobs'));
        } else {
            $jobs = JobPost::has('category.jobPosts', '>', 0)->latest()->paginate(8);
        }

        return view('frontend.page.all_job', compact('jobs'));
    }
    public function jobDetails(Request $request)
    {
        if ($request->has('category_id')) {
            $single_job = JobPost::with('category')->where('category_id', $request->category_id)->first();
        } else {
            $single_job = JobPost::with('category')->where('slug', $request->slug)->first();
        }
        return view('frontend.page.singleJob', compact('single_job'));
    }
    public function jobApply($id)
    {
        $single_job = JobPost::with('category')->where('id', $id)->first();
        return view('frontend.page.job_apply', compact('single_job'));
    }
}
