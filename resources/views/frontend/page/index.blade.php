@extends('layouts.frontend')
<!-- title -->
@section('title', 'home page')
<!-- meta title-->
@section('meta_title', 'home page')
<!-- meta desciption-->
@section('meta_description', 'home page')
<!-- internal css -->
@push('styles')
@endpush

@section('main-content')
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{ asset('') }}img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Job Tittle or keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Location BD</option>
                                            <option value="">Location PK</option>
                                            <option value="">Location US</option>
                                            <option value="">Location UK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="#">Find job</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($categories as $key => $category)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="{{ $category->icon_class }}"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a
                                        href="{{ route('all.job', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                </h5>
                                <span>({{ $category->countJobPosts() }})</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- More Btn -->
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    @forelse ($jobs as $data)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('job.details', ['slug' => $data->slug]) }}"><img
                                            src="{{ $data->image }}" alt="" style="height: 100px;width:100px"></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('job.details', ['slug' => $data->slug]) }}">
                                        <h4>{{ $data->title }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $data->company_name }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $data->address }}</li>
                                        <li>{{ $data->selary_rang }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('job.details', ['slug' => $data->slug]) }}">Details Job</a>
                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
@endsection
<!-- internal js -->
@push('scripts')
    <script></script>
@endpush
