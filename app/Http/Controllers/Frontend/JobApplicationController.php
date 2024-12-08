<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Http\Controllers\Controller;
use App\Services\Utilities\FileUploadService;

class JobApplicationController extends Controller
{
    protected $fileUploadService;
    protected $jobapplication;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->jobapplication = JobApplication::class;
        $this->fileUploadService = $fileUploadService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'job_post_id' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:255'],

        ]);

        // if ($request->hasFile('cv')) {
        //     $src_path = $this->fileUploadService->uploadFile($request->file('cv'), 'job_application', true);
        // }
        $data =  $this->jobapplication::create([
            'user_id'     => auth()->user()->id,
            'job_post_id' => $request->job_post_id,
            'fname'       => $request->fname,
            'lname'       => $request->lname,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'address'     => $request->address,
            'state'       => $request->state,
            'zip'         => $request->zip,
            // 'cv'          => $src_path,
        ]);
        $notify[] = ['success', 'Job Application Create successful'];
        return redirect()->route('home')->withNotify($notify);
    }
}
