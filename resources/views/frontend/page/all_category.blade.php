@extends('layouts.frontend')
<!-- title -->
@section('title', 'All Category')
<!-- meta title-->
@section('meta_title', 'All Category')
<!-- meta desciption-->
@section('meta_description', 'All Category')
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
                            <h2>All Category</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
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
                                        href="{{ route('job.details', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
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
@endsection
<!-- internal js -->
@push('scripts')
    <script></script>
@endpush
