<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\JobPostService;
use App\DataTables\Admin\JobPostDataTable;
use App\Http\Requests\JobPostRequest;

class JobPostController extends Controller
{

    protected $jobPostService;
    public function __construct(JobPostService $jobPostService)
    {
        $this->jobPostService = $jobPostService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(JobPostDataTable $dataTable)
    {
        setbreadcumb("Job Post List");
        return $dataTable->render('admin.job_post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        setbreadcumb("Job Post Create", "Job Post", route('admin.job-post.index'));
        $categories = Category::select('id', 'name')->get();
        return view('admin.job_post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPostRequest $request)
    {
        $data = $request->validated();
        try {
            $this->jobPostService->storeOrUpdate($data);
            $notify[] = ['success', 'Job Post Create successful'];
            return redirect()->route('admin.job-post.index')->withNotify($notify);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
        $item = $this->jobPostService->get($id);
        $this->jobPostService->delete($id);
        $notify[] = ['success', 'Job Post Delete successfully'];
        return redirect()->route('admin.job-post.index')->withNotify($notify);
    }
}
