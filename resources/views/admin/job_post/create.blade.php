<x-admin.layouts.app :title="getbreadcumb()">
    <div class="ic-user">

        <!-- back btn -->
        <a role="button" class="ic-back mb_25" href="{{ route('admin.job-post.index') }}">
            <i class="ri-arrow-left-line"></i>
            <span>Back</span>
        </a>
        <!-- ic-profile-content-wrapper -->
        <x-form method="POST" action="{{ route('admin.job-post.store') }}" enctype="multipart/form-data">
            <div class="ic-profile-content-wrapper">
                <div class="left-content">
                    <h5 class="ic-top-title">Job Post Image</h5>
                    <div class="ic-profile-content">
                        <div class="ic-profile-image">
                            <div class="ic-image">
                                <img class="img-fluid d-block mx-auto" id="Image_change"
                                    src="{{ asset('images/user_default.png') }}" alt="">
                            </div>

                            <div class="ic-file-wrapper">
                                <input type="file" name="image" value=""
                                    onchange="document.getElementById('Image_change').src = window.URL.createObjectURL(this.files[0])">

                                <div class="ic-content text-center">
                                    <div class="ic-upload-icon">
                                        <img src="{{ asset('assets/admin/images/logo/image-upload.png') }}"
                                            alt="">
                                    </div>
                                    <p class="ic-main-content">
                                        <span class="upload">Click to upload</span>
                                        <span>or drag and drop</span>
                                    </p>
                                    <p class="ic-sub-content">
                                        SVG, PNG, JPG or GIF (max. 800x400px)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <h5 class="ic-top-title">Create New Job Post</h5>
                    <div class="ic-profile-content">

                        <div class="ic_form row row-cols-md-2 row-cols-sm-2 gx-xxl-4 gx-xl-2 gx-sm-2">
                            <!-- First name -->
                            <div class="mb_20">
                                <label for="" class="form-label">Category</label>
                                <select name="category_id" class="ic-select">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- LAst name -->
                            <div class="mb_20">
                                <x-form_input label="Title" placeholder="Enter job title" name="title"
                                    errorName='title' value="{{ old('title') }}">
                                </x-form_input>
                            </div>
                            <!-- Role -->
                            <div class="mb_20">
                                <x-form_input label="Company Name" placeholder="Enter company name" name="company_name"
                                    errorName='company_name' value="{{ old('company_name') }}">
                                </x-form_input>
                            </div>
                            <!-- Email -->
                            <div class="mb_20">
                                <x-form_input label="Salary Range" placeholder="Enter job salary range"
                                    name="salary_range" errorName='salary_range' value="{{ old('salary_range') }}"
                                    required>
                                </x-form_input>
                            </div>
                            <!-- Phone Number -->
                            <div class="mb_20">
                                <x-form_input label="Job Type" placeholder="Enter job type" name="job_type"
                                    errorName='job_type' value="{{ old('job_type') }}">
                                </x-form_input>
                            </div>
                            <div class="mb_20">
                                <x-form_input label="address" placeholder="Enter job address" name="address"
                                    errorName='address' value="{{ old('address') }}">
                                </x-form_input>
                            </div>
                        </div>
                        <div class="row ic_form mb_25">
                            <!-- Bio -->
                            <div class="">
                                <label class="form-label">Discription</label>
                                <textarea class="form-control ic-textarea" name="description" value="" rows="3"
                                    placeholder="Write about job self"></textarea>
                            </div>
                        </div>

                        <div class="ic-button-wrapper d-flex justify-content-end">
                            <div class="right-button-group ">
                                <a href="{{ route('admin.job-post.index') }}" class="ic-button white">Cancel</a>
                                <button type="submit" class="ic-button primary">Create</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </x-form>
    </div>
    </x-admin.app>
