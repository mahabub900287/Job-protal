@extends('layouts.frontend')
<!-- title -->
@section('title', $single_job->category->name ?? 'single job')
<!-- meta title-->
@section('meta_title', $single_job->title ?? 'single job')
<!-- meta desciption-->
@section('meta_description', $single_job->description ?? 'single job')
<!-- internal css -->
@push('styles')
@endpush

@section('main-content')
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{ asset('') }}img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{ $single_job->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $single_job->category->name }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $single_job->company_name }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $single_job->address }}</li>
                                    <li>{{ $single_job->selary_rang }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{ $single_job->description }}</p>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date :
                                <span>{{ \Carbon\Carbon::parse($single_job->created_at)->diffForHumans() }}</span>
                            </li>
                            <li>Location : <span>{{ $single_job->address }}</span></li>
                            <li>Job nature : <span>{{ $single_job->job_type }}</span></li>
                            <li>Salary : <span>{{ $single_job->salary_range }}</span></li>
                            <li>Application date : <span>12 Sep 2020</span></li>
                        </ul>
                        <div class="apply-btn2">
                            @auth
                                <a href="{{ route('job.apply', $single_job->id) }}" class="btn">Apply Now</a>
                            @else
                                <a href="{{ route('login') }}" class="btn">Apply Now</a>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->
@endsection
<!-- internal js -->
@push('scripts')
    <script></script>
@endpush
