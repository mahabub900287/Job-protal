<?php

namespace App\Services\Admin;

use App\Models\JobPost;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Services\BaseService;
use Illuminate\Support\Facades\Hash;
use App\Services\Utilities\FileUploadService;

class JobPostService extends BaseService
{
    protected $model;

    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
        $this->model = JobPost::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Upload image
            $data['slug'] = Str::slug($data['title']);
            if (isset($data['image']) && $data['image'] != null) {
                if ($id) {
                    $item = $this->get($id);
                    if (!is_null($item->image)) {
                        // Remove file
                        remove_old_image('job_post/' . $item->image);
                    }
                    $src_path = $this->fileUploadService->uploadImage($data['image'], 'job_post-' . now()->timestamp, 'job_post');
                    $data['image'] = $src_path;
                } else {
                    $src_path = $this->fileUploadService->uploadImage($data['image'], 'job_post-' . now()->timestamp, 'job_post');
                    $data['image'] = $src_path;
                }
            } else {
                unset($data['image']);
            }
            $jobPost = parent::storeOrUpdate($data, $id);
            return $jobPost;
        } catch (\Exception $e) {
            dd($e->getMessage());
            $this->logFlashThrow($e);
        }
    }
}
