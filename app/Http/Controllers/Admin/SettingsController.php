<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\Utilities\FileUploadService;
use App\DataTables\Admin\JobApplicationDataTable;
use App\Models\JobApplication;

class SettingsController extends Controller
{
    protected $fileUploadService;
    public function __construct()
    {
        $this->fileUploadService = app(FileUploadService::class);
    }


    public function index(JobApplicationDataTable $dataTable)
    {
        setbreadcumb("Job Application List");
        return $dataTable->render('admin.settings.index');
    }
    public function destroy($id)
    {
        $settings = JobApplication::find($id);
        $settings->delete();
        $notify[] = ['success', 'Job Application Delete successfully'];
        return redirect()->back()->withNotify($notify);
    }
}
